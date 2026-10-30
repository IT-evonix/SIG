@extends('layouts.app')

@section('title', 'Data Science – Skills &amp; Career Opportunities – SIG Blog | Gain Insights on Data Science and Geoinformatics - SIG Blog')

@section('description', 'Discover the skills and career prospects in the field of Data Science. Explore opportunities and insights for aspiring professionals. Know more.')

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
                                    <div class="blog_card_category">Faculty</div>
                                    <div class="blog_detail_image_content_listing">
                                        <div class="blog_detail_list_icon">
                                            <img src="{{ asset('assets/images/blog/user.svg') }}" alt="User Icon" class="img-fluid">
                                        </div>
                                        <div class="blog_detail_list_name">Sahil K Shah</div>
                                    </div>
                                    <div class="blog_detail_image_content_listing">
                                        <div class="blog_detail_list_icon">
                                            <img src="{{ asset('assets/images/blog/calendar.svg') }}" alt="Calendar Icon" class="img-fluid">
                                        </div>
                                        <div class="blog_detail_list_name">March 28, 2023</div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_detail_content_box">
                                <div class="blog_detail_content_listing">
                                    <h2 class="inner_heading">Data Science – Skills & Career Opportunities – SIG Blog</h2>
                                    <p>By Sahil K. Shah, Assistant Professor, Symbiosis Institute of Geoinformatics, Pune</p>
                                    <p>“Information is the oil of the 21st century, and analytics is the combustion engine.”</p>
                                    <p>-Peter Sondergaard, Senior Vice President and Global Head of Research at Gartner, Inc.</p>
                                    <p>It is widely believed that data has surpassed oil in capability. Regardless of whether this is true or not, the truth remains that data, like oil, has little value unless it is properly mined and handled (i.e. processed). This was rightly pointed out above to remind us that data science and information collection work hand in hand to provide insightful data.</p>
                                    <p>In today’s world, data is everywhere. We generate and collect massive amounts of data every day, and this data holds valuable insights that can help us make better decisions in various fields, from healthcare to finance to marketing and every other domain. This is where data science comes in. Data science is a discipline that explores data for knowledge and insights using statistical and computational techniques. Data science is one of the most promising job choices as the value of data continues to rise.</p>
                                    <p>The demand for data scientists is growing rapidly. The fastest-growing occupation in the United States, as measured by the percentage of job vacancies over the past three years, is data scientist, according to LinkedIn. By exploiting data to discover patterns, relationships, and insights, data scientists are able to create predictions and informed decision-making across numerous industries. For instance, Data science is used to generate more accurate diagnostic tools in healthcare, detect and prevent fraud in finance, and streamline transportation networks for greater efficiency and safety.</p>
                                    <p>Many businesses in various industries are increasingly relying on data to make informed decisions. For example, Amazon uses data science to recommend products to customers, whereas Google uses it to improve search results. In line with this, playing with data and gaining useful insights from it for organizational success is becoming increasingly popular these days. Organizations use data science to better understand behavior of customers, enhance goods and services, and gain a competitive advantage.</p>
                                    <p>A combination of technical and soft skills is required for success in data science. One should have a solid foundation in mathematics, statistics, and programming on the technical side. Programming languages such as Python and R, as well as tools and technologies such as SQL, NoSQL, Hadoop, and Spark, should be familiar to the aspirants. Apart from understanding these technical skills, one should be aware of applying Artificial Intelligence (AI) and Machine Learning (ML) approaches to analyze and create predictions from massive datasets. AI and ML techniques can aid in gaining insights and making decisions in a more straightforward and refined manner. In addition, skills in data visualization with the use of tools such as Tableau, Qlik Sense, Sigma etc. and libraries such as matplotlib, seaborn, etc. can aid in the meaningful analysis, representation and communication of massive amount of data. Apart from this, soft skills such as critical thinking, problem solving, and communication are essential for data scientists.</p>
                                    <p>As an aspiring professional, it is essential to stay up-to-date on current industry trends and innovations. This can be accomplished through reading data science-related blogs and forums, attending industry events and conferences, and networking with experts in the field. In addition, gaining actual experience via working on real-world data projects, engaging in hackathons, or contributing to open-source data science initiatives is essential. Furthermore, it is essential to continue learning and upgrading your skills by taking advanced courses or certifications.</p>
                                    <p>It is worth noting that data science is an ever-expanding field where new ideas and technology are always being developed. Curiosity, adaptability, and an open mind are indeed essential for success in this industry. With the right combination of abilities, experience, and passion, one can develop an effective career in data science.</p>
                                    <p class="m-0">
                                        In view of this, Symbiosis Institute of Geoinformatics has launched a two-year Master’s degree programme in Data Science and Spatial Analytics. This programme is one of its kind due to its industry-focused curriculum, appropriate combination of technical and soft skills courses with practical exposure, and opportunities for research projects, internship, etc. We welcome all the aspirants to join Symbiosis Institute of Geoinformatics for experiencing vibrant learning culture at Symbiosis through an exciting and industry-focused programme in Data Science.
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