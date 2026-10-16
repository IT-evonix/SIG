<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index')->name('index');

// ABOUT START -------------------------------------------------------

Route::get('/about-us', function () {
    return view('pages.about.about-us');
})->name('pages.about.about-us');

Route::get('/director', function () {
    return view('pages.about.director');
})->name('pages.about.director');

Route::get('/deputy-director', function () {
    return view('pages.about.deputy-director');
})->name('pages.about.deputy-director');

// ABOUT ENDS -------------------------------------------------------

// CONTACT US START -------------------------------------------------------

Route::get('/contact', function () {
    return view('pages.contact');
})->name('pages.contact');

// CONTACT US ENDS --------------------------------------------------------

// PROGRAMMES MENU START --------------------------------------------------

Route::get('/msc-in-geoinformatics', function () {
    return view('pages.programmes.msc-geoinformatics.msc-in-geoinformatics');
})->name('pages.programmes.msc-geoinformatics.msc-in-geoinformatics');

Route::get('/programme-outcome', function () {
    return view('pages.programmes.msc-geoinformatics.programme-outcome');
})->name('pages.programmes.msc-geoinformatics.programme-outcome');

Route::get('/eligibility-criteria', function () {
    return view('pages.programmes.msc-geoinformatics.eligibility-criteria');
})->name('pages.programmes.msc-geoinformatics.eligibility-criteria');

Route::get('/fees-structure', function () {
    return view('pages.programmes.msc-geoinformatics.fees-structure');
})->name('pages.programmes.msc-geoinformatics.fees-structure');

Route::get('/stakeholder-feedback', function () {
    return view('pages.programmes.msc-geoinformatics.stakeholder-feedback');
})->name('pages.programmes.msc-geoinformatics.stakeholder-feedback');

Route::get('/programme-structure', function () {
    return view('pages.programmes.msc-geoinformatics.programme-structure');
})->name('pages.programmes.msc-geoinformatics.programme-structure');

Route::get('/admission-calendar', function () {
    return view('pages.programmes.msc-geoinformatics.admission-calendar');
})->name('pages.programmes.msc-geoinformatics.admission-calendar');

Route::get('/how-to-apply', function () {
    return view('pages.programmes.msc-geoinformatics.how-to-apply');
})->name('pages.programmes.msc-geoinformatics.how-to-apply');

Route::get('/scholarships', function () {
    return view('pages.programmes.msc-geoinformatics.scholarships');
})->name('pages.programmes.msc-geoinformatics.scholarships');

Route::get('/admission-contact', function () {
    return view('pages.programmes.msc-geoinformatics.admission-contact');
})->name('pages.programmes.msc-geoinformatics.admission-contact');

// PROGRAMMES MENU ENDS ---------------------------------------------------

// PLACEMENT START ---------------------------------------------------

Route::get('/placement', function () {
    return view('pages.placement.placement');
})->name('pages.placement.placement');

Route::get('/placement-brochure', function () {
    return view('pages.placement.placement-brochure');
})->name('pages.placement.placement-brochure');

Route::get('/placement-process', function () {
    return view('pages.placement.placement-process');
})->name('pages.placement.placement-process');

Route::get('/placement-grooming', function () {
    return view('pages.placement.placement-grooming');
})->name('pages.placement.placement-grooming');

Route::get('/placement-policy', function () {
    return view('pages.placement.placement-policy');
})->name('pages.placement.placement-policy');

Route::get('/placement-highlights', function () {
    return view('pages.placement.placement-highlights');
})->name('pages.placement.placement-highlights');

Route::get('/recruiters', function () {
    return view('pages.placement.recruiters');
})->name('pages.placement.recruiters');

Route::get('/for-recruiters', function () {
    return view('pages.placement.for-recruiters');
})->name('pages.placement.for-recruiters');

Route::get('/student-success-stories', function () {
    return view('pages.placement.student-success-stories');
})->name('pages.placement.student-success-stories');

Route::get('/placement-faq', function () {
    return view('pages.placement.placement-faq');
})->name('pages.placement.placement-faq');

Route::get('/placement-contact', function () {
    return view('pages.placement.placement-contact');
})->name('pages.placement.placement-contact');

// PLACEMENT ENDS ---------------------------------------------------

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


Route::get('/coming-soon', function () {
    return view('pages.coming-soon');
})->name('pages.coming-soon');