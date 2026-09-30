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
                                    <div class="sholarships_wraper_listing">
                                        <h2 class="sholarships_heading">
                                            Merit Scholarship for Semester/Annual Toppers at Symbiosis International (Deemed University)
                                        </h2>
                                        <div class="sholarships_listing">
                                            <div class="sholarships_image">
                                                <img src="{{ asset('assets/images/programmes/scholarship-01.webp') }}" alt="Scholarship image" class="img-fluid">
                                            </div>
                                            <div class="sholarships_content">
                                                <p>
                                                    Symbiosis International (Deemed University) encourages academic excellence through merit-based scholarships. These scholarships are awarded to the top four students in the order of merit from each semester in every UG and PG degree program. Additionally, scholarships are also extended to the top four students in programs following an annual pattern
                                                </p>
                                                <p class="m-0">
                                                    The primary objective of these scholarships is to recognize and reward academic excellence, motivating students to take the initiative, compete, and excel in their studies. The scholarships are reviewed every three years
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sholarships_wraper_listing">
                                        <h2 class="sholarships_heading">
                                            NER Scholarship: Empowering North Eastern Students at Symbiosis International (Deemed University)
                                        </h2>
                                        <div class="sholarships_listing">
                                            <div class="sholarships_image">
                                                <img src="{{ asset('assets/images/programmes/scholarship-02.webp') }}" alt="Scholarship image" class="img-fluid">
                                            </div>
                                            <div class="sholarships_content">
                                                <p class="m-0">
                                                    The North East Region (NER) Scholarship is a special initiative for students from the North Eastern states of India, offering financial assistance to pursue advanced education at Symbiosis International (Deemed University) this scholarship covers full or partial tuition fees, providing opportunities for deserving students to study in cutting-edge fields like Geoinformatics, Data Science, Artificial Intelligence and Spatial Analytics.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="key_benefit_mainbox">
                                    <h2 class="sholarships_heading">Key Benefits</h2>
                                    <div class="key_benefit_wraper">
                                        <div class="key_benefit_listing">
                                            <div class="key_benefit_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/group.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <p class="m-0">
                                                Financial support for students from Assam, Arunachal Pradesh, Manipur, Meghalaya, Mizoram, Nagaland, Sikkim, and Tripura.
                                            </p>
                                        </div>
                                        <div class="key_benefit_listing">
                                            <div class="key_benefit_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/web.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <p class="m-0">
                                                Access to world-class education and career opportunities in high-demand industries.
                                            </p>
                                        </div>
                                        <div class="key_benefit_listing">
                                            <div class="key_benefit_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/medal.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <p class="m-0">
                                                Merit-based selection for students with excellent academic records.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="email_mainbox">
                                    <div class="email_icon">
                                        <svg width="35" height="35" x="0" y="0" viewBox="0 0 100 100">
                                            <g>
                                                <path
                                                    d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                    fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                </path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="email_devider"></div>
                                    <div class="email_content">
                                        SIU Scholarships details and other scholarships offered by SIU can be seen at - <br>
                                        <a href="https://www.siu.edu.in/admissions/scholarship" target="_blank">https://www.siu.edu.in/admissions/scholarship</a>
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