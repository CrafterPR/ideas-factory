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
      "short_description": "Proof that when creativity meets strategy, magic happens.",
      "created_at": null,
      "updated_at": "2025-01-06T12:21:52.000000Z",
      "enabled": 1
    },
    {
      "id": 36,
      "name": "Maureen Chelimo",
      "job_title": "HR & Comms Director",
      "thumbnail_url": "/img/team/thumb/placeholder.jpeg",
      "short_description": "The voice of the brand, keeping Aidias Factory inspired inside and out.",
      "created_at": null,
      "updated_at": "2025-01-06T12:21:52.000000Z",
      "enabled": 1
    },
    {
      "id": 36,
      "name": "Mwangi Muiga",
      "job_title": "Events & AV Manager",
      "thumbnail_url": "/img/team/thumb/mwangi-muiga.png",
      "short_description": "Turning Aidias Factory’s events into experiences and Audio-Visual into pure magic.",
      "created_at": null,
      "updated_at": "2025-01-06T12:21:52.000000Z",
      "enabled": 1
    },
     {
      "id": 36,
      "name": "Faith Wanjiru",
      "job_title": "Admin Manager",
      "thumbnail_url": "/img/team/thumb/faith-wanjiru.png",
      "short_description": "The powerhouse that keeps Aidias Factory running smoother than a well-oiled machine.",
      "created_at": null,
      "updated_at": "2025-01-06T12:21:52.000000Z",
      "enabled": 1
    },
     {
      "id": 36,
      "name": "Neville Ng\'ambwa",
      "job_title": "Production Manager",
      "thumbnail_url": "/img/team/thumb/nevile.png",
      "short_description": "The master craftsman at Aidias Factory, turning wild ideas into flawless productions.",
      "created_at": null,
      "updated_at": "2025-01-06T12:21:52.000000Z",
      "enabled": 1
    },
    {
      "id": 36,
      "name": "Neville Ng\'ambwa",
      "job_title": "Jennifer Temba",
      "thumbnail_url": "/img/team/thumb/jennifer-temba.png",
      "short_description": "The voice, vibe, and vision behind Aidias Factory’s client magic.",
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
