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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner_banner_mainbox">
                    <div class="inner_banner_headingbox">
                        <h1 class="inner_banner_heading">M.Sc. in <span>Geoinformatics</span></h1>
                        <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Programmes</a></li>
                                <li class="breadcrumb-item active" aria-current="page">M.Sc. in Geoinformatics</li>
                            </ol>
                        </nav> -->
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
                        <div class="inner_page_menu_box">
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">M.Sc. in Geoinformatics</h3>
                            @include('components.programme-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="programmes_page_first_mainbox">
                                <div class="programmes_first_left">
                                    <h2 class="inner_heading">
                                        M.Sc.(Geoinformatics) offered by Symbiosis Institute of Geoinformatics (SIG)
                                    </h2>
                                    <p class="m-0">
                                        Symbiosis Institute of Geoinformatics (SIG) comprises 80 credits, spread across
                                        4 semesters. Comprising two projects as expected from a good masters in
                                        geoinformatics in India, the degree is conferred under the Symbiosis
                                        International University.
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
                                    <p class="m-0">
                                        Earth and atmospheric science relies on spatial data acquired from
                                        satellite,aerial images or other means, which are analyzed by the expert using
                                        Geospatial technology. The field of Geoinformatics consists of Remote Sensing,
                                        Geographic Information System (GIS), Global Navigation Satellite System (GNSS)
                                        with Information Technology among many other aspects. Many fields benefit from
                                        geoinformatics, including urban planning and land use management, navigation
                                        systems, public health, environmental modeling and analysis, military, transport
                                        network planning and management, agriculture, meteorology and climate change,
                                        oceanography and atmosphere modeling, business location planning, architecture
                                        and archaeological reconstruction, telecommunications, criminology and crime
                                        simulation, Business management, aviation and maritime transport.
                                    </p>
                                </div>
                            </div>
                            <div class="programmes_page_third_mainbox">
                                <p>
                                    Geoinformatics and by extension MSc geoinformatics colleges in India have become
                                    very important for decision-makers. Many national and international agencies are
                                    using spatial data for managing their day to day activities.
                                </p>
                                <p>
                                    Geoinformatics is a specialized field necessitating expert knowledge. SIG has
                                    emerged as one of the leading MSc geoinformatics colleges in India with their
                                    commitment, quality of education and legacy as a Symbiosis institute.
                                </p>
                                <p class="m-0">
                                    Students from Engineering, Science, geography, geology, agriculture, environment,
                                    forestry engineering, IT or computer science fields can opt for a masters in
                                    geoinformatics in India from SIG.
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