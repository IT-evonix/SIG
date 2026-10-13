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
                        <h1 class="inner_banner_heading">Eligibility <span>Criteria</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">M.Sc. in Geoinformatics</li>
                                <li class="breadcrumb-item active" aria-current="page">Eligibility Criteria</li>
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
                            <div class="eligibility_creteria_mainbox">
                                <div class="eligibility_creteria_left">
                                    <p class="big_font_para">
                                        A student seeking admission to the programme must fulfil the following eligibility and admission requirements:
                                    </p>
                                    <div class="eligibility_creteria_left_wraper">
                                        <div class="eligibility_creteria_left_listing">
                                            <div class="eligibility_creteria_left_listing_number">01</div>
                                            <div class="eligibility_creteria_left_listing_para">
                                                <p class="m-0">
                                                    Candidate should be Graduate in Engineering, IT, Science, Computer Science, Agriculture, Geography, Planning, Architecture, Commerce and Management from any recognised University/ Institution of National Importance with a minimum of 50% marks or equivalent grade (45% Marks or equivalent grade for Scheduled Caste/Scheduled Tribes)
                                                </p>
                                            </div>
                                        </div>
                                        <div class="eligibility_creteria_left_listing">
                                            <div class="eligibility_creteria_left_listing_number">02</div>
                                            <div class="eligibility_creteria_left_listing_para">
                                                <p class="m-0">
                                                    Candidates appearing for final year examinations can also apply, but their admission will be subject to obtaining a minimum of 50% marks (45% for SC/ST) in the qualifying examination.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="eligibility_creteria_left_listing">
                                            <div class="eligibility_creteria_left_listing_number">03</div>
                                            <div class="eligibility_creteria_left_listing_para">
                                                <p class="m-0">
                                                    A candidate who has completed qualifying qualification from any Foreign University must obtain an equivalence certificate from Association of Indian Universities (AIU).
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="eligibility_creteria_right">
                                    <div class="eligibility_creteria_intake">
                                        <div class="eligibility_creteria_intake_icon">
                                            <img src="{{ asset('assets/images/programmes/icon/group-white.svg') }}" alt="Icon" class="img-fluid">
                                        </div>
                                        <div class="eligibility_creteria_intake_devider"></div>
                                        <div class="eligibility_creteria_intake_content">
                                            <div class="eligibility_creteria_intake_subheading">Intake</div>
                                            <div class="eligibility_creteria_intake_heading">60 students</div>
                                        </div>
                                    </div>
                                    <div class="reservation_wrapper">
                                        <h3 class="eligibility_creteria_reservation_heading">
                                            Reservations
                                        </h3>
                                        <div class="eligibility_creteria_reservation_listing_mainbox">
                                            <div class="eligibility_creteria_reservation_listing">
                                                <div class="eligibility_creteria_reservation_subheading">Within the sanctioned intake</div>
                                                <div class="eligibility_creteria_list_mainbox">
                                                    <div class="eligibility_creteria_list">
                                                        <div class="eligibility_creteria_list_left">15%</div>
                                                        <div class="eligibility_creteria_list_right">SC</div>
                                                    </div>
                                                    <div class="eligibility_creteria_list">
                                                        <div class="eligibility_creteria_list_left">7.5%</div>
                                                        <div class="eligibility_creteria_list_right">ST</div>
                                                    </div>
                                                    <div class="eligibility_creteria_list">
                                                        <div class="eligibility_creteria_list_left">3%</div>
                                                        <div class="eligibility_creteria_list_right">Persons with Disabilities (PwD)</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="eligibility_creteria_reservation_listing">
                                                <div class="eligibility_creteria_reservation_subheading">Over and above the sanctioned intake</div>
                                                <div class="eligibility_creteria_list_mainbox">
                                                    <div class="eligibility_creteria_list">
                                                        <div class="eligibility_creteria_list_left">2 seats</div>
                                                        <div class="eligibility_creteria_list_right">Jammu and Kashmir Migrants</div>
                                                    </div>
                                                    <div class="eligibility_creteria_list">
                                                        <div class="eligibility_creteria_list_left">25%</div>
                                                        <div class="eligibility_creteria_list_right">International Students including NRIs</div>
                                                    </div>
                                                </div>
                                            </div>
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