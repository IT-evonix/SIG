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
                        <h1 class="inner_banner_heading">M.Sc. in <span>Geoinformatics</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Programmes</li>
                                <li class="breadcrumb-item active" aria-current="page">M.Sc. in Geoinformatics</li>
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
                        <div class="inner_page_menu_box">
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">M.Sc. in Geoinformatics</h3>
                            @include('components.msc-geoinformatics-programme-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="programmes_page_first_mainbox">
                                <div class="programmes_first_left">
                                    <h2 class="inner_heading">
                                        Master of Science (Geoinformatics) (M. Sc. Geoinformatics)
                                    </h2>
                                    <p class="m-0">
                                        The M.Sc. in Geoinformatics at the Symbiosis Institute of Geoinformatics (SIG)
                                        is an 80-credit, four-semester postgraduate programme designed to prepare
                                        aspiring geospatial professionals for advanced roles in the evolving world of
                                        spatial science and technology. By integrating scientific knowledge, advanced
                                        geospatial technologies, and real-world applications, the programme enables
                                        students to transform spatial data into meaningful insights and impactful
                                        solutions.
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
                                        The curriculum offers comprehensive learning in Remote Sensing, Geographic
                                        Information Systems (GIS), Global Navigation Satellite Systems (GNSS), Spatial
                                        Data Analysis, and Information Technology. Through hands-on learning and
                                        projects-based learnings, students strengthen their technical, analytical,
                                        research, and problem-solving capabilities.
                                    </p>
                                    <p class="m-0">
                                        As future geospatial professionals, graduates are equipped to contribute to
                                        solutions for challenges related to urbanisation, climate change, environmental
                                        sustainability, infrastructure, and disaster resilience. The programme empowers them
                                        to support smarter planning, sustainable development, and informed decision-making
                                        and technology-driven solutions, creating meaningful impact across industries,
                                        communities, and society.
                                    </p>
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