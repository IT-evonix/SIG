<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

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

Route::get('/contact', [ContactController::class, 'show'])->name('pages.contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

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

// Msc dual degree start
Route::get('/msc-in-dssa-dual-degree', function () {
    return view('pages.programmes.msc-dssa-dual-degree.msc-in-dssa-dual-degree');
})->name('pages.programmes.msc-dssa-dual-degree.msc-in-dssa-dual-degree');

Route::get('/dssa-dual-degree-programme-outcome', function () {
    return view('pages.programmes.msc-dssa-dual-degree.programme-outcome');
})->name('pages.programmes.msc-dssa-dual-degree.programme-outcome');

Route::get('/dssa-dual-degree-eligibility-criteria', function () {
    return view('pages.programmes.msc-dssa-dual-degree.eligibility-criteria');
})->name('pages.programmes.msc-dssa-dual-degree.eligibility-criteria');

Route::get('/dssa-dual-degree-fees-structure', function () {
    return view('pages.programmes.msc-dssa-dual-degree.fees-structure');
})->name('pages.programmes.msc-dssa-dual-degree.fees-structure');

Route::get('/dssa-dual-degree-stakeholder-feedback', function () {
    return view('pages.programmes.msc-dssa-dual-degree.stakeholder-feedback');
})->name('pages.programmes.msc-dssa-dual-degree.stakeholder-feedback');

Route::get('/dssa-dual-degree-programme-structure', function () {
    return view('pages.programmes.msc-dssa-dual-degree.programme-structure');
})->name('pages.programmes.msc-dssa-dual-degree.programme-structure');

Route::get('/dssa-dual-degree-admission-calendar', function () {
    return view('pages.programmes.msc-dssa-dual-degree.admission-calendar');
})->name('pages.programmes.msc-dssa-dual-degree.admission-calendar');

Route::get('/dssa-dual-degree-how-to-apply', function () {
    return view('pages.programmes.msc-dssa-dual-degree.how-to-apply');
})->name('pages.programmes.msc-dssa-dual-degree.how-to-apply');

Route::get('/dssa-dual-degree-scholarships', function () {
    return view('pages.programmes.msc-dssa-dual-degree.scholarships');
})->name('pages.programmes.msc-dssa-dual-degree.scholarships');

Route::get('/dssa-dual-degree-admission-contact', function () {
    return view('pages.programmes.msc-dssa-dual-degree.admission-contact');
})->name('pages.programmes.msc-dssa-dual-degree.admission-contact');

// Msc dual degree end

// msc dssa start

Route::get('/msc-in-dssa', function () {
    return view('pages.programmes.msc-dssa.msc-in-dssa');
})->name('pages.programmes.msc-dssa.msc-in-dssa');

Route::get('/dssa-programme-outcome', function () {
    return view('pages.programmes.msc-dssa.programme-outcome');
})->name('pages.programmes.msc-dssa.programme-outcome');

Route::get('/dssa-eligibility-criteria', function () {
    return view('pages.programmes.msc-dssa.eligibility-criteria');
})->name('pages.programmes.msc-dssa.eligibility-criteria');

Route::get('/dssa-fees-structure', function () {
    return view('pages.programmes.msc-dssa.fees-structure');
})->name('pages.programmes.msc-dssa.fees-structure');

Route::get('/dssa-stakeholder-feedback', function () {
    return view('pages.programmes.msc-dssa.stakeholder-feedback');
})->name('pages.programmes.msc-dssa.stakeholder-feedback');

Route::get('/dssa-programme-structure', function () {
    return view('pages.programmes.msc-dssa.programme-structure');
})->name('pages.programmes.msc-dssa.programme-structure');

Route::get('/dssa-admission-calendar', function () {
    return view('pages.programmes.msc-dssa.admission-calendar');
})->name('pages.programmes.msc-dssa.admission-calendar');

Route::get('/dssa-how-to-apply', function () {
    return view('pages.programmes.msc-dssa.how-to-apply');
})->name('pages.programmes.msc-dssa.how-to-apply');

Route::get('/dssa-scholarships', function () {
    return view('pages.programmes.msc-dssa.scholarships');
})->name('pages.programmes.msc-dssa.scholarships');

Route::get('/dssa-admission-contact', function () {
    return view('pages.programmes.msc-dssa.admission-contact');
})->name('pages.programmes.msc-dssa.admission-contact');

// msc dssa end

// certificate course drone data processing start
Route::get('/certificate-course-drone-data-processing', function () {
    return view('pages.programmes.certificate-course-drone-data-processing.certificate-course-in-data-processing');
})->name('pages.programmes.certificate-course-drone-data-processing.certificate-course-in-data-processing');

Route::get('/drone-programme-outcome', function () {
    return view('pages.programmes.certificate-course-drone-data-processing.programme-outcome');
})->name('pages.programmes.certificate-course-drone-data-processing.programme-outcome');

Route::get('/drone-eligibility-criteria', function () {
    return view('pages.programmes.certificate-course-drone-data-processing.eligibility-criteria');
})->name('pages.programmes.certificate-course-drone-data-processing.eligibility-criteria');

Route::get('/drone-fees-structure', function () {
    return view('pages.programmes.certificate-course-drone-data-processing.fees-structure');
})->name('pages.programmes.certificate-course-drone-data-processing.fees-structure');

Route::get('/drone-stakeholder-feedback', function () {
    return view('pages.programmes.certificate-course-drone-data-processing.stakeholder-feedback');
})->name('pages.programmes.certificate-course-drone-data-processing.stakeholder-feedback');

Route::get('/drone-programme-structure', function () {
    return view('pages.programmes.certificate-course-drone-data-processing.programme-structure');
})->name('pages.programmes.certificate-course-drone-data-processing.programme-structure');

Route::get('/drone-admission-calendar', function () {
    return view('pages.programmes.certificate-course-drone-data-processing.admission-calendar');
})->name('pages.programmes.certificate-course-drone-data-processing.admission-calendar');

Route::get('/drone-how-to-apply', function () {
    return view('pages.programmes.certificate-course-drone-data-processing.how-to-apply');
})->name('pages.programmes.certificate-course-drone-data-processing.how-to-apply');

Route::get('/drone-scholarships', function () {
    return view('pages.programmes.certificate-course-drone-data-processing.scholarships');
})->name('pages.programmes.certificate-course-drone-data-processing.scholarships');

Route::get('/drone-admission-contact', function () {
    return view('pages.programmes.certificate-course-drone-data-processing.admission-contact');
})->name('pages.programmes.certificate-course-drone-data-processing.admission-contact');
// certificate course drone data processing end

// certificate course data visualization start
Route::get('/certificate-course-data-visualization', function () {
    return view('pages.programmes.certificate-course-data-visualization.certificate-course-in-data-visual');
})->name('pages.programmes.certificate-course-data-visualization.certificate-course-in-data-visual');

Route::get('/data-visual-programme-outcome', function () {
    return view('pages.programmes.certificate-course-data-visualization.programme-outcome');
})->name('pages.programmes.certificate-course-data-visualization.programme-outcome');

Route::get('/data-visual-eligibility-criteria', function () {
    return view('pages.programmes.certificate-course-data-visualization.eligibility-criteria');
})->name('pages.programmes.certificate-course-data-visualization.eligibility-criteria');

Route::get('/data-visual-fees-structure', function () {
    return view('pages.programmes.certificate-course-data-visualization.fees-structure');
})->name('pages.programmes.certificate-course-data-visualization.fees-structure');

Route::get('/data-visual-stakeholder-feedback', function () {
    return view('pages.programmes.certificate-course-data-visualization.stakeholder-feedback');
})->name('pages.programmes.certificate-course-data-visualization.stakeholder-feedback');

Route::get('/data-visual-programme-structure', function () {
    return view('pages.programmes.certificate-course-data-visualization.programme-structure');
})->name('pages.programmes.certificate-course-data-visualization.programme-structure');

Route::get('/data-visual-admission-calendar', function () {
    return view('pages.programmes.certificate-course-data-visualization.admission-calendar');
})->name('pages.programmes.certificate-course-data-visualization.admission-calendar');

Route::get('/data-visual-how-to-apply', function () {
    return view('pages.programmes.certificate-course-data-visualization.how-to-apply');
})->name('pages.programmes.certificate-course-data-visualization.how-to-apply');

Route::get('/data-visual-scholarships', function () {
    return view('pages.programmes.certificate-course-data-visualization.scholarships');
})->name('pages.programmes.certificate-course-data-visualization.scholarships');

Route::get('/data-visual-admission-contact', function () {
    return view('pages.programmes.certificate-course-data-visualization.admission-contact');
})->name('pages.programmes.certificate-course-data-visualization.admission-contact');
// certificate course data visualization end

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

// STUDENT CORNER START -------------------------------------------

Route::get('/student-corner', function () {
    return view('pages.student-corner.student-corner');
})->name('pages.student-corner.student-corner');

Route::get('/sig-commitee', function () {
    return view('pages.student-corner.sig-commitee');
})->name('pages.student-corner.sig-commitee');

Route::get('/hostelandamenities', function () {
    return view('pages.student-corner.hostelandamenities');
})->name('pages.student-corner.hostelandamenities');

Route::get('/ai-club', function () {
    return view('pages.student-corner.ai-club');
})->name('pages.student-corner.ai-club');

Route::get('/achievements', function () {
    return view('pages.student-corner.achievements');
})->name('pages.student-corner.achievements');

Route::get('/newsevents', function () {
    return view('pages.student-corner.newsevents');
})->name('pages.student-corner.newsevents');

// STUDENT CORNER ENDS --------------------------------------------

Route::get('/faculty-profile', function () {
    return view('pages.faculty-profile');
})->name('pages.faculty-profile');

Route::get('/republic-day', function () {
    return view('pages.republic-day');
})->name('pages.republic-day');

Route::get('/coming-soon', function () {
    return view('pages.coming-soon');
})->name('pages.coming-soon');

Route::get('/comming-soon', function () {
    return view('pages.comming-soon');
})->name('pages.comming-soon');

Route::get('/drone-coming-soon', function () {
    return view('pages.programmes.certificate-course-drone-data-processing.coming-soon');
})->name('pages.programmes.certificate-course-drone-data-processing.coming-soon');

Route::get('/data-visual-coming-soon', function () {
    return view('pages.programmes.certificate-course-data-visualization.coming-soon');
})->name('pages.programmes.certificate-course-data-visualization.coming-soon');