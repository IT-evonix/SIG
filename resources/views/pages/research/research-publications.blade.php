@extends('layouts.app')

@section('title', 'Research Publications 2015 - 2022 - SIG')

@section('description', 'Access a comprehensive collection of research publications covering the years 2015 to 2022 at
SIG Pune. Stay abreast of the latest research trends and insights.')

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
                        <h1 class="inner_banner_heading">Research <span>Publications</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Research Publications</li>
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
                                <div class="my_tabbing">
                                    <ul class="nav nav-tabs custom-tabs" id="batchTabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="batch-2025-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2025" type="button" role="tab">
                                                Journal Publications - 2025
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="batch-2024-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2024" type="button" role="tab">
                                                Journal Publications - 2024
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="batch-2023-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2023" type="button" role="tab">
                                                Journal Publications - 2023
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="batch-2022-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2022" type="button" role="tab">
                                                Journal Publications - 2022
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="batchTabsContent">
                                        <div class="tab-pane fade show active" id="batch-2025" role="tabpanel">
                                            <div class="research_publication_wrapper">
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">1</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Tanwar, K., Attri, P., Sahil K Shah, & Tarun
                                                            Pratap Singh. (2025). Landfill suitability mapping using
                                                            satellite imagery and machine learning techniques: A case
                                                            study for Delhi-NCR, India. ISPRS Annals of the
                                                            Photogrammetry, Remote Sensing and Spatial Information
                                                            Sciences, X-5/W2-2025(1), 679–686.</p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">2</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Mukherjee, S., Sahil K Shah, Tarun Pratap Singh,
                                                            & Vidya Sandeep Patkar. (2025). Classification and
                                                            phenological stage monitoring of grape crop using Sentinel-1
                                                            and Sentinel-2 time series and deep learning techniques.
                                                            ISPRS Annals of the Photogrammetry, Remote Sensing and
                                                            Spatial Information Sciences, X-5/W2-2025(1), 397–404.</p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">3</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Miriam, D., Chaudhary, N., Yewale, S., &
                                                            Khadilkar, A. (2025). A scoping review of GIS mapping of
                                                            type 1 diabetes in children: Identifying current gaps and
                                                            future research directions using PRISMA-ScR. Current
                                                            Diabetes Reviews, 21(8), e260424229413.</p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">4</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Yewale, S., Chaudhary, N., Miriam, D., …
                                                            Khadilkar, V., & Khadilkar, A. (2025). Geographic
                                                            information system mapping and predictors of glycemic
                                                            control in children and youth with type 1 diabetes: A study
                                                            from Western India. Journal of Pediatric Endocrinology and
                                                            Metabolism, 38(1), 29–36.</p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">5</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Jadhav, S., Sahil K Shah, Vidya Sandeep Patkar, &
                                                            Tarun Pratap Singh. (2025). Quantification of sugarcane crop
                                                            water footprint using remote sensing and machine learning
                                                            techniques: Case study of Kolhapur District, Maharashtra,
                                                            India. ISPRS Annals of the Photogrammetry, Remote Sensing
                                                            and Spatial Information Sciences, X-5/W2-2025(1), 249–256.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">6</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Chauhan, P., Ray, R. L., Samanta, S., & others.
                                                            (2025). Snow cover analysis using NDSI and SWI indices.
                                                            Applied Geomatics, 18(22), 1–22.</p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">7</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Appukuttan, A., Deshpande, G. S., & others.
                                                            (2025). Geospatial modeling of landslide susceptibility.
                                                            Discover Applied Sciences, 7(1), 1224–1246.</p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">8</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Singh, S. K., Singh, P. K., & others. (2025).
                                                            Preface to the big data analytics and machine learning
                                                            section. Physics and Chemistry of the Earth, 142(2), 104161.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">9</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Karim, M., Tomar, S., Sahil K Shah, & others.
                                                            (2025). Analyzing and predicting PM10 using remote sensing.
                                                            Discover Applied Sciences, 7(1), 1–20.</p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">10</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Kanse, S., Lingam, V. P., Sahil K Shah, & others.
                                                            (2025). Leveraging UAV imagery and deep learning for
                                                            analysis. Journal Européen des Systèmes Automatisés, 58(7),
                                                            1417–1425.</p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">11</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Gadakh, A., Patkar, V. S., & others. (2025).
                                                            Identifying key features for establishing sustainable
                                                            systems. International Journal of Sustainable Development,
                                                            20(7), 2795–2803.</p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">12</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Bera, S., Gupta, S., Singh, D., & others. (2025).
                                                            Automated farm ponds detection using satellite imagery.
                                                            Journal of Geomatics, 19(1), 108–116.</p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">13</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Sahu, R., Singh, D., Liu, S., & others. (2025).
                                                            Deep-learning-based streamflow prediction. International
                                                            Journal of River Basin Management, 23(3), 1–19.</p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">14</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Banerjee, B., Karmakar, P., Singh, S. K., &
                                                            others. (2025). Spatial risk assessment of tropical cyclone.
                                                            Journal of Atmospheric and Solar-Terrestrial Physics,
                                                            274(9), 106602.</p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">15</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Vohra, M., Singh, T. P., & others. (2025).
                                                            Generative AI-driven spatial data extraction. International
                                                            Journal of Geoinformatics, 21(6), 47–61.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">16</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Karan, K., Singh, D., Hussain, A., & others.
                                                            (2025). Spatial disaggregation of coarse-scaled gridded
                                                            data. Advances in Space Research, 76(5), 2643–2661.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">17</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Areesha, A., Chauhan, P., Ahmad, R., & others.
                                                            (2025). Temperature and climate dynamics in national capital
                                                            region. Indonesian Journal of Geography, 57(1), 166–179.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">18</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Singh, T. P. (2025). Automated farm ponds
                                                            detection using satellite imagery. Journal of Geomatics,
                                                            19(1), 108–116.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">19</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Hukare, V., Patkar, V. S. (2025). Optimization of
                                                            feature selection methods. ES Food and Agroforestry, 20(1),
                                                            10–15.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">20</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Das, S., Kunjir, G. M., & others. (2025).
                                                            Assessing particulate matter (PM2.5) concentration. Discover
                                                            Sustainability, 6(1), 1–20.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">21</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Pisolkar, Y. M., Chaudhary, N. A., & others.
                                                            (2025). Opportunities and challenges in heritage
                                                            conservation. International Journal of Conservation Science,
                                                            16(1), 165–174.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">22</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Hukare, V., Sankanna, S., Patkar, V. S., &
                                                            others. (2025). Comparative analysis of soil classification
                                                            techniques. Journal of the Indian Society of Soil Science,
                                                            73(2), 174–182.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">23</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Husna, A., Shah, S. K., & others. (2025).
                                                            Streamflow reconstruction using multi-taxa tree data.
                                                            Quaternary, 8(1), 9.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">24</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Chatterjee, D., Singh, P. K., & others. (2025).
                                                            Implementation of satellite-based water accounting.
                                                            Groundwater for Sustainable Development, 28(1), 101391.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">25</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Rai, D., Saini, R., Kumar, S., & others. (2025).
                                                            Stable isotopic characterization and estimation. Journal of
                                                            Hydrology, 655(1), 132962.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="batch-2024" role="tabpanel">
                                            <div class="research_publication_wrapper">
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">1</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Yewale, S., Navendu Avinash Chaudhary, D., Miriam, D., Bhor, S., Dange, N., Shah, N., Khadilkar, V., & Khadilkar, A. (2024). Geographic information system mapping and relationship with glycemic control in type 1 diabetes in western India. Hormone Research in Paediatrics, 97(2), 87–87.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">2</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Kumari, S., Tripathy, K. K., & Patkar, V. S. (2024). Municipal solid waste management with reference to India: Opportunities, challenges and future directions. International Journal of Business and Globalisation, 38(2), 165–187.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">3</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Kolte, U., Naik, S., & Patkar, V. S. (2024). A CNN-KNN based recognition of online handwritten symbols within physics expressions using contour-based bounding box (CBBS) segmentation technique. Journal of Computer Science, 20(7), 783–792.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">4</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Yewale, S., Chaudhary, N. A., Miriam, D., Bhor, S., Dange, N., Shah, N., Khadilkar, V., & Khadilkar, A. (2024). Geographic information system mapping and predictors of glycemic control in children and youth with type 1 diabetes: A study from Western India. Journal of Pediatric Endocrinology and Metabolism.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">5</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Ghosh, D., Sinha, S., Singh, T. P., & Singh, D. (2024). Multi-criteria decision analysis-based solutions for the installation of photovoltaic (PV) solar power plants in an energy deficit state of India: An effort towards SDG-7. Transactions in GIS, 28(7), 1–12.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">6</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Das, S., Pattnaik, B. K., & K., P. N. (2024). Comparative evaluation between Taguchi method and response surface method for optimization of electrocoagulation process in the context of treatment of dairy industry wastewater. Environmental Monitoring and Assessment, 196(1), 1–20.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">7</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Chatterjee, D., Singh, D., Das, D. B., & Singh, P. K. (2024). Understanding the impact of urban sprawl on sanitation risks using a GIS-based multicriteria decision-making approach. Transactions in GIS, 28(5), 1–22.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">8</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Miriam, D., Chaudhary, N. A., Yewale, S., & Khadilkar, A. (2024). A scoping review of GIS mapping of type 1 diabetes in children: Identifying current gaps and future research directions using PRISMA-ScR. Current Diabetes Reviews, 21(8), 1–10.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">9</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Anantharaman, H., & Chaudhary, N. A. (2024). Neoteric machine learning approaches to diagnose the state of carotid artery. International Journal of Medical Engineering and Informatics, 16(3), 274–286.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">10</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Das, S., Karuppannan, S., Chatterjee, U., & Kumar, S. (2024). Geophysical, climatological and anthropogenic hazards and disaster: Vulnerability, risk assessment, and sustainability. Frontiers in Environmental Science, 12(1), 1–2.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">11</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Shah, S. K., Patkar, V. S., & Singh, T. P. (2024). Grape (Vitis vinifera) leaf disease detection and classification using deep learning techniques: A study on real-time grape leaf image dataset in India. International Journal of Engineering, Transactions B: Applications, 37(8), 1522–1533.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">12</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Chatterjee, D., Singh, P. K., Singh, D., & Singh, V. P. (2024). A novel partitioning of gross primary production and water use efficiency for sustaining water and food security using Budyko hypothesis. Science of the Total Environment, 912(1), 169283.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">13</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Das, S., Dandapat, K., Chatterjee, U., Patra, A., & Islam, M. K. (2024). Assessment of groundwater potential in Jhargram district using GIS-based multicriteria decision making approach. Geocarto International, 39(1), 1–20.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">14</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Dharpure, J. K., Goswami, A., Patel, A., Singh, D., Jain, S., & Kulkarni, A. (2024). Synergistic approach for streamflow forecasting in a glacierized catchment of western Himalaya using earth observation and machine learning techniques. Earth Science Informatics, 17(3), 2973–2994.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">15</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Kumari, S., Tripathy, K. K., & Patkar, V. S. (2024). Municipal solid waste management in smart cities: A survey based on opportunities, challenges and future directions. International Journal of Business and Globalisation, 38(2), 165–187.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="batch-2023" role="tabpanel">
                                            <div class="research_publication_wrapper">
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">1</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Rajput, D. M., Gaikwad, S., Dhumal, D. K., &amp; Gaikwad, J. (2023). The development of a tool for the detection of cotton wool spots, haemorrhage, and exudates using multi-resolution analysis. Lecture Notes in Networks and Systems, 738(1), 299–310.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">2</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Baral, U., Saha, U. D., Mukhopadhyay, U., &amp; Singh, D. (2023). Drought risk assessment on the eastern part of Indian peninsula. Environmental Monitoring and Assessment, 195(11), 1–23.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">3</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Mohanty, S., Mustak, S., Singh, D., Hoang, T. V., Monda, M., &amp; Wang, C. T. (2023). Vulnerability and risk assessment mapping of Bhitarkanika National Park, Odisha, India using machine-based embedded decision support system. Frontiers in Environmental Science, 11(1), 1–19.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">4</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Rajput, D. M., Gaikwad, S., Dhumal, D. K., &amp; Gaikwad, J. (2023). Classification of non-proliferative diabetic retinopathy in terms of dark and bright lesions using multilayered perceptron (MLP). Lecture Notes in Networks and Systems, 720(1), 99–109.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">5</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Tholia, J. J., &amp; Chaudhary, D. A. (2023). Water security: A geospatial framework for urban water resilience. Water Science and Technology: Water Supply, 23(8), 3013–3029.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">6</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Kundu, B., Kumar, A., Shrivastva, A., Chatterjee, D., Xie, F., &amp; Singh, D. (2023). Estimating spatio-temporal changes in front edge of the Ronne Ice Shelf in context of climate change using remote sensing based integrated approach. Polar Science, 37, 100967.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">7</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Neeta, N., Singh, D. P., Sachin, N., &amp; Mukesh, T. (2023). Drought prediction: A comprehensive review of different drought prediction models and adopted technologies. Sustainability, 15(15), 11684.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">8</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Singh, D., Karan, K., Singh, S. K., Chauhan, P., &amp; Berndtsston, R. (2023). Fusing morphometric characteristics with extreme precipitation indices for identifying the most vulnerable sub-basin at risk of flooding. Journal of Hydro-Environment Research, 50, 44–56.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">9</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Chatterjee, D., Singh, D., Singh, P. K., Fohrer, N., &amp; Singh, B. B. (2023). Performance evaluation of different gridded precipitation and CMIP6 model products with gauge observations for assessing rainfall variability under historical and future climate change scenarios. Physics and Chemistry of the Earth, 131, 103433.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">10</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Jhaldiyal, A., &amp; Chaudhary, D. A. (2023). Semantic segmentation of 3D LiDAR data using deep learning: A review of projection-based methods. Applied Intelligence, 53(1), 6844–6855.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">11</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Rajput, D. M., Gaikwad, S., Dhumal, D. K., &amp; Gaikwad, J. (2023). Classification of non-proliferative diabetic retinopathy in terms of dark and bright lesions using multilayered perceptron (MLP). Smart Innovation, Systems and Technologies.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">12</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Dhorde, A., Deshpande, D. S., &amp; Datkhile, P. (2023). Automatic urban feature extraction using rule-based object-oriented classification: A case study of parts of Pune city, Maharashtra, India. Applied Geomatics, 15(4), 871–884.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">13</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Kaur, H., Tyagi, S., Mehta, D. M., &amp; Singh, D. (2023). Time-series (2001/2002–2021) analysis of Earth observation data using Google Earth Engine for detecting changes in land use land cover with specific reference to forest cover in East Godavari. Journal of Earth System Science, 132(2), 86–102.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">14</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Deshpande, D. S., &amp; Dhorde, A. (2023). Validating the curve number estimation approaches: A case study of an urbanizing watershed from western Maharashtra, India. Modeling Earth Systems and Environment, 10(2), 1–15.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">15</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Singh, D., Vardhan, D. M., Sahu, D. R., Chatterjee, D., Chauhan, D. P., &amp; Liu, D. S. (2023). Machine-learning- and deep-learning-based streamflow prediction in a hilly catchment for future scenarios using CMIP6 GCM data. Hydrology and Earth System Sciences, 27(5), 1047–1075.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">16</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Das, D., Upwanshi, M., Damry, K., Pathak, D., &amp; Tikle, S. (2023). Delineation of potential groundwater recharge zones using remote sensing, GIS, and AHP approaches. Urban Climate, 48, 1–18.</p>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">17</div>
                                                    <div class="research_publication_listing_para">
                                                        <p class="m-0">Rajput, D. M., Gaikwad, S., Dhumal, D. K., &amp; Gaikwad, J. (2023). The development of a tool for the detection of cotton wool spots, hemorrhage, and exudates using multi-resolution analysis. Lecture Notes in Networks and Systems.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="batch-2022" role="tabpanel">
                                            <div class="research_publication_wrapper">
                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">1</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Ghosh, A., Rakshit, S., Tikle, S., Das, S., Chatterjee, U., Pande, C.B., Alataway, A., Al-Othman, A.A., Dewidar, A.Z., Mattar, M.A. (2022). Integration of GIS and Remote Sensing with RUSLE Model for Estimation of Soil Erosion. Land, 12, 116. <a href="https://doi.org/10.3390/land12010116" target="_blank" rel="noopener noreferrer">https://doi.org/10.3390/land12010116</a>.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/sandipan-das-71773617/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Sandipan Das" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">2</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Singh, T.P., Deshpande, M., Das, S., and Kumbhar, V. (2022). Drought pattern assessment over Marathwada, India through the development of multivariate advance drought response index, Int. Arch. Photogramm. Remote Sens. Spatial Inf. Sci., XLIII-B3-2022,1173–1180.<a href="https://doi.org/10.5194/isprs-archives-XLIII-B3-2022-1173-2022" target="_blank" rel="noopener noreferrer">https://doi.org/10.5194/isprs-archives-XLIII-B3-2022-1173-2022</a>.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/sandipan-das-71773617/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Sandipan Das" class="img-fluid">
                                                            </a>
                                                            <a href="https://www.linkedin.com/in/dr-vidya-kumbhar-patkar-02048a20/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Vidya Kumbhar Patkar" class="img-fluid">
                                                            </a>
                                                            <a href="https://www.linkedin.com/in/prof-dr-t-p-singh-5b12959/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of T. P. Singh" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">3</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Doad, P.A., Das, S., Khadse, S.P., Khare, Y.D., Pande, B.C., Varade, M.A., (2022). An Assessment of Geo-environmental quality using Physical Data and a Geospatial Approach: An Example for a Watershed in Central India. Environmental Earth Science, 81, 356. <a href="https://doi.org/10.1007/s12665-022-10480-z" target="_blank" rel="noopener noreferrer">https://doi.org/10.1007/s12665-022-10480-z</a>.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/sandipan-das-71773617/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Sandipan Das" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">4</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Warghat, S., Khadse, P.S., Kulkarni, S.S., Das, S., (2022). Groundwater potential zones identification using integrated remote sensing and GIS-AHP approach in semi-arid region of Maharashtra, India. Case Studies in Geospatial Applications to Groundwater Resources, Elsevier. <a href="https://doi.org/10.1016/B978-0-323-99963-2.00013-4" target="_blank" rel="noopener noreferrer">https://doi.org/10.1016/B978-0-323-99963-2.00013-4</a>.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/sandipan-das-71773617/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Sandipan Das" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">5</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Alok Jhaldiyal, Navendu Chaudhary, Semantic segmentation of 3D LiDAR data using deep learning: a review of projection-based methods, Applied Intelligence July 2022, DOI: 10.1007/s10489-022-03930-5.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/prof-dr-navendu-a-chaudhary-a556684/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Navendu Chaudhary" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">6</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Jyoti Jain Tholiya &amp; Navendu Chaudhary, Urban Water Security: Geospatial Assessment For Water Supply Services In Pune, India, Urban Water Journal, https:// doi.org/10.1080/1573062X.2022.2047736, 05 Mar 2022.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/prof-dr-navendu-a-chaudhary-a556684/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Navendu Chaudhary" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">7</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Jyoti Jain Tholiya, Navendu Chaudhary, Bhuiyan Monwar Alam, Determinants of geographical inequalities in domestic water supply across city of Pune, India, Water Supply ws2021364, October 2021, <a href="https://doi.org/10.2166/ws.2021.364" target="_blank" rel="noopener noreferrer">https://doi.org/10.2166/ws.2021.364</a>.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/prof-dr-navendu-a-chaudhary-a556684/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Navendu Chaudhary" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">8</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Mapari, Shrikanta, Chaudhary, Navendu, Identification of Inorganic Chemical Formulas based on Support Vector Machine and SURF Key Point Descriptor, International Journal of Computing and Digital Systems Open Access Volume 11, Issue 1, Pages 345 - 354, 2022.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/prof-dr-navendu-a-chaudhary-a556684/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Navendu Chaudhary" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">9</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Choudhury, S.; Moulick, D.; Mazumder, M.K.; Pattnaik, B.K.; Ghosh, D.; Vemireddy, L.R.; Aldhahrani, A.; Soliman, M.M.; Gaber, A.; Hossain, A.2022. “An In Vitro and In Silico Perspective Study of Seed Priming with Zinc on the Phytotoxicity and Accumulation Pattern of Arsenic in Rice Seedlings”. Antioxidants. 11, 1500. MDPI.ISSN No: 2076-3921. <a href="https://doi.org/10.3390/antiox11081500" target="_blank" rel="noopener noreferrer">https://doi.org/10.3390/antiox11081500</a>.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/dr-binaya-kumar-pattnaik-4228a520/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Binaya Kumar Pattnaik" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">10</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Equeenuddin, Shaikh Mohammed, Binaya Kumar Pattnaik, Saikat Sengupta, Fakira Bastia, and Chandan Kumar Mohapatra. 2022. "Geochemical and isotopic studies of acid rain over Rourkela—an industrial city in eastern India." Arabian Journal of Geosciences 15(24). 1776. Springer. ISSN No: 1866-7511. <a href="https://doi.org/10.1007/s12517-022-11034-0" target="_blank" rel="noopener noreferrer">https://doi.org/10.1007/s12517-022-11034-0</a>.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/dr-binaya-kumar-pattnaik-4228a520/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Binaya Kumar Pattnaik" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">11</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Binaya Kumar Pattnaik &amp; Chandan Sahu. 2022. “Chromium Dynamics in Soil-Plant System”, In: Response of Field Crops to Abiotic Stress: Current Status and Future Prospects. Editors: Choudhury, S., &amp; Moulick, D. First Edition. CRC Press. Taylor and Francis Groups. <a href="https://doi.org/10.1201/9781003258063" target="_blank" rel="noopener noreferrer">https://doi.org/10.1201/9781003258063</a>.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/dr-binaya-kumar-pattnaik-4228a520/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Binaya Kumar Pattnaik" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">12</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Chauhan, P., Malviya, D., Sain, K., Ray, R. L., Singh, S. K., &amp; Singh, D. (2022). Assessing the vulnerability of watersheds to environmental degradation in the lesser Himalayan region using satellite data and a series of models. Geocarto International, 1-28.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/dr-dharmaveer-singh-70747a34/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Dharmaveer Singh" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">13</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Karan, K., Singh, D., Singh, P. K., Bharati, B., Singh, T. P., &amp; Berndtsson, R. (2022). Implications of future climate change on crop and irrigation water requirements in a semi-arid river basin using CMIP6 GCMs. Journal of Arid Land, 14(11), 1234-1257.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/dr-dharmaveer-singh-70747a34/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Dharmaveer Singh" class="img-fluid">
                                                            </a>
                                                            <a href="https://www.linkedin.com/in/prof-dr-t-p-singh-5b12959/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of T. P. Singh" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">14</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Mahato, P. K., Singh, D., Bharati, B., Gagnon, A. S., Singh, B. B., &amp; Brema, J. (2022). Assessing the impacts of human interventions and climate change on fluvial flooding using CMIP6 data and GIS-based hydrologic and hydraulic models. Geocarto International, 1-26.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/dr-dharmaveer-singh-70747a34/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Dharmaveer Singh" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">15</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Singh, D., Zhu, Y., Liu, S., Srivastava, P. K., Dharpure, J. K., Chatterjee, D., ... &amp; Gagnon, A. S. (2022). Exploring the links between variations in snow cover area and climatic variables in a Himalayan catchment using earth observations and CMIP6 climate change scenarios. Journal of Hydrology, 608, 127648.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/dr-dharmaveer-singh-70747a34/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Dharmaveer Singh" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">16</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Brema, J., Gautam, S., &amp; Singh, D. (2022). Global implications of biodiversity loss on pandemic disease: COVID-19. In COVID-19 and the Sustainable Development Goals (pp. 305-322). Elsevier.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/dr-dharmaveer-singh-70747a34/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Dharmaveer Singh" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">17</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Gauri Vaidya, Vidya Kumbhar, Sachin Naik and Vijayatai Hukare, “Analyzing the State of Mind of Self-quarantined People during COVID-19 Pandemic Lockdown Period: A Multiple Correspondence Analysis Approach” International Journal of Advanced Computer Science and Applications (IJACSA), 13(9), 2022. <a href="http://dx.doi.org/10.14569/IJACSA.2022.0130949" target="_blank" rel="noopener noreferrer">http://dx.doi.org/10.14569/IJACSA.2022.0130949</a>.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/dr-vidya-kumbhar-patkar-02048a20/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Vidya Kumbhar Patkar" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">18</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Kumbhar, Vidya., Maru, A., &amp; Kumari, S. (2022). Spatial Data Mining- A tool for Spatial Decision Support System in Agriculture Management. Journal of Engineering Science and Technology Review, 15(1), 128–133. <a href="https://doi.org/10.25103/jestr.151.16" target="_blank" rel="noopener noreferrer">https://doi.org/10.25103/jestr.151.16</a>.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/dr-vidya-kumbhar-patkar-02048a20/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Vidya Kumbhar Patkar" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">19</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Sneha Kumari, Vidya Kumbhar, Nisha Bharti (2022), Advances in Agriculture Policy, Governance and Multi functionality Approach for Sustainable India, Agricultural Input Marketing, Scientific Publishers.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/dr-vidya-kumbhar-patkar-02048a20/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Vidya Kumbhar Patkar" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">20</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>S. Gaikwad, J. Gaikwad, Y. Rajput, “Person Identification System Based on Iris Patterns Using Statistical and Machine Learning Techniques”, NeuroQuantology Journal, Volume 20, Issue 14, Page 784-790, Doi: 10.4704/nq.2022.20.14. NQ880109, October 2022.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/dr-yogesh-m-rajput-54957545/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Yogesh M. Rajput" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="research_publication_listing">
                                                    <div class="research_publication_listing_number">21</div>
                                                    <div class="research_publication_listing_para">
                                                        <p>Y. Rajput, S. Gaikwad, R. Dhumal and J. Gaikwad, “A Novel Method for Non-Proliferative Diabetic Retinopathy Disease Classification Using Image Processing Techniques”, NeuroQuantology Journal, Volume 20, Issue 11, Page 8002-8011, Doi: 10.14704/NQ.2022.20.11. NQ66794, November 2022.</p>
                                                        <div class="research-linkdin">
                                                            <a href="https://www.linkedin.com/in/dr-yogesh-m-rajput-54957545/" target="_blank" rel="noopener noreferrer">
                                                                <img src="{{ asset('assets/images/programmes/icon/linkedin.svg') }}" alt="LinkedIn profile of Yogesh M. Rajput" class="img-fluid">
                                                            </a>
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
            </div>
        </div>
    </section>
</main>

@endsection