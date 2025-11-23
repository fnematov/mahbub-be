<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/tours', [HomeController::class, 'tours'])->name('tours');
    Route::get('/tours/{tour}', [HomeController::class, 'tour'])->name('tours.show');
    Route::get('/articles', [HomeController::class, 'articles'])->name('articles');
    Route::get('/articles/{article}', [HomeController::class, 'article'])->name('articles.show');
    Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
});
