@extends('layouts.app')

@section('title', 'Best College for Geoinformatics & MSc Data Science in India - SIG')

@section('description', 'SIG is among the best Geoinformatics & MSc Data Science colleges in India. Explore
industry-focused courses and build a future-ready career. Apply now!')

@section('banner')
<div class="banner_mainbox">
    <div class="banner_listing">
        <div class="banner_imgbox">
            <img src="{{ asset('assets/images/home/banner-image.webp') }}" alt="Banner Image" class="img-fluid desktop_banner_image">
            <img src="{{ asset('assets/images/home/mobile-banner-image.webp') }}" alt="Banner Image" class="img-fluid mobile_banner_image">
        </div>
        <div class="container">
            <div class="col-lg-12">
                <div class="banner_content_box">
                    <div class="banner_content_box_left">
                        <h1 class="top_heading">
                            <span class="top_heading_red">MAPS</span>
                            <span>TODAY,</span>
                            <span class="top_heading_red">BETTER</span>
                            <span class="top_heading_yellow">TOMORROW</span>
                        </h1>
                        <p class="heading_para">
                            Empowering future professionals in Geoinformatics and Data Science to solve real-world
                            challenges for a sustainable planet.
                        </p>
                        <div class="banner_btn_box">
                            <div class="my_btn_box">
                                <a href="">Explore Programs</a>
                            </div>
                            <div class="my_btn_box">
                                <a href="">Explore Programs</a>
                            </div>
                        </div>
                    </div>
                    <div class="banner_content_box_right"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('content')

<main class="home_main">
    <!-- Announcement section start -->
    <section class="announcement_section">
        <div class="announcement_left_box">
            Announcement
        </div>
        <div class="announcement_right_box">
            <div class="announcement_track">
                <div class="announcement_listing">
                    SIG's M.Sc Geoinformatics & M.Sc Data Science & Spatial Analytics Programmes Gain Global Recognition
                    Under QS Ranking (351–400)
                </div>
                <div class="announcement_listing">
                    SIG's M.Sc Geoinformatics & M.Sc Data Science & Spatial Analytics Programmes Gain Global Recognition
                    Under QS Ranking (351–400)
                </div>
                <div class="announcement_listing">
                    SIG's M.Sc Geoinformatics & M.Sc Data Science & Spatial Analytics Programmes Gain Global Recognition
                    Under QS Ranking (351–400)
                </div>

                <!-- duplicate set — required for seamless infinite loop -->
                <div class="announcement_listing">
                    SIG's M.Sc Geoinformatics & M.Sc Data Science & Spatial Analytics Programmes Gain Global Recognition
                    Under QS Ranking (351–400)
                </div>
                <div class="announcement_listing">
                    SIG's M.Sc Geoinformatics & M.Sc Data Science & Spatial Analytics Programmes Gain Global Recognition
                    Under QS Ranking (351–400)
                </div>
                <div class="announcement_listing">
                    SIG's M.Sc Geoinformatics & M.Sc Data Science & Spatial Analytics Programmes Gain Global Recognition
                    Under QS Ranking (351–400)
                </div>
            </div>
        </div>
    </section>
    <!-- Announcement section ends -->
    <!-- Legacy and Program offred section start -->
    <section class="combine_section">
        <!-- <div class="combined_background_img">
            <img src="{{ asset('assets/images/home/combine-background.webp') }}" alt="Background Image" class="img-fluid">
        </div> -->
        <section class="legacy_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="heading">
                            SIG <span>LEGACY</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="legacy_mainbox">
                <div class="legacy_listing">
                    <div class="legacy_listing_black">
                        <div class="inner_legacy_listing">
                            <div class="legacy_listing_icon">
                                <img src="{{ asset('assets/images/home/legacy-01.svg') }}" alt="Icon" class="img-fluid">
                            </div>
                            <div class="legacy_listing_content">
                                <div class="legacy_listing_number" data-target="23">0+</div>
                                <div class="legacy_listing_text">Years of Excellence</div>
                            </div>
                        </div>
                        <div class="inner_legacy_listing">
                            <div class="legacy_listing_icon">
                                <img src="{{ asset('assets/images/home/legacy-02.svg') }}" alt="Icon" class="img-fluid">
                            </div>
                            <div class="legacy_listing_content">
                                <div class="legacy_listing_number" data-target="2500">0+</div>
                                <div class="legacy_listing_text">Alumni Network</div>
                            </div>
                        </div>
                    </div>
                    <div class="legacy_listing_red">
                        <img src="{{ asset('assets/images/home/naac-image.webp') }}" alt="Naac Icon" class="img-fluid">
                    </div>
                    <div class="legacy_listing_black">
                        <div class="inner_legacy_listing">
                            <div class="legacy_listing_icon">
                                <img src="{{ asset('assets/images/home/legacy-03.svg') }}" alt="Icon" class="img-fluid">
                            </div>
                            <div class="legacy_listing_content">
                                <div class="legacy_listing_number" data-target="50">0+</div>
                                <div class="legacy_listing_text">Recruiters Every Year</div>
                            </div>
                        </div>
                        <div class="inner_legacy_listing">
                            <div class="legacy_listing_icon">
                                <img src="{{ asset('assets/images/home/legacy-04.svg') }}" alt="Icon" class="img-fluid">
                            </div>
                            <div class="legacy_listing_content">
                                <div class="legacy_listing_number" data-target="100">0+</div>
                                <div class="legacy_listing_text">Industry & Academic Collaborations</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="program_offered_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="heading">PROGRAMS <span>OFFERED</span></h2>
                        <p class="heading_para">
                            Our diverse programs are thoughtfully designed to foster innovation, critical thinking, and
                            professional excellence. Learn from experienced faculty, engage in experiential learning,
                            and build a strong foundation for lifelong success.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="program_offered_wrap">
                            <div class="program_offered_mainbox" id="programSlider">
                                <div class="program_offered_listing">
                                    <div class="program_offered_listing_img">
                                        <img src="{{ asset('assets/images/home/program-offered-01.webp') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <h3 class="program_offered_listing_heading">M.Sc. Geoinformatics</h3>
                                </div>
                                <div class="program_offered_listing">
                                    <div class="program_offered_listing_img">
                                        <img src="{{ asset('assets/images/home/program-offered-02.webp') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <h3 class="program_offered_listing_heading">M.Sc. Data Science</h3>
                                </div>
                                <div class="program_offered_listing">
                                    <div class="program_offered_listing_img">
                                        <img src="{{ asset('assets/images/home/program-offered-03.webp') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <h3 class="program_offered_listing_heading">Spatial Analytics</h3>
                                </div>
                                <div class="program_offered_listing">
                                    <div class="program_offered_listing_img">
                                        <img src="{{ asset('assets/images/home/program-offered-04.webp') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <h3 class="program_offered_listing_heading">M.Tech. Geoinformatics & Surveying
                                        Technology</h3>
                                </div>
                            </div>
                            <div class="program_offered_nav">
                                <button class="program_nav_btn prev" id="programPrev" aria-label="Previous">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                        <path d="M15 19L8 12L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <button class="program_nav_btn next" id="programNext" aria-label="Next">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                        <path d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Legacy and Program offred section ends -->
    <!-- News and events section start -->
    <section class="home_news_event_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="heading">
                        News & <span>Events</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="home_n_e_mainbox">
                        <div class="home_n_e_leftbox">
                            <div class="home_n_e_listing">
                                <div class="home_n_e_listing_left">
                                    <img src="{{ asset('assets/images/home/news-event.webp') }}" alt="News Event Image"
                                        class="img-fluid">
                                </div>
                                <div class="home_n_e_listing_right">
                                    <div class="home_n_e_listing_date">Feb 20, 2026</div>
                                    <h4 class="home_n_e_listing_heading">GeoAI and Future Prospects</h4>
                                    <p class="home_n_e_listing_para">
                                        Industry webinar featuring Dr. Vijay Kumar (CTO, ESRI India) discussing GeoAI,
                                        AI trends, and future career opportunities in Geoinformatics.
                                    </p>
                                </div>
                                <div class="home_n_e_listing_icon">
                                    <img src="{{ asset('assets/images/home/news-event-background.webp') }}"
                                        alt="News Event Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="home_n_e_listing">
                                <div class="home_n_e_listing_left">
                                    <img src="{{ asset('assets/images/home/news-event.webp') }}" alt="News Event Image"
                                        class="img-fluid">
                                </div>
                                <div class="home_n_e_listing_right">
                                    <div class="home_n_e_listing_date">Feb 20, 2026</div>
                                    <h4 class="home_n_e_listing_heading">GeoAI and Future Prospects</h4>
                                    <p class="home_n_e_listing_para">
                                        Industry webinar featuring Dr. Vijay Kumar (CTO, ESRI India) discussing GeoAI,
                                        AI trends, and future career opportunities in Geoinformatics.
                                    </p>
                                </div>
                                <div class="home_n_e_listing_icon">
                                    <img src="{{ asset('assets/images/home/news-event-background.webp') }}"
                                        alt="News Event Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="home_n_e_listing">
                                <div class="home_n_e_listing_left">
                                    <img src="{{ asset('assets/images/home/news-event.webp') }}" alt="News Event Image"
                                        class="img-fluid">
                                </div>
                                <div class="home_n_e_listing_right">
                                    <div class="home_n_e_listing_date">Feb 20, 2026</div>
                                    <h4 class="home_n_e_listing_heading">GeoAI and Future Prospects</h4>
                                    <p class="home_n_e_listing_para">
                                        Industry webinar featuring Dr. Vijay Kumar (CTO, ESRI India) discussing GeoAI,
                                        AI trends, and future career opportunities in Geoinformatics.
                                    </p>
                                </div>
                                <div class="home_n_e_listing_icon">
                                    <img src="{{ asset('assets/images/home/news-event-background.webp') }}"
                                        alt="News Event Image" class="img-fluid">
                                </div>
                            </div>

                        </div>
                        <div class="home_n_e_right">
                            <div class="home_n_e_right_video">
                                <img src="{{ asset('assets/images/home/news-event-2.webp') }}" alt="" class="img-fluid"
                                    loading="lazy">
                            </div>
                            <div class="home_n_e_right_video_icon">
                                <svg width="80" height="80" x="0" y="0" viewBox="0 0 512 512">
                                    <g>
                                        <circle cx="256.5" cy="256" r="256" fill="#ffffff"
                                            transform="rotate(-45 256.472 256.066)" opacity="0.2901960784313726"
                                            data-original="#2497f3"></circle>
                                        <path fill="#ffffff" fill-rule="evenodd"
                                            d="m383.55 233.228-172.85-99.79a26.3 26.3 0 0 0-39.44 22.762v199.6a26.04 26.04 0 0 0 13.14 22.77 26.07 26.07 0 0 0 26.3 0l172.85-99.8a26.3 26.3 0 0 0 0-45.54z"
                                            opacity="1" data-original="#ffffff"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News and events section ends -->
    <!-- Testiomonial section start  -->
    <section class="testimonial_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="heading">what <span>people say</span></h2>
                    <p class="heading_para">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley,
                        thae librarian at St Bride Printing Library in London, took a 1914 Cicero translation
                    </p>
                </div>
            </div>
        </div>
        <div class="marquee-section">
            <!-- ROW 1 : moves Left to Right -->
            <div class="marquee-viewport">
                <div class="marquee-track reverse">
                    <!-- Set A (4 cards) -->
                    <div class="team-card bg-cream">
                        <img src="{{ asset('assets/images/home/testi-01.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                    <div class="team-card bg-pink">
                        <img src="{{ asset('assets/images/home/testi-02.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                    <div class="team-card bg-blue">
                        <img src="{{ asset('assets/images/home/testi-03.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                    <div class="team-card bg-lblue">
                        <img src="{{ asset('assets/images/home/testi-04.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                    <!-- Set B — EXACT duplicate of Set A above (required for seamless loop) -->
                    <div class="team-card bg-cream">
                        <img src="{{ asset('assets/images/home/testi-05.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                    <div class="team-card bg-pink">
                        <img src="{{ asset('assets/images/home/testi-01.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                    <div class="team-card bg-blue">
                        <img src="{{ asset('assets/images/home/testi-02.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                    <div class="team-card bg-lblue">
                        <img src="{{ asset('assets/images/home/testi-03.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ROW 2 : moves Right to Left -->
            <div class="marquee-viewport">
                <div class="marquee-track">

                    <!-- Set A (4 cards) -->
                    <div class="team-card bg-gray">
                        <img src="{{ asset('assets/images/home/testi-05.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                    <div class="team-card bg-lblue">
                        <img src="{{ asset('assets/images/home/testi-04.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                    <div class="team-card bg-peach">
                        <img src="{{ asset('assets/images/home/testi-03.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                    <div class="team-card bg-cream">
                        <img src="{{ asset('assets/images/home/testi-02.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                    <!-- Set B — EXACT duplicate of Set A above (required for seamless loop) -->
                    <div class="team-card bg-gray">
                        <img src="{{ asset('assets/images/home/testi-01.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                    <div class="team-card bg-lblue">
                        <img src="{{ asset('assets/images/home/testi-03.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                    <div class="team-card bg-peach">
                        <img src="{{ asset('assets/images/home/testi-04.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                    <div class="team-card bg-cream">
                        <img src="{{ asset('assets/images/home/testi-02.png') }}" class="team-img" alt="">
                        <div class="team-text">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- Testiomonial section ends  -->
    <!-- Scholarship section start  -->
    <section class="scholorship_section">
        <div class="scholorship_background_imgbox">
            <img src="{{ asset('assets/images/home/scholarship-background.webp') }}" alt="Scholarships Background image"
                class="img-fluid" loading="lazy">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="scholar_red_firstbox">
                        <div class="scholar_mainbox">
                            <div class="scholar_main_leftbox">
                                <h2 class="heading">Scholarships</h2>
                                <h3 class="card_subheading">Empowering Students Through Financial Assistance</h3>
                                <p>
                                    At our institution, we believe that financial constraints should never hinder
                                    academic excellence. A variety of scholarship opportunities are available to
                                    recognize merit, support deserving students, and encourage holistic development.
                                    These initiatives help students pursue their educational goals with confidence while
                                    reducing their financial burden.
                                </p>
                                <div class="my_btn_box">
                                    <a href="">Explore Scholarships</a>
                                </div>
                            </div>
                            <div class="scholar_main_rightbox"></div>
                        </div>
                        <div class="scholar_red_firstbox_img">
                            <img src="{{ asset('assets/images/home/girl-image.webp') }}" alt="Girl image"
                                class="img-fluid" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Scholarship section ends  -->
</main>

<!-- <img src="{{ asset('storage/images/logo.png') }}" alt="Logo"> -->

@endsection