@extends('layouts.app')

@section('title', 'Internal Quality Assurance Cell (IQAC)')

@section('description', 'Access the comprehensive minutes of IQAC meetings at SIG held on 2nd Nov 2018 and 6th June 2019. Stay informed about quality assurance initiatives & discussions.')

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
                        <h1 class="inner_banner_heading"><span>IQAC</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">About</li>
                                <li class="breadcrumb-item active" aria-current="page">IQAC</li>
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

<main class="about_main one_liner_heading">
    <section class="iqac_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pdf_card_wraper">
                        <div class="pdf_card_list">
                            <div class="pdf_card_icon">
                                <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                    class="img-fluid">
                            </div>
                            <div class="pdf_card_conent">
                                <h3 class="pdf_card_heading">Minutes of meeting of IQAC on 2nd November 2018</h3>
                                <h4 class="pdf_card_subheading">IQAC Nov 2018</h4>
                                <a href="{{ asset('assets/pdf/iqac/IQAC_Nov_2018_MoM.pdf') }}"
                                    target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                    <div class="pdf_card_btn_name">Click Here</div>
                                    <div class="pdf_card_btn_icon">
                                        <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                            <path
                                                d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                fill="#000000" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="pdf_card_list">
                            <div class="pdf_card_icon">
                                <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                    class="img-fluid">
                            </div>
                            <div class="pdf_card_conent">
                                <h3 class="pdf_card_heading">Minutes of meeting of IQAC on 6th June 2019</h3>
                                <h4 class="pdf_card_subheading">IQAC June 2019</h4>
                                <a href="{{ asset('assets/pdf/iqac/IQAC_June_2019_MoM.pdf') }}"
                                    target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                    <div class="pdf_card_btn_name">Click Here</div>
                                    <div class="pdf_card_btn_icon">
                                        <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                            <path
                                                d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                fill="#000000" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection