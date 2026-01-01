<?php

use Illuminate\Support\Facades\Route;
use Modules\Website\Http\Controllers\WebsiteController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('properties', WebsiteController::class)->names('website');
});
