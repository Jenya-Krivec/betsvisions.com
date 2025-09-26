<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RatingController;
use App\Http\Middleware\LocaleMiddleware;
use App\Helpers\Language;

Route::prefix(Language::getLocale())->middleware([LocaleMiddleware::class])->group(function () {

    Route::get('/', [DashboardController::class, 'create'])->name('index');

});

Route::post('/rate', [RatingController::class, 'store']);








