@extends('layouts.app')

@section('title', 'Msc in Geoinformatics: Master Degree Course in GIS - SIG')

@section('description', 'Build your career with SIG, one of the best MSc Geoinformatics colleges in India. Learn GIS
courses and advance your career with a master\'s in Geoinformatics.')

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
                        <h1 class="inner_banner_heading">Academic <span>Calendar</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Certification in Data Visualization</li>
                                <li class="breadcrumb-item active" aria-current="page">Academic Calendar</li>
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

<main class="programs_main one_liner_heading">
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
                            <div class="academic_calender_mainbox">
                                <h2 class="inner_heading">Academic Calendar</h2>
                                <div class="my_tabbing scrollable-tabbing">
                                    <div class="tab-navigation-wrapper">

                                        <button type="button" class="tab-scroll-btn tab-prev"
                                            aria-label="Previous tabs">
                                            &#10094;
                                        </button>

                                        <div class="tab-navigation-scroll">
                                            <ul class="nav nav-tabs custom-tabs" id="batchTabs" role="tablist">

                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="batch-2025-tab"
                                                        data-bs-toggle="tab" data-bs-target="#batch-2025" type="button"
                                                        role="tab">
                                                        PG 2026-28 Batch
                                                    </button>
                                                </li>

                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="batch-2024-tab" data-bs-toggle="tab"
                                                        data-bs-target="#batch-2024" type="button" role="tab">
                                                        PG 2025–27 Batch
                                                    </button>
                                                </li>

                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="batch-2023-tab" data-bs-toggle="tab"
                                                        data-bs-target="#batch-2023" type="button" role="tab">
                                                        PG 2025–2027 Batch
                                                    </button>
                                                </li>

                                            </ul>
                                        </div>

                                        <button type="button" class="tab-scroll-btn tab-next" aria-label="Next tabs">
                                            &#10095;
                                        </button>

                                    </div>
                                    <div class="tab-content" id="batchTabsContent">
                                        <div class="tab-pane fade show active" id="batch-2025" role="tabpanel">
                                            <h2 class="program_structure_heading">
                                                M.Sc.(Geoinformatics)/M.Sc(DSSA)/M.Tech (Geoinformatics)/Dual Degree
                                                M.Sc. (DS&SA) SEMESTER I and II</h2>
                                            <div class="table-responsive">
                                                <table class="table mb-0 fee_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Details</th>
                                                            <th>Date</th>
                                                            <th>Duration</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>Common Induction</td>
                                                            <td>24/07/2026 to 31/07/2026</td>
                                                            <td>7 Days</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Semester-I Teaching</td>
                                                            <td>03/08/2026 to 08/12/2026</td>
                                                            <td>97 Days</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Preparatory leave for Semester I Exam</td>
                                                            <td>09/12/2026 to 13/12/2026</td>
                                                            <td>5 Days</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Semester-I Tentative Exam Schedule</td>
                                                            <td>14/12/2026 to 29/12/2026</td>
                                                            <td>16 Days</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Semester-II Teaching</td>
                                                            <td>08/01/2027 to 05/05/2027</td>
                                                            <td>96 Days</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Preparatory leave for Semester II Exam</td>
                                                            <td>06/05/2027 to 09/05/2027</td>
                                                            <td>04 days</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Semester-II-Tentative Exam Schedule</td>
                                                            <td>10/05/2027 to 22/05/2027</td>
                                                            <td>12 days</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="fees_notebox">
                                                <strong>Note:</strong> Summer Project of Semester-III will start from
                                                1st June 2027 to 31st July 2027
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="batch-2024" role="tabpanel">
                                            <h2 class="program_structure_heading">
                                                M.Sc. (Geoinformatics) , M.Sc (DSSA) SEMESTER III and IV
                                            </h2>
                                            <div class="table-responsive">
                                                <table class="table mb-0 fee_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Details</th>
                                                            <th>Date</th>
                                                            <th>Duration</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>Summer Project</td>
                                                            <td>01/06/2026 to 31/07/2026</td>
                                                            <td>2 Months</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Semester-III Teaching</td>
                                                            <td>03/08/2026 to 08/12/2026</td>
                                                            <td>97 Days</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Preparatory leave for Semester III Exam</td>
                                                            <td>09/12/2026 to 13/12/2026</td>
                                                            <td>5 Days</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Semester-III Tentative Exam Schedule</td>
                                                            <td>14/12/2026 to 29/12/2026</td>
                                                            <td>16 Days</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Semester-IV Industry Project</td>
                                                            <td>01/01/2027 to 30/06/2027</td>
                                                            <td>150 Days (Working Days)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Term End Exam SemIV (Industry Project Presentation)</td>
                                                            <td>01/07/2027 to 3/07/2027</td>
                                                            <td>3 Day</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="batch-2023" role="tabpanel">
                                            <h2 class="program_structure_heading">
                                                M.Tech. (Geoinformatics) SEMESTER III and IV
                                            </h2>
                                            <div class="table-responsive">
                                                <table class="table mb-0 fee_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Details</th>
                                                            <th>Date</th>
                                                            <th>Duration</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>Semester-III Dissertation Phase 1</td>
                                                            <td>03/08/2026 to 08/12/2026</td>
                                                            <td>97 Days</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Semester-III Tentative Exam Schedule (Dissertation Phase
                                                                1 presentation)</td>
                                                            <td>12/12/2026</td>
                                                            <td>01 Day</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Semester-IV Industry Project</td>
                                                            <td>01/01/2027 to 30/06/2027</td>
                                                            <td>150 Days (Working Days)</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Term End Exam SemIV (Industry Project Presentation)</td>
                                                            <td>01/07/2027 to 3/07/2027</td>
                                                            <td>3 Day</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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