@extends('layouts.app')

@section('title', 'Gain Insights on Data Science and Geoinformatics - SIG Blog')

@section('description', 'Stay updated with the latest data science and geoinformatics trends on our blog. Get inspired
by insights from our directors, faculty, alumni, and students.')

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
                        <h1 class="inner_banner_heading"><span>Blog</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
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

<main class="blog_list_main">
    <section class="blog_card_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_card_mainbox">
                        <div class="blog_card_first_row">
                            <div class="blog_card_headingbox">
                                <h2 class="inner_heading">Latest Blogs</h2>
                            </div>
                            <div class="blog_filter_bar">
                                <div class="blog_filter_search">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                        <circle cx="11" cy="11" r="7" stroke="#999" stroke-width="2" />
                                        <path d="M21 21L16.65 16.65" stroke="#999" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                    <input type="text" placeholder="Search blogs..." class="form-control">
                                </div>
                                <div class="blog_search_btns">
                                    <div class="my_btn_box">
                                        <a href="">Reset</a>
                                    </div>
                                    <div class="my_btn_box">
                                        <a href="">Search</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog_list_mainbox">
                            <div class="blog_card">
                                <div class="blog_card_img">
                                    <img src="{{ asset('assets/images/blog/blog-1.webp') }}" alt="Blog Image"
                                        class="img-fluid">
                                </div>
                                <div class="blog_card_overlay">
                                    <div class="blog_card_top_content">
                                        <div class="blog_card_top_row">
                                            <div class="blog_card_category blog_student_badge">Student</div>
                                            <div class="blog_card_top_right">
                                                <div class="blog_card_top_right_list">
                                                    <div class="blog_card_top_right_list_icon"></div>
                                                    <div class="blog_card_top_right_list_name">Admin</div>
                                                </div>
                                                <div class="blog_card_top_right_list">
                                                    <div class="blog_card_top_right_list_icon"></div>
                                                    <div class="blog_card_top_right_list_name">June 18, 2024</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog_card_bottom_row">
                                            <h3 class="blog_card_title">Data Science Education and Curriculum
                                                Development
                                            </h3>
                                            <p class="blog_card_desc m-0">
                                                Data science has indeed become an enlightening power in the dynamic
                                                world of
                                                technology and information, paving the way for decision development in
                                                businesses, health, and technology.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="blog_card_top_button">
                                        <a href="">
                                            <svg width="18" height="18" x="0" y="0" viewBox="0 0 24 24">
                                                <g>
                                                    <path
                                                        d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_card">
                                <div class="blog_card_img">
                                    <img src="{{ asset('assets/images/blog/blog-2.webp') }}" alt="Blog Image"
                                        class="img-fluid">
                                </div>
                                <div class="blog_card_overlay">
                                    <div class="blog_card_top_content">
                                        <div class="blog_card_top_row">
                                            <div class="blog_card_category blog_faculty_badge">Faculty</div>
                                            <div class="blog_card_top_right">
                                                <div class="blog_card_top_right_list">
                                                    <div class="blog_card_top_right_list_icon"></div>
                                                    <div class="blog_card_top_right_list_name">
                                                        Dr. Vidya Patkar
                                                    </div>
                                                </div>
                                                <div class="blog_card_top_right_list">
                                                    <div class="blog_card_top_right_list_icon"></div>
                                                    <div class="blog_card_top_right_list_name">April 3, 2024</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog_card_bottom_row">
                                            <h3 class="blog_card_title">
                                                Top 10 Factors to Consider while Choosing the Best Institute for Data
                                                Science
                                            </h3>
                                            <p class="blog_card_desc m-0">
                                                In the rapidly evolving field of data science, choosing the right
                                                institute
                                                for your education is a crucial decision that can shape your career.
                                                With a
                                                plethora of options available, it can be overwhelming to select the one
                                                that
                                                aligns perfectly with your career goals, learning style, and personal
                                                circumstances.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="blog_card_top_button">
                                        <a href="">
                                            <svg width="18" height="18" x="0" y="0" viewBox="0 0 24 24">
                                                <g>
                                                    <path
                                                        d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_card">
                                <div class="blog_card_img">
                                    <img src="{{ asset('assets/images/blog/blog-3.webp') }}" alt="Blog Image"
                                        class="img-fluid">
                                </div>
                                <div class="blog_card_overlay">
                                    <div class="blog_card_top_content">
                                        <div class="blog_card_top_row">
                                            <div class="blog_card_category blog_faculty_badge">Faculty</div>
                                            <div class="blog_card_top_right">
                                                <div class="blog_card_top_right_list">
                                                    <div class="blog_card_top_right_list_icon"></div>
                                                    <div class="blog_card_top_right_list_name">Dr. Yogesh Rajput</div>
                                                </div>
                                                <div class="blog_card_top_right_list">
                                                    <div class="blog_card_top_right_list_icon"></div>
                                                    <div class="blog_card_top_right_list_name">March 29, 2023</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog_card_bottom_row">
                                            <h3 class="blog_card_title">Blockchain Technology</h3>
                                            <p class="blog_card_desc m-0">
                                                potential to revolutionize the way we store and share data. At its core,
                                                blockchain is a decentralized digitalledger that records transactions in
                                                a
                                                secure and transparent manner.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="blog_card_top_button">
                                        <a href="">
                                            <svg width="18" height="18" x="0" y="0" viewBox="0 0 24 24">
                                                <g>
                                                    <path
                                                        d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_card">
                                <div class="blog_card_img">
                                    <img src="{{ asset('assets/images/blog/blog-4.webp') }}" alt="Blog Image"
                                        class="img-fluid">
                                </div>
                                <div class="blog_card_overlay">
                                    <div class="blog_card_top_content">
                                        <div class="blog_card_top_row">
                                            <div class="blog_card_category blog_faculty_badge">Faculty</div>
                                            <div class="blog_card_top_right">
                                                <div class="blog_card_top_right_list">
                                                    <div class="blog_card_top_right_list_icon"></div>
                                                    <div class="blog_card_top_right_list_name">Sahil Shah</div>
                                                </div>
                                                <div class="blog_card_top_right_list">
                                                    <div class="blog_card_top_right_list_icon"></div>
                                                    <div class="blog_card_top_right_list_name">March 28, 2023</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog_card_bottom_row">
                                            <h3 class="blog_card_title">Data Science – Skills & Career Opportunities –
                                                SIG
                                                Blog</h3>
                                            <p class="blog_card_desc m-0">
                                                It is widely believed that data has surpassed oil in capability.
                                                Regardless
                                                of whether this is true or not, the truth remains that data, like oil,
                                                has
                                                little value unless it is properly mined and handled (i.e. processed).
                                            </p>
                                        </div>
                                    </div>
                                    <div class="blog_card_top_button">
                                        <a href="">
                                            <svg width="18" height="18" x="0" y="0" viewBox="0 0 24 24">
                                                <g>
                                                    <path
                                                        d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_card">
                                <div class="blog_card_img">
                                    <img src="{{ asset('assets/images/blog/blog-5.webp') }}" alt="Blog Image"
                                        class="img-fluid">
                                </div>
                                <div class="blog_card_overlay">
                                    <div class="blog_card_top_content">
                                        <div class="blog_card_top_row">
                                            <div class="blog_card_category blog_faculty_badge">Faculty</div>
                                            <div class="blog_card_top_right">
                                                <div class="blog_card_top_right_list">
                                                    <div class="blog_card_top_right_list_icon"></div>
                                                    <div class="blog_card_top_right_list_name">Dr. T. P. Singh</div>
                                                </div>
                                                <div class="blog_card_top_right_list">
                                                    <div class="blog_card_top_right_list_icon"></div>
                                                    <div class="blog_card_top_right_list_name">March 22, 2022</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog_card_bottom_row">
                                            <h3 class="blog_card_title">Geoinformatics – A Unique Career Opportunity For
                                                Modern Indian Students!</h3>
                                            <p class="blog_card_desc m-0">
                                                Geoinformatics is the science and technology of developing and deploying
                                                information science infrastructure to address challenges in geography,
                                                cartography, geosciences, and other related fields of science and
                                                engineering.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="blog_card_top_button">
                                        <a href="">
                                            <svg width="18" height="18" x="0" y="0" viewBox="0 0 24 24">
                                                <g>
                                                    <path
                                                        d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_card">
                                <div class="blog_card_img">
                                    <img src="{{ asset('assets/images/blog/blog-6.webp') }}" alt="Blog Image"
                                        class="img-fluid">
                                </div>
                                <div class="blog_card_overlay">
                                    <div class="blog_card_top_content">
                                        <div class="blog_card_top_row">
                                            <div class="blog_card_category blog_student_badge">Student</div>
                                            <div class="blog_card_top_right">
                                                <div class="blog_card_top_right_list">
                                                    <div class="blog_card_top_right_list_icon"></div>
                                                    <div class="blog_card_top_right_list_name">Antara Asthana</div>
                                                </div>
                                                <div class="blog_card_top_right_list">
                                                    <div class="blog_card_top_right_list_icon"></div>
                                                    <div class="blog_card_top_right_list_name">January 16, 2023</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog_card_bottom_row">
                                            <h3 class="blog_card_title">Data Science Career and Opportunities</h3>
                                            <p class="blog_card_desc m-0">
                                                I am Antara Asthana, currently working as a Data Analyst at Medline
                                                Industries, Pune. I have recently completed my Master of Science in data
                                                science and spatial analytics from Symbiosis Institute of
                                                Geoinformatics,
                                                Pune.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="blog_card_top_button">
                                        <a href="">
                                            <svg width="18" height="18" x="0" y="0" viewBox="0 0 24 24">
                                                <g>
                                                    <path
                                                        d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                        fill="#ffffff" opacity="1" data-original="#000000"></path>
                                                </g>
                                            </svg>
                                        </a>
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