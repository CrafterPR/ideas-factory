<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/');
Route::get('what-we-do', function () {
    return view('pages.what_we_do');
})->name('what-we-do');
Route::get('how', function () {
    return view('pages.how');
})->name('how');
Route::get('who', function () {
    return view('pages.who');
})->name('who');
Route::prefix('what-we-done')->group(function () {
    Route::get('store-opening', function () {
        return view('pages.store_opening');
    })->name('what-we-done-store-opening');
    Route::get('galaxy-roadshow', function () {
        return view('pages.galaxy_roadshow');
    })->name('what-we-done-galaxy-roadshow');
    Route::get('ferro-conference', function () {
        return view('pages.ferro_conference');
    })->name('what-we-done-ferro-conference');
});
Route::get('what-we-done', function () {
    return view('pages.what_we_done');
})->name('what-we-done');
Route::get('join', function () {
    return view('pages.join');
})->name('join');
Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('cookie', function () {
    return view('pages.cookie');
})->name('cookie');
Route::get('privacy', function () {
    return view('pages.privacy');
})->name('privacy');
Route::get('terms', function () {
    return view('pages.terms');
})->name('terms');
