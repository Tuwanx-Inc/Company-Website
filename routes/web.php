<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

// Home page
Route::get('/', [PageController::class, 'home'])->name('home');

// Other pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms-and-conditions', [PageController::class, 'terms'])->name('terms');

// Temporary: diagnoses the live-installs connection. Safe to leave (it reveals
// no secrets, only whether the API is reachable), but delete once resolved.
Route::get('/stats-check', function (\App\Services\TuwanxStats $stats) {
    return response()->json([
        'status'   => $stats->diagnose(),
        'installs' => $stats->installs(),
    ]);
});

// Seller share links shared from the app (tuwanx.com/s/{id}). The read-only
// seller page is rendered by the API app, so forward there. Keeps the shared
// URL on the brand domain while reusing the existing share.seller view.
Route::get('/s/{id}', function ($id) {
    return redirect()->away('https://api.tuwanx.com/s/' . (int) $id);
})->whereNumber('id');

// Contact pages
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
