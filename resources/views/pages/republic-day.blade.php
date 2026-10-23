@extends('layouts.app')

@section('title', 'Republic Day 2026 Celebration - SIG')

@section('description', 'Republic Day 2026 - SIG')

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
                        <h1 class="inner_banner_heading"><span>Republic Day</span> 2026</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('pages.student-corner.newsevents') }}">News & Events</a>
                                <li class="breadcrumb-item active" aria-current="page">Republic Day 2026</li>
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
    <section class="news_event_detail_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="news_event_detail_mainbox">
                        <div class="news_event_detail_firstbox">
                            <h2 class="inner_heading text-center">Republic Day 2026 Celebration - SIG</h2>
                            <div class="news_event_detail_wraper">
                                <div class="news_event_detail_listing">
                                    <img src="{{ asset('assets/images/news-event/republic-day.webp') }}" alt="Republic Day" class="img-fluid">
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