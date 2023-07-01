<?php

use App\Http\Controllers\Admin\SiteController;

Route::get('/admin/data/site', [SiteController::class, 'data'])->name('data');

Route::middleware('auth')->group(function () {
    // Remove delete, and create...
    Route::resources([
        'admin/site' => SiteController::class,
    ]);
});
