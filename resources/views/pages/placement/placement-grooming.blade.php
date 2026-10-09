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
                        <h1 class="inner_banner_heading">Grooming & <span>Career Preparation</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Placements</li>
                                <li class="breadcrumb-item active" aria-current="page">Grooming & Career Preparation</li>
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

<main class="placement_main">
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
                            <div class="placement_grooming_mainbox">
                                <div class="placement_grooming_firstbox">
                                    <h2 class="inner_heading">Preparing Students beyond the Resume</h2>
                                    <p>
                                        At SIG, placement preparation starts well before the recruitment season.
                                    </p>
                                    <p class="m-0">
                                        Our grooming programme focuses on developing the <strong>knowledge, skills, confidence and professional behaviour</strong> required to succeed in competitive recruitment processes.
                                    </p>
                                </div>
                                <div class="placement_grooming_secondbox">
                                    <div class="general_card_mainbox">
                                        <h3 class="general_card_mainheading">What We Focus On</h3>
                                        <div class="general_card_wraper">
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/checked.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Aptitude & Analytical Ability</h4>
                                                    <p>Students are prepared in:</p>
                                                    <ul class="custom_listing">
                                                        <li>Quantitative aptitude </li>
                                                        <li>Logical reasoning </li>
                                                        <li>Data interpretation </li>
                                                        <li>Verbal ability </li>
                                                        <li>Problem solving </li>
                                                        <li>Analytical reasoning</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/checked.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Technical Skills</h4>
                                                    <p class="m-0">
                                                        Technical preparation is aligned with the student's programme and career interests.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/checked.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Data Science & Spatial Analytics</h4>
                                                    <ul class="custom_listing">
                                                        <li>Python </li>
                                                        <li>SQL </li>
                                                        <li>Statistics </li>
                                                        <li>Machine Learning </li>
                                                        <li>Artificial Intelligence </li>
                                                        <li>Data Analytics </li>
                                                        <li>Data Visualization </li>
                                                        <li>Spatial Analytics</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/checked.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Geoinformatics Preparation</h4>
                                                    <ul class="custom_listing">
                                                        <li>GIS</li>
                                                        <li>Remote Sensing</li>
                                                        <li>Spatial</li>
                                                        <li>Analysis</li>
                                                        <li>Cartography</li>
                                                        <li>Geospatial Databases</li>
                                                        <li>Programming</li>
                                                        <li>Geospatial Technologies</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/checked.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Resume & Professional Profile</h4>
                                                    <p>Students are guided on:</p>
                                                    <ul class="custom_listing">
                                                        <li>Resume structure </li>
                                                        <li>Role-specific resume customization </li>
                                                        <li>Project presentation </li>
                                                        <li>Technical skill positioning </li>
                                                        <li>LinkedIn profile development </li>
                                                        <li>Professional communication</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/checked.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Group Discussion</h4>
                                                    <p>Mock GDs help students develop:</p>
                                                    <ul class="custom_listing">
                                                        <li>Structured thinking </li>
                                                        <li>Communication </li>
                                                        <li>Active listening </li>
                                                        <li>Leadership </li>
                                                        <li>Team participation </li>
                                                        <li>Ability to present ideas </li>
                                                        <li>Ability to handle disagreement professionally</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/checked.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Technical Interviews</h4>
                                                    <p>
                                                        Students participate in technical interview preparation based on their academic programme, technical skill set and target roles.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/checked.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">HR & Behavioural Interviews</h4>
                                                    <p>Students are exposed to competency-based and situation-based questions covering:</p>
                                                    <ul class="custom_listing">
                                                        <li>Teamwork </li>
                                                        <li>Leadership </li>
                                                        <li>Integrity </li>
                                                        <li>Decision making </li>
                                                        <li>Problem solving </li>
                                                        <li>Adaptability </li>
                                                        <li>Conflict management </li>
                                                        <li>Career goals </li>
                                                        <li>Professional behaviour</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/checked.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Mock Assessments</h4>
                                                    <p>Students participate in simulated recruitment activities including:</p>
                                                    <ul class="custom_listing">
                                                        <li>Mock Aptitude Tests</li>
                                                        <li>Technical Assessments</li>
                                                        <li>Mock Group Discussions</li>
                                                        <li>Technical Interviews</li>
                                                        <li>HR Interviews</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-0 mt-3">
                                            These activities help students identify gaps and improve before participating in actual recruitment processes.
                                        </p>
                                    </div>
                                </div>
                                <div class="placement_grooming_thirdbox">
                                    <h2 class="inner_heading">Industry & Alumni Engagement</h2>
                                    <p>
                                        Placement preparation at SIG is strengthened through interaction with industry professionals, recruiters and alumni.
                                    </p>
                                    <p>
                                        These interactions provide students with practical insights into:
                                    </p>
                                    <ul class="custom_listing">
                                        <li>Current industry expectations </li>
                                        <li>Emerging technologies </li>
                                        <li>Career pathways </li>
                                        <li>Recruitment processes </li>
                                        <li>Workplace expectations </li>
                                        <li>Technical skill requirements </li>
                                        <li>Professional behaviour</li>
                                    </ul>
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