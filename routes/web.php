<!-- routes/web.php
 Keep only one Laravel route (the "catch-all" route) that returns home.blade.php
  -->
<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () {
    return view('home');
})->where('any', '.*');