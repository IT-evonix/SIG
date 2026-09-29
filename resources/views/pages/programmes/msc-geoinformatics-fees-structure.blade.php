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
                            <div class="fees_structure_mainbox">
                                <h2 class="inner_heading">Batch: 2026-2028</h2>
                                <div class="table-responsive">
                                    <table class="table mb-0 fee_table">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">
                                                    Installments for Master of Science
                                                    <span>(Geoinformatics)</span>
                                                    <span>(Indian Students)</span>
                                                </th>

                                                <th colspan="2">
                                                    1<sup>st</sup> Year (Amount in Rs.)
                                                </th>

                                                <th colspan="2">
                                                    2<sup>nd</sup> Year (Amount in Rs.)
                                                </th>
                                            </tr>

                                            <tr>
                                                <th>1<sup>st</sup> Installment</th>
                                                <th>2<sup>nd</sup> Installment</th>
                                                <th>3<sup>rd</sup> Installment</th>
                                                <th>4<sup>th</sup> Installment</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Academic Fees (Per Annum)</td>
                                                <td>1,57,850</td>
                                                <td>1,57,850</td>
                                                <td>1,57,850</td>
                                                <td>1,57,850</td>
                                            </tr>

                                            <tr>
                                                <td>Institute Deposit (Refundable)</td>
                                                <td>20,000</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>

                                            <tr>
                                                <td>Installments</td>
                                                <td>1,77,850</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>

                                            <tr>
                                                <td>Installments pay by date</td>
                                                <td>At the time of Admission</td>
                                                <td>25-Nov-26</td>
                                                <td>25-Jun-27</td>
                                                <td>25-Nov-27</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="fees_notebox">
                                    <strong>Note:</strong> **Hostel and Mess Fees for the Subsequent year would be communicated before commencement of the next year.
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