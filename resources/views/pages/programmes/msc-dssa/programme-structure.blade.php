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
                        <h1 class="inner_banner_heading">Programme <span>Structure</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">M.Sc. in DSSA</li>
                                <li class="breadcrumb-item active" aria-current="page">Programme Structure</li>
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
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">M.Sc. in DSSA</h3>
                            @include('components.msc-dssa-programme-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="program_stucture_mainbox">
                                <div class="my_tabbing">
                                    <ul class="nav nav-tabs custom-tabs" id="batchTabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="batch-2026-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2026" type="button" role="tab">
                                                Batch 2026-2028
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="batch-2025-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2025" type="button" role="tab">
                                                Batch 2025-2027
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="batchTabsContent">
                                        <div class="tab-pane fade show active" id="batch-2026" role="tabpanel">
                                            <div class="program_structure_content">
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 1 - Generic Core
                                                        Courses</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Mathematics for Spatial Sciences</td>
                                                                    <td class="text-center">4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td>Principles and Practices of Data Protection</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td>Statistics and Probability</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">4</td>
                                                                    <td>Python for Data Science</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">5</td>
                                                                    <td>Business Communication</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">6</td>
                                                                    <td>Introduction to Database Management System</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">7</td>
                                                                    <td>Research Methodology in Computational Sciences
                                                                    </td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">8</td>
                                                                    <td>Introduction to Geospatial Technology</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">9</td>
                                                                    <td>Health and Wellness Module I #</td>
                                                                    <td class="text-center">0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>21</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 2 - Generic Core
                                                        Courses</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Machine learning</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td>SQL and Spatial Database management</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td>Flexi-Credit Course</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">4</td>
                                                                    <td>Data Driven Governance</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">5</td>
                                                                    <td>Inferential Statistics</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">6</td>
                                                                    <td>Health and Wellness Module II #</td>
                                                                    <td class="text-center">0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>12</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 2 - Specialisation
                                                        Core Courses : Artificial Intelligence Algorithms</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Data Analysis Using Python</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td>Computer Vision</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td>Programming for computational sciences</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">4</td>
                                                                    <td>Big Data Analytical Techniques and Practical
                                                                        Applications</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>11</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 2 - Specialisation
                                                        Core Courses : Geointelligence</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Advance Python Programming for Spatial Analytics</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td>Programming for Spatial Sciences</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td>Geospatial Analytics</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">4</td>
                                                                    <td>Spatial Big Data and Storage Analytics</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>11</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 3 - Generic Core
                                                        Courses</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Summer Project</td>
                                                                    <td class="text-center">4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td>Deep learning</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td>Artificial Intelligence</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">4</td>
                                                                    <td>Spatial Modeling</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">5</td>
                                                                    <td>Flexi-Credit Course</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">6</td>
                                                                    <td></td>
                                                                    <td class="text-center">0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">7</td>
                                                                    <td>Health and Wellness *</td>
                                                                    <td class="text-center">0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>14</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 3 - Generic Elective
                                                        Course Group - I (Choose any one course)</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Data Driven Journalism</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td>IOT Spatial Analytics</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td>Spatial User Interface design and Implementation</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">4</td>
                                                                    <td>System Dynamics Simulation</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">5</td>
                                                                    <td>Data Driven Banking, Insurance and Finance</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">6</td>
                                                                    <td>Data Driven Forensics and Crime Investigation</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>3</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 3 - Specialisation
                                                        Core Courses : Artificial Intelligence Algorithms</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center" class="text-center" class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center" class="text-center" class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center" class="text-center" class="text-center">1</td>
                                                                    <td>Block Chain Technology</td>
                                                                    <td class="text-center" class="text-center" class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center" class="text-center" class="text-center">2</td>
                                                                    <td>Introduction to Natural Language Processing</td>
                                                                    <td class="text-center" class="text-center" class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center" class="text-center" class="text-center">3</td>
                                                                    <td>Operations Research and Optimization Techniques
                                                                    </td>
                                                                    <td class="text-center" class="text-center" class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center" class="text-center" class="text-center"><strong>7</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 3 - Specialisation
                                                        Core Courses : Geointelligence</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center" class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center" class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center" class="text-center">1</td>
                                                                    <td>Machine Learning for Remote sensing</td>
                                                                    <td class="text-center" class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center" class="text-center">2</td>
                                                                    <td>Web GIS</td>
                                                                    <td class="text-center" class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center" class="text-center">3</td>
                                                                    <td>Citizen Science and Geospatial Technology</td>
                                                                    <td class="text-center" class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center" class="text-center"><strong>7</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 3 - Audit Courses
                                                    </h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th>Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Generative AI and use cases</td>
                                                                    <td>0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3">
                                                                        <strong>Note:</strong> Student/s must complete
                                                                        "Generative AI and use cases" (0702410318)
                                                                        in addition to the regular courses offered in
                                                                        this semester.
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div> -->
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 4 - Generic Core
                                                        Courses</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Industry Project</td>
                                                                    <td class="text-center">12</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>12</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="batch-2025" role="tabpanel">
                                            <div class="program_structure_content">
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 1 - Generic Core
                                                        Courses</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Mathematics for Spatial Sciences</td>
                                                                    <td class="text-center">4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td>Principles and Practices of Data Protection</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td>Statistics and Probability</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">4</td>
                                                                    <td>Python for Data Science</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">5</td>
                                                                    <td>Business Communication</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">6</td>
                                                                    <td>Introduction to Database Management System</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">7</td>
                                                                    <td>Research Methodology in Computational Sciences
                                                                    </td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">8</td>
                                                                    <td>Introduction to Geospatial Technology</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">9</td>
                                                                    <td>Health and Wellness Module I #</td>
                                                                    <td class="text-center">0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>21</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 2 - Generic Core
                                                        Courses</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Machine learning</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td>SQL and Spatial Database management</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td>Flexi-Credit Course</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">4</td>
                                                                    <td>Data Driven Governance</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">5</td>
                                                                    <td>Inferential Statistics</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">6</td>
                                                                    <td>Health and Wellness Module II #</td>
                                                                    <td class="text-center">0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>12</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 2 - Specialisation
                                                        Core Courses : Artificial Intelligence Algorithms</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Data Analysis Using Python</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td>Computer Vision</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td>Programming for computational sciences</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">4</td>
                                                                    <td>Big Data Analytical Techniques and Practical
                                                                        Applications</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>11</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 2 - Specialisation
                                                        Core Courses : Geointelligence</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Advance Python Programming for Spatial Analytics
                                                                    </td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td>Programming for Spatial Sciences</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td>Geospatial Analytics</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">4</td>
                                                                    <td>Spatial Big Data and Storage Analytics</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>11</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 3 - Generic Core
                                                        Courses</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Summer Project</td>
                                                                    <td class="text-center">4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td>Deep learning</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td>Artificial Intelligence</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">4</td>
                                                                    <td>Spatial Modeling</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">5</td>
                                                                    <td>Flexi-Credit Courses</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">6</td>
                                                                    <td>Vasudhaiva kutumbakam</td>
                                                                    <td class="text-center">0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">7</td>
                                                                    <td>Health and Wellness *</td>
                                                                    <td class="text-center">0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>14</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 3 - Generic Elective
                                                        Course Group - I (Choose any one course)</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Data Driven Journalism</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td>IOT Spatial Analytics</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td>Spatial User Interface design and Implementation
                                                                    </td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">4</td>
                                                                    <td>System Dynamics Simulation</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">5</td>
                                                                    <td>Data Driven Banking, Insurance and Finance</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">6</td>
                                                                    <td>Data Driven Forensics and Crime Investigation
                                                                    </td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>3</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 3 - Specialisation
                                                        Core Courses : Artificial Intelligence Algorithms</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Block Chain Technology</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td>Introduction to Natural Language Processing</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td>Operations Research and Optimization Techniques
                                                                    </td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>7</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 3 - Specialisation
                                                        Core Courses : Geointelligence</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Machine Learning for Remote sensing</td>
                                                                    <td class="text-center">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td>Web GIS</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td>Citizen Science and Geospatial Technology</td>
                                                                    <td class="text-center">2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>7</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 4 - Generic Core
                                                        Courses</h2>
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 fee_table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th class="text-center">Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td>Industry Project</td>
                                                                    <td class="text-center">12</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td class="text-center"><strong>12</strong></td>
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
            </div>
        </div>
    </section>
</main>

@endsection