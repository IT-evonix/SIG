@extends('layouts.app')

@section('title', 'Director | Symbiosis Institute of Geoinformatics')

@section('description', 'Explore remarkable journey of Dr. T.P. Singh, an esteemed director at SIG. Delve into his
extensive experience & academic background in Geospatial Technology.')

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
                        <h1 class="inner_banner_heading">Deputy <span>Director</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">About</li>
                                <li class="breadcrumb-item active" aria-current="page">Deputy Director</li>
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
                            <img src="{{ asset('assets/images/user.webp') }}" alt="Director image"
                                class="img-fluid">
                        </div>
                        <div class="director_content_box">
                            <h3 class="director_designation">
                                <span>Message from the Deputy Director</span>
                            </h3>
                            <h2 class="director_name">Lorem ipsum dolor</h2>
                            <p>
                                Welcome to the Symbiosis Institute of Geoinformatics (SIG), where geospatial knowledge
                                combined with Data Science, technology, and innovation come together to address the
                                complex challenges of our rapidly changing world.
                            </p>
                            <p>
                                At SIG, we believe that geospatial technologies are no longer confined to mapping and
                                visualization. They have evolved into powerful tools for understanding patterns,
                                supporting evidence-based decision-making, and creating sustainable solutions across
                                diverse domains. Our academic and research initiatives therefore focus on emerging areas
                                such as Artifical Intelligence, Geospatial Artificial Intelligence (GeoAI), spatial data
                                science, digital technologies, and intelligent geospatial applications.
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
                                        href="mailto:+director@sig.ac.in">director@sig.ac.in</a>
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
                            Our programmes are designed to provide students with a strong foundation in currculum
                            concepts while developing their analytical, technological, and problem-solving capabilities.
                            Through experiential learning, industry interaction, field-based activities, research, and
                            interdisciplinary collaboration, we strive to prepare our students to meet the evolving
                            needs of academia, industry, government, and society.
                        </p>
                        <p>
                            Research and innovation remain central to our vision. We encourage our students and faculty
                            to explore emerging technologies, undertake meaningful research, collaborate with industry
                            and academic institutions, and translate knowledge into solutions with real-world impact.
                        </p>
                        <p>
                            As we move towards a data-driven and technology-enabled future, SIG remains committed to
                            academic excellence, innovation, research, and responsible application of geospatial
                            knowledge. I invite prospective students, researchers, industry professionals, and academic
                            partners to be part of our journey towards shaping a smarter, more sustainable, and
                            spatially enabled future.
                        </p>
                        <p class="m-0">
                            Welcome to SIG—where geospatial knowledge empowers informed decisions and meaningful
                            change.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection