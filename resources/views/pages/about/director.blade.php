@extends('layouts.app')

@section('title', 'Director | Symbiosis Institute of Geoinformatics')

@section('description', 'Explore remarkable journey of Dr. T.P. Singh, an esteemed director at SIG. Delve into his extensive experience & academic background in Geospatial Technology.')

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
                        <h1 class="inner_banner_heading"><span>Director</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">About</li>
                                <li class="breadcrumb-item active" aria-current="page">Director</li>
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

<main class="about_main">
    <section class="director_first_section">
        <div class="director_first_backgroundbox">
            <div class="director_first_backgroundbox_left"></div>
            <div class="director_first_backgroundbox_right"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="director_mainbox">
                        <div class="director_imgbox">
                            <img src="{{ asset('assets/images/about/director.webp') }}" alt="Director image"
                                class="img-fluid">
                        </div>
                        <div class="director_content_box">
                            <h3 class="director_designation">
                                <span>Message from the Director</span>
                            </h3>
                            <h2 class="director_name">Dr. (Prof.) T. P. Singh</h2>
                            <p>
                                Geospatial and Data science stands today at the confluence of integration of frontier
                                technology with the fundamental science, reshaping how we understand and manage our
                                planet. Data and spatial data intelligence has become the backbone of evidence-based
                                decision-making across governments, industry, and research. At the Symbiosis Institute
                                of Geoinformatics (SIG), our academic programmes designed to place students at the very
                                center of this transformation. Our programmes gives students a strong foundation
                                subjects layered with hands-on exposure to frontier technology. The curriculum
                                continuously updated to reflect emerging techniques, ensuring our graduates are equally
                                comfortable in the field and at the workstation. An industry-aligned curriculum-spanning
                                spectrum of technology, culminating in a mandatory two-month industry internship. This
                                structure deliberately aligned with the needs of different sectors.
                            </p>
                            <div class="director_contact_wrapper">
                                <div class="director_contact_listing">
                                    <div class="director_contact_icon">
                                        <svg width="18" height="18" x="0" y="0" viewBox="0 0 682.667 682.667">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#ffffff" opacity="1"
                                                            data-original="#000000"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)"
                                                    transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path
                                                        d="M0 0a128.55 128.55 0 0 1-90.889-37.646 128.55 128.55 0 0 1-37.644-90.887C-128.533-323.748 29.716-482 224.934-482a128.55 128.55 0 0 1 90.888 37.646 128.55 128.55 0 0 1 37.645 90.887L192.8-289.2l-32.133-80.333h-.017c-97.596 0-176.716 79.118-176.716 176.717v.016l80.333 32.133z"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(143.533 497)" fill="none" stroke="#ffffff"
                                                        stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000" opacity="1"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <a class="director_contact_link" href="tel:+02025672842">020 - 25672842</a>
                                </div>
                                <div class="director_contact_devider"></div>
                                <div class="director_contact_listing">
                                    <div class="director_contact_icon">
                                        <svg width="20" height="20" x="0" y="0" viewBox="0 0 100 100">
                                            <g>
                                                <path
                                                    d="M87 24H25c-4.4 0-8 3.6-8 8v3c0 1.1.9 2 2 2s2-.9 2-2v-3c0-.4.1-.8.2-1.2L43.6 50 21.2 69.2c-.1-.4-.2-.8-.2-1.2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 4.4 3.6 8 8 8h62c4.4 0 8-3.6 8-8V32c0-4.4-3.6-8-8-8m-62.8 4.1c.2-.1.5-.1.8-.1h62c.3 0 .6 0 .8.1L57.3 54.2c-.8.6-1.8.6-2.6 0zM87 72H25c-.3 0-.6 0-.8-.1l22.5-19.3 5.4 4.7c1.1 1 2.5 1.5 3.9 1.5s2.8-.5 3.9-1.5l5.4-4.7 22.5 19.3c-.2.1-.5.1-.8.1m4-4c0 .4-.1.8-.2 1.2L68.4 50l22.4-19.2c.1.4.2.8.2 1.2zM11 45c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2s-.9 2-2 2H13c-1.1 0-2-.9-2-2m14 12H7c-1.1 0-2-.9-2-2s.9-2 2-2h18c1.1 0 2 .9 2 2s-.9 2-2 2"
                                                    fill="#ffffff" opacity="1" data-original="#000000" class="">
                                                </path>
                                            </g>
                                        </svg>
                                    </div>
                                    <a class="director_contact_link"
                                        href="mailto:director@sig.ac.in">director@sig.ac.in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="director_second_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="director_second_maonbox">
                        <p>
                            In a step that reflects our commitment to global academic collaboration, SIG now offers a Dual Degree M.Sc. programme in Artificial Intelligence and Space Science in partnership with RUDN University, Russia. This programme brings together SIG's strength in data sciences and spatial science with RUDN's expertise in space science and AI research, giving students an internationally benchmarked qualification, exposure to a different academic ecosystem, and a genuinely global perspective on the future of AI-driven technologies.
                        </p>
                        <p class="m-0">
                            It is immensely gratifying that our students continue to receive a strong and consistent response from industry across diverse sectors. Recruiters returning to our campus year after year, and the breadth of sectors they represent, is a direct reflection of the strength of our curriculum and the rigor with which it delivered. Geospatial and Data Science today underpins nearly every major national mission from PM Gati Shakti and the Smart Cities Mission to disaster management, water resource planning, precision agriculture, Banking, Health, Insurance, e- governance and defense preparedness. As India moves towards the vision of Viksit Bharat 2047, the country's ability to plan, monitor, and govern its resources depends critically on a skilled workforce that can turn data into actionable intelligence. SIG sees itself as a direct contributor to this national effort not merely as an academic institute, but as a human-resource engine for India's geospatial and Data-driven economy. SIG is not only building careers for individual students but is steadily building the trained, technically capable workforce that a developed India will need to plan its cities, secure its borders, manage its resources, secure its financial sector  and compete in the global space and AI economy. My commitment, and that of our entire faculty, is to ensure that every SIG graduate steps into this future not merely prepared, but positioned to lead it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection