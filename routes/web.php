<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RedirectController;
use App\Http\Controllers\Handler\KymaServiziController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirect', [RedirectController::class, 'redirect'])->name('redirect');
Route::get('/{slug}', [KymaServiziController::class, 'index'])->name('view-kyma');