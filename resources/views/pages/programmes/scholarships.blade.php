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
                        <h1 class="inner_banner_heading"><span>Scholarships</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Programmes</li>
                                <li class="breadcrumb-item active" aria-current="page">Scholarships</li>
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
                            <div class="sholarships_mainbox">
                                <p class="m-0">
                                    Symbiosis International (Deemed University) has various scholarship schemes: With the objective of encouraging meritorious students and academic excellence, Scholarships/ Awards are offered to deserving students of the University by the Symbiosis Society Foundation.
                                </p>
                                <div class="sholarships_wraper">
                                    <div class="sholarships_listing">
                                        <div class="sholarships_image">
                                            <img src="{{ asset('assets/images/programmes/scholarship-01.webp') }}" alt="Scholarship image" class="img-fluid">
                                        </div>
                                        <div class="sholarships_content">
                                            <h2 class="sholarships_heading">
                                                Merit Scholarship for Semester/Annual Toppers at Symbiosis International (Deemed University)
                                            </h2>
                                            <p>
                                                Symbiosis International (Deemed University) encourages academic excellence through merit-based scholarships. These scholarships are awarded to the top four students in the order of merit from each semester in every UG and PG degree program. Additionally, scholarships are also extended to the top four students in programs following an annual pattern
                                            </p>
                                            <p class="m-0">
                                                The primary objective of these scholarships is to recognize and reward academic excellence, motivating students to take the initiative, compete, and excel in their studies. The scholarships are reviewed every three years
                                            </p>
                                        </div>
                                    </div>
                                    <div class="sholarships_listing">
                                        <div class="sholarships_image">
                                            <img src="{{ asset('assets/images/programmes/scholarship-02.webp') }}" alt="Scholarship image" class="img-fluid">
                                        </div>
                                        <div class="sholarships_content">
                                            <h2 class="sholarships_heading">
                                                NER Scholarship: Empowering North Eastern Students at Symbiosis International (Deemed University)
                                            </h2>
                                            <p class="m-0">
                                                The North East Region (NER) Scholarship is a special initiative for students from the North Eastern states of India, offering financial assistance to pursue advanced education at Symbiosis International (Deemed University) this scholarship covers full or partial tuition fees, providing opportunities for deserving students to study in cutting-edge fields like Geoinformatics, Data Science, Artificial Intelligence and Spatial Analytics.
                                            </p>
                                        </div>
                                    </div>
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