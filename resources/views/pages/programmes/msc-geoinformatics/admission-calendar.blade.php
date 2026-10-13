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
                        <h1 class="inner_banner_heading">Admission <span>Calendar</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Programmes</li>
                                <li class="breadcrumb-item active" aria-current="page">Admission Calendar</li>
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
                            <div class="admission_calender_mainbox">
                                <div class="admission_calender_backgrond_img">
                                    <img src="{{ asset('assets/images/programmes/admission-calender-background.webp') }}" alt="Background image" class="img-fluid">
                                </div>
                                <div class="admission_calender_content">
                                    <div class="admission_calender_listing">
                                        <div class="admission_calender_listing_left">
                                            <div class="admission_calender_listing_left_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/documen.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_left_heading">Programme Registration Begins</div>
                                        </div>
                                        <div class="admission_calender_listing_right">
                                            <div class="admission_calender_listing_right_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/calendar.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_right_heading">19<sup>th</sup> October 2026</div>
                                        </div>
                                    </div>
                                    <div class="admission_calender_listing">
                                        <div class="admission_calender_listing_left">
                                            <div class="admission_calender_listing_left_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/hourglass.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_left_heading">Last date of Online registration</div>
                                        </div>
                                        <div class="admission_calender_listing_right">
                                            <div class="admission_calender_listing_right_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/calendar-gray.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_right_heading">01<sup>st</sup> March 2027</div>
                                        </div>
                                    </div>
                                    <div class="admission_calender_listing">
                                        <div class="admission_calender_listing_left">
                                            <div class="admission_calender_listing_left_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/wallet.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_left_heading">Last Date of payment of Registration fees</div>
                                        </div>
                                        <div class="admission_calender_listing_right">
                                            <div class="admission_calender_listing_right_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/calendar.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_right_heading">01<sup>st</sup> March 2027</div>
                                        </div>
                                    </div>
                                    <div class="admission_calender_listing">
                                        <div class="admission_calender_listing_left">
                                            <div class="admission_calender_listing_left_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/marketing.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_left_heading">Announcement of Shortlist for Entrance Examination & Personal Interaction </div>
                                        </div>
                                        <div class="admission_calender_listing_right">
                                            <div class="admission_calender_listing_right_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/calendar-gray.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_right_heading">04<sup>st</sup> March 2027</div>
                                        </div>
                                    </div>
                                    <div class="admission_calender_listing">
                                        <div class="admission_calender_listing_left">
                                            <div class="admission_calender_listing_left_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/group.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_left_heading">Entrance Examination & Personal Interaction (Online)</div>
                                        </div>
                                        <div class="admission_calender_listing_right">
                                            <div class="admission_calender_listing_right_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/calendar.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_right_heading">05<sup>th</sup> & 07<sup>th</sup> March 2027</div>
                                        </div>
                                    </div>
                                    <div class="admission_calender_listing">
                                        <div class="admission_calender_listing_left">
                                            <div class="admission_calender_listing_left_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/document.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_left_heading">Declaration of  Merit List </div>
                                        </div>
                                        <div class="admission_calender_listing_right">
                                            <div class="admission_calender_listing_right_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/calendar-gray.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_right_heading">12<sup>th</sup> March 2027</div>
                                        </div>
                                    </div>
                                    <div class="admission_calender_listing">
                                        <div class="admission_calender_listing_left">
                                            <div class="admission_calender_listing_left_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/rupee.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_left_heading">Last Date for Payment of Fees for Merit List</div>
                                        </div>
                                        <div class="admission_calender_listing_right">
                                            <div class="admission_calender_listing_right_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/calendar.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_right_heading">27<sup>th</sup> March 2027</div>
                                        </div>
                                    </div>
                                    <div class="admission_calender_listing">
                                        <div class="admission_calender_listing_left">
                                            <div class="admission_calender_listing_left_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/graduate.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_left_heading">Programme Commencement</div>
                                        </div>
                                        <div class="admission_calender_listing_right">
                                            <div class="admission_calender_listing_right_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/calendar-gray.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="admission_calender_listing_right_heading">23<sup>rd</sup> July 2027</div>
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