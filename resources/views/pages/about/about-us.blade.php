@extends('layouts.app')

@section('title', 'About us | Symbiosis Institute of Geoinformatics')

@section('description', 'At SIG, we empower students with spatial and data science skills, enabling them to chart their
own career paths in these dynamic fields.')

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
                        <h1 class="inner_banner_heading">About <span>SIG</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">About</li>
                                <li class="breadcrumb-item active" aria-current="page">About SIG</li>
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
    <section class="about_us_first_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about_us_first_mainbox">
                        <div class="about_us_first_left">
                            <div class="about_us_first_img_box">
                                <div class="about_us_first_img">
                                    <img src="{{ asset('assets/images/programmes/programmes-about-image.webp') }}"
                                        alt="SIG collage image" class="img-fluid">
                                </div>
                                <div class="about_us_usp_wraper">
                                    <div class="about_us_usp_icon">
                                        <img src="{{ asset('assets/images/programmes/icon/position.svg') }}" alt="Icon"
                                            class="img-fluid">
                                    </div>
                                    <div class="about_us_usp_content">
                                        <div class="about_us_usp_count" data-target="100">0%</div>
                                        <div class="about_us_usp_heading">Campus Project & Placement Record*</div>
                                    </div>
                                </div>
                            </div>
                            <div class="about_us_second_img_box">
                                <img src="{{ asset('assets/images/about/about-us-students.webp') }}" alt="Student image"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="about_us_first_right">
                            <h2 class="inner_heading">Symbiosis Institute of Geoinformatics</h2>
                            <p>
                                India is one of the fastest growing economies and the contribution of Spatial science,
                                Geo intelligence, Data Science and analytics towards growth has been immense. In spite
                                of having gained international recognition at a very early stage, these technologies are
                                gradually gaining popularity in the Indian subcontinent as well. Symbiosis was amongst
                                the first to recognize this brewing change of trends and accordingly took initiatives to
                                start different programmes in these cutting edge technologies. In line with the legacy
                                of Symbiosis, SIG provides its students with the best in terms of education and learning
                                environment. Our programmes have been aimed at not merely educating students but to
                                competent and expert human being to meet the ever-growing demand of Geospatial
                                technology, Artificial Intelligence, Machine Learning, Data Mining, Navigation and
                                e-governance.
                            </p>
                            <div class="about_us_first_card_wrapper">
                                <div class="about_us_first_card_listing">
                                    <div class="about_us_first_card_icon">
                                        <img src="{{ asset('assets/images/programmes/icon/graduate.svg') }}" alt="Icon"
                                            class="img-fluid">
                                    </div>
                                    <div class="about_us_first_card_heading">Industry-Relevant Programmes</div>
                                </div>
                                <div class="about_us_first_card_devider"></div>
                                <div class="about_us_first_card_listing">
                                    <div class="about_us_first_card_icon">
                                        <img src="{{ asset('assets/images/programmes/icon/ai.svg') }}" alt="Icon"
                                            class="img-fluid">
                                    </div>
                                    <div class="about_us_first_card_heading">Emerging Technologies</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_us_second_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about_us_second_listing">
                        <div class="about_us_second_content">
                            <p>
                                At SIG, our endeavor is to impart education and skill in area of Spatial science and
                                data science
                                and analytics to create professionals. It helps students to create their own career
                                roadmap.
                            </p>
                            <p>
                                SIG has an enviable track record of 100% campus project cum placement record of its
                                eligible
                                students since inception and SIG offers a variety of programmes including
                                M.Sc.(Geoinformatics) ,
                                M.Sc. (Data Science & Spatial Analytics), M.Tech (Geoinformatics and Surveying
                                Technology),
                                Certificate Course Photogrammetry and Remote Sensing and customised certificate courses.
                            </p>
                            <p class="m-0">
                                Over the years SIG has identified the key needs of industries and has enriched the
                                syllabus in terms
                                of both theory and practical. We take all the efforts to pedagogue various aspects of
                                training from
                                basic mapping science to GIS development, data mining to decision-making, soft skills
                                and
                                Personality development.
                            </p>
                        </div>
                        <div class="about_us_second_img">
                            <img src="{{ asset('assets/images/about/about-sd-image.webp') }}" alt="About image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vission_mission_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="vision_mission_mainbox">
                        <div class="vision_mission_leftbox">
                            <div class="vision_imgbox">
                                <img src="{{ asset('assets/images/about/vision-image.webp') }}" alt="Vision image"
                                    class="img-fluid">
                            </div>
                            <div class="vision_content">
                                <h3 class="vision_mission_heading">Our Vision</h3>
                                <p class="m-0 vision_para">
                                    Promoting international understanding through quality education
                                </p>
                            </div>
                        </div>
                        <div class="vision_mission_right">
                            <div class="vision_mission_right_background">
                                <img src="{{ asset('assets/images/programmes/contact-programmes-about-image.webp') }}"
                                    alt="SIG image" class="img-fluid">
                            </div>
                            <div class="mission_box_wraper">
                                <h3 class="vision_mission_heading">Our Mission</h3>
                                <ul class="custom_listing">
                                    <li>To inculcate the spirit of 'Vasudhaiva Kutumbakam' (the world is one family)
                                    </li>
                                    <li>To contribute towards knowledge generation and dissemination</li>
                                    <li>To promote ethical and value-based learning</li>
                                    <li>To foster the spirit of national development</li>
                                    <li>To inculcate cross-cultural sensitization</li>
                                    <li>To develop global competencies amongst students</li>
                                    <li>To nurture creativity and encourage entrepreneurship</li>
                                    <li>To enhance employability and contribute to human resource development</li>
                                    <li>To promote health and wellness amongst students, staff and the community</li>
                                    <li>To instil sensitivity amongst the youth towards the community and environment
                                    </li>
                                    <li>To produce thought provoking leaders for the society</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection