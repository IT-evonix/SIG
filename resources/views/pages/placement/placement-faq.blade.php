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
                        <h1 class="inner_banner_heading"><span>FAQ</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Placements</li>
                                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
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
                            <section class="premium-faq-section">
                                <div class="container">
                                    <div class="premium-faq">
                                        <div class="premium-faq-item active">
                                            <button class="premium-faq-question" type="button" aria-expanded="true">
                                                <span class="premium-faq-index">01</span>
                                                <span class="premium-faq-heading">
                                                    Does SIG guarantee placement?
                                                </span>
                                                <span class="premium-faq-toggle">
                                                    <span></span>
                                                    <span></span>
                                                </span>
                                            </button>
                                            <div class="premium-faq-answer">
                                                <div class="premium-faq-answer-inner">
                                                    <div class="premium-faq-answer-line"></div>
                                                    <p>
                                                        SIG facilitates placement opportunities for eligible students
                                                        through industry engagement and campus recruitment. However,
                                                        final selection is made by individual recruiters based on their
                                                        selection criteria.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="premium-faq-item">
                                            <button class="premium-faq-question" type="button" aria-expanded="false">
                                                <span class="premium-faq-index">02</span>
                                                <span class="premium-faq-heading">
                                                    When does the placement process begin?
                                                </span>
                                                <span class="premium-faq-toggle">
                                                    <span></span>
                                                    <span></span>
                                                </span>
                                            </button>
                                            <div class="premium-faq-answer">
                                                <div class="premium-faq-answer-inner">
                                                    <div class="premium-faq-answer-line"></div>
                                                    <p>
                                                        Placement preparation begins well before the recruitment season
                                                        through structured grooming, assessments, industry interactions
                                                        and career preparation.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="premium-faq-item">
                                            <button class="premium-faq-question" type="button" aria-expanded="false">
                                                <span class="premium-faq-index">03</span>
                                                <span class="premium-faq-heading">
                                                    What companies recruit from SIG?
                                                </span>
                                                <span class="premium-faq-toggle">
                                                    <span></span>
                                                    <span></span>
                                                </span>
                                            </button>
                                            <div class="premium-faq-answer">
                                                <div class="premium-faq-answer-inner">
                                                    <div class="premium-faq-answer-line"></div>
                                                    <p>
                                                        SIG has engaged with organizations across geospatial technology,
                                                        data science, analytics, IT, mapping, consulting and allied
                                                        sectors.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="premium-faq-item">
                                            <button class="premium-faq-question" type="button" aria-expanded="false">
                                                <span class="premium-faq-index">04</span>
                                                <span class="premium-faq-heading">
                                                    Does SIG provide internships?
                                                </span>
                                                <span class="premium-faq-toggle">
                                                    <span></span>
                                                    <span></span>
                                                </span>
                                            </button>
                                            <div class="premium-faq-answer">
                                                <div class="premium-faq-answer-inner">
                                                    <div class="premium-faq-answer-line"></div>
                                                    <p>
                                                        Internship and project opportunities may be facilitated through
                                                        recruiters and industry partners, depending on organizational
                                                        requirements and student eligibility.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="premium-faq-item">
                                            <button class="premium-faq-question" type="button" aria-expanded="false">
                                                <span class="premium-faq-index">05</span>
                                                <span class="premium-faq-heading">
                                                    Can companies recruit students directly through SIG?
                                                </span>
                                                <span class="premium-faq-toggle">
                                                    <span></span>
                                                    <span></span>
                                                </span>
                                            </button>
                                            <div class="premium-faq-answer">
                                                <div class="premium-faq-answer-inner">
                                                    <div class="premium-faq-answer-line"></div>
                                                    <p>
                                                        Yes. Organizations can connect with the Placement Team to
                                                        discuss campus recruitment, internships and other talent
                                                        requirements.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="premium-faq-item">
                                            <button class="premium-faq-question" type="button" aria-expanded="false">
                                                <span class="premium-faq-index">06</span>
                                                <span class="premium-faq-heading">
                                                    What programmes are covered under placements?
                                                </span>
                                                <span class="premium-faq-toggle">
                                                    <span></span>
                                                    <span></span>
                                                </span>
                                            </button>
                                            <div class="premium-faq-answer">
                                                <div class="premium-faq-answer-inner">
                                                    <div class="premium-faq-answer-line"></div>
                                                    <p>
                                                        Placement opportunities may be available for eligible students
                                                        from programmes including M.Sc. Geoinformatics, M.Sc. Data
                                                        Science & Spatial Analytics and M.Tech. Geoinformatics, subject
                                                        to recruiter-specific eligibility.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection