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
                        <h1 class="inner_banner_heading">Placement <span>Process</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Placements</li>
                                <li class="breadcrumb-item active" aria-current="page">Placement Process</li>
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
                            <div class="placement_process_mainbox">
                                <h2 class="inner_heading">From Preparation to Placement</h2>
                                <p>
                                    SIG follows a structured placement process to ensure that students are adequately prepared before participating in recruitment opportunities.
                                </p>
                                <div class="how_to_apply_wraper">
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 1</div>
                                            <h2 class="how_to_apply_header_heading">Placement Orientation</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p class="m-0">
                                                Students are introduced to the placement process, eligibility requirements, placement guidelines, recruitment expectations and professional conduct.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 2</div>
                                            <h2 class="how_to_apply_header_heading">Student Profiling & Resume Building</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p>
                                                Students prepare their professional profiles highlighting:
                                            </p>
                                            <ul class="custom_listing">
                                                <li>Academic background</li>
                                                <li>Technical skills</li>
                                                <li>Projects</li>
                                                <li>Internships</li>
                                                <li>Certifications</li>
                                                <li>Research work</li>
                                                <li>Achievements</li>
                                                <li>Relevant extracurricular activities</li>
                                            </ul>
                                            <p class="mb-0 m-2">
                                                Students are encouraged to customize their resumes according to specific job roles.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 3</div>
                                            <h2 class="how_to_apply_header_heading">Skill Assessment</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p>
                                                Students undergo assessments to evaluate their readiness across areas such as:
                                            </p>
                                            <ul class="custom_listing">
                                                <li>Aptitude</li>
                                                <li>Technical Skills</li>
                                                <li>Domain Knowledge</li>
                                                <li>Communication</li>
                                                <li>Analytical Thinking</li>
                                                <li>Interview Readiness</li>
                                            </ul>
                                            <p class="mb-0 mt-2">
                                                The assessment process helps identify individual skill gaps and areas requiring additional preparation.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 4</div>
                                            <h2 class="how_to_apply_header_heading">Placement Grooming</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p>
                                                Students participate in structured grooming activities covering:
                                            </p>
                                            <ul class="custom_listing">
                                                <li>Aptitude preparation</li>
                                                <li>Resume building</li>
                                                <li>LinkedIn and professional profile development</li>
                                                <li>Group discussions</li>
                                                <li>Technical interviews</li>
                                                <li>HR interviews</li>
                                                <li>Communication skills</li>
                                                <li>Professional etiquette</li>
                                                <li>Industry expectations</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 5</div>
                                            <h2 class="how_to_apply_header_heading">Recruiter Engagement</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p>
                                                The Placement Team engages with organizations to understand their talent requirements and identify relevant opportunities for SIG students.
                                            </p>
                                            <p>
                                                Recruiter engagement takes place through:
                                            </p>
                                            <ul class="custom_listing">
                                                <li>Industry outreach</li>
                                                <li>Alumni network</li>
                                                <li>Existing corporate relationships</li>
                                                <li>Industry events</li>
                                                <li>Corporate interactions</li>
                                                <li>Recruiter referrals</li>
                                                <li>Faculty and professional networks</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 6</div>
                                            <h2 class="how_to_apply_header_heading">Opportunity Sharing</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p>
                                                Relevant internship and employment opportunities are shared with eligible students.
                                            </p>
                                            <p>
                                                Students are required to carefully review:
                                            </p>
                                            <ul class="custom_listing">
                                                <li>Job Role</li>
                                                <li>Eligibility</li>
                                                <li>Location</li>
                                                <li>Compensation</li>
                                                <li>Skills Required</li>
                                                <li>Selection Process</li>
                                            </ul>
                                            <p class="mb-0 mt-2">before applying.</p>
                                        </div>
                                    </div>
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 7</div>
                                            <h2 class="how_to_apply_header_heading">Pre-Placement Interaction</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p>Recruiters may interact with students through:</p>
                                            <ul class="custom_listing">
                                                <li>Pre-placement talks</li>
                                                <li>Company presentations</li>
                                                <li>Role briefings</li>
                                                <li>Industry sessions</li>
                                                <li>Q&A interactions</li>
                                            </ul>
                                            <p class="mb-0 m-2">
                                                This enables students to understand the organization, role, career path and recruitment process.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 8</div>
                                            <h2 class="how_to_apply_header_heading">Selection Process</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p>
                                                Depending on the organization and role, the recruitment process may include:
                                            </p>
                                            <ul class="custom_listing">
                                                <li>Aptitude Test</li>
                                                <li>Technical Assessment</li>
                                                <li>Group Discussion</li>
                                                <li>Technical Interview</li>
                                                <li>HR Interview</li>
                                                <li>Final Selection</li>
                                            </ul>
                                            <p class="mb-0 mt-2">
                                                The recruitment process may vary from company to company.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 9</div>
                                            <h2 class="how_to_apply_header_heading">Offer & Documentation</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p class="m-0">
                                                Students selected by organizations are required to submit the relevant selection/offer documentation to the Placement Team within the prescribed timeline.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="how_to_apply_listing">
                                        <div class="how_to_apply_header">
                                            <div class="how_to_apply_header_step">Step 10</div>
                                            <h2 class="how_to_apply_header_heading">Career Transition</h2>
                                        </div>
                                        <div class="how_to_apply_body">
                                            <p class="m-0">
                                                Selected students complete the required formalities with the recruiter and prepare for their transition from campus to the professional workplace.
                                            </p>
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