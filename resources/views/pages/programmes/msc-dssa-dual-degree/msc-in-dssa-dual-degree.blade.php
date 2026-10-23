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
                        <h1 class="inner_banner_heading">M.Sc. DSSA  Dual Degree</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Programmes</li>
                                <li class="breadcrumb-item active" aria-current="page">M.Sc. DSSA Dual Degree</li>
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
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">M.Sc. DSSA Dual Degree</h3>
                            @include('components.msc-dssa-dual-degree-programme-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="programmes_page_first_mainbox">
                                <div class="programmes_first_left">
                                    <h2 class="inner_heading">
                                       Master of Science Data Science and Spatial Analytics at SIG and Master of
                                        Science Degree Technical Systems Control
                                    </h2>
                                    <p class="m-0">
                                        The M.Sc. Data Science and Spatial Analytics Dual Degree Programme offers
                                        a distinctive international learning experience that brings together Data
                                        Science, Spatial Analytics, Artificial Intelligence, Machine Learning, and
                                        Space Science. The programme is designed to equip students with interdisciplinary
                                        knowledge and global exposure for emerging technology-driven careers.

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
                                        During the first year, students study at the Symbiosis Institute of Geoinformatics
                                        (SIG), Pune, building a strong foundation in Data Science, Data Governance, Data
                                        Engineering, Python for Data Science, and Spatial Technologies.

                                    </p>
                                    <p>
                                        In the second year, students continue their academic journey at RUDN
                                        University, Moscow, Russia, gaining specialised exposure to Artificial
                                        Intelligence, Deep Learning, Machine Learning, Dynamics and Control of
                                        Space Systems, and Advanced Methods of Space Flight Mechanics.
                                    </p>




                                </div>
                            </div>
                            <div class="programmes_page_third_mainbox">

                                <p>
                                    This unique interdisciplinary and international academic experience enable
                                    students to develop advanced expertise at the intersection of data, artificial
                                    intelligence, spatial analytics, and space science. Graduates are prepared to
                                    contribute to the rapidly evolving data science, AI, geospatial, and space technology
                                    ecosystems, opening pathways to global and specialised career opportunities in
                                    growing space, Artificial Intelligence Industries.
                                </p>
                                <p>
                                    Upon successful completion of the programme, students are
                                    awarded dual qualifications:

                                <ul style="list-style: disc; padding-left: 1.5rem; margin-bottom: 1rem;">
                                    <li style="display: list-item;">Master of Science (Data Science and Spatial Analytics) from
                                        Symbiosis International (Deemed University), India</li>
                                    <li style="display: list-item;">Master of Science in Technical Systems Control, Artificial
                                        Intelligence and Space Sciences from RUDN University, Moscow, Russia</li>
                                </ul>
                                </p>

                                <p>
                                    With its combination of international exposure, interdisciplinary learning,
                                    and dual academic credentials, the programme empowers graduates to pursue
                                    impactful careers and contribute to the future of intelligent technologies,
                                    spatial innovation, and the global space economy.
                                    The details about the offered programme in collaboration with RUDN University.
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