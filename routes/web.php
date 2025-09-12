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
      "id": 3,
      "name": "Faith Wanjiru",
      "job_title": "Admin Manager",
      "thumbnail_url": "/img/team/thumb/faith-wanjiru.png",
      "short_description": "The powerhouse that keeps Aidias Factory running smoother than a well-oiled machine.",
      "created_at": null,
      "updated_at": "2025-01-06T12:21:52.000000Z",
      "enabled": 1
    },
    {
      "id": 4,
      "name": "Godfrey Mwangi Muiga",
      "job_title": "Events & AV Manager",
      "thumbnail_url": "/img/team/thumb/mwangi-muiga.png",
      "short_description": "The pulse, precision, and performance behind Aidias Factory’s unforgettable events.",
      "created_at": null,
      "updated_at": "2025-01-06T12:21:52.000000Z",
      "enabled": 1
    },
    {
      "id": 5,
      "name": "Neville Ng\'ambwa",
      "job_title": "Production Manager",
      "thumbnail_url": "/img/team/thumb/nevile.png",
      "short_description": "The craft, cadence, and control behind every flawless delivery",
      "created_at": null,
      "updated_at": "2025-01-06T12:21:52.000000Z",
      "enabled": 1
    },
    {
      "id": 6,
      "name": "Jeniffer Temba",
      "job_title": "Client Service Manager",
      "thumbnail_url": "/img/team/thumb/jennifer-temba.png",
      "short_description": "The pulse, passion, and partnership behind every client win at Aidias Factory.",
      "created_at": null,
      "updated_at": "2025-01-06T12:21:52.000000Z",
      "enabled": 1
    },
    {
      "id": 7,
      "name": "Haron Ronoh",
      "job_title": "Assistance Audio Visual Manager",
      "thumbnail_url": "/img/team/thumb/haron-ronoh.png",
      "short_description": "The energy, execution, and excellence powering Aidias Factory’s events and AV magic..",
      "created_at": null,
      "updated_at": "2025-01-06T12:21:52.000000Z",
      "enabled": 1
    },
    {
      "id": 8,
      "name": "Joseph Ochieng",
      "job_title": "Assistance Production Manager",
      "thumbnail_url": "/img/team/thumb/jose-ochieng.png",
      "short_description": "Supporting smooth operations by coordinating production processes and ensuring efficiency",
      "created_at": null,
      "updated_at": "2025-01-06T12:21:52.000000Z",
      "enabled": 1
    },
    {
      "id": 8,
      "name": "Grace Kange\'the",
      "job_title": "Administration & Event Coordinator",
      "thumbnail_url": "/img/team/thumb/grace-kangethe.png",
      "short_description": "The detail-driven force orchestrating seamless operations and unforgettable experiences at Aidias Factory.",
      "created_at": null,
      "updated_at": "2025-01-06T12:21:52.000000Z",
      "enabled": 1
    }
  ]
}

';

    $teamGroups = json_decode($json);

    return view('pages.who', compact('teamGroups'));
})->name('who');
Route::prefix('what-we-done')->group(function () {
    Route::get('epra-conference', function () {
        return view('pages.what-we-done.epra_conference');
    })->name('epra-conference');
    Route::get('startup-festival', function () {
        return view('pages.what-we-done.startup-festival');
    })->name('startup-festival');
    Route::get('stima-at-50', function () {
        return view('pages.what-we-done.stima-at-50');
    })->name('stima-at-50');
    Route::get('kenya-innovation-week-2024', function () {
        return view('pages.what-we-done.kiw-2024');
    })->name('kiw-2024');
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
