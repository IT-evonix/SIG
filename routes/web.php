<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index')->name('index');
// CONTACT US START -------------------------------------------------------
Route::get('/contact', function () {
    return view('pages.contact');
})->name('pages.contact');
// CONTACT US ENDS --------------------------------------------------------

// PROGRAMMES MENU START --------------------------------------------------

Route::get('/msc-in-geoinformatics', function () {
    return view('pages.programmes.msc-in-geoinformatics');
})->name('pages.programmes.msc-in-geoinformatics');

// PROGRAMMES MENU ENDS ---------------------------------------------------


