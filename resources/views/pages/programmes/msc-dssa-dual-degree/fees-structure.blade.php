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
                                <li class="breadcrumb-item">M.Sc. DSSA  Dual Degree</li>
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
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">M.Sc. DSSA  Dual Degree</h3>
                           @include('components.msc-dssa-dual-degree-programme-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="fees_structure_mainbox">
                                <h2 class="inner_heading">Batch: 2026-2028</h2>
                                <div class="table-responsive">
                                    <table class="table mb-0 fee_table">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">
                                                    Installments For M.Sc. Data Science & Spatial Analytics- Dual Degree Programme (M.Sc. in Data Science & Spatial Analytics — Year 1 at SIG, India; Master of Science Degree – Technical Systems Control – Artificial Intelligence and Space Science — Year 2 at RUDN University, Russia)
                                                    
                                                </th>

                                                <th colspan="2">
                                                    1<sup>st</sup> Year (Amount in Rs.)
                                                </th>

                                                <!-- <th colspan="2">
                                                    2<sup>nd</sup> Year (Amount in Rs.)
                                                </th> -->
                                            </tr>

                                            <tr>
                                                <th>1<sup>st</sup> Installment</th>
                                                <th>2<sup>nd</sup> Installment</th>
                                                <!-- <th>3<sup>rd</sup> Installment</th>
                                                <th>4<sup>th</sup> Installment</th> -->
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Academic Fees (Per Annum)</td>
                                                <td>2,36,250</td>
                                                <td>2,36,250</td>
                                                <!-- <td>1,57,850</td>
                                                <td>1,57,850</td> -->
                                            </tr>

                                            <tr>
                                                <td>Institute Deposit (Refundable)</td>
                                                <td>20,000</td>
                                                <td>-</td>
                                                <!-- <td>-</td>
                                                <td>-</td> -->
                                            </tr>

                                            <tr>
                                                <td>Installments</td>
                                                <td>2,56,250</td>
                                                <td>-</td>
                                                <!-- <td>-</td>
                                                <td>-</td> -->
                                            </tr>

                                            <tr>
                                                <td>Installments pay by date</td>
                                                <td>At the time of Admission</td>
                                                <td>25-Nov-26</td>
                                                <!-- <td>25-Jun-27</td>
                                                <td>25-Nov-27</td> -->
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="fees_notebox">
                                    <strong>Note:</strong>Master of Science (Data Science & Spatial Analytics) at 
                                    Symbiosis Institute of Geoinformatics and Master of Science Degree - Technical Systems Control 
                                    - Artificial Intelligence and Space Science at RUDN University, Russia. Students enrolled in this
                                     program will complete their first year at Symbiosis Institute of Geoinformatics and the second year at RUDN University, Russia.

                                     <br><br>
                                     The fees for the first year will follow the approved fee structure of Symbiosis Institute of Geoinformatics. The fees for the second year will follow the fee structure of RUDN University, Russia.
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