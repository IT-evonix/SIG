<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index')->name('index');
Route::view('/about', 'pages.about.about')->name('about');
