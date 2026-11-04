@extends('layouts.app')

@section('title', 'Geoinformatics courses in India | SIG Pune | Placements at SIG')

@section('description', 'Discover placement stats, procedures, and guidelines at SIG. Enhance your prospects for
placement opportunities. Get more details here.')

@section('banner')
<div class="inner_banner_section">
    <div class="inner_banner_imgbox">
        <div class="banner_imgbox">
            <img src="{{ asset('assets/images/inner-banner.webp') }}" alt="Inner Banner Image" class="img-fluid inner_desktop_banner_image">
            <img src="{{ asset('assets/images/mobile-inner-banner.webp') }}" alt="Inner Banner Image" class="img-fluid inner_mobile_banner_image">
        </div>
    </div>
    <div class="inner_banner_overlay_box"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner_banner_mainbox">
                    <div class="inner_banner_headingbox">
                        <h1 class="inner_banner_heading">Student <span>Success Stories</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Placements</li>
                                <li class="breadcrumb-item active" aria-current="page">Student Success Stories</li>
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
                        <div class="inner_menu_toggle" onclick="menu()">
                            <img src="{{ asset('assets/images/programmes/icon/menu.svg') }}" alt="Icon"
                                class="img-fluid">
                        </div>
                        <div class="inner_menu_overlay" onclick="menu()"></div>
                        <div class="inner_page_menu_box">
                            <div class="inner_menu_closebox" onclick="menu()">
                                <img src="{{ asset('assets/images/programmes/icon/close.svg') }}" alt="Icon"
                                    class="img-fluid">
                            </div>
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">Placements at SIG</h3>
                            @include('components.placements-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="student_success_storis_mainbox">
                                <div class="student_success_storis_listing">
                                    <div class="student_success_storis_image">
                                        <img src="{{ asset('assets/images/placement/success-story-01.webp') }}" alt=""
                                            class="img-fluid">
                                        <div class="student_success_storis_packagebox">
                                            <div class="student_success_storis_package_heading">Package</div>
                                            <div class="student_success_storis_package_devider"></div>
                                            <div class="student_success_storis_package">14 <span>LPA</span></div>
                                        </div>
                                        <a href="https://youtu.be/r_QehuhQGl4" class="youtube_btn_success_story" target="_blank">
                                            <div class="home_n_e_right_video_icon">
                                                <svg width="40" height="40" x="0" y="0" viewBox="0 0 512 512">
                                                    <g>
                                                        <circle cx="256.5" cy="256" r="256" fill="#FF0000"
                                                            transform="rotate(-45 256.472 256.066)"
                                                            data-original="#2497f3"></circle>
                                                        <path fill="#ffffff" fill-rule="evenodd"
                                                            d="m383.55 233.228-172.85-99.79a26.3 26.3 0 0 0-39.44 22.762v199.6a26.04 26.04 0 0 0 13.14 22.77 26.07 26.07 0 0 0 26.3 0l172.85-99.8a26.3 26.3 0 0 0 0-45.54z"
                                                            opacity="1" data-original="#ffffff"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>  
                                    </div>
                                    <div class="student_success_storis_content">
                                        <h3 class="student_success_storis_headingbox">Shravani Pawar</h3>
                                        <h4 class="student_success_storis_subheadingbox">M.Sc. Data Science & Spatial
                                            Analytics</h4>
                                        <div class="student_success_storis_wraper">
                                            <div class="student_success_storis_list">
                                                <div class="student_success_storis_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/briefcase.svg') }}"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="student_success_storis_para">
                                                    <h4 class="student_success_storis_para_heading">Role</h4>
                                                    <div class="student_success_storis_para_text">Data Professional
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="student_success_storis_list">
                                                <div class="student_success_storis_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/office.svg') }}"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="student_success_storis_para">
                                                    <h4 class="student_success_storis_para_heading">Selected At</h4>
                                                    <div class="student_success_storis_para_text">
                                                        Hindalco Industries
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="student_success_storis_listing">
                                    <div class="student_success_storis_image">
                                        <img src="{{ asset('assets/images/placement/success-story-02.webp') }}" alt=""
                                            class="img-fluid">
                                        <div class="student_success_storis_packagebox">
                                            <div class="student_success_storis_package_heading">Package</div>
                                            <div class="student_success_storis_package_devider"></div>
                                            <div class="student_success_storis_package">11.4 <span>LPA</span></div>
                                        </div>
                                        <a href="https://youtube.com/shorts/4nM-s22TsmY?feature=share" class="youtube_btn_success_story" target="_blank">
                                            <div class="home_n_e_right_video_icon">
                                                <svg width="40" height="40" x="0" y="0" viewBox="0 0 512 512">
                                                    <g>
                                                        <circle cx="256.5" cy="256" r="256" fill="#FF0000"
                                                            transform="rotate(-45 256.472 256.066)"
                                                            data-original="#2497f3"></circle>
                                                        <path fill="#ffffff" fill-rule="evenodd"
                                                            d="m383.55 233.228-172.85-99.79a26.3 26.3 0 0 0-39.44 22.762v199.6a26.04 26.04 0 0 0 13.14 22.77 26.07 26.07 0 0 0 26.3 0l172.85-99.8a26.3 26.3 0 0 0 0-45.54z"
                                                            opacity="1" data-original="#ffffff"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>                                          
                                    </div>
                                    <div class="student_success_storis_content">
                                        <h3 class="student_success_storis_headingbox">Ishita Bandopadhyay</h3>
                                        <h4 class="student_success_storis_subheadingbox">M.Sc. Geoinformatics</h4>
                                        <div class="student_success_storis_wraper">
                                            <div class="student_success_storis_list">
                                                <div class="student_success_storis_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/briefcase.svg') }}"
                                                        alt="Ishita Bandopadhyay" class="img-fluid">
                                                </div>
                                                <div class="student_success_storis_para">
                                                    <h4 class="student_success_storis_para_heading">Role</h4>
                                                    <div class="student_success_storis_para_text">Consultant</div>
                                                </div>
                                            </div>
                                            <div class="student_success_storis_list">
                                                <div class="student_success_storis_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/office.svg') }}"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="student_success_storis_para">
                                                    <h4 class="student_success_storis_para_heading">Selected At</h4>
                                                    <div class="student_success_storis_para_text">
                                                        Deloitte
                                                    </div>
                                                </div>
                                            </div>
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