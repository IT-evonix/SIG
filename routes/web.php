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

// BLOG START ---------------------------------------------------

Route::get('/blog', function () {
    return view('pages.blog');
})->name('pages.blog');

Route::get('/blog-detail', function () {
    return view('pages.blog-detail');
})->name('pages.blog-detail');

// BLOG ENDS ---------------------------------------------------

Route::get('/faculty-profile', function () {
    return view('pages.faculty-profile');
})->name('pages.faculty-profile');