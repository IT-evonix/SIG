@extends('layouts.app')

@section('title', 'Msc in Geoinformatics: Master Degree Course in GIS - SIG')

@section('description', 'Build your career with SIG, one of the best MSc Geoinformatics colleges in India. Learn GIS
courses and advance your career with a master\'s in Geoinformatics.')

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
                        <h1 class="inner_banner_heading">Graduate Attributes and <span>Pogramme Outcome</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Certification in Data Visualization</li>
                                <li class="breadcrumb-item active" aria-current="page">Pogramme Outcome</li>
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

<main class="programs_main">
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
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">Certification in Data Visualization</h3>
                            @include('components.data-visualization-program-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="program_outcomes_mainbox">
                                <div class="program_outcomes_firstbox">
                                    <h2 class="inner_heading">Graduate Attributes</h2>
                                    <div class="table-responsive">
                                        <table class="table mb-0 fee_table">
                                            <thead>
                                                <tr>
                                                    <th>Attributes</th>
                                                    <th>Facilitation and Monitoring</th>
                                                    <th>Outcome</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>Scholarship: research, inquiry and lifelong learning</td>
                                                    <td>Teaching- learning process, curriculum design, updating of
                                                        curriculum in emerging areas, student centric teaching
                                                        methodologies, project based learning, case studies, FCP</td>
                                                    <td>Research output by students, case studies, publishing and
                                                        presenting papers; desire for further higher education</td>
                                                </tr>
                                                <tr>
                                                    <td>Global citizenship: ethical, social and professional
                                                        understanding</td>
                                                    <td>Projects, internships, field trips, service learning and
                                                        extension activities, GIP, promoting social sensitivity</td>
                                                    <td>Interest in volunteering and working for social causes, cross
                                                        cultural sensitivity, ability to work in cross cultural groups
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Eco-literate: sensitivity towards a sustainable environment</td>
                                                    <td>Programmes/courses related to environment sustainability,
                                                        participation in activities related to environment/ecology
                                                        preservation, environment projects and study tours</td>
                                                    <td>Environmental sensitivity among students, involvement in NGOs,
                                                        and commitment toeco-friendly spaces</td>
                                                </tr>
                                                <tr>
                                                    <td>Employability: equipped with skills, attributes, leadership and
                                                        entrepreneurial qualities that society needs; being capable of
                                                        making a contribution to society through earning a living</td>
                                                    <td>Domain specific expertise, training/internship with industry,
                                                        enhancement and value added courses. Co-curricular activities.
                                                        Assessments that include presentations, public speaking and
                                                        oratory, class leads, team learning and group activities</td>
                                                    <td>Excellent placements, Entrepreneurial opportunities, good team
                                                        work skills, work ethic, understanding of corporate working,
                                                        successful internships</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="program_outcomes_secondbox">
                                    <h2 class="inner_heading">Programme Outcome</h2>
                                    <div class="program_outcomes_wraper">
                                        <div class="program_outcomes_listing">
                                            <div class="program_outcomes_numbers">PO1</div>
                                            <div class="program_outcomes_para">
                                                <p class="m-0">
                                                    The students should be able to apply Geospatial Technology to solve
                                                    real world problems
                                                </p>
                                            </div>
                                        </div>
                                        <div class="program_outcomes_listing">
                                            <div class="program_outcomes_numbers">PO2</div>
                                            <div class="program_outcomes_para">
                                                <p class="m-0">
                                                    The students should analyse and formulate solutions using geospatial
                                                    theories, models and techniques
                                                </p>
                                            </div>
                                        </div>
                                        <div class="program_outcomes_listing">
                                            <div class="program_outcomes_numbers">PO3</div>
                                            <div class="program_outcomes_para">
                                                <p class="m-0">
                                                    The students should be able to design, develop, evaluate and
                                                    implement geospatial solutions.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="program_outcomes_listing">
                                            <div class="program_outcomes_numbers">PO4</div>
                                            <div class="program_outcomes_para">
                                                <p class="m-0">
                                                    The student should be able to formulate, create and conduct
                                                    innovative research involving spatial data and techniques
                                                </p>
                                            </div>
                                        </div>
                                        <div class="program_outcomes_listing">
                                            <div class="program_outcomes_numbers">PO5</div>
                                            <div class="program_outcomes_para">
                                                <p class="m-0">
                                                    The students should be able utilize spatial critical thinking to
                                                    provide solutions and attain sustainable development Goals
                                                </p>
                                            </div>
                                        </div>
                                        <div class="program_outcomes_listing">
                                            <div class="program_outcomes_numbers">PO6</div>
                                            <div class="program_outcomes_para">
                                                <p class="m-0">
                                                    The students should be able to engage in continuous learning, adapt
                                                    to evolving technologies, and pursue professional growth
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
        </div>
    </section>
</main>

@endsection