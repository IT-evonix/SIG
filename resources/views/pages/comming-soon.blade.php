@extends('layouts.app')

@section('title', 'Best College for Geoinformatics & MSc Data Science in India - SIG')

@section('description', 'SIG is among the best Geoinformatics & MSc Data Science colleges in India. Explore
industry-focused courses and build a future-ready career. Apply now!')

@section('banner')
<div class="inner_banner_section comming_soon_mainbox">
    <div class="inner_banner_imgbox">
        <div class="banner_imgbox">
            <img src="{{ asset('assets/images/comming-soon-background.webp') }}" alt="Inner Banner Image" class="img-fluid inner_desktop_banner_image">
            <img src="{{ asset('assets/images/mobile-comming-soon-background.webp') }}" alt="Inner Banner Image" class="img-fluid inner_mobile_banner_image">
        </div>
    </div>
    <div class="inner_banner_overlay_box"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner_banner_mainbox">
                    <div class="inner_banner_headingbox">
                        <h1 class="inner_banner_heading">Coming <span>Soon</span></h1>
                        <div class="conning_soon_header_para">
                            We are working on this page will <br> be available soon. Stay tuned!
                        </div>
                        <div class="conning_soon_header_iconbox">
                            <div class="conning_soon_header_icon">
                                <img src="{{ asset('assets/images/programmes/icon/hourglass.svg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="conning_soon_header_name">We'll be here soon <br> with more updates.</div>
                        </div>
                    </div>
                    <div class="inner_banner_rightbox"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

@endsection