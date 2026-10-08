@extends('layouts.app')

@section('title', 'Geoinformatics courses in India | SIG Pune | Placements at SIG')

@section('description', 'Discover placement stats, procedures, and guidelines at SIG. Enhance your prospects for
placement opportunities. Get more details here.')

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
                        <h1 class="inner_banner_heading">Our <span>Recruiters</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Placements</li>
                                <li class="breadcrumb-item active" aria-current="page">Our Recruiters</li>
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

<main class="placement_main one_liner_heading">
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
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">Placements at SIG</h3>
                            @include('components.placements-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="recruiters_wrapper">
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/1.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/2.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/3.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/4.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/5.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/6.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/7.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/8.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/9.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/10.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/11.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/12.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/13.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/14.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/15.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/16.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/17.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/18.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/19.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/20.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/21.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/22.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/23.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/24.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/25.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/26.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/27.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/28.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/29.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/30.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/31.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/32.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/33.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/34.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/35.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/36.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/37.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/38.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/39.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/40.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/41.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/42.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/43.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/44.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/45.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/46.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/47.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/48.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/49.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/50.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/51.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/52.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/53.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/54.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/55.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/56.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/57.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/58.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/59.webp') }}" alt="Recruiters Logo" class="img-fluid">
                                </div>
                                <div class="recruiters_listing">
                                    <img src="{{ asset('assets/images/recruiters/logos/60.webp') }}" alt="Recruiters Logo" class="img-fluid">
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