<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/hs', function () {
    return view('homescreen');
});

Route::get('/download', function () {
    return response()
        ->download(public_path('files/app-release.apk'));
});

Route::get('/', HomeController::class);

Route::resource('/forms', FormController::class)->only(['show']);
