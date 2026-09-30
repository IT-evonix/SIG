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
                        <h1 class="inner_banner_heading"><span>Contact</span> Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Programmes</li>
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
                            <div class="admission_contact_mainbox">
                                <h2 class="inner_heading">
                                    Contact Details of the Admissions Department
                                </h2>
                                <div class="admission_contact_first_wraper">
                                    <div class="admission_contact_firstbox">
                                        <div class="admission_contact_background">
                                            <div class="admission_contact_background_left"></div>
                                            <div class="admission_contact_background_right">
                                                <img src="{{ asset('assets/images/programmes/contact-programmes-about-image.webp') }}"
                                                    alt="SIG image" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="admission_contact_first_content">
                                            <div class="admission_contact_first_content_left">
                                                <div class="admission_contact_first_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/map.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="admission_contact_first_data">
                                                    <div class="admission_contact_first_heading">
                                                        Symbiosis Institute of Geoinformatics (SIG)
                                                    </div>
                                                    <div class="admission_contact_first_content">
                                                        5th Floor, Atur Centre, Gokhale Cross Road, Model Colony, Pune –
                                                        411016
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="admission_contact_first_content_right"></div>
                                        </div>
                                    </div>
                                    <div class="admission_contact_detailbox">
                                        <h3 class="admission_contact_detail_header_heading">Contact Nos</h3>
                                        <div class="admission_contact_detail_wraper">
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
                                                                    d="M0 0a128.55 128.55 0 0 1-90.889-37.646 128.55 128.55 0 0 1-37.644-90.887C-128.533-323.748 29.716-482 224.934-482a128.55 128.55 0 0 1 90.888 37.646 128.55 128.55 0 0 1 37.645 90.887L192.8-289.2l-32.133-80.333h-.017c-97.596 0-176.716 79.118-176.716 176.717v.016l80.333 32.133z"
                                                                    style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                                    transform="translate(143.533 497)" fill="none" stroke="#C4161C"
                                                                    stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                                    data-original="#000000" opacity="1"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="admission_contact_detail_listing_text">
                                                    <div class="admission_contact_detail_listing_text_heading">Landline</div>
                                                    <div class="admission_contact_detail_listing_text_link">
                                                        <a href="tel:+02025672841">020: 25672841</a>/<a href="tel:+02025672843">43</a>
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
                                                                    transform="translate(356.5 15)" fill="none" stroke="#C4161C"
                                                                    stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                                    data-original="#000000" opacity="1"></path>
                                                                <path d="M0 0h286"
                                                                    style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                                    transform="translate(113 102)" fill="none" stroke="#C4161C"
                                                                    stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                                    data-original="#000000" opacity="1"></path>
                                                                <path d="M0 0v-2"
                                                                    style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                                    transform="translate(256 60)" fill="none" stroke="#C4161C"
                                                                    stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                                    data-original="#000000" opacity="1"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="admission_contact_detail_listing_text">
                                                    <div class="admission_contact_detail_listing_text_heading">Mobile</div>
                                                    <div class="admission_contact_detail_listing_text_link">
                                                        <a href="tel:+917709998185">+91 7709998185</a>
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
                                                                    d="M0 0c-19.514 34.714-30.643 74.772-30.643 117.43 0 132.549 108.452 241 241 241 132.549 0 241-108.451 241-241 0-132.548-108.451-241-241-241-42.658 0-82.716 11.13-117.43 30.643l-123.57-30.643z"
                                                                    style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                                    transform="translate(45.643 138.57)" fill="none"
                                                                    stroke="#C4161C" stroke-width="30" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-miterlimit="10"
                                                                    stroke-dasharray="none" stroke-opacity=""
                                                                    data-original="#000000" opacity="1"></path>
                                                                <path
                                                                    d="M0 0c-9.947 9.979-49.872 54.285-35.344 68.813 3.993 3.993 19.959 14.899 26.188 21.128 21.213 21.213-3.125 47.477-18.732 63.084-1.275 1.275-25.3 27.132-57.196-4.765-57.025-57.025 24.258-159.275 49.042-184.302C-11.015-60.827 91.235-142.11 148.261-85.085c31.897 31.897 6.039 55.922 4.764 57.196-15.606 15.607-41.871 39.945-63.084 18.732-6.228-6.229-17.134-22.194-21.128-26.187C54.285-49.873 9.979-9.948 0 0Z"
                                                                    style="stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                                    transform="translate(227.735 227.736)" fill="none"
                                                                    stroke="#C4161C" stroke-width="30" stroke-linecap="butt"
                                                                    stroke-linejoin="miter" stroke-miterlimit="10"
                                                                    stroke-dasharray="none" stroke-opacity=""
                                                                    data-original="#000000" opacity="1"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="admission_contact_detail_listing_text">
                                                    <div class="admission_contact_detail_listing_text_heading">What’s App</div>
                                                    <div class="admission_contact_detail_listing_text_link">
                                                        <a href="https://wa.me/917709998185">+91 7709998185</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="admission_contact_third">
                                        <div class="email_mainbox">
                                            <div class="email_icon">
                                                <svg width="35" height="35" x="0" y="0" viewBox="0 0 100 100">
                                                    <g>
                                                        <path
                                                            d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                            fill="#c4161c" opacity="1" data-original="#000000" class="">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="email_devider"></div>
                                            <div class="email_content">
                                                <div class="admission_contact_detail_header_heading">Email</div>
                                                <a href="mailto:admissions@sig.ac.in">admissions@sig.ac.in</a>
                                            </div>
                                        </div>
                                        <div class="email_mainbox">
                                            <div class="email_icon admission_contact_third_icon">
                                                <img src="{{ asset('assets/images/programmes/icon/group.svg') }}" alt="icon" class="img-fluid">
                                            </div>
                                            <div class="email_devider"></div>
                                            <div class="email_content">
                                                <div class="admission_contact_detail_header_heading mb-2">Contact Person</div>
                                                Ms Sonal Rawal, Admission in-charge <br>
                                                Ms Vrushali Kende, Admission Co-ordinator.
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