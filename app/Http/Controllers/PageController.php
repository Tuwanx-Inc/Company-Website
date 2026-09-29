<?php

namespace App\Http\Controllers;

use App\Services\TuwanxStats;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(TuwanxStats $stats)
    {
        // Cached for 15 minutes, and only the download counts come back - no
        // revenue or order data can reach a public page.
        return view('home', ['installs' => $stats->installs()]);
    }

    public function about(TuwanxStats $stats)
    {
        // Same live, cached download feed as the home page — only real,
        // measured figures reach this page (no invented stats).
        return view('about', ['installs' => $stats->installs()]);
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function terms()
    {
        return view('terms');
    }
}
