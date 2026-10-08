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
                        <h1 class="inner_banner_heading">Placement <span>Policy</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Placements</li>
                                <li class="breadcrumb-item active" aria-current="page">Placement Policy</li>
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
                            <div class="placement_policy_mainbox">
                                <h2 class="inner_heading">Fair. Transparent. Professional.</h2>
                                <p>
                                    The SIG Placement Policy provides a structured framework for student participation in campus recruitment.
                                </p>
                                <p>
                                    The policy is designed to ensure a professional and transparent recruitment environment for <strong>students, recruiters and the Institute.</strong>
                                </p>
                                <div class="general_card_mainbox">
                                    <h3 class="general_card_mainheading">Key Guidelines</h3>
                                    <div class="general_card_wraper">
                                        <div class="general_card_listing">
                                            <div class="general_card_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/checked.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="general_card_conent">
                                                <h4 class="general_card_heading">Eligibility</h4>
                                                <p class="m-0">
                                                    Students must meet the eligibility criteria prescribed by SIG and the recruiting organization.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="general_card_listing">
                                            <div class="general_card_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/documen.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="general_card_conent">
                                                <h4 class="general_card_heading">Placement Registration</h4>
                                                <p class="m-0">
                                                    Students participating in placements must complete the prescribed registration and provide accurate information.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="general_card_listing">
                                            <div class="general_card_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/calendar.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="general_card_conent">
                                                <h4 class="general_card_heading">Attendance & Participation</h4>
                                                <p class="m-0">
                                                    Students are expected to actively participate in placement activities, assessments, interviews and grooming sessions.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="general_card_listing">
                                            <div class="general_card_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/document.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="general_card_conent">
                                                <h4 class="general_card_heading">Recruitment Applications</h4>
                                                <p class="m-0">
                                                    Students must review the complete job description, eligibility criteria, location, compensation and other conditions before applying.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="general_card_listing">
                                            <div class="general_card_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/group.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="general_card_conent">
                                                <h4 class="general_card_heading">Professional Conduct</h4>
                                                <p class="m-0">
                                                    Students are expected to maintain punctuality, appropriate professional attire, respectful communication and professional behaviour throughout the recruitment process.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="general_card_listing">
                                            <div class="general_card_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/checked.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="general_card_conent">
                                                <h4 class="general_card_heading">Integrity</h4>
                                                <p class="m-0">
                                                    Students must provide accurate information regarding their academic qualifications, projects, internships, certifications, technical skills and other credentials.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="general_card_listing">
                                            <div class="general_card_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/graduate.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="general_card_conent">
                                                <h4 class="general_card_heading">Withdrawal</h4>
                                                <p class="m-0">
                                                    Students should not withdraw from a recruitment process after being shortlisted or after student details have been shared with the recruiter, except under circumstances permitted by the Placement Team.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="general_card_listing">
                                            <div class="general_card_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/user.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="general_card_conent">
                                                <h4 class="general_card_heading">One Student – One Offer</h4>
                                                <p class="m-0">
                                                    SIG follows a one-student-one-offer principle, subject to the provisions and exceptions specified in the prevailing Placement Policy.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="general_card_listing">
                                            <div class="general_card_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/clipboard.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="general_card_conent">
                                                <h4 class="general_card_heading">Recruiter-Specific Requirements</h4>
                                                <p class="m-0">
                                                    Students must comply with additional eligibility or selection conditions specified by individual recruiters.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="general_card_listing">
                                            <div class="general_card_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/responsibility.svg') }}" alt="Icon" class="img-fluid">
                                            </div>
                                            <div class="general_card_conent">
                                                <h4 class="general_card_heading">Student Responsibility</h4>
                                                <p class="m-0">
                                                    Students are expected to take ownership of their placement preparation and regularly engage with placement communications and activities.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fees_notebox">
                                    <strong>Important:</strong> The detailed Placement Policy issued by SIG will prevail in case of any ambiguity. The policy may be revised from time to time based on academic, administrative and industry requirements.
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