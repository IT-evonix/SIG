@extends('layouts.app')

@section('title', 'Best College for Geoinformatics & MSc Data Science in India - SIG')

@section('description', 'SIG is among the best Geoinformatics & MSc Data Science colleges in India. Explore
industry-focused courses and build a future-ready career. Apply now!')

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
                        <h1 class="inner_banner_heading">Student <span>Corner</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Student Corner</li>
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
                                <img src="{{ asset('assets/images/student-corner/img-01.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Learning Management System</h2>
                                <div class="student_corner_btn">
                                    <a href="https://lms.sig.ac.in/homepage/login.php" target="_blank">
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
                                <img src="{{ asset('assets/images/student-corner/img-02.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Examination Portal</h2>
                                <div class="student_corner_btn">
                                    <a href=" http://eduwiz.intechsolutionspune.in/eduwiz/login.html" target="_blank">
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
                                <img src="{{ asset('assets/images/student-corner/img-03.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Eligibility Portal</h2>
                                <div class="student_corner_btn">
                                    <a href="https://eligibility.ishinfo.com/EligibilityPortal/Login.aspx" target="_blank">
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
                                <img src="{{ asset('assets/images/student-corner/img-04.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Scholarship</h2>
                                <div class="student_corner_btn">
                                    <a href="{{ route('pages.comming-soon') }}">
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
                                <img src="{{ asset('assets/images/student-corner/img-05.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Hostel Facilities</h2>
                                <div class="student_corner_btn">
                                    <a href="{{ route('pages.student-corner.hostelandamenities') }}">
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
                                <img src="{{ asset('assets/images/student-corner/img-06.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Library Portal</h2>
                                <div class="student_corner_btn">
                                    <a href="https://elibrary.siu.edu.in/user/login" target="_blank">
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
                                <img src="{{ asset('assets/images/student-corner/img-07.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Student Uniform</h2>
                                <div class="student_corner_btn">
                                    <a href="https://symbiuniforms.com/" target="_blank">
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
                    <div class="student_corner_devider"></div>
                    <div class="student_corner_mainbox">
                        <div class="student_corner_listing">
                            <div class="student_corner_imgbox">
                                <img src="{{ asset('assets/images/student-corner/img-08.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">AI Club</h2>
                                <div class="student_corner_btn">
                                    <a href="{{ route('pages.student-corner.ai-club') }}">
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
                                <img src="{{ asset('assets/images/student-corner/img-09.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">SIG committee</h2>
                                <div class="student_corner_btn">
                                    <a href="{{ route('pages.student-corner.sig-commitee') }}">
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
                    <div class="student_corner_devider"></div>
                    <div class="student_corner_mainbox">
                        <div class="student_corner_listing">
                            <div class="student_corner_imgbox">
                                <img src="{{ asset('assets/images/student-corner/img-10.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="student_corner_content">
                                <h2 class="student_corner_heading">Achievements</h2>
                                <div class="student_corner_btn">
                                    <a href="{{ route('pages.student-corner.achievements') }}">
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