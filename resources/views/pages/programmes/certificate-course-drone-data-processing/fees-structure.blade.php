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
                        <h1 class="inner_banner_heading">Fees <span>Structure</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Drone Data Acquisition & Processing</li>
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
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">Certificate Course Drone Data Acquisition and Processing</h3>
                            @include('components.drone-data-processing-programme-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="fees_structure_mainbox">

                                <p class="big_font_para">The programme fee is Rs. 25,000/- (Rupees Twenty-Five Thousand Only).</p>
                                <h2 class="inner_heading">Important Dates</h2>



                                <div class="table-responsive">
                                    <table class="table mb-0 fee_table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Sr.No
                                                    
                                                </th>

                                                <th>
                                                   Description
                                                </th>

                                                <th>
                                               Date(s)
                                                </th>
                                            </tr>

                                           
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Commencement of Registration</td>
                                                <td>11th Sep 2023</td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Closure of Registration</td>
                                                <td>2nd Feb 2024</td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Shortlist Declaration</td>
                                                <td>13rd Feb 2024</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>PIWAT</td>
                                                <td>06th Feb 2024</td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>Merit List Date</td>
                                                <td>12th Feb 2024</td>
                                            
                                        </tr>
                                        
                                         <tr>
                                                <td>6</td>
                                                <td>Programme Commencement</td>
                                                <td>1st Mar 2024</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div> 
                                 <!-- <div class="fees_notebox">
                                    <strong>Note:</strong> **Hostel and Mess Fees for the Subsequent year would be
                                    communicated before commencement of the next year.
                                </div>  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection