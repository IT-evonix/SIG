@extends('layouts.app')

@section('title', 'Faculty | Symbiosis Institute of Geoinformatics')

@section('description', 'Explore the faculty profiles of SIG to uncover the expertise & achievements of our esteemed
members, showcasing their academic backgrounds & research contributions.')

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
                        <div class="faculty_card" data-bs-toggle="modal" data-bs-target="#faculty_01">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-01.webp') }}" alt=""
                                    class="img-fluid">
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
                        <div class="faculty_card" data-bs-toggle="modal" data-bs-target="#faculty_02">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-02.webp') }}" alt=""
                                    class="img-fluid">
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
                        <div class="faculty_card" data-bs-toggle="modal" data-bs-target="#faculty_03">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-03.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Dr. Dharmaveer Singh</h3>
                                    <div class="faculty_designation">Associate Professor & Head of Department (
                                        Geoinformatics )</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">M.Sc., CSIR JRF (NET), Ph.D., Post-Doctoral
                                        Fellow at IIRES (Yunnan University)</div>
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
                        <div class="faculty_card" data-bs-toggle="modal" data-bs-target="#faculty_04">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-04.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Dr. Navendu A. Chaudhary</h3>
                                    <div class="faculty_designation">Professor</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">M.Tech., MSc, MS, PhD, (Cincinnati , USA)</div>
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
                        <div class="faculty_card" data-bs-toggle="modal" data-bs-target="#faculty_05">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-05.webp') }}" alt=""
                                    class="img-fluid">
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
                        <div class="faculty_card" data-bs-toggle="modal" data-bs-target="#faculty_06">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-06.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Dr. Rajesh K. Dhumal</h3>
                                    <div class="faculty_designation">Assistant Professor, Head Examination</div>
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
                        <div class="faculty_card" data-bs-toggle="modal" data-bs-target="#faculty_07">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-07.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Dr. Veena Parihar</h3>
                                    <div class="faculty_designation">Assistant Professor & Head of Department (Data
                                        Science & Spatial Analytics)</div>
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
                        <div class="faculty_card" data-bs-toggle="modal" data-bs-target="#faculty_08">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-08.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Neeta S. Nandgude</h3>
                                    <div class="faculty_designation">Assistant Professor</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">M.Sc. Computer Science, UGC-NET (Computer Science
                                        and Applications), SET (Computer Science and Application)</div>
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
                        <div class="faculty_card" data-bs-toggle="modal" data-bs-target="#faculty_09">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-09.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Dr. Gauri Deshpande</h3>
                                    <div class="faculty_designation">Assistant Professor</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">M.Sc. (Geoinformatics), UGC-NET, Ph.D. (Urban
                                        hydrology)</div>
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
                        <div class="faculty_card" data-bs-toggle="modal" data-bs-target="#faculty_10">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-10.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Mr. Atul Jadhav</h3>
                                    <div class="faculty_designation">Teaching Associate</div>
                                </div>
                                <div class="faculty_info_box">
                                    <div class="faculty_qualification">MSc (Artificial Intelligence & Machine Learning)
                                    </div>
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
                        <div class="faculty_card" data-bs-toggle="modal" data-bs-target="#faculty_11">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/faculty/faculty-11.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Ms. Riya Mukharjee</h3>
                                    <div class="faculty_designation">Research assistant</div>
                                </div>
                                <!-- <div class="faculty_info_box">
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
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="faculty_popup_mainbox">
        <!-- Modal 1-->
        <div class="top_header_popup">
            <div class="modal fade top_header_popup_modal" id="faculty_01" tabindex="-1"
                aria-labelledby="topHeaderModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content top_header_popup_content">
                        <!-- Modal Header -->
                        <div class="top_header_popup_header">
                            <div class="top_header_popup_heading">
                                Prof. (Dr.) T.P. Singh
                            </div>
                            <button type="button" class="top_header_popup_close" data-bs-dismiss="modal"
                                aria-label="Close">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    aria-hidden="true">
                                    <path d="m18 6-12 12" />
                                    <path d="m6 6 12 12" />
                                </svg>

                            </button>
                        </div>

                        <div class="top_header_popup_body">
                            <div class="faculty_popup_wrapper">
                                <div class="faculty_popup_firstbox">
                                    <h3 class="faculty_popup_heading">Research Interests & Expertise</h3>
                                    <div class="faculty_popup_firstbox_mainbox">
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Broad areas</h4>
                                            <ul class="custom_listing">
                                                <li>Geo intelligence</li>
                                                <li>Climate Change</li>
                                                <li>Natural Resource Management</li>
                                            </ul>
                                        </div>
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Specific areas</h4>
                                            <ul class="custom_listing">
                                                <li>Drought Assessment & Predication</li>
                                                <li>Climate Change & Vegetation</li>
                                                <li>Algorithm development</li>
                                                <li>Object abstraction</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="faculty_popup_secondbox">
                                    <h3 class="faculty_popup_heading">Research Profiles</h3>
                                    <div class="faculty_popup_secondbox_wrapper">
                                        <a href="https://scholar.google.com/citations?hl=en&user=IVeDeYkAAAAJ" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Google Scholar</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://orcid.org/0000-0002-9375-3495" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ORCID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="webofscience.com/wos/author/rid/GLQ-7008-2022" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ResearcherID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://vidwan.inflibnet.ac.in/profile/277383" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Vidwan</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.linkedin.com/in/prof-dr-t-p-singh-5b12959/" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">LinkedIn</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
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
        <!-- Modal 2-->
        <div class="top_header_popup"> 
            <div class="modal fade top_header_popup_modal" id="faculty_02" tabindex="-1"
                aria-labelledby="topHeaderModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content top_header_popup_content">
                        <!-- Modal Header -->
                        <div class="top_header_popup_header">
                            <div class="top_header_popup_heading">
                                Dr. Vidya Sandeep Patkar (Kumbhar)
                            </div>
                            <button type="button" class="top_header_popup_close" data-bs-dismiss="modal"
                                aria-label="Close">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    aria-hidden="true">
                                    <path d="m18 6-12 12" />
                                    <path d="m6 6 12 12" />
                                </svg>

                            </button>
                        </div>

                        <div class="top_header_popup_body">
                            <div class="faculty_popup_wrapper">
                                <div class="faculty_popup_firstbox">
                                    <h3 class="faculty_popup_heading">Research Interests & Expertise</h3>
                                    <div class="faculty_popup_firstbox_mainbox">
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Broad areas</h4>
                                            <ul class="custom_listing">
                                                <li>Artificial Intelligence</li>
                                                <li>Data Science</li>
                                                <li>Programming</li>
                                                <li>Geospatial Database</li>
                                                <li>Management System</li>
                                                <li>Geospatial Intelligence</li>
                                            </ul>
                                        </div>
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Specific areas</h4>
                                            <ul class="custom_listing">
                                                <li>Agroinformatics</li>
                                                <li>Crop Yield Improvement</li>
                                                <li>Drought Monitoring and prediction</li>
                                                <li>Climate Change and its impact</li>
                                                <li>Education Data Mining</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="faculty_popup_secondbox">
                                    <h3 class="faculty_popup_heading">Research Profiles</h3>
                                    <div class="faculty_popup_secondbox_wrapper">
                                        <a href="https://scholar.google.co.in/citations?user=Yasl3BIAAAAJ&amp;hl=en" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Google Scholar</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="http://orcid.org/0000-0002-2559-9641" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ORCID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.webofscience.com/wos/author/record/AGC-3838-2022" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ResearcherID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.scopus.com/authid/detail.uri?authorId=57192256152" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Scopus ID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://vidwan.inflibnet.ac.in/profile/276669" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Vidwan</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.linkedin.com/in/dr-vidya-kumbhar-patkar-02048a20/" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">LinkedIn</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
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
        <!-- Modal 3-->
        <div class="top_header_popup"> 
            <div class="modal fade top_header_popup_modal" id="faculty_03" tabindex="-1"
                aria-labelledby="topHeaderModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content top_header_popup_content">
                        <!-- Modal Header -->
                        <div class="top_header_popup_header">
                            <div class="top_header_popup_heading">
                                Dr. Dharmaveer Singh
                            </div>
                            <button type="button" class="top_header_popup_close" data-bs-dismiss="modal"
                                aria-label="Close">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    aria-hidden="true">
                                    <path d="m18 6-12 12" />
                                    <path d="m6 6 12 12" />
                                </svg>

                            </button>
                        </div>

                        <div class="top_header_popup_body">
                            <div class="faculty_popup_wrapper">
                                <div class="faculty_popup_firstbox">
                                    <h3 class="faculty_popup_heading">Research Interests & Expertise</h3>
                                    <div class="faculty_popup_firstbox_mainbox">
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Broad areas</h4>
                                            <ul class="custom_listing">
                                                <li>Water Resources Management</li>
                                                <li>Climate Change & Modelling</li>
                                                <li>Water Security & Economics</li>
                                            </ul>
                                        </div>
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Specific areas</h4>
                                            <ul class="custom_listing">
                                                <li>AI/ML in Water Resources Management</li>
                                                <li>AI/ML in Climate Change & Modelling</li>
                                                <li>Isotope Hydrology</li>
                                                <li>Earth Observations in Cryospheric Studies</li>
                                                <li>Surface and ground water dynamics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="faculty_popup_secondbox">
                                    <h3 class="faculty_popup_heading">Research Profiles</h3>
                                    <div class="faculty_popup_secondbox_wrapper">
                                        <a href="https://scholar.google.com/citations?user=K7iVhzMAAAAJ&amp;hl=en" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Google Scholar</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://orcid.org/0000-0002-0017-2764" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ORCID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.researchgate.net/profile/Dharmaveer-Singh" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ResearcherID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.scopus.com/authid/detail.uri?authorId=56573203500" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Scopus ID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
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
        <!-- Modal 4-->
        <div class="top_header_popup"> 
            <div class="modal fade top_header_popup_modal" id="faculty_04" tabindex="-1"
                aria-labelledby="topHeaderModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content top_header_popup_content">
                        <!-- Modal Header -->
                        <div class="top_header_popup_header">
                            <div class="top_header_popup_heading">
                                Dr. Navendu A. Chaudhary
                            </div>
                            <button type="button" class="top_header_popup_close" data-bs-dismiss="modal"
                                aria-label="Close">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    aria-hidden="true">
                                    <path d="m18 6-12 12" />
                                    <path d="m6 6 12 12" />
                                </svg>

                            </button>
                        </div>

                        <div class="top_header_popup_body">
                            <div class="faculty_popup_wrapper">
                                <div class="faculty_popup_firstbox">
                                    <h3 class="faculty_popup_heading">Research Interests & Expertise</h3>
                                    <div class="faculty_popup_firstbox_mainbox">
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Broad areas</h4>
                                            <ul class="custom_listing">
                                                <li>Spatial Analysis</li>
                                                <li>Remote Sensing</li>
                                                <li>Geographic Information System</li>
                                            </ul>
                                        </div>
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Specific areas</h4>
                                            <ul class="custom_listing">
                                                <li>Water Resource Management</li>
                                                <li>Urban Studies</li>
                                                <li>Sustainable Development</li>
                                                <li>Climate Change Mitigation Strategies</li>
                                                <li>Public Health GIS</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="faculty_popup_secondbox">
                                    <h3 class="faculty_popup_heading">Research Profiles</h3>
                                    <div class="faculty_popup_secondbox_wrapper">
                                        <a href="https://scholar.google.co.in/citations?user=d5MUOU0AAAAJ&amp;hl=en" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Google Scholar</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://orcid.org/0000-0001-7259-8564" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ORCID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.webofscience.com/wos/author/record/1891829" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ResearcherID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://vidwan.inflibnet.ac.in/profile/276611" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Vidwan</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.scopus.com/authid/detail.uri?authorId=7006949849" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Scopus</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.linkedin.com/in/prof-dr-navendu-a-chaudhary-frgs-a556684/" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">LinkedIn</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
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
        <!-- Modal 5-->
        <div class="top_header_popup"> 
            <div class="modal fade top_header_popup_modal" id="faculty_05" tabindex="-1"
                aria-labelledby="topHeaderModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content top_header_popup_content">
                        <!-- Modal Header -->
                        <div class="top_header_popup_header">
                            <div class="top_header_popup_heading">
                                Dr. Sandipan Das
                            </div>
                            <button type="button" class="top_header_popup_close" data-bs-dismiss="modal"
                                aria-label="Close">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    aria-hidden="true">
                                    <path d="m18 6-12 12" />
                                    <path d="m6 6 12 12" />
                                </svg>

                            </button>
                        </div>

                        <div class="top_header_popup_body">
                            <div class="faculty_popup_wrapper">
                                <div class="faculty_popup_firstbox">
                                    <h3 class="faculty_popup_heading">Research Interests & Expertise</h3>
                                    <div class="faculty_popup_firstbox_mainbox">
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Broad areas</h4>
                                            <ul class="custom_listing">
                                                <li>Vegetation dynamics</li>
                                                <li>Geospatial Modeling</li>
                                                <li>Water Resource Management</li>
                                                <li>Climate Change</li>
                                            </ul>
                                        </div>
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Specific areas</h4>
                                            <ul class="custom_listing">
                                                <li>Forest biomass and carbon assessment</li>
                                                <li>Groundwater mapping</li>
                                                <li>Drought monitoring</li>
                                                <li>Geographical Information System (GIS)</li>
                                                <li>Landuse Modelling</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="faculty_popup_secondbox">
                                    <h3 class="faculty_popup_heading">Research Profiles</h3>
                                    <div class="faculty_popup_secondbox_wrapper">
                                        <a href="https://scholar.google.com/citations?user=P0Y6NQ4AAAAJ&amp;hl=en" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Google Scholar</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://orcid.org/0000-0002-8474-2321" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ORCID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.webofscience.com/wos/author/record/V-4574-2017" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ResearcherID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.scopus.com/authid/detail.uri?authorId=57188557825" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Scopus ID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://vidwan.inflibnet.ac.in/profile/274874" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Vidwan</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.linkedin.com/in/dr-sandipan-das-71773617/" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">LinkedIn</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
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
        <!-- Modal 6-->
        <div class="top_header_popup"> 
            <div class="modal fade top_header_popup_modal" id="faculty_06" tabindex="-1"
                aria-labelledby="topHeaderModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content top_header_popup_content">
                        <!-- Modal Header -->
                        <div class="top_header_popup_header">
                            <div class="top_header_popup_heading">
                                Dr. Rajesh K. Dhumal
                            </div>
                            <button type="button" class="top_header_popup_close" data-bs-dismiss="modal"
                                aria-label="Close">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    aria-hidden="true">
                                    <path d="m18 6-12 12" />
                                    <path d="m6 6 12 12" />
                                </svg>

                            </button>
                        </div>

                        <div class="top_header_popup_body">
                            <div class="faculty_popup_wrapper">
                                <div class="faculty_popup_firstbox">
                                    <h3 class="faculty_popup_heading">Research Interests & Expertise</h3>
                                    <div class="faculty_popup_firstbox_mainbox">
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Broad areas</h4>
                                            <ul class="custom_listing">
                                                <li>Geospatial Technology</li>
                                                <li>Artificial Intelligence</li>
                                                <li>Machine Learning</li>
                                                <li>Data Science</li>
                                                <li>Digital Image Processing</li>
                                            </ul>
                                        </div>
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Specific areas</h4>
                                            <ul class="custom_listing">
                                                <li>Multispectral, Hyperspectral Image Processing</li>
                                                <li>Spatial Data Mining</li>
                                                <li>Geospatial Data processing</li>
                                                <li>Geospatial Technology for Agriculture applications</li>
                                                <li>Pattern Recognition</li>
                                                <li>Internet of Things</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="faculty_popup_secondbox">
                                    <h3 class="faculty_popup_heading">Research Profiles</h3>
                                    <div class="faculty_popup_secondbox_wrapper">
                                        <a href="https://scholar.google.co.in/citations?user=t1re6BsAAAAJ&amp;hl=en" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Google Scholar</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://orcid.org/0000-0002-7008-7442" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ORCID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.webofscience.com/wos/author/record/AGE-9678-2022" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ResearcherID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://vidwan.inflibnet.ac.in/profile/276621" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Vidwan</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://in.linkedin.com/in/dr-rajesh-dhumal-27450a1a" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">LinkedIn</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
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
        <!-- Modal 7-->
        <div class="top_header_popup"> 
            <div class="modal fade top_header_popup_modal" id="faculty_07" tabindex="-1"
                aria-labelledby="topHeaderModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content top_header_popup_content">
                        <!-- Modal Header -->
                        <div class="top_header_popup_header">
                            <div class="top_header_popup_heading">
                                Dr. Veena Parihar
                            </div>
                            <button type="button" class="top_header_popup_close" data-bs-dismiss="modal"
                                aria-label="Close">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    aria-hidden="true">
                                    <path d="m18 6-12 12" />
                                    <path d="m6 6 12 12" />
                                </svg>

                            </button>
                        </div>

                        <div class="top_header_popup_body">
                            <div class="faculty_popup_wrapper">
                                <div class="faculty_popup_firstbox">
                                    <h3 class="faculty_popup_heading">Research Interests & Expertise</h3>
                                    <div class="faculty_popup_firstbox_mainbox">
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Broad areas</h4>
                                            <ul class="custom_listing">
                                                <li>Artificial Intelligence</li>
                                                <li>Machine Learning</li>
                                                <li>Data Science</li>
                                            </ul>
                                        </div>
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Specific areas</h4>
                                            <ul class="custom_listing">
                                                <li>Recommendation system</li>
                                                <li>Personality classification</li>
                                                <li>Healthcare</li>
                                                <li>Blockchain</li>
                                                <li>Internet of Things</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="faculty_popup_secondbox">
                                    <h3 class="faculty_popup_heading">Research Profiles</h3>
                                    <div class="faculty_popup_secondbox_wrapper">
                                        <a href="https://scholar.google.co.in/citations?user=0odi9BUAAAAJ&amp;hl=en" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Google Scholar</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://orcid.org/0000-0002-8703-5761" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ORCID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.webofscience.com/wos/author/record/AGE-9678-2022" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ResearcherID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://vidwan.inflibnet.ac.in/profile/450810" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Vidwan</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.scopus.com/authid/detail.uri?authorId=58258347100" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Scopus ID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.linkedin.com/in/veena-parihar-b2370959/" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">LinkedIn</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
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
        <!-- Modal 8-->
        <div class="top_header_popup"> 
            <div class="modal fade top_header_popup_modal" id="faculty_08" tabindex="-1"
                aria-labelledby="topHeaderModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content top_header_popup_content">
                        <!-- Modal Header -->
                        <div class="top_header_popup_header">
                            <div class="top_header_popup_heading">
                                Neeta S. Nandgude
                            </div>
                            <button type="button" class="top_header_popup_close" data-bs-dismiss="modal"
                                aria-label="Close">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    aria-hidden="true">
                                    <path d="m18 6-12 12" />
                                    <path d="m6 6 12 12" />
                                </svg>

                            </button>
                        </div>

                        <div class="top_header_popup_body">
                            <div class="faculty_popup_wrapper">
                                <div class="faculty_popup_firstbox">
                                    <h3 class="faculty_popup_heading">Research Interests & Expertise</h3>
                                    <div class="faculty_popup_firstbox_mainbox">
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Broad areas</h4>
                                            <ul class="custom_listing">
                                                <li>Machine Learning</li>
                                                <li>Deep Learning</li>
                                                <li>Geo Intelligence</li>
                                            </ul>
                                        </div>
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Specific areas</h4>
                                            <ul class="custom_listing">
                                                <li>Decision Support Systems for Precision Agriculture</li>
                                                <li>Drought Prediction</li>
                                                <li>Image Processing</li>
                                                <li>Data Structures and Algorithms</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="faculty_popup_secondbox">
                                    <h3 class="faculty_popup_heading">Research Profiles</h3>
                                    <div class="faculty_popup_secondbox_wrapper">
                                        <a href="https://vidwan.inflibnet.ac.in/myprofile" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Vidwan</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
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
        <!-- Modal 9-->
        <div class="top_header_popup"> 
            <div class="modal fade top_header_popup_modal" id="faculty_09" tabindex="-1"
                aria-labelledby="topHeaderModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content top_header_popup_content">
                        <!-- Modal Header -->
                        <div class="top_header_popup_header">
                            <div class="top_header_popup_heading">
                                Dr. Gauri Deshpande
                            </div>
                            <button type="button" class="top_header_popup_close" data-bs-dismiss="modal"
                                aria-label="Close">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    aria-hidden="true">
                                    <path d="m18 6-12 12" />
                                    <path d="m6 6 12 12" />
                                </svg>

                            </button>
                        </div>

                        <div class="top_header_popup_body">
                            <div class="faculty_popup_wrapper">
                                <div class="faculty_popup_firstbox">
                                    <h3 class="faculty_popup_heading">Research Interests & Expertise</h3>
                                    <div class="faculty_popup_firstbox_mainbox">
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Broad areas</h4>
                                            <ul class="custom_listing">
                                                <li>Geographic Information system</li>
                                                <li>Remote sensing</li>
                                                <li>Photogrammetry</li>
                                                <li>Geomorphology</li>
                                            </ul>
                                        </div>
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Specific areas</h4>
                                            <ul class="custom_listing">
                                                <li>Urban planning studies</li>
                                                <li>Water Resource Management</li>
                                                <li>LIDAR and DEM generation</li>
                                                <li>Coastal Geomorphology</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="faculty_popup_secondbox">
                                    <h3 class="faculty_popup_heading">Research Profiles</h3>
                                    <div class="faculty_popup_secondbox_wrapper">
                                        <a href="https://scholar.google.com/citations?user=j9c5WIEAAAAJ&amp;hl=en" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Google Scholar</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.researchgate.net/profile/Gauri-Deshpande-7" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Researchgate</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="https://www.linkedin.com/in/dr-gauri-deshpande-06773b15?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BhKp6ph25RuaZGMyIFc2ENA%3D%3D" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">LinkedIn</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
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
        <!-- Modal 10-->
        <div class="top_header_popup"> 
            <div class="modal fade top_header_popup_modal" id="faculty_10" tabindex="-1"
                aria-labelledby="topHeaderModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content top_header_popup_content">
                        <!-- Modal Header -->
                        <div class="top_header_popup_header">
                            <div class="top_header_popup_heading">
                                Mr. Atul Jadhav
                            </div>
                            <button type="button" class="top_header_popup_close" data-bs-dismiss="modal"
                                aria-label="Close">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    aria-hidden="true">
                                    <path d="m18 6-12 12" />
                                    <path d="m6 6 12 12" />
                                </svg>

                            </button>
                        </div>

                        <div class="top_header_popup_body">
                            <div class="faculty_popup_wrapper">
                                <div class="faculty_popup_firstbox">
                                    <h3 class="faculty_popup_heading">Research Interests & Expertise</h3>
                                    <div class="faculty_popup_firstbox_mainbox">
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Broad areas</h4>
                                            <ul class="custom_listing">
                                                <li>Biomedical Image Processing</li>
                                                <li>Computer Vision</li>
                                                <li>Machine Learning</li>
                                                <li>Data Analytics</li>
                                                <li>Generative AI</li>
                                            </ul>
                                        </div>
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Specific areas</h4>
                                            <ul class="custom_listing">
                                                <li>Healthcare</li>
                                                <li>IOT</li>
                                                <li>Iris Biometric</li>
                                                <li>Expert Systems</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="faculty_popup_secondbox">
                                    <h3 class="faculty_popup_heading">Research Profiles</h3>
                                    <div class="faculty_popup_secondbox_wrapper">
                                        <a href="http://www.linkedin.com/in/" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">LinkedIn</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
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
        <!-- Modal 11-->
        <div class="top_header_popup"> 
            <div class="modal fade top_header_popup_modal" id="faculty_11" tabindex="-1"
                aria-labelledby="topHeaderModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content top_header_popup_content">
                        <!-- Modal Header -->
                        <div class="top_header_popup_header">
                            <div class="top_header_popup_heading">
                                Ms. Riya Mukharjee
                            </div>
                            <button type="button" class="top_header_popup_close" data-bs-dismiss="modal"
                                aria-label="Close">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    aria-hidden="true">
                                    <path d="m18 6-12 12" />
                                    <path d="m6 6 12 12" />
                                </svg>

                            </button>
                        </div>

                        <div class="top_header_popup_body">
                            <!-- <div class="faculty_popup_wrapper">
                                <div class="faculty_popup_firstbox">
                                    <h3 class="faculty_popup_heading">Research Interests & Expertise</h3>
                                    <div class="faculty_popup_firstbox_mainbox">
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Broad areas</h4>
                                            <ul class="custom_listing">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                        <div class="faculty_popup_first_list">
                                            <h4 class="faculty_popup_subheading">Specific areas</h4>
                                            <ul class="custom_listing">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="faculty_popup_secondbox">
                                    <h3 class="faculty_popup_heading">Research Profiles</h3>
                                    <div class="faculty_popup_secondbox_wrapper">
                                        <a href="" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Google Scholar</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ORCID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">ResearcherID</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">Vidwan</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="" target="_blank" class="faculty_popup_secondbox_listing">
                                            <div class="faculty_popup_secondbox_text">LinkedIn</div>
                                            <div class="faculty_popup_secondbox_icon">
                                                <svg width="14" height="14" x="0" y="0" viewBox="0 0 24 24">
                                                    <g>
                                                        <path
                                                            d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                            fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                            <h4>Coming Soon...</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection