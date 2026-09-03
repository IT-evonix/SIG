@extends('layouts.app')

@section('title', 'Faculty | Symbiosis Institute of Geoinformatics')

@section('description', 'Explore the faculty profiles of SIG to uncover the expertise & achievements of our esteemed
members, showcasing their academic backgrounds & research contributions.')

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
                        <h1 class="inner_banner_heading"><span>Faculty</span> Profiles</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Faculty Profiles</li>
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

<main class="faculty_profile_main">
    <section class="faculty_profile_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faculty_profile_mainbox">
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-01.webp') }}" alt="" class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Prof. (Dr.) T.P. Singh</h3>
                                    <div class="faculty_designation">Professor & Director</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">PhD., M.Phil. (Engg.), M.Sc.,MS (Paris University
                                        VI)</div>
                                    <a href="mailto:" class="faculty_email">
                                        <div class="faculty_email_icon">
                                            <svg width="20" height="20" x="0" y="0" viewBox="0 0 100 100">
                                                <g>
                                                    <path
                                                        d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                        fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="faculty_email_mail">director@sig.ac.in</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-02.webp') }}" alt="" class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Dr. Vidya Sandeep Patkar</h3>
                                    <div class="faculty_designation">Associate Professor & Deputy Director</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">MCA, MCM, PhD, MDHEA</div>
                                    <a href="mailto:" class="faculty_email">
                                        <div class="faculty_email_icon">
                                            <svg width="20" height="20" x="0" y="0" viewBox="0 0 100 100">
                                                <g>
                                                    <path
                                                        d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                        fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="faculty_email_mail">deputydirector@sig.ac.in</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-03.webp') }}" alt="" class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Dr. Dharmaveer Singh</h3>
                                    <div class="faculty_designation">Associate Professor & Head of Department ( Geoinformatics )</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">M.Sc., CSIR JRF (NET), Ph.D., Post-Doctoral Fellow at IIRES (Yunnan University)</div>
                                    <a href="mailto:dharmaveer@sig.ac.in" class="faculty_email">
                                        <div class="faculty_email_icon">
                                            <svg width="20" height="20" x="0" y="0" viewBox="0 0 100 100">
                                                <g>
                                                    <path
                                                        d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                        fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="faculty_email_mail">dharmaveer@sig.ac.in</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-04.webp') }}" alt="" class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Dr. Navendu A. Chaudhary</h3>
                                    <div class="faculty_designation">Professor, (M.Tech.)</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">MSc, MS, PhD, (Cincinnati , USA)</div>
                                    <a href="mailto:navendu@sig.ac.in" class="faculty_email">
                                        <div class="faculty_email_icon">
                                            <svg width="20" height="20" x="0" y="0" viewBox="0 0 100 100">
                                                <g>
                                                    <path
                                                        d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                        fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="faculty_email_mail">navendu@sig.ac.in</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-05.webp') }}" alt="" class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Dr. Sandipan Das</h3>
                                    <div class="faculty_designation">Assistant Professor</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">M.Sc., UGC-NET, Ph.D.</div>
                                    <a href="mailto:sandipan@sig.ac.in" class="faculty_email">
                                        <div class="faculty_email_icon">
                                            <svg width="20" height="20" x="0" y="0" viewBox="0 0 100 100">
                                                <g>
                                                    <path
                                                        d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                        fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="faculty_email_mail">sandipan@sig.ac.in</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-06.webp') }}" alt="" class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Dr. Rajesh K. Dhumal</h3>
                                    <div class="faculty_designation">Assistant Professor (Computer Science)</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">M.Sc., M.Phil., Ph.D., UGC-NET, SET</div>
                                    <a href="mailto:rajesh@sig.ac.in" class="faculty_email">
                                        <div class="faculty_email_icon">
                                            <svg width="20" height="20" x="0" y="0" viewBox="0 0 100 100">
                                                <g>
                                                    <path
                                                        d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                        fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="faculty_email_mail">rajesh@sig.ac.in</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-07.webp') }}" alt="" class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Sahil K. Shah</h3>
                                    <div class="faculty_designation">Assistant Professor</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">B.E., M.E., GATE (Computer Science & Engg.)</div>
                                    <a href="mailto:sahil@sig.ac.in" class="faculty_email">
                                        <div class="faculty_email_icon">
                                            <svg width="20" height="20" x="0" y="0" viewBox="0 0 100 100">
                                                <g>
                                                    <path
                                                        d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                        fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="faculty_email_mail">sahil@sig.ac.in</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-08.webp') }}" alt="" class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Dr. Veena Parihar</h3>
                                    <div class="faculty_designation">Assistant Professor & Head of Department (Data Science & Spatial Analytics)</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">B.Tech., M.Tech., Ph.D.</div>
                                    <a href="mailto:veena.parihar@sig.ac.in" class="faculty_email">
                                        <div class="faculty_email_icon">
                                            <svg width="20" height="20" x="0" y="0" viewBox="0 0 100 100">
                                                <g>
                                                    <path
                                                        d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                        fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="faculty_email_mail">veena.parihar@sig.ac.in</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-09.webp') }}" alt="" class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Neeta S. Nandgude</h3>
                                    <div class="faculty_designation">Assistant Professor</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">M.Sc. Computer Science, UGC-NET (Computer Science and Applications), SET (Computer Science and Application)</div>
                                    <a href="mailto:neeta@sig.ac.in" class="faculty_email">
                                        <div class="faculty_email_icon">
                                            <svg width="20" height="20" x="0" y="0" viewBox="0 0 100 100">
                                                <g>
                                                    <path
                                                        d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                        fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="faculty_email_mail">neeta@sig.ac.in</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-10.webp') }}" alt="" class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Dr. Gauri Deshpande</h3>
                                    <div class="faculty_designation">Assistant Professor</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">M.Sc. (Geoinformatics), UGC-NET, Ph.D. (Urban hydrology)</div>
                                    <a href="mailto:gauri.deshpande@sig.ac.in" class="faculty_email">
                                        <div class="faculty_email_icon">
                                            <svg width="20" height="20" x="0" y="0" viewBox="0 0 100 100">
                                                <g>
                                                    <path
                                                        d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                        fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="faculty_email_mail">gauri.deshpande@sig.ac.in</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-11.webp') }}" alt="" class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Mr. Atul Jadhav</h3>
                                    <div class="faculty_designation">Teaching Associate</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">MSc (Artificial Intelligence & Machine Learning)</div>
                                    <a href="mailto:atul@sig.ac.in" class="faculty_email">
                                        <div class="faculty_email_icon">
                                            <svg width="20" height="20" x="0" y="0" viewBox="0 0 100 100">
                                                <g>
                                                    <path
                                                        d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                        fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="faculty_email_mail">atul@sig.ac.in</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-12.webp') }}" alt="" class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Monali B. Jadhav</h3>
                                    <div class="faculty_designation">Teaching Associate</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">M.Phil. (Computer Science), M.sc (Information Technology)</div>
                                    <a href="mailto:monali@sig.ac.in" class="faculty_email">
                                        <div class="faculty_email_icon">
                                            <svg width="20" height="20" x="0" y="0" viewBox="0 0 100 100">
                                                <g>
                                                    <path
                                                        d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                        fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="faculty_email_mail">monali@sig.ac.in</div>
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