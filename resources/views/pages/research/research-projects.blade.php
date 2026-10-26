@extends('layouts.app')

@section('title', 'Notable Research Projects - SIG Pune')

@section('description', 'Stay informed about the latest research projects at SIG Pune, where academic excellence and
innovation converge to shape the future. Explore now!')

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
                        <h1 class="inner_banner_heading">Research <span>Projects</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Research Projects</li>
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
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">Research at SIG</h3>
                            @include('components.research-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="research_publication_mainbox">
                                <h2 class="inner_heading">Best Research Projects</h2>
                                <div class="research_publication_wrapper">
                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">1</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0">Developing Localized Indicators of Climate Change for Impact Risk Assessment in Ahmednagar Using CMIP5 Data  to Dr. Dharmaveer Singh. Funding Agency: UGC, New Delhi.</p>
                                        </div>
                                    </div>

                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">2</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0">Development of Drought Monitoring system in India sponsored from NRDMS, DST, Govt. of India to Dr. T.P.Singh (PI), Dr. Vidya Patkar (Co-PI) &amp; Dr. Sandipan Das (Co-PI).</p>
                                        </div>
                                    </div>

                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">3</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0">A study on Temporal Land surface temperature analysis across pune city using Geo-spatial techniques sponsored from Symbiosis Centre for Research and Innovation (SCRI), Symbiosis International (Deemed University) to Dr. Sandipan Das.</p>
                                        </div>
                                    </div>

                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">4</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0">Design and Development of mobile based decision support system for enhancing farmer’s income based on current agriculture practices and Government policy for Maharashtra” funded by  Symbiosis Centre for Research and Innovation (SCRI), Symbiosis International (Deemed University)(As a PI) to Dr. Vidya Patkar (Kumbhar).</p>
                                        </div>
                                    </div>

                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">5</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0">Micro Level Planning of Crop Productivity in rainfed regions of Maharashtra state using Geospatial Technologies funded by  Symbiosis Centre for Research and Innovation (SCRI), Symbiosis International (Deemed University)(As a Co-PI) to Dr. Vidya Patkar (Kumbhar).</p>
                                        </div>
                                    </div>

                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">6</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0">Modeling spatio-temporal patterns of water quality along the coast of Devbag, Maharashtra with special reference to creek erosion using geospatial technology.” Co- pi to Dr. Navendu A. Chaudhary.</p>
                                        </div>
                                    </div>

                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">7</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0">Minor research project titled “Tourism, local stakes and transformations– A case study of village Debug, coastal Maharashtra (India)” As a PI to Dr. Navendu A. Chaudhary.</p>
                                        </div>
                                    </div>

                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">8</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0">Vegetation Carbon Pool Assessment (VCP) of Maharashtra State, funded by (ISRO) Department of Space (As PI) Dr. T.P. Singh.</p>
                                        </div>
                                    </div>

                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">9</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0">Irrigation Infrastructure Assessment of Maharashtra under AIBP, funded by the Planning Commission and NRSC, Govt. Of India (As PI), Dr T.P. Singh.</p>
                                        </div>
                                    </div>

                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">10</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0">Irrigation Infrastructure Assessment of Uttar Pradesh under AIBP, funded by Planning commission and NRSC, Govt. Of India (As PI), Dr. T.P. Singh.</p>
                                        </div>
                                    </div>

                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">11</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0">Micro-Level Planning of Crop Productivity in rain-fed regions of Maharashtra State using Geospatial Technologies . (As PI) Dr. T.P. Singh Funded by SIU.</p>
                                        </div>
                                    </div>

                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">12</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0">Building Research Capacities among Students: A study on Urban Dynamics and its effects on Land use/Land Cover in Fringe area of Pune City using Geo-Spatial techniques. (As PI), Dr. T.P. Singh Funded By SIU.</p>
                                        </div>
                                    </div>

                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">13</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0"> Sikkim Biodiversity and Forest Management Project, Funded by Japan International Cooperation Agency(JICA) funded (As Consultant), Dr. T.P. Singh.</p>
                                        </div>
                                    </div>

                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">14</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0">Tamilnadu Biodiversity and Greening project, Funded by Japan International Cooperation Agency (JICA) (As Consultant), Dr. T.P. Singh.</p>
                                        </div>
                                    </div>

                                    <div class="research_publication_listing">
                                        <div class="research_publication_listing_number">15</div>
                                        <div class="research_publication_listing_para">
                                            <p class="m-0">National land use, land use change and forestry (LULUCF) assessment using satellite data for national communication on inventory of greenhouse gases NATCOM (As PI), Funded by ISRO.</p>
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