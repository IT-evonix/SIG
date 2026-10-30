@extends('layouts.app')

@section('title', 'Data Science Career and Opportunities | Alumni | Gain Insights on Data Science and Geoinformatics - SIG Blog')

@section('description', 'I am Antara Asthana, currently working as a Data Analyst at Medline Industries, Pune. I have recently completed my Master of Science in data science and...')

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
                        <h1 class="inner_banner_heading">The SIG <span>Blog</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">The SIG Blog</li>
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

<main class="blog_detail_main">
    <section class="blog_detail_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="blog_detail_mainbox">
                        <div class="blog_detail_leftbox">
                            <div class="blog_detail_image_box">
                                <div class="blog_detail_image">
                                    <img src="{{ asset('assets/images/blog/blog-detail.webp') }}" alt="Blog Image"
                                            class="img-fluid">
                                </div>
                                <div class="blog_detail_image_content">
                                    <div class="blog_card_category">Student</div>
                                    <div class="blog_detail_image_content_listing">
                                        <div class="blog_detail_list_icon">
                                            <img src="{{ asset('assets/images/blog/user.svg') }}" alt="User Icon" class="img-fluid">
                                        </div>
                                        <div class="blog_detail_list_name">Antara Asthana</div>
                                    </div>
                                    <div class="blog_detail_image_content_listing">
                                        <div class="blog_detail_list_icon">
                                            <img src="{{ asset('assets/images/blog/calendar.svg') }}" alt="Calendar Icon" class="img-fluid">
                                        </div>
                                        <div class="blog_detail_list_name">January 16, 2023</div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_detail_content_box">
                                <div class="blog_detail_content_listing">
                                    <h2 class="inner_heading">Data Science Career and Opportunities</h2>
                                    <p>Hey People!</p>
                                    <p>I am Antara Asthana, currently working as a Data Analyst at Medline Industries, Pune. I have recently completed my Master of Science in data science and spatial analytics from Symbiosis Institute of Geoinformatics, Pune. The learning during this program played a  crucial role in enhancing my professional career at Medline.</p>
                                    <p>Being a fresher, what helped me the most is the knowledge gained specifically from learning and working on technologies like Machine learning, Artificial Intelligence, and having good command over languages like python, SQL or R, which has helped me immensely in analyzing the root cause of the business problems,  developing end to end business dashboards which might give the stakeholders easier solutions to their tougher problems.</p>
                                    <p>Today’s industry is moving towards data and analytics, focusing more on data visualization tools like Tableau, Power BI, and Microsoft Tools, specifically Microsoft Excel, which is helping businesses to analyze data patterns and give simpler solutions that lead to happy customers.</p>
                                    <p>Hence, Data analytics is a boon for businesses nowadays. It is optimizing their performances and making its place in today’s market.</p>
                                    <p>Most importantly, a Master of Science in Data Science and Analytics is a good career option for today’s generation as it is an advantage for graduates with non-coding backgrounds.</p>
                                    <p class="m-0">
                                        <strong>Antara Asthana</strong><br>
                                        <strong>Alumni, M.Sc(Data Science & Spatial Analytics)</strong><br>
                                        <strong>Batch: 2020-2022</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="blog_detail_rightbox">
                            <div class="blog_program_imgbox">
                                <img src="{{ asset('assets/images/blog/background-glob.webp') }}" alt="Glob image" class="img-fluid">
                            </div>
                            <h4 class="blog_program_heading">
                                Shape a Smarter Tomorrow with Geoinformatics
                            </h4>
                            <p class="blog_program_sub_heading">
                                Build skills that solve real-world challenges and create global impact.
                            </p>
                            <div class="blog_program_listing_mainbox">
                                <a href="" class="blog_program_list">
                                    <div class="blog_program_list_icon">
                                        <img src="{{ asset('assets/images/blog/icon-satellite.svg') }}" alt="Program icon" class="img-fluid">
                                    </div>
                                    <div class="blog_program_list_conent">
                                        <h5 class="blog_program_list_heading">M.Sc. Geoinformatics</h5>
                                    </div>
                                    <div class="blog_program_list_right">
                                        <svg width="18" height="18" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#C4161C" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                                <a href="" class="blog_program_list">
                                    <div class="blog_program_list_icon">
                                        <img src="{{ asset('assets/images/blog/icon-analytics.svg') }}" alt="Program icon" class="img-fluid">
                                    </div>
                                    <div class="blog_program_list_conent">
                                        <h5 class="blog_program_list_heading">M.Sc. Data Science</h5>
                                    </div>
                                    <div class="blog_program_list_right">
                                        <svg width="18" height="18" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#C4161C" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                                <a href="" class="blog_program_list">
                                    <div class="blog_program_list_icon">
                                        <img src="{{ asset('assets/images/blog/icon-layer.svg') }}" alt="Program icon" class="img-fluid">
                                    </div>
                                    <div class="blog_program_list_conent">
                                        <h5 class="blog_program_list_heading">Spatial Analytics</h5>
                                    </div>
                                    <div class="blog_program_list_right">
                                        <svg width="18" height="18" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#C4161C" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                                <a href="" class="blog_program_list">
                                    <div class="blog_program_list_icon">
                                        <img src="{{ asset('assets/images/blog/icon-geological.svg') }}" alt="Program icon" class="img-fluid">
                                    </div>
                                    <div class="blog_program_list_conent">
                                        <h5 class="blog_program_list_heading">M.Tech. Geoinformatics & Surveying Technology</h5>
                                    </div>
                                    <div class="blog_program_list_right">
                                        <svg width="18" height="18" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#C4161C" opacity="1" data-original="#000000"></path>
                                            </g>
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