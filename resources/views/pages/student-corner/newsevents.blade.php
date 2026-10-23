@extends('layouts.app')

@section('title', 'Geoinformatics & Data Science - Latest News & Events - SIG')

@section('description', 'Stay updated with the latest NEWS & EVENTS at SIG. Get the latest updates, announcements, and
happenings in one place.')

@section('banner')
<div class="inner_banner_section">
    <div class="inner_banner_imgbox">
        <div class="banner_imgbox">
            <img src="{{ asset('assets/images/inner-banner.webp') }}" alt="Inner Banner Image"
                class="img-fluid inner_desktop_banner_image">
            <img src="{{ asset('assets/images/mobile-inner-banner.webp') }}" alt="Inner Banner Image"
                class="img-fluid inner_mobile_banner_image">
        </div>
    </div>
    <div class="inner_banner_overlay_box"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner_banner_mainbox">
                    <div class="inner_banner_headingbox">
                        <h1 class="inner_banner_heading">News & <span>Events</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News & Events</li>
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

<main class="student_corner_main one_liner_heading">
    <section class="news_event_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="news_event_mainbox">
                        <div class="news_event_firstbox">
                            <h2 class="inner_heading">Latest News & Events - SIG</h2>
                            <div class="pdf_card_wraper">
                                <div class="pdf_card_list">
                                    <div class="pdf_card_icon">
                                        <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                            class="img-fluid">
                                    </div>
                                    <div class="pdf_card_conent">
                                        <h3 class="pdf_card_heading">Successful Campus Drive at SIG By DoorDash</h3>
                                        <h4 class="pdf_card_subheading">17th-20th Aug 2026</h4>
                                        <a href="{{ asset('assets/pdf/news-and-events/DoorDash_Campus_Drive_News.pdf') }}"
                                            target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                            <div class="pdf_card_btn_name">Click Here</div>
                                            <div class="pdf_card_btn_icon">
                                                <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                    <path
                                                        d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                        fill="#000000" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="pdf_card_list">
                                    <div class="pdf_card_icon">
                                        <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                            class="img-fluid">
                                    </div>
                                    <div class="pdf_card_conent">
                                        <h3 class="pdf_card_heading">SIG Hosts Cognizant Nurture Partner Network (NPN) Geoinformatics Program</h3>
                                        <h4 class="pdf_card_subheading">6th-8th Aug 2026</h4>
                                        <a href="{{ asset('assets/pdf/news-and-events/Cognizant-NPN-2027.pdf') }}"
                                            target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                            <div class="pdf_card_btn_name">Click Here</div>
                                            <div class="pdf_card_btn_icon">
                                                <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                    <path
                                                        d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                        fill="#000000" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="pdf_card_list">
                                    <div class="pdf_card_icon">
                                        <img src="{{ asset('assets/images/programmes/icon/web.svg') }}" alt="Pdf Icon"
                                            class="img-fluid">
                                    </div>
                                    <div class="pdf_card_conent">
                                        <h3 class="pdf_card_heading">SIG’s M.Sc Geoinformatics & M.Sc Data Science & Spatial Analytics Programmes Gain Global Recognition Under QS Ranking (351–400)</h3>
                                        <!-- <h4 class="pdf_card_subheading">6th-8th Aug 2026</h4> -->
                                        <a href="https://www.topuniversities.com/universities/symbiosis-international-deemed-university/postgrad/master-science-geoinformatics#p2-rankings"
                                            target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                            <div class="pdf_card_btn_name">Click Here</div>
                                            <div class="pdf_card_btn_icon">
                                                <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                    <path
                                                        d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                        fill="#000000" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="pdf_card_list">
                                    <div class="pdf_card_icon">
                                        <img src="{{ asset('assets/images/programmes/icon/web.svg') }}" alt="Pdf Icon"
                                            class="img-fluid">
                                    </div>
                                    <div class="pdf_card_conent">
                                        <h3 class="pdf_card_heading">Republic Day 2026 Celebration - SIG</h3>
                                        <h4 class="pdf_card_subheading">2026-01-26</h4>
                                        <a href="{{ route('pages.republic-day') }}"
                                            rel="noopener noreferrer" class="pdf_card_btn">
                                            <div class="pdf_card_btn_name">Click Here</div>
                                            <div class="pdf_card_btn_icon">
                                                <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                    <path
                                                        d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                        fill="#000000" />
                                                </svg>
                                            </div>
                                        </a>
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