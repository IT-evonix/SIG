@extends('layouts.app')

@section('title', 'Social Initiative | Symbiosis Institute of Geoinformatic')

@section('description', 'As part of its social initiatives, SIG Pune students engaged in asset mapping at SUS Village to foster sustainable development.')

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
                        <h1 class="inner_banner_heading">Social <span>Initiative</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Social Initiative</li>
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
    <section class="student_corner_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="student_corner_mainbox">
                        <div class="student_corner_listing">
                            <div class="student_corner_imgbox">
                                <img src="{{ asset('assets/images/social-initiative/social-initiative-01.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Swachhta Hi Sewa</h2>
                                <div class="student_corner_btn">
                                    <a href="{{ asset('assets/pdf/social-initiative/Swachhta-Hi-Sewa-report.pdf') }}" target="_blank">
                                        <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="student_corner_listing">
                            <div class="student_corner_imgbox">
                                <img src="{{ asset('assets/images/social-initiative/social-initiative-03.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Constitution Day 2022</h2>
                                <div class="student_corner_btn">
                                    <a href="{{ asset('assets/pdf/social-initiative/SIG-Constitutional-day-report-2022.pdf') }}" target="_blank">
                                        <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="student_corner_listing">
                            <div class="student_corner_imgbox">
                                <img src="{{ asset('assets/images/social-initiative/social-initiative-02.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Aksharamaala Online Teaching</h2>
                                <div class="student_corner_btn">
                                    <a href="{{ asset('assets/pdf/social-initiative/Aksharamaala-online-teaching-report.pdf') }}" target="_blank">
                                        <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="student_corner_listing">
                            <div class="student_corner_imgbox">
                                <img src="{{ asset('assets/images/social-initiative/social-initiative-04.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Har Ghar Tiranga-Essay Writing</h2>
                                <div class="student_corner_btn">
                                    <a href="{{ asset('assets/pdf/social-initiative/Har-Ghar-Tiranga-Essay-Writing-Report.pdf') }}" target="_blank">
                                        <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="student_corner_listing">
                            <div class="student_corner_imgbox">
                                <img src="{{ asset('assets/images/social-initiative/social-initiative-05.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Matribhasha Diwas</h2>
                                <div class="student_corner_btn">
                                    <a href="{{ asset('assets/pdf/social-initiative/Matribhasha-Diwas-report-2022.pdf') }}" target="_blank">
                                        <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="student_corner_listing">
                            <div class="student_corner_imgbox">
                                <img src="{{ asset('assets/images/social-initiative/social-initiative-06.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Old Age Home Visit</h2>
                                <div class="student_corner_btn">
                                    <a href="{{ asset('assets/pdf/social-initiative/Old-Age-Home-visit-Report.pdf') }}" target="_blank">
                                        <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="student_corner_listing">
                            <div class="student_corner_imgbox">
                                <img src="{{ asset('assets/images/social-initiative/social-initiative-07.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Pariksha Pe Charcha</h2>
                                <div class="student_corner_btn">
                                    <a href="{{ asset('assets/pdf/social-initiative/Pariksha-Pe-Charcha-report.pdf') }}" target="_blank">
                                        <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="student_corner_listing">
                            <div class="student_corner_imgbox">
                                <img src="{{ asset('assets/images/social-initiative/social-initiative-03.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Constitutional day 2021</h2>
                                <div class="student_corner_btn">
                                    <a href="{{ asset('assets/pdf/social-initiative/Constitution-Day-Report-2021.pdf') }}" target="_blank">
                                        <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#ffffff" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </a>
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