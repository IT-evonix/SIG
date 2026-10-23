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
                        <h1 class="inner_banner_heading">Certification in Data Visualization</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Programmes</li>
                                <li class="breadcrumb-item active" aria-current="page">Certification in Data Visualization</li>
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
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">Certification in Data Visualization</h3>
                           @include('components.data-visualization-program-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="programmes_page_first_mainbox">
                                <div class="programmes_first_left">
                                    <h2 class="inner_heading">
                                       Certification in Data Visualization
                                    </h2>
                                    <p class="m-0">
                                        The new Certificate in Data Visualization course is designed to equip students 
                                        with essential skills in visualizing data using state-of-the-art tools and techniques.
                                         This comprehensive program covers fundamental concepts and practical applications,
                                          focusing on popular visualization tools like Power-BI, Tableau and Python libraries. 
                                         
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
                                    <p>
                                         Participants will learn how to transform complex datasets into clear, insightful visual 
                                          representations, enabling better decision-making and communication. The course includes 
                                          hands-on projects, real-world case studies, and expert guidance, making it ideal for professionals 
                                          looking to enhance their data analysis capabilities and for beginners aspiring to enter the field of
                                           data visualization
                                    </p>
                                    <!-- <p class="m-0">
                                        As future geospatial professionals, graduates are equipped to contribute to
                                        solutions for challenges related to urbanisation, climate change, environmental
                                        sustainability, infrastructure, and disaster resilience. The programme empowers
                                        them
                                        to support smarter planning, sustainable development, and informed
                                        decision-making
                                        and technology-driven solutions, creating meaningful impact across industries,
                                        communities, and society.
                                    </p> -->
                                </div> 
                            </div>
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