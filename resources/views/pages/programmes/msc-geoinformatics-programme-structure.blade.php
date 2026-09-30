@extends('layouts.app')

@section('title', 'Msc in Geoinformatics: Master Degree Course in GIS - SIG')

@section('description', 'Build your career with SIG, one of the best MSc Geoinformatics colleges in India. Learn GIS
courses and advance your career with a master\'s in Geoinformatics.')

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
                        <h1 class="inner_banner_heading">Fees <span>Structure</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">M.Sc. in Geoinformatics</li>
                                <li class="breadcrumb-item active" aria-current="page">Fees Structure</li>
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
                        <div class="inner_page_menu_box">
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">M.Sc. in Geoinformatics</h3>
                            @include('components.msc-geoinformatics-programme-menu')
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
                                                                    <th>Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th>Total Credits</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Principles of GIS</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Principles of Remote Sensing</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Applied Statistics</td>
                                                                    <td>3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Python for Geospatial Technology</td>
                                                                    <td>3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>Global Navigation Satellite Systems</td>
                                                                    <td>3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>Logic Development and Programming Concepts</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>Research Methodology in GIS</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>Health and Wellness Module I #</td>
                                                                    <td>0</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 2 - Generic Core Courses</h2>
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
                                                                    <td>Geo Image Processing</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Photogrammetry</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Advance Python Programming for Spatial Analytics</td>
                                                                    <td>3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Essentials of Internet and Web Technologies</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>Principles of Database Management System</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>Spatial Analysis</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>Flexi-Credit Course</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>R for Spatial Science</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td>Programming for Enterprise GIS</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>Health and Wellness Module II #</td>
                                                                    <td>0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td><strong>23</strong></td>
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
                                                                    <th>Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th>Total Credits</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Summer Project</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Business Communication</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>GIS Application Design</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>GIS Project Management</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>Organizational Behaviour</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>Spatial Data Base Management</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>Spatial Modeling</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>Flexi-Credit Course</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td>Web GIS</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td></td>
                                                                    <td>0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11</td>
                                                                    <td>Health and Wellness *</td>
                                                                    <td>0</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 3 - Generic Elective Course Group - I (Choose any one course)</h2>
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
                                                                    <td>Geoinformatics applications in Facility and Utility management</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Geoinformatics Applications in Natural Resource Management</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Mobile GIS</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td><strong>2</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 3 - Generic Elective Course Group - II (Choose any one course)</h2>
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
                                                                    <td>Geospatial Application in Agriculture</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Disaster Scenario mapping</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Application of Geospatial Technology in Urban Development</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td><strong>2</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 3 - Audit Courses</h2>
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
                                                                        <strong>Note:</strong> Student/s must complete "Generative AI and use cases" (0702410318)
                                                                        in addition to the regular courses offered in this semester.
                                                                    </td>
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
                                                                    <th>Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th>Total Credits</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Industry Project</td>
                                                                    <td>12</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td><strong>12</strong></td>
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
                                                    <h2 class="program_structure_heading">Semester 1</h2>
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
                                                                    <td>Principles of GIS</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Principles of Remote Sensing</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Applied Statistics</td>
                                                                    <td>3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Python for Geospatial Technology</td>
                                                                    <td>3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>Global Navigation Satellite Systems</td>
                                                                    <td>3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>Logic Development and Programming Concepts</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>Research Methodology in GIS</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>Health and Wellness Module I</td>
                                                                    <td>0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td><strong>21</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 2</h2>
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
                                                                    <td>Geo Image Processing</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Photogrammetry</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Advance Python Programming for Spatial Analytics</td>
                                                                    <td>3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Essentials of Internet and Web Technologies</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>Principles of Database Management System</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>Spatial Analysis</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>Geospatial Artificial Intelligence</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>R for Spatial Science</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td>Programming for Enterprise GIS</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>Health and Wellness Module II</td>
                                                                    <td>0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td><strong>23</strong></td>
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
                                                                    <th>Sr. No.</th>
                                                                    <th>Course Title</th>
                                                                    <th>Total Credits</th>
                                                                </tr>
                                                            </thead>
                                                            
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Summer Project</td>
                                                                    <td>4</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Business Communication</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>GIS Application Design</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>GIS Project Management</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>Organizational Behaviour</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>Spatial Data Base Management</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>Spatial Modeling</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>Geospatial Analytics with Advanced Computing</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td>Web GIS</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>Mandatory Non-Credit Course</td>
                                                                    <td>0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>11</td>
                                                                    <td>Health and Wellness</td>
                                                                    <td>0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td><strong>20</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 3 - Generic Elective Course Group I (Choose any one)</h2>
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
                                                                    <td>Geoinformatics Applications in Forestry</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Geospatial Application in Agriculture</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Advanced Application of Geoinformatics in Water Resources Management</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td><strong>2</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 3 - Generic Elective Course Group II (Choose any one)</h2>
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
                                                                    <td>Mobile GIS</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Disaster Scenario Mapping</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Application of Geospatial Technology in Urban Development</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Geoinformatics Applications in Facility and Utility Management</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td><strong>2</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="program_structure_listing">
                                                    <h2 class="program_structure_heading">Semester 4</h2>
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
                                                                    <td>Industry Project</td>
                                                                    <td>12</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><strong>Total:</strong></td>
                                                                    <td><strong>12</strong></td>
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