@extends('layouts.app')

@section('title', 'Msc in Geoinformatics: Master Degree Course in GIS - SIG')

@section('description', 'Build your career with SIG, one of the best MSc Geoinformatics colleges in India. Learn GIS
courses and advance your career with a master\'s in Geoinformatics.')

@section('banner')
<div class="inner_banner_section">
    <div class="inner_banner_imgbox">
        <div class="banner_imgbox">
            <img src="{{ asset('assets/images/inner-banner.webp') }}" alt="Inner Banner Image" class="img-fluid inner_desktop_banner_image">
            <img src="{{ asset('assets/images/mobile-inner-banner.webp') }}" alt="Inner Banner Image" class="img-fluid inner_mobile_banner_image">
        </div>
    </div>
    <div class="inner_banner_overlay_box"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner_banner_mainbox">
                    <div class="inner_banner_headingbox">
                        <h1 class="inner_banner_heading">M.Sc. in <span>DSSA</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Programmes</li>
                                <li class="breadcrumb-item active" aria-current="page">M.Sc. in DSSA</li>
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
                        <div class="inner_menu_toggle" onclick="menu()">
                            <img src="{{ asset('assets/images/programmes/icon/menu.svg') }}" alt="Icon" class="img-fluid">
                        </div>
                        <div class="inner_menu_overlay" onclick="menu()"></div>
                        <div class="inner_page_menu_box">
                            <div class="inner_menu_closebox" onclick="menu()">
                                <img src="{{ asset('assets/images/programmes/icon/close.svg') }}" alt="Icon" class="img-fluid">
                            </div>
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">M.Sc. in DSSA</h3>
                            @include('components.msc-dssa-programme-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="programmes_page_first_mainbox">
                                <div class="programmes_first_left">
                                    <h2 class="inner_heading">
                                        Master of Science (Data Science and Spatial Analytics)
                                    </h2>
                                    <p class="m-0">
                                        The M.Sc. in Data Science and Spatial Analytics at the Symbiosis
                                        Institute of Geoinformatics (SIG) prepares future-ready data professionals
                                        and Data analytics specialists for an increasingly data-driven world.
                                        The programme integrates Data Science, Artificial Intelligence, Machine
                                        Learning, Deep Learning, and Spatial Data Analytics, enabling students to
                                        transform complex data into meaningful insights and intelligent solutions.
                                    </p>
                                   

                                </div>
                                <div class="programmes_first_right">
                                    <img src="{{ asset('assets/images/programmes/programmes-about-image.webp') }}"
                                        alt="Programmes image" class="img-fluid">
                                </div>
                            </div>
                            <div class="programmes_page_second_mainbox">
                                <div class="programmes_second_left">
                                    <img src="{{ asset('assets/images/programmes/earth-image.webp') }}"
                                        alt="Programmes image" class="img-fluid">
                                </div>
                                <div class="programmes_second_right">

                                 <p >
                                        Through hands-on learning and application-oriented projects, 
                                        students develop skills to analyse complex datasets, build predictive
                                         models, discover hidden patterns, and address real-world challenges.
                                    </p>
                                    <p>
                                        Students can choose one of the following Areas of Specialization:<br>
                                        <b>Artificial Intelligence Algorithms:</b> Develop expertise in Machine 
                                        Learning, Deep Learning, Neural Networks, and intelligent algorithms to 
                                        build predictive models and AI-driven solutions.
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="programmes_page_third_mainbox">
                                <p class="m-0">
                                  <b>  Geointelligence:</b> Apply data science and spatial analytics to derive actionable insights 
                                  from Earth observation and location-based data, supporting solutions in areas such as urban development, 
                                  environment, climate change, and disaster management
                                The programme empowers graduates to build intelligent solutions, 
                                unlock the potential of data, and contribute to smarter, sustainable, and data-driven decision-making across industries and society..
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection