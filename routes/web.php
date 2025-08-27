<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('what-we-do', function () {
    return view('pages.what_we_do');
})->name('what-we-do');

Route::get('how-we-do-it', function () {
    return view('pages.how');
})->name('how');

Route::get('who-we-are', function () {
    $json = '{
  "Management": [
    {
      "id": 36,
      "name": "Peter Otieno Odawo",
      "job_title": "Founder & C.E.O",
      "thumbnail_url": "/img/team/thumb/placeholder.jpeg",
      "short_description": "My eyes change colour from green to blue in the sun.",
      "created_at": null,
      "updated_at": "2025-01-06T12:21:52.000000Z",
      "enabled": 1
    }
  ],
  "Creative": [
    {
      "id": 37,
      "name": "Lee Harris",
      "job_title": "CEO",
      "thumbnail_url": "/img/team/thumb/placeholder.jpeg",
      "short_description": "I am a black belt in Taekwondo.",
      "created_at": null,
      "updated_at": "2023-02-22T18:58:21.000000Z",
      "enabled": 1
    }
  ],
  "Customer Care": [
    {
      "id": 39,
      "name": "Hollie Thompson",
      "job_title": "Event Producer",
      "thumbnail_url": "/img/team/thumb/placeholder.jpeg",
      "short_description": null,
      "created_at": null,
      "updated_at": "2023-02-20T15:15:27.000000Z",
      "enabled": 1
    }
  ],
  "Administration": [
    {
      "id": 40,
      "name": "Hayley Wildsmith",
      "job_title": "Head of Film & Social",
      "thumbnail_url": "/img/team/thumb/placeholder.jpeg",
      "short_description": null,
      "created_at": null,
      "updated_at": "2025-01-06T12:17:32.000000Z",
      "enabled": 1
    }
  ],
  "Support": [
    {
      "id": 41,
      "name": "Graham Bowes",
      "job_title": "Senior Designer",
      "thumbnail_url": "/img/team/thumb/placeholder.jpeg",
      "short_description": null,
      "created_at": null,
      "updated_at": "2023-02-17T15:02:03.000000Z",
      "enabled": 1
    }
  ]
}

';

    $teamGroups = json_decode($json);

    return view('pages.who', compact('teamGroups'));
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
