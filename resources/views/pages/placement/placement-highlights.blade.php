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
                        <h1 class="inner_banner_heading">Placement <span>Highlights</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Placements</li>
                                <li class="breadcrumb-item active" aria-current="page">Placement Highlights</li>
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
                            <div class="placement_heighlight_mainbox">
                                <h2 class="inner_heading">Year 2025-26</h2>
                                <div class="placement_heigh_firstbox">
                                    <div class="placement_heigh_firstbox_listing">
                                        <div class="placement_heigh_firstbox_icon">
                                            <img src="{{ asset('assets/images/programmes/icon/group.svg') }}" alt="Icon"
                                                class="img-fluid">
                                        </div>
                                        <div class="placement_heigh_firstbox_content">
                                            <div class="placement_heigh_firstbox_counter">85.16%</div>
                                            <div class="placement_heigh_firstbox_text">Placement Success </div>
                                        </div>
                                    </div>
                                    <div class="placement_heigh_firstbox_devider"></div>
                                    <div class="placement_heigh_firstbox_listing">
                                        <div class="placement_heigh_firstbox_icon">
                                            <img src="{{ asset('assets/images/programmes/icon/growth.svg') }}"
                                                alt="Icon" class="img-fluid">
                                        </div>
                                        <div class="placement_heigh_firstbox_content">
                                            <div class="placement_heigh_firstbox_counter">14 LPA</div>
                                            <div class="placement_heigh_firstbox_text">Highest Package</div>
                                        </div>
                                    </div>
                                </div>
                                <p class="big_font_para">
                                    <strong>
                                        Building Industry-Ready Professionals for Careers in Geoinformatics, Data
                                        Science & Spatial Analytics
                                    </strong>
                                </p>
                                <p>
                                    At the Symbiosis Institute of Geoinformatics (SIG), placement is viewed as a
                                    continuous process of <strong>skill development, career preparation and industry
                                        engagement.</strong>
                                </p>
                                <p class="m-0">
                                    Our Placement Team works closely with students, faculty, alumni and industry
                                    partners to facilitate career opportunities across <strong>Geoinformatics, GIS,
                                        Remote Sensing, Data Science, Spatial Analytics, Artificial Intelligence,
                                        Machine Learning and allied technology domains.</strong>
                                </p>
                                <div class="placement_heigh_secondbox">
                                    <h2 class="inner_heading">Year Wise Highest Package</h2>
                                    <div class="table-responsive">
                                        <table class="table mb-0 fee_table">
                                            <thead>
                                                <tr>
                                                    <th>Year</th>
                                                    <th>M.Sc. Geo</th>
                                                    <th>M.Sc. DSSA</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>2025-26</td>
                                                    <td>11.4 LPA</td>
                                                    <td>14 LPA</td>
                                                </tr>
                                                <tr>
                                                    <td>2024-25</td>
                                                    <td>10 LPA</td>
                                                    <td>10 LPA</td>
                                                </tr>
                                                <tr>
                                                    <td>2023-24</td>
                                                    <td>6.5 LPA</td>
                                                    <td>10 LPA</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="placement_heigh_thirdbox">
                                    <h2 class="inner_heading">Career Domains</h2>
                                    <div class="general_card_mainbox">
                                        <h3 class="general_card_mainheading">Where SIG Students Build Careers</h3>
                                        <div class="general_card_wraper">
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/placeholder.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Geospatial & GIS</h4>
                                                    <ul class="custom_listing">
                                                        <li>GIS Analyst</li>
                                                        <li>GIS Developer</li>
                                                        <li>GIS Engineer</li>
                                                        <li>GIS Consultant</li>
                                                        <li>GIS Business Analyst</li>
                                                        <li>GIS Executive</li>
                                                        <li>Remote Sensing / Spatial Analyst</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/data-science.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Data Science & Analytics</h4>
                                                    <ul class="custom_listing">
                                                        <li>Data Scientist</li>
                                                        <li>Data Analyst</li>
                                                        <li>Junior Data Scientist</li>
                                                        <li>Analytics Professional</li>
                                                        <li>Business Analyst</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/ai.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">AI & Emerging Technologies</h4>
                                                    <ul class="custom_listing">
                                                        <li>AI/ML Roles</li>
                                                        <li>LLM / Generative AI Roles</li>
                                                        <li>Data & AI Engineering</li>
                                                        <li>Spatial AI</li>
                                                        <li>GeoAI</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/geospatial-technology.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Geospatial Technology</h4>
                                                    <ul class="custom_listing">
                                                        <li>Mapping</li>
                                                        <li>Cartography</li>
                                                        <li>Remote Sensing</li>
                                                        <li>Spatial Databases</li>
                                                        <li>Geospatial Application Development</li>
                                                        <li>Location Intelligence</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="general_card_listing">
                                                <div class="general_card_icon">
                                                    <img src="{{ asset('assets/images/programmes/icon/medal.svg') }}"
                                                        alt="Icon" class="img-fluid">
                                                </div>
                                                <div class="general_card_conent">
                                                    <h4 class="general_card_heading">Consulting & Professional Services</h4>
                                                    <ul class="custom_listing">
                                                        <li>Consulting</li>
                                                        <li>Technology Consulting</li>
                                                        <li>Environmental Consulting</li>
                                                        <li>Geospatial Consulting</li>
                                                        <li>Research & Advisory</li>
                                                    </ul>
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