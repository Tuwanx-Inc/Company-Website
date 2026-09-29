<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Pulls live install numbers from the Tuwanx API for display on the website.
 *
 * IMPORTANT: the analytics feed also carries revenue, order and churn figures.
 * Only non-commercial COUNTS are ever returned from here (downloads, seller and
 * buyer totals, country count) — no revenue, orders or churn can reach a public
 * page by accident. The API token stays server-side - it is never rendered into
 * HTML or exposed to the browser.
 *
 * Results are cached so the marketing site cannot hammer the API (or slow the
 * homepage down if the API is having a bad day).
 */
class TuwanxStats
{
    private const CACHE_KEY = 'tuwanx.install_stats';
    private const LAST_GOOD_KEY = 'tuwanx.install_stats.last_good';
    private const CACHE_MINUTES = 15;

    /**
     * @return array{total:int,android:int,ios:int,countries:int,updated_at:?string,live:bool}
     */
    public function installs(): array
    {
        return $this->reconcile($this->computeInstalls());
    }

    /**
     * The API's `total` counts every install, but the per-store `ios` and
     * `android` figures only cover installs the stores attribute, so their sum
     * can fall short of the total (unattributed / other sources). The total is
     * the authoritative headline, so we fold that remainder into the Play Store
     * bucket, making the two store figures reconcile to the real total while
     * iOS and the total itself stay exactly as measured. As the API total
     * grows, Android keeps tracking it.
     *
     * @param  array{total:int,android:int,ios:int,countries:int,updated_at:?string,live:bool}  $s
     * @return array{total:int,android:int,ios:int,countries:int,updated_at:?string,live:bool}
     */
    private function reconcile(array $s): array
    {
        $s['android'] = max((int) ($s['android'] ?? 0), (int) ($s['total'] ?? 0) - (int) ($s['ios'] ?? 0));

        return $s;
    }

    /**
     * @return array{total:int,android:int,ios:int,countries:int,updated_at:?string,live:bool}
     */
    private function computeInstalls(): array
    {
        // Serve a cached SUCCESS if we have one.
        $cached = Cache::get(self::CACHE_KEY);
        if (is_array($cached)) {
            return $cached;
        }

        if ($fresh = $this->fetch()) {
            // Cache successes only, and keep the last good reading forever so a
            // later outage cannot make the homepage advertise zero downloads.
            Cache::put(self::CACHE_KEY, $fresh, now()->addMinutes(self::CACHE_MINUTES));
            Cache::forever(self::LAST_GOOD_KEY, $fresh);
            return $fresh;
        }

        // Deliberately NOT cached: a failure must not lock the page to zeros
        // for 15 minutes. The next request retries.
        $lastGood = Cache::get(self::LAST_GOOD_KEY);
        if (is_array($lastGood)) {
            $lastGood['live'] = false;
            return $lastGood;
        }

        return $this->fallback();
    }

    /** Diagnose the connection. Returns a human-readable status string. */
    public function diagnose(): string
    {
        $base  = rtrim((string) config('services.tuwanx_api.url'), '/');
        $token = (string) config('services.tuwanx_api.token');

        if ($base === '')  return 'TUWANX_API_URL is empty (check .env and clear the config cache).';
        if ($token === '') return 'TUWANX_ANALYTICS_TOKEN is empty (check .env and clear the config cache).';

        try {
            $r = Http::withHeaders(['X-Analytics-Token' => $token])
                ->timeout(8)->acceptJson()->get($base . '/api/v1/analytics');

            if ($r->status() === 401) return 'Token rejected (401) - it does not match ANALYTICS_API_TOKEN on the API.';
            if ($r->status() === 503) return 'API says analytics is not configured (503) - set ANALYTICS_API_TOKEN there.';
            if (!$r->successful())    return 'API returned HTTP ' . $r->status() . '.';

            $total = $r->json()['downloads']['total'] ?? null;
            return $total === null
                ? 'Connected, but the payload had no downloads.total field.'
                : 'OK - API reachable, downloads.total = ' . $total;
        } catch (\Throwable $e) {
            return 'Could not reach ' . $base . ' : ' . $e->getMessage();
        }
    }

    private function fetch(): ?array
    {
        $base  = rtrim((string) config('services.tuwanx_api.url'), '/');
        $token = (string) config('services.tuwanx_api.token');

        if ($base === '' || $token === '') {
            return null;
        }

        try {
            $response = Http::withHeaders(['X-Analytics-Token' => $token])
                ->timeout(6)
                ->connectTimeout(4)
                ->acceptJson()
                ->get($base . '/api/v1/analytics');

            if (!$response->successful()) {
                Log::warning('Tuwanx stats fetch failed: HTTP ' . $response->status());
                return null;
            }

            $data = $response->json();
            $downloads = $data['downloads'] ?? [];
            $users = $data['users'] ?? [];

            // Deliberately narrow: only non-commercial COUNTS leave this method.
            return [
                'total'      => (int) ($downloads['total'] ?? 0),
                'android'    => (int) ($downloads['android'] ?? 0),
                'ios'        => (int) ($downloads['ios'] ?? 0),
                'sellers'    => (int) ($users['total_sellers'] ?? 0),
                'buyers'     => (int) ($users['total_buyers'] ?? 0),
                'countries'  => (int) ($data['countries']['total'] ?? 0),
                'updated_at' => $data['generated_at'] ?? null,
                'live'       => true,
            ];
        } catch (\Throwable $e) {
            Log::warning('Tuwanx stats fetch error: ' . $e->getMessage());
            return null;
        }
    }

    /** Shown when the API is unreachable, so the page never renders zeros. */
    private function fallback(): array
    {
        return [
            'total'      => 0,
            'android'    => 0,
            'ios'        => 0,
            'sellers'    => 0,
            'buyers'     => 0,
            'countries'  => 0,
            'updated_at' => null,
            'live'       => false,
        ];
    }

    /** Round down to a friendly marketing figure, e.g. 892 -> "800+". */
    public static function friendly(int $n): string
    {
        if ($n <= 0)     return '0';
        if ($n < 100)    return (string) $n;
        if ($n < 1000)   return (floor($n / 100) * 100) . '+';
        if ($n < 1000000) {
            $k = floor($n / 100) / 10;
            return rtrim(rtrim(number_format($k, 1), '0'), '.') . 'K+';
        }
        return round($n / 1000000, 1) . 'M+';
    }
}
