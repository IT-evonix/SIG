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
                        <h1 class="inner_banner_heading">Drone Data <span>Acquisition & Processing</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Programmes</li>
                                <li class="breadcrumb-item active" aria-current="page">Drone Data Acquisition & Processing</li>
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

<main class="programs_main">
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
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">Certificate Course Drone Data Acquisition and Processing</h3>
                            @include('components.drone-data-processing-programme-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="programmes_page_first_mainbox">
                                <div class="programmes_first_left">
                                    <h2 class="inner_heading">
                                       Certificate Course Drone Data Acquisition and Processing
                                    </h2>
                                    <p class="m-0">
                                        The course trains the students to not only handle the drones but also the capability to 
                                        post-process the data that is captured for further development of applications. This course 
                                        is designed to teach drone flight operations for the collection, mapping, and analysis of drone
                                         imagery. Data analysis will draw on techniques and methods that include mission planning, 
                                         photogrammetry, structure from motion, and image processing using industry-standard applications.
                                    </p>
                                </div>
                                <div class="programmes_first_right">
                                    <img src="{{ asset('assets/images/programmes/programmes-about-image.webp') }}"
                                        alt="Programmes image" class="img-fluid">
                                </div>
                            </div>
                            <!-- <div class="programmes_page_second_mainbox">
                                <div class="programmes_second_left">
                                    <img src="{{ asset('assets/images/programmes/earth-image.webp') }}"
                                        alt="Programmes image" class="img-fluid">
                                </div>
                                <div class="programmes_second_right">
                                    <p>
                                        The curriculum offers comprehensive learning in Remote Sensing, Geographic
                                        Information Systems (GIS), Global Navigation Satellite Systems (GNSS), Spatial
                                        Data Analysis, and Information Technology. Through hands-on learning and
                                        projects-based learnings, students strengthen their technical, analytical,
                                        research, and problem-solving capabilities.
                                    </p>
                                    <p class="m-0">
                                        As future geospatial professionals, graduates are equipped to contribute to
                                        solutions for challenges related to urbanisation, climate change, environmental
                                        sustainability, infrastructure, and disaster resilience. The programme empowers
                                        them
                                        to support smarter planning, sustainable development, and informed
                                        decision-making
                                        and technology-driven solutions, creating meaningful impact across industries,
                                        communities, and society.
                                    </p>
                                </div>
                            </div> -->
                            <!-- <div class="programmes_page_third_mainbox">
                                <p class="m-0">
                                    As future geospatial professionals, graduates are equipped to contribute to
                                    solutions for challenges related to urbanisation, climate change, environmental
                                    sustainability, infrastructure, and disaster resilience. The programme empowers them
                                    to support smarter planning, sustainable development, and informed decision-making
                                    and technology-driven solutions, creating meaningful impact across industries,
                                    communities, and society.
                                </p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection