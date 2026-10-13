@extends('layouts.app')

@section('title', 'Msc in Geoinformatics: Master Degree Course in GIS - SIG')

@section('description', 'Build your career with SIG, one of the best MSc Geoinformatics colleges in India. Learn GIS
courses and advance your career with a master\'s in Geoinformatics.')

@section('banner')
<div class="inner_banner_section">
    <div class="inner_banner_imgbox">
        <div class="banner_imgbox">
            <img src="{{ asset('assets/images/inner-banner.webp') }}" alt="Inner Banner Image" class="img-fluid">
        </div>
    </div>
    <div class="inner_banner_overlay_box"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner_banner_mainbox">
                    <div class="inner_banner_headingbox">
                        <h1 class="inner_banner_heading">How to <span>Apply</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Programmes</li>
                                <li class="breadcrumb-item active" aria-current="page">How to Apply</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="inner_banner_rightbox"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<main class="programs_main one_liner_heading">
    <section class="inner_page_section">
        <div class="inner_page_backgrond_box">
            <div class="inner_page_backgrond_leftbox"></div>
            <div class="inner_page_backgrond_rightbox"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner_page_menu_mainbox">
                        <div class="inner_page_menu_box">
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">M.Sc. in Geoinformatics</h3>
                            @include('components.msc-geoinformatics-programme-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="how_to_apply_mainbox">
                                <p class="m-0">
                                    Admission to SIG programmes is based on a mandatory Entrance Examination and Personal Interaction (PI). Both will be conducted online on the same day and candidates are required to complete both stages of the admission process.
                                </p>
                                <div class="how_to_apply_wraper">
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 1</div>
                                            <h2 class="how_to_apply_header_heading">Online Application</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p class="m-0">
                                                Candidates must complete the online application form through the registration link available on the SIG website: <a href="www.sig.ac.in" target="_blank">www.sig.ac.in</a>. Candidates should ensure that all required information is entered correctly and that the application is submitted within the specified timeline.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 2</div>
                                            <h2 class="how_to_apply_header_heading">Application Fee</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p class="m-0">
                                                A non-refundable application fee of ₹1,500/- is payable online through Credit Card, Debit Card, Net Banking or UPI using the payment gateway provided in the application form.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 3</div>
                                            <h2 class="how_to_apply_header_heading">Entrance Examination</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p>
                                                The online Entrance Examination will comprise Multiple Choice Questions (MCQs) covering:
                                            </p>
                                            <ul class="custom_listing">
                                                <li>Aptitude</li>
                                                <li>Current Affairs</li>
                                                <li>General Studies</li>
                                                <li>Logical reasoning</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 4</div>
                                            <h2 class="how_to_apply_header_heading">Personal Interaction (PI)</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p>
                                                The online Personal Interaction (PI) will be conducted on the same day as the Entrance Examination. Candidates will be assessed on:
                                            </p>
                                            <ul class="custom_listing">
                                                <li>Communication Skills</li>
                                                <li>Critical Analytical Ability</li>
                                                <li>General Studies</li>
                                                <li>Subject Knowledge related to the Bachelor’s degree</li>
                                                <li>Candidate Self-Assessment</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 5</div>
                                            <h2 class="how_to_apply_header_heading">Schedule & Communication</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p>
                                                The Entrance Examination and Personal Interaction schedule, along with the online meeting link, will be shared with registered candidates on their registered email ID closer to the scheduled date.
                                            </p>
                                            <p class="m-0">
                                                Candidates are advised to regularly check their registered email for admission-related updates.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 6</div>
                                            <h2 class="how_to_apply_header_heading">Final Selection</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            The final selection results will be declared as per the admission schedule published on the SIG website.
                                        </div>
                                    </div>
                                </div>
                                <div class="fees_notebox">
                                    <strong>Note:</strong> Participation in both the Entrance Examination and Personal Interaction is mandatory for admission consideration.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection