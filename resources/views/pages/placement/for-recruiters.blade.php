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
                        <h1 class="inner_banner_heading">For <span>Recruiters</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Placements</li>
                                <li class="breadcrumb-item active" aria-current="page">For Recruiters</li>
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
                            <div class="for_recruters_mainbox">
                                <div class="for_recruters_firstbox">
                                    <h2 class="inner_heading">Partner With SIG</h2>
                                    <p>
                                        Looking for skilled professionals in <strong>Geospatial Technology, Data Science, Spatial Analytics and emerging technology domains?</strong>
                                    </p>
                                    <p>
                                        Connect with SIG to explore campus hiring opportunities.
                                    </p>
                                    <div class="general_card_mainbox">
                                        <h3 class="general_card_mainheading">Recruitment Opportunities</h3>
                                        <p>Organizations can engage with SIG for:</p>
                                        <div class="general_card_wraper">
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/employee.svg') }}" alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Full-Time Employment</h4>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/briefcase.svg') }}" alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Internships</h4>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/growth.svg') }}" alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Internship + PPO Opportunities</h4>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/graduate.svg') }}" alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Graduate / Trainee Roles</h4>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/opportunity.svg') }}" alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Project-Based Opportunities</h4>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/creativity.svg') }}" alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Technical & Research Roles</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="for_recruters_lastbox">
                                    <h2 class="inner_heading">Recruiter Engagement Process</h2>
                                    <div class="how_to_apply_wraper">
                                        <div class="how_to_apply_listing">
                                            <div class="how_to_apply_header">
                                                <div class="how_to_apply_header_step">Step 1</div>
                                                <h2 class="how_to_apply_header_heading">Share Your Requirement</h2>
                                            </div>
                                            <div class="how_to_apply_body">
                                                <p class="m-0">Provide the job description, eligibility criteria, location, compensation and selection process.</p>
                                            </div>
                                        </div>
                                        <div class="how_to_apply_listing">
                                            <div class="how_to_apply_header">
                                                <div class="how_to_apply_header_step">Step 2</div>
                                                <h2 class="how_to_apply_header_heading">Role Discussion</h2>
                                            </div>
                                            <div class="how_to_apply_body">
                                                <p class="m-0">The Placement Team discusses the requirement and identifies suitable student cohorts.</p>
                                            </div>
                                        </div>
                                        <div class="how_to_apply_listing">
                                            <div class="how_to_apply_header">
                                                <div class="how_to_apply_header_step">Step 3</div>
                                                <h2 class="how_to_apply_header_heading">Student Profiles</h2>
                                            </div>
                                            <div class="how_to_apply_body">
                                                <p class="m-0">Eligible student profiles are shared as per the recruiter's requirements.</p>
                                            </div>
                                        </div>
                                        <div class="how_to_apply_listing">
                                            <div class="how_to_apply_header">
                                                <div class="how_to_apply_header_step">Step 4</div>
                                                <h2 class="how_to_apply_header_heading">Recruitment Process</h2>
                                            </div>
                                            <div class="how_to_apply_body">
                                                <p class="m-0">Pre-placement interaction, assessment, GD and/or interviews are conducted as applicable.</p>
                                            </div>
                                        </div>
                                        <div class="how_to_apply_listing">
                                            <div class="how_to_apply_header">
                                                <div class="how_to_apply_header_step">Step 5</div>
                                                <h2 class="how_to_apply_header_heading">Selection</h2>
                                            </div>
                                            <div class="how_to_apply_body">
                                                <p class="m-0">The recruiter finalizes the selected candidates.</p>
                                            </div>
                                        </div>
                                        <div class="how_to_apply_listing">
                                            <div class="how_to_apply_header">
                                                <div class="how_to_apply_header_step">Step 6</div>
                                                <h2 class="how_to_apply_header_heading">Offer & Onboarding</h2>
                                            </div>
                                            <div class="how_to_apply_body">
                                                <p class="m-0">Offer documentation and subsequent joining formalities are coordinated.</p>
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