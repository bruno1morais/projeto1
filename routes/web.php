<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/', fn() => 'Hello from Laravel!');