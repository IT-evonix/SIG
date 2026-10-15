@extends('layouts.app')

@section('title', 'Geoinformatics courses in India | SIG Pune | Placements at SIG')

@section('description', 'Discover placement stats, procedures, and guidelines at SIG. Enhance your prospects for
placement opportunities. Get more details here.')

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
                        <h1 class="inner_banner_heading">Contact <span>Us</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Placements</li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">Placements at SIG</h3>
                            @include('components.placements-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="placement_contact_mainbox">
                                <div class="admission_contact_detailbox">
                                    <h3 class="admission_contact_detail_header_heading">Prashant Parekar</h3>
                                    <div class="placement_contact_designation">Placement Supervisor</div>
                                    <div class="admission_contact_detail_wraper">
                                        <div class="admission_contact_detail_listing">
                                            <div class="admission_contact_detail_listing_icon">
                                                <svg width="16" height="16" x="0" y="0" viewBox="0 0 100 100">
                                                <g>
                                                    <path
                                                        d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                        fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                    </path>
                                                </g>
                                            </svg>
                                            </div>
                                            <div class="admission_contact_detail_listing_text">
                                                <div class="admission_contact_detail_listing_text_heading">Email
                                                </div>
                                                <div class="admission_contact_detail_listing_text_link">
                                                    <a href="mailto:sigplacement@sig.ac.in">sigplacement@sig.ac.in</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="admission_contact_detail_listing">
                                            <div class="admission_contact_detail_listing_icon">
                                                <svg width="16" height="16" x="0" y="0" viewBox="0 0 682.667 682.667">
                                                    <g>
                                                        <defs>
                                                            <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                                <path d="M0 512h512V0H0Z" fill="#C4161C" opacity="1"
                                                                    data-original="#000000"></path>
                                                            </clipPath>
                                                        </defs>
                                                        <g clip-path="url(#a)"
                                                            transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                            <path
                                                                d="M0 0h-201c-23.472 0-42.5 19.028-42.5 42.5v397.001c0 23.472 19.028 42.5 42.5 42.5H0c23.472 0 42.5-19.028 42.5-42.5V42.5C42.5 19.028 23.472 0 0 0"
                                                                style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                                transform="translate(356.5 15)" fill="none"
                                                                stroke="#C4161C" stroke-width="30"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-miterlimit="10" stroke-dasharray="none"
                                                                stroke-opacity="" data-original="#000000" opacity="1">
                                                            </path>
                                                            <path d="M0 0h286"
                                                                style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                                transform="translate(113 102)" fill="none"
                                                                stroke="#C4161C" stroke-width="30"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-miterlimit="10" stroke-dasharray="none"
                                                                stroke-opacity="" data-original="#000000" opacity="1">
                                                            </path>
                                                            <path d="M0 0v-2"
                                                                style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                                transform="translate(256 60)" fill="none"
                                                                stroke="#C4161C" stroke-width="30"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-miterlimit="10" stroke-dasharray="none"
                                                                stroke-opacity="" data-original="#000000" opacity="1">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="admission_contact_detail_listing_text">
                                                <div class="admission_contact_detail_listing_text_heading">Mobile
                                                </div>
                                                <div class="admission_contact_detail_listing_text_link">
                                                    <a href="tel:+918180844831">+91 8180844831</a>
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