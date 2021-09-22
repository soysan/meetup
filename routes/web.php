<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/users:{language}', function ($language) {
    return 'User '.$language;
})->name('userId');
