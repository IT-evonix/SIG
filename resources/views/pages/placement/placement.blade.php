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
                        <h1 class="inner_banner_heading">Placements at <span>SIG</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Placements</li>
                                <li class="breadcrumb-item active" aria-current="page">Overview</li>
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
                            <div class="placement_overview_mainbox">
                                <div class="placement_overview_listing">
                                    <div class="placement_overview_listing_img">
                                        <img src="{{ asset('assets/images/placement/placement-overview-01.webp') }}"
                                            alt="Placement Overview" class="img-fluid">
                                    </div>
                                    <div class="placement_overview_listing_conent">
                                        <div class="placement_overview_icon">
                                            <img src="{{ asset('assets/images/programmes/icon/group.svg') }}"
                                                alt="Placement Overview Icon" class="img-fluid">
                                        </div>
                                        <div class="placement_overview_devider"></div>
                                        <div class="placement_overview_para">
                                            <p class="m-0">
                                                At the Symbiosis Institute of Geoinformatics (SIG), placement support is
                                                an integral part of the student experience. The Placement Cell works
                                                closely with students, faculty, alumni and industry partners to create
                                                meaningful career opportunities across Geoinformatics, Data Science,
                                                Spatial Analytics and allied technology domains.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="placement_overview_listing">
                                    <div class="placement_overview_listing_img">
                                        <img src="{{ asset('assets/images/placement/placement-overview-02.webp') }}"
                                            alt="Placement Overview" class="img-fluid">
                                    </div>
                                    <div class="placement_overview_listing_conent">
                                        <div class="placement_overview_icon">
                                            <img src="{{ asset('assets/images/programmes/icon/growth.svg') }}"
                                                alt="Placement Overview Icon" class="img-fluid">
                                        </div>
                                        <div class="placement_overview_devider"></div>
                                        <div class="placement_overview_para">
                                            <p class="m-0">
                                                Our approach goes beyond facilitating campus recruitment. We focus on
                                                developing students' technical competencies, professional skills,
                                                industry awareness and interview readiness so that they are prepared to
                                                meet the evolving requirements of the workplace.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="placement_overview_listing">
                                    <div class="placement_overview_listing_img">
                                        <img src="{{ asset('assets/images/placement/placement-overview-03.webp') }}"
                                            alt="Placement Overview" class="img-fluid">
                                    </div>
                                    <div class="placement_overview_listing_conent">
                                        <div class="placement_overview_icon">
                                            <img src="{{ asset('assets/images/programmes/icon/handshake.svg') }}"
                                                alt="Placement Overview Icon" class="img-fluid">
                                        </div>
                                        <div class="placement_overview_devider"></div>
                                        <div class="placement_overview_para">
                                            <p class="m-0">
                                                The Placement Cell facilitates interaction between students and
                                                recruiters through campus recruitment drives, industry interactions,
                                                pre-placement talks, aptitude assessments, group discussions, technical
                                                interviews, HR interviews, internships and project opportunities.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="placement_overview_listing">
                                    <div class="placement_overview_listing_img">
                                        <img src="{{ asset('assets/images/placement/placement-overview-04.webp') }}"
                                            alt="Placement Overview" class="img-fluid">
                                    </div>
                                    <div class="placement_overview_listing_conent">
                                        <div class="placement_overview_icon">
                                            <img src="{{ asset('assets/images/programmes/icon/mission.svg') }}"
                                                alt="Placement Overview Icon" class="img-fluid">
                                        </div>
                                        <div class="placement_overview_devider"></div>
                                        <div class="placement_overview_para">
                                            <p class="m-0">
                                                Students are encouraged to actively participate in the placement
                                                preparation process and take ownership of their career development.
                                            </p>
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