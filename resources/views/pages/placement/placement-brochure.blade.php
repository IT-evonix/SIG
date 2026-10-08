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
                        <h1 class="inner_banner_heading">Placement <span>Brochure</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Placements</li>
                                <li class="breadcrumb-item active" aria-current="page">Placement Brochure</li>
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
                            <div class="placement_brochure_mainbox">
                                <div class="pdf_card_wraper">
                                    <div class="pdf_card_list">
                                        <div class="pdf_card_icon">
                                            <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}"
                                                alt="Pdf Icon" class="img-fluid">
                                        </div>
                                        <div class="pdf_card_conent">
                                            <h3 class="pdf_card_heading">M.Sc. Geoinformatics</h3>
                                            <h4 class="pdf_card_subheading">Batch 2025-2027</h4>
                                            <a href="#" target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
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
                                            <h3 class="pdf_card_heading">M.Sc. DSSA</h3>
                                            <h4 class="pdf_card_subheading">Batch 2025-2027</h4>
                                            <a href="#" target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
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
                                            <h3 class="pdf_card_heading">M.Tech. Geoinformatics</h3>
                                            <h4 class="pdf_card_subheading">Batch 2025-2027</h4>
                                            <a href="#" target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
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