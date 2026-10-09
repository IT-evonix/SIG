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
                        <div class="inner_page_menu_box">
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">Placements at SIG</h3>
                            @include('components.placements-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="student_success_storis_mainbox">
                                <div class="student_success_storis_listing">
                                    <div class="student_success_storis_image">
                                        <img src="{{ asset('assets/images/placement/success-story-01.webp') }}" alt="" class="img-fluid">
                                        <div class="student_success_storis_packagebox">
                                            <div class="student_success_storis_package_heading">Package</div>
                                            <div class="student_success_storis_package_devider"></div>
                                            <div class="student_success_storis_package">14 <span>LPA</span></div>
                                        </div>
                                    </div>
                                    <div class="student_success_storis_content">
                                        <h3 class="student_success_storis_headingbox">Shravani Pawar</h3>
                                        <h4 class="student_success_storis_subheadingbox">M.Sc. Data Science & Spatial Analytics</h4>
                                        <div class="student_success_storis_wraper">
                                            <div class="student_success_storis_list">
                                                <div class="student_success_storis_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/briefcase.svg') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="student_success_storis_para">
                                                    <h4 class="student_success_storis_para_heading">Role</h4>
                                                    <div class="student_success_storis_para_text">Data Professional</div>
                                                </div>
                                            </div>
                                            <div class="student_success_storis_list">
                                                <div class="student_success_storis_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/office.svg') }}" alt="" class="img-fluid">
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
                                        <img src="{{ asset('assets/images/placement/success-story-02.webp') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="student_success_storis_content">
                                        <h3 class="student_success_storis_headingbox">Ishita Bandopadhyay</h3>
                                        <h4 class="student_success_storis_subheadingbox">M.Sc. Geoinformatics</h4>
                                        <div class="student_success_storis_wraper">
                                            <div class="student_success_storis_list">
                                                <div class="student_success_storis_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/briefcase.svg') }}" alt="Ishita Bandopadhyay" class="img-fluid">
                                                </div>
                                                <div class="student_success_storis_para">
                                                    <h4 class="student_success_storis_para_heading">Role</h4>
                                                    <div class="student_success_storis_para_text">Consultant</div>
                                                </div>
                                            </div>
                                            <div class="student_success_storis_list">
                                                <div class="student_success_storis_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/office.svg') }}" alt="" class="img-fluid">
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