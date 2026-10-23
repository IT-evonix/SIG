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
                        <h1 class="inner_banner_heading">Stakeholder <span>Feedback</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">M.Sc. in DSSA</li>
                                <li class="breadcrumb-item active" aria-current="page">Stakeholder Feedback</li>
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
                            <div class="stakeholder_feedback_mainbox">
                                <div class="pdf_card_wraper">
                                    <div class="pdf_card_list">
                                        <div class="pdf_card_icon">
                                            <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}"
                                                alt="Pdf Icon" class="img-fluid">
                                        </div>
                                        <div class="pdf_card_conent">
                                            <h3 class="pdf_card_heading">Stakeholder Feedback</h3>
                                            <h4 class="pdf_card_subheading">A.Y. 2024-25</h4>
                                            <a href="{{ asset('assets/pdf/stakeholder-feedback/msc-dssa-stakeholder-feedback-2024-25.pdf') }}" target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
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
                                            <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}"
                                                alt="Pdf Icon" class="img-fluid">
                                        </div>
                                        <div class="pdf_card_conent">
                                            <h3 class="pdf_card_heading">Stakeholder Feedback</h3>
                                            <h4 class="pdf_card_subheading">A.Y. 2022-23</h4>
                                            <a href="{{ asset('assets/pdf/stakeholder-feedback/msc-dssa-stakeholder-feedback-2022-23.pdf') }}" target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
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
                                            <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}"
                                                alt="Pdf Icon" class="img-fluid">
                                        </div>
                                        <div class="pdf_card_conent">
                                            <h3 class="pdf_card_heading">Stakeholder Feedback</h3>
                                            <h4 class="pdf_card_subheading">A.Y. 2021-22</h4>
                                            <a href="{{ asset('assets/pdf/stakeholder-feedback/msc-dssa-stakeholder-feedback-2021-22.pdf') }}" target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
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
                                            <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}"
                                                alt="Pdf Icon" class="img-fluid">
                                        </div>
                                        <div class="pdf_card_conent">
                                            <h3 class="pdf_card_heading">Stakeholder Feedback</h3>
                                            <h4 class="pdf_card_subheading">A.Y. 2020-21</h4>
                                            <a href="{{ asset('assets/pdf/stakeholder-feedback/msc-dssa-stakeholder-feedback-2020-21.pdf') }}" target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
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
                                            <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}"
                                                alt="Pdf Icon" class="img-fluid">
                                        </div>
                                        <div class="pdf_card_conent">
                                            <h3 class="pdf_card_heading">Stakeholder Feedback</h3>
                                            <h4 class="pdf_card_subheading">A.Y. 2019-20</h4>
                                            <a href="{{ asset('assets/pdf/stakeholder-feedback/msc-dssa-stakeholder-feedback-2019-20.pdf') }}" target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
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
                </div>
            </div>
        </div>
    </section>
</main>

@endsection