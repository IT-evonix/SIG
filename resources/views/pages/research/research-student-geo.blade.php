@extends('layouts.app')

@section('title', 'Research Students Projects on MSc in Geoinformatics - SIG')

@section('description', 'Explore cutting-edge research projects in M.Sc. Geoinformatics at SIG Pune. Learn from industry
experts and enhance your skills in geospatial technology.')

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
                        <h1 class="inner_banner_heading">Research <span>Student</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Research Student</li>
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
                            <h3 class="inner_page_menu_heading" id="inner_menu_heading_id">Research Student</h3>
                            @include('components.student-research-menu')
                        </div>
                        <div class="inner_page_contentbox">
                            <div class="research_publication_mainbox">
                                <h2 class="inner_heading">Research Students Projects on MSc in Geoinformatics - SIG</h2>
                                <div class="my_tabbing scrollable-tabbing">
                                    <div class="tab-navigation-wrapper">
                                        <button type="button" class="tab-scroll-btn tab-prev"
                                            aria-label="Previous tabs">
                                            &#10094;
                                        </button>
                                        <div class="tab-navigation-scroll">
                                            <ul class="nav nav-tabs custom-tabs" id="batchTabs" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="batch-2025-tab"
                                                        data-bs-toggle="tab" data-bs-target="#batch-2025" type="button"
                                                        role="tab">
                                                        Batch 2022-24
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="batch-2024-tab" data-bs-toggle="tab"
                                                        data-bs-target="#batch-2024" type="button" role="tab">
                                                        Batch 2021-23
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="batch-2023-tab" data-bs-toggle="tab"
                                                        data-bs-target="#batch-2023" type="button" role="tab">
                                                        Batch 2020-22
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <button type="button" class="tab-scroll-btn tab-next" aria-label="Next tabs">
                                            &#10095;
                                        </button>
                                    </div>

                                    <div class="tab-content" id="batchTabsContent">
                                        <div class="tab-pane fade show active" id="batch-2025" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>PRN</th>
                                                            <th>Student Name</th>
                                                            <th>Title of the Project</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>1 </td>
                                                            <td> 22070241003 </td>
                                                            <td> Abhik Naskar </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241003.pdf') }}"
                                                                    target="_blank"> Flood Hazard Mapping In Kamrup
                                                                    Metropolitan And Kamrup District Of Assam Using
                                                                    Sentinel-1 SAR Data</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2 </td>
                                                            <td> 22070241004 </td>
                                                            <td> Adrija Dawn </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241004.pdf') }}"
                                                                    target="_blank"> Shivaji nagar Pune Property Guide:
                                                                    WebGIS Portal and Dashboard Insights for Buyers</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3 </td>
                                                            <td> 22070241005 </td>
                                                            <td> Anima Chowdhury </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241005.pdf') }}"
                                                                    target="_blank"> Flood Modelling Assessment using
                                                                    Geospatial Technology for a part of Godavari River
                                                                    Basin (upper)</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4 </td>
                                                            <td> 22070241006 </td>
                                                            <td> Anisha Maji </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241006.pdf') }}"
                                                                    target="_blank"> Landslide Susceptibility Mapping
                                                                    using Geospatial Techniques in Tehri Garhwal and
                                                                    Rudra Prayag districts, Uttarakhand, India</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>5 </td>
                                                            <td> 22070241007 </td>
                                                            <td> Ankita Basak </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241007.pdf') }}"
                                                                    target="_blank"> Geometric network to utility
                                                                    network data preparation using geospatial
                                                                    technology</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>6 </td>
                                                            <td> 22070241008 </td>
                                                            <td> Ankita Dasgupta </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241008.pdf') }}"
                                                                    target="_blank"> Towards Sustainable Cities”: Deep
                                                                    Learning-Enabled Assessment and ranking of solar
                                                                    potential in Indian Urban Centres.</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>7 </td>
                                                            <td> 22070241009 </td>
                                                            <td> Antara Dey </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241009.pdf') }}"
                                                                    target="_blank"> Strategic Urban Development: A GIS
                                                                    Approach to Site Suitability Analysis for Informed
                                                                    Growth Planing</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>8 </td>
                                                            <td> 22070241010 </td>
                                                            <td> Anusha Haque </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241010.pdf') }}"
                                                                    target="_blank"> Flood Susceptibility Mapping of
                                                                    Uttarakhand using Machine Learning Algorithms </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>9 </td>
                                                            <td> 22070241011 </td>
                                                            <td> Anushka Sinha </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241011.pdf') }}"
                                                                    target="_blank"> A Geospatial Approach to
                                                                    Understanding Forest Fire Dynamics with Google Earth
                                                                    Engine in Nainital district, Uttarakhand, India.</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>10 </td>
                                                            <td> 22070241012 </td>
                                                            <td> Anusmita Dey </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241012.pdf') }}"
                                                                    target="_blank"> Integrated Spatial Analysis for
                                                                    Sustainable Forest Management: Deciphering Forest
                                                                    Fragmentation and Canopy Density Modeling in the
                                                                    Indian Sundarbans, West Bengal</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>11 </td>
                                                            <td> 22070241013 </td>
                                                            <td> Anwesha Saha </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241013.pdf') }}"
                                                                    target="_blank"> Optimizing Waste Management in
                                                                    Rural Areas: A GIS-based Approach for Smart Waste
                                                                    Collection in Kurukali Village.</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12 </td>
                                                            <td> 22070241014 </td>
                                                            <td> Aparajita Ghosh </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241014.pdf') }}"
                                                                    target="_blank"> GIS-Based Analytical Hierarchy
                                                                    Process (AHP) Approach for Identifying Potential
                                                                    Eco-Tourism Locations in Idukki District, Kerala,
                                                                    India</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>13 </td>
                                                            <td> 22070241015 </td>
                                                            <td> Apoorva Chaudhary </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241015.pdf') }}"
                                                                    target="_blank"> Assessing the Deforestation and
                                                                    Dynamics : A Case Study of Nainital </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>14 </td>
                                                            <td> 22070241016 </td>
                                                            <td> Arenla Longchar </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241016.pdf') }}"
                                                                    target="_blank"> A deep-learning approach for
                                                                    detecting coal mining activities and temporal
                                                                    analysis through an interactive web application in
                                                                    Changki Valley, Nagaland.</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>15 </td>
                                                            <td> 22070241017 </td>
                                                            <td> Arijit Sarkar </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241017.pdf') }}"
                                                                    target="_blank"> Evaluation of Key Indicators of
                                                                    Smart Waste Collection Using GIS Techniques as a
                                                                    Planning and Control Tool.</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>16 </td>
                                                            <td> 22070241018 </td>
                                                            <td> Atreyie Dhara </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241018.pdf') }}"
                                                                    target="_blank"> Development of Android Application
                                                                    for Data collection And Daily Life uses Using Mobile
                                                                    GIS</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>17 </td>
                                                            <td> 22070241019 </td>
                                                            <td> Avisikta Majumder </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241019.pdf') }}"
                                                                    target="_blank"> Transforming Traditional to Digital
                                                                    Out-of-Home Advertising: A Case Study of Integrating
                                                                    GIS Technology</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>18 </td>
                                                            <td> 22070241021 </td>
                                                            <td> Ayushka Banik </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241021.pdf') }}"
                                                                    target="_blank"> Delhi Environmental Insights: An
                                                                    Application for Interactive Visualization</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>19 </td>
                                                            <td> 22070241022 </td>
                                                            <td> Babli Basak </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241022.pdf') }}"
                                                                    target="_blank"> Modelling agricultural land
                                                                    suitability using RS and GIS in conjunction with
                                                                    bivariate techniques for pearl millet in Jaipur
                                                                    (Rajasthan), India</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>20 </td>
                                                            <td> 22070241023 </td>
                                                            <td> Banashree Saren </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241023.pdf') }}"
                                                                    target="_blank"> Urban Flood Risk Assessment in
                                                                    Flood-Prone Areas of Assam Using Geospatial
                                                                    Technology - A Case Study of Kamrup Metropolitan
                                                                    District</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>21 </td>
                                                            <td> 22070241024 </td>
                                                            <td> Barnima Das </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241024.pdf') }}"
                                                                    target="_blank"> Enhancing Disaster Preparedness and
                                                                    Response during Peak Forest Fire Season using Forest
                                                                    Fire Risk Zonation Mapping Techniques</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>22</td>
                                                            <td> 22070241025 </td>
                                                            <td> Bidipta Dutta </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241025.pdf') }}"
                                                                    target="_blank"> Eco-Urban Dynamics: Analyzing
                                                                    Biodiversity and Urban Growth through Night-Time
                                                                    Light Emission </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>23</td>
                                                            <td> 22070241026 </td>
                                                            <td> Brinda Banerjee </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241026.pdf') }}"
                                                                    target="_blank"> Vulnerability Risk assessment of
                                                                    tropical cyclone using spatial analysis method in
                                                                    Balasore (Odisha), India</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>24 </td>
                                                            <td> 22070241027 </td>
                                                            <td> Damayantee Roy </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241027.pdf') }}"
                                                                    target="_blank"> Landslide Vision: Interactive
                                                                    Monitoring for Safety.</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>25 </td>
                                                            <td> 22070241028 </td>
                                                            <td> Debanjali Gupta </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241028.pdf') }}"
                                                                    target="_blank"> Water Quality Monitoring and Water
                                                                    Surface Area Visualization Application using Google
                                                                    Earth Engine</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>26 </td>
                                                            <td> 22070241029 </td>
                                                            <td> Debanu Ghosh </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241029.pdf') }}"
                                                                    target="_blank"> Data Readiness Assessment and Data
                                                                    Mapping: The first two step in Data Migration from
                                                                    Geometric Network to Utility Network</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>27 </td>
                                                            <td> 22070241030 </td>
                                                            <td> Dipanwita Das </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241030.pdf') }}"
                                                                    target="_blank"> A Geospatial Analysis of land
                                                                    subsidence through Groundwater Depletion and Remote
                                                                    Sensing in Kolkata and its sub regions</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>28 </td>
                                                            <td> 22070241032 </td>
                                                            <td> Granthana Paul </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241032.pdf') }}"
                                                                    target="_blank"> Flood Detection in Lakhimpur
                                                                    District, Assam Using Sentinel-1 SAR Data</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>29 </td>
                                                            <td> 22070241035 </td>
                                                            <td> Jiban Ray </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241035.pdf') }}"
                                                                    target="_blank"> Flood Hazard Mapping Using GIS and
                                                                    AHP Technologies in Morigaon, Naogaon and Karbi
                                                                    District, Assam.</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>30 </td>
                                                            <td> 22070241036 </td>
                                                            <td> Khushi Kaushik </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241036.pdf') }}"
                                                                    target="_blank"> Smart Surveillance: Real-Time Road
                                                                    Killed Wildlife Detection using Mobile Mapping
                                                                    System</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>31 </td>
                                                            <td> 22070241037 </td>
                                                            <td> Komal Meena </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241037.pdf') }}"
                                                                    target="_blank"> Assessing Future Assets Risks in
                                                                    Mumbai under RCP Scenarios: A Climate Value at Risk
                                                                    Approach</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>32 </td>
                                                            <td> 22070241038 </td>
                                                            <td> Koushiki Ghoshal </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241038.pdf') }}"
                                                                    target="_blank"> Water Crisis and Water Security in
                                                                    the city of Hyderabad using Geospatial
                                                                    Techniques</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>33 </td>
                                                            <td> 22070241039 </td>
                                                            <td> Madhulika Smriti </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241039.pdf') }}"
                                                                    target="_blank"> Developing tools and applications
                                                                    for snow clearing and tracking App</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>34 </td>
                                                            <td> 22070241040 </td>
                                                            <td> Mandira Chakraborty </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241040.pdf') }}"
                                                                    target="_blank"> Rising Threats: Sea Level
                                                                    Projections and Coastal Vulnerability Analysis for
                                                                    Miami Beach</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>35 </td>
                                                            <td> 22070241043 </td>
                                                            <td> Md Towfiq </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241043.pdf') }}"
                                                                    target="_blank"> Earthquake potential zones
                                                                    identification using MCDA Machine Learning and
                                                                    Geospatial techniques in Sikkim </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>36 </td>
                                                            <td> 22070241044 </td>
                                                            <td> Meha </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241044.pdf') }}"
                                                                    target="_blank"> From Subtle Shifts to Catastrophic
                                                                    Collapse: Pre-Event Monitoring of Tupul Landslide
                                                                    via SAR Interferometry</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>37 </td>
                                                            <td> 22070241045 </td>
                                                            <td> Misal Digvijay Anna </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241045.pdf') }}"
                                                                    target="_blank"> Application of Night-time Light
                                                                    data and Machine Learning to predict Economic
                                                                    Classes in Maharashtra at Subdistrict level</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>38 </td>
                                                            <td> 22070241046 </td>
                                                            <td> Monalisa Sarkar </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241046.pdf') }}"
                                                                    target="_blank"> Assessing Future Airport Sites: A
                                                                    GIS-Based Analysis for Greenfield International
                                                                    Airports in Raigad and Kanchipuram.</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>39 </td>
                                                            <td> 22070241047 </td>
                                                            <td> Mou Garai </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241047.pdf') }}"
                                                                    target="_blank"> Flood susceptibility mapping using
                                                                    machine learning boosting algorithms and Geospatial
                                                                    techniques -A Case Study of Subarnarekha River
                                                                    Basin</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>40 </td>
                                                            <td> 22070241051 </td>
                                                            <td> Neha Arong </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241051.pdf') }}"
                                                                    target="_blank"> Unraveling the Environmental Impact
                                                                    of Night Time Light Emission</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>41 </td>
                                                            <td> 22070241052 </td>
                                                            <td> Oishani Chatterjee </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241052.pdf') }}"
                                                                    target="_blank"> Investigating Linkage Between Flash
                                                                    Drought And Soil Moisture Using Earth Observation
                                                                    And Machine Learning</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>42 </td>
                                                            <td> 22070241053 </td>
                                                            <td> Piyush Malvi </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241053.pdf') }}"
                                                                    target="_blank"> Mapping And 3D Visualization using
                                                                    Open Source WebGIS</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>43 </td>
                                                            <td> 22070241054 </td>
                                                            <td> Pramita Dasgupta </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241054.pdf') }}"
                                                                    target="_blank"> An Inclusive Approach Towards
                                                                    Impact of Climate Alterations Over Indian
                                                                    Sundarbans, West Bengal.</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>44 </td>
                                                            <td> 22070241055 </td>
                                                            <td> Pritha Mukherjee </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241055.pdf') }}"
                                                                    target="_blank"> Comprehensive Urban Flood Mapping
                                                                    and Run-off Analysis using the SCS-CN Method, a case
                                                                    study of Pune.</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>45 </td>
                                                            <td> 22070241056 </td>
                                                            <td> Priya Kherwar </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241056.pdf') }}"
                                                                    target="_blank"> Enhancing Electric Data Integrity:
                                                                    Error Cleanup and Tier Establishment in Geometric
                                                                    Network to Utility Network Migration with Subnetwork
                                                                    Creation</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>46 </td>
                                                            <td> 22070241057 </td>
                                                            <td> Rakesh Menon K P </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241057.pdf') }}"
                                                                    target="_blank"> SDSS Prototype for Watershed
                                                                    Management in Udaipur District, South Rajasthan</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>47 </td>
                                                            <td> 22070241058 </td>
                                                            <td> Ritwika Chakraborty </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241058.pdf') }}"
                                                                    target="_blank"> Extraction of Urban Quality of Life
                                                                    Indicators Using Remote Sensing and Machine
                                                                    Learning: The Case of Al Ain City, United Arab
                                                                    Emirates (UAE)"</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>48 </td>
                                                            <td> 22070241059 </td>
                                                            <td> Riya Hodawdekar Mohan </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241059.pdf') }}"
                                                                    target="_blank"> Green Oasis: Analyzing the
                                                                    Multi-faceted Impacts of Parks on Communities
                                                                    through Survey and GIS Analysis</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>49 </td>
                                                            <td> 22070241060 </td>
                                                            <td> Ronik Karmakar </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241060.pdf') }}"
                                                                    target="_blank"> Fusion of Dual Polarized SAR Data
                                                                    and Multispectral Data and it's Comparison with
                                                                    Landsat Imageries for Land Cover Extraction </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>50 </td>
                                                            <td> 22070241062 </td>
                                                            <td> Rubesh Mallik </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241062.pdf') }}"
                                                                    target="_blank"> Groundwater Potential Zone
                                                                    Mapping</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>51 </td>
                                                            <td> 22070241063 </td>
                                                            <td> Rupsha Karmakar </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241063.pdf') }}"
                                                                    target="_blank"> Spatial Analysis of Rooftop
                                                                    Suitability for Solar Photovoltaic Installation in
                                                                    New Zealand integrating Lidar and Geospatial
                                                                    Approach</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>52 </td>
                                                            <td> 22070241064 </td>
                                                            <td> Sampada Ajay Shastri </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241064.pdf') }}"
                                                                    target="_blank"> Tracing Urban Development's
                                                                    Footprint on Groundwater Pollution: A Case Study of
                                                                    Delhi's Groundwater Scenario</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>53 </td>
                                                            <td> 22070241065 </td>
                                                            <td> Samprita Maji </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241065.pdf') }}"
                                                                    target="_blank"> Urbanization development in
                                                                    Maharashtra using Night Time Light data</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>54 </td>
                                                            <td> 22070241066 </td>
                                                            <td> Samudra Roy </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241066.pdf') }}"
                                                                    target="_blank"> Crop Type And crop Health
                                                                    Monitoring Using United states Department Of
                                                                    Agriculture Dataset And Machine Learning Approaches
                                                                    In United States Of America</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>55 </td>
                                                            <td> 22070241068 </td>
                                                            <td> Shraddha Pradhan </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241068.pdf') }}"
                                                                    target="_blank"> Electric Data Mapping and Migration
                                                                    from Geomteric Network to Utility Network in the
                                                                    city of Greeley, Colorado</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>56 </td>
                                                            <td> 22070241069 </td>
                                                            <td> Shreyashi Rani Maity </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241069.pdf') }}"
                                                                    target="_blank"> Integrated Simulation and Analysis
                                                                    of Transmission and Distribution Networks for Mahad
                                                                    Industrial Areas: Identifying Challenges and
                                                                    Proposing Remedial Measures for MIDC</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>57 </td>
                                                            <td> 22070241070 </td>
                                                            <td> Sneha Chaudhury </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241070.pdf') }}"
                                                                    target="_blank"> Fine-Tuning Segment Anything
                                                                    Model(SAM) for Enhanced Image Segmentation</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>58 </td>
                                                            <td> 22070241071 </td>
                                                            <td> Sneha Ghosh </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241071.pdf') }}"
                                                                    target="_blank"> Location suitability including the
                                                                    criteria for development of new single-line BG
                                                                    alignment- by NER: Tanakpur to Bageshwar,
                                                                    Uttarakhand</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>59 </td>
                                                            <td> 22070241072 </td>
                                                            <td> Sneha Halder </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241072.pdf') }}"
                                                                    target="_blank"> Assessing Urban Sprawl Dynamics in
                                                                    Ahmedabad: A Shannon Entropy Approach to Analyze
                                                                    Growth Impact on Environmental Parameters</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>60 </td>
                                                            <td> 22070241073 </td>
                                                            <td> Sneha Mondal </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241073.pdf') }}"
                                                                    target="_blank"> UAV Based Photogrammetric Mapping
                                                                    and 3d Modelling of Urban Building</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>61 </td>
                                                            <td> 22070241074 </td>
                                                            <td> Sreetama Kundu </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241074.pdf') }}"
                                                                    target="_blank"> Integrating Forest Fire Risk
                                                                    Assessment for Urban Planning: A Spatial Analysis
                                                                    for Chhattisgarh using geospatial techniques</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>62 </td>
                                                            <td> 22070241075 </td>
                                                            <td> Sudeshna Manna </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241075.pdf') }}"
                                                                    target="_blank"> Sessment And Predication Of Urban
                                                                    Heat Island In Context Of LST And Lulc Change Using
                                                                    Google Earth Engine on Delhi-NCR</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>63 </td>
                                                            <td> 22070241076 </td>
                                                            <td> Tanisha Paul </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241076.pdf') }}"
                                                                    target="_blank"> Modelling Soil erosion using Google
                                                                    Earth Engine- A study of Dwarakeshwar-Rupnarayan
                                                                    River Basin.</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>64 </td>
                                                            <td> 22070241077 </td>
                                                            <td> Tarun Jain </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241077.pdf') }}"
                                                                    target="_blank"> Comparative Analysis of Geometric
                                                                    Network to Utility Network Data Migration:
                                                                    Evaluating RMSI and ESRI Tool</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>65 </td>
                                                            <td> 22070241078 </td>
                                                            <td> Thidhiksha S S </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241078.pdf') }}"
                                                                    target="_blank"> Analysis of domestic water supply
                                                                    &amp; future demand dynamics of Bengaluru city </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>66 </td>
                                                            <td> 22070241079 </td>
                                                            <td> Utkarsh Sanjay Singh </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241079.pdf') }}"
                                                                    target="_blank"> Spatiotemporal Analysis of Urban
                                                                    Heat Island Effects and Land Surface Dynamics in
                                                                    Hyderabad and Secunderabad Using Remote Sensing
                                                                    Techniques </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>67 </td>
                                                            <td> 22070241080 </td>
                                                            <td> Wadghane Machhindranath </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/geo/22070241080.pdf') }}"
                                                                    target="_blank"> Integrated Sewerage Pipeline System
                                                                    for Sustainable Wastewater Management Using GIS
                                                                    technology Case study : Ambaranath MIDC</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="batch-2024" role="tabpanel">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>PRN</th>
                                                        <th>Student Name</th>
                                                        <th>Title of the Project</th>
                                                    </tr>
                                                </thead>

                                                <tbody>

                                                    <tr>
                                                        <td>1</td>
                                                        <td>21070241001</td>
                                                        <td>Adeeba Mumtaz</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241001.pdf') }}"
                                                                target="_blank">Ground Water Quality Assessment and
                                                                Analysis using Geo-statistical techniques for Pune,
                                                                Maharashtra</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>21070241002</td>
                                                        <td>Aishwarya Sinha</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241002.pdf') }}"
                                                                target="_blank">Web Application for RO Mapping of
                                                                CNG/BIO-CNG Facility</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>21070241004</td>
                                                        <td>Anyesha Roy choudhury </td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241004.pdf') }}"
                                                                target="_blank">Spatial temporal variability of flash
                                                                drought events over India for the years 1980 - 2021</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>21070241006</td>
                                                        <td>Asmita Das </td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241006.pdf') }}"
                                                                target="_blank">Using geospatial technology for
                                                                identifying site suitability of KT Weir of Apti Dam on
                                                                Ulhas River</a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>21070241007</td>
                                                        <td>Astha Sonalika</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241007.pdf') }}"
                                                                target="_blank">Applying geospatial techniques for
                                                                potential CNG petrol pump locations in mega and metro
                                                                cities of India</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>21070241008</td>
                                                        <td>Benin</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241008.pdf') }}"
                                                                target="_blank">Geo-Intelligent Tool to predict ground
                                                                water quality using Machine Learning techniques</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>21070241009</td>
                                                        <td>Anirudh Krishnaraj Bhat</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241009.pdf') }}"
                                                                target="_blank">Detecting Spatio-Temporal Change In
                                                                Climatic Variables Over Amazon Basin Using GIS Based
                                                                Integrated Approach </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>21070241010</td>
                                                        <td>Bhoomika Singh</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241010.pdf') }}"
                                                                target="_blank">ASSESSMENT OF CHANGE IN NDVI OVER THE
                                                                PARVARA RIVER BASIN IN THE CONTEXT OF CLIMATE CHANGE
                                                                USING THE GOOGLE EARTH ENGINE</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>21070241011</td>
                                                        <td>Bipasha Das</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241011.pdf') }}"
                                                                target="_blank">Site Suitability Analysis of Tea
                                                                Plantation of Kurseong using AHP and GIS Techniques</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>21070241012</td>
                                                        <td>Bishakha Kundu</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241012.pdf') }}"
                                                                target="_blank">Detecting spatio-temporal change in
                                                                climatic variables and understanding the navigational
                                                                factors affecting North American Arctics</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>21070241013</td>
                                                        <td>Carina Jose </td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241013.pdf') }}"
                                                                target="_blank">Drone LiDAR surveying for planning and
                                                                designing of a hill road - A case study for Sonawade
                                                                ghat road in sindhudurg district </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>21070241015</td>
                                                        <td>Debanjoli Das Roy</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241015.pdf') }}"
                                                                target="_blank">Multi criteria approach for analyzing
                                                                the direction of growth in human settlements in
                                                                Noida</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>21070241016</td>
                                                        <td>Divyanika Vats</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241016.pdf') }}"
                                                                target="_blank">Mineral exploration of li pegmatite and
                                                                Granitite using Remote Sensing Techniques- Case study of
                                                                Katghora Chattisgarh</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>21070241017</td>
                                                        <td>Feba Treasa Jose</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241017.pdf') }}"
                                                                target="_blank">Evolutionary Optimisation Algorithms for
                                                                hyperspectral band selection</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>21070241018</td>
                                                        <td>Gideon Kenny Mylliemngap </td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241018.pdf') }}"
                                                                target="_blank">Topographic Survey using Aerial Lidar
                                                                for feasibility if road construction in hilly terrain -
                                                                A case study in Sangamner </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>21070241019</td>
                                                        <td>Goutham G R</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241019.pdf') }}"
                                                                target="_blank">Analysis of Volcanic Hazards and
                                                                Emergency Evacuation Route Planning using GIS techniques
                                                            </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>21070241020</td>
                                                        <td>Hemlata Dhami</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241020.pdf') }}"
                                                                target="_blank">Analysis of the Pashan Panchvati to
                                                                Kothrud Connecting Tunnel-A Case Study</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>21070241021</td>
                                                        <td>Himanshu Gupta</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241021.pdf') }}"
                                                                target="_blank">Digital Mapping and asset management of
                                                                water utility network for Barvi Mumbai Metropolitan
                                                                region area using Geospatial Technology</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>21070241024</td>
                                                        <td>Ipshita Ray</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241024.pdf') }}"
                                                                target="_blank">"ASSESSING GROUNDWATER POTENTIAL ZONES
                                                                USING GIS AND REMOTE SENSING TECHNIQUES IN HAVELI TEHSIL
                                                                OF PUNE,MAHARASHTRA"</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td>20</td>
                                                        <td>21070241025</td>
                                                        <td>IVATURI SIDDHARDH K.</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241025.pdf') }}"
                                                                target="_blank">Downscaling of the Grace Satellite Data
                                                                Using Machine Learning for the Analysing Water
                                                                resources</a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>21</td>
                                                        <td>21070241027</td>
                                                        <td>Kanad Ghosh </td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241027.pdf') }}"
                                                                target="_blank">Mapping the Expansion: A Geospatial
                                                                Analysis for New Titan Stores in India.</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>22</td>
                                                        <td>21070241028</td>
                                                        <td>Shiv Ashish Karnik </td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241028.pdf') }}"
                                                                target="_blank">Detecting spatiotemporary changes caused
                                                                by tropical cyclone over Indian coastal region</a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>23</td>
                                                        <td>21070241029</td>
                                                        <td>Krittika Sarkar </td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241029.pdf') }}"
                                                                target="_blank">Site Suitability Analysis for Tea
                                                                Cultivation in Sivasagar, Assam using AHP and GIS
                                                                Techniques.</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>24</td>
                                                        <td>21070241030</td>
                                                        <td>L A Archita</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241030.pdf') }}"
                                                                target="_blank">Prediction of El Nino Southern
                                                                Oscillation using LSTM statistical Techniques</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>25</td>
                                                        <td>21070241031</td>
                                                        <td>Maithili S Joshi</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241031.pdf') }}"
                                                                target="_blank">"Deep Learning Approaches for Waste
                                                                Classification: A ResNet-based Analysis"</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td>26</td>
                                                        <td>21070241033</td>
                                                        <td>Meet Patel</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241033.pdf') }}"
                                                                target="_blank">Urban Building Energy Modelling of
                                                                Sanpada</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>27</td>
                                                        <td>20070241034</td>
                                                        <td>Nalin Ranjan</td>
                                                        <td><a href="">Making of Brahmapur zone maps and water network
                                                                map for WATCO</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>21070241035</td>
                                                        <td>Rini Naik</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241035.pdf') }}"
                                                                target="_blank">Identification of potential shrimp
                                                                farming sites in Ratnagiri district, Maharashtra using
                                                                multi criteria GIS approach</a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>29</td>
                                                        <td>21070241036</td>
                                                        <td>Nivadita Sen</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241036.pdf') }}"
                                                                target="_blank">"Development of Reusable widgets for
                                                                preparation of interactive dashboards in WebGIS
                                                                applications"</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td>30</td>
                                                        <td>21070241037</td>
                                                        <td>Oindrila Sengupta </td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241037.pdf') }}"
                                                                target="_blank">Determining the effect of urban growth
                                                                on shrinkage of East Kolkata wetlands area, Using
                                                                geospatial technology </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>31</td>
                                                        <td>21070241038</td>
                                                        <td>Pooja G Nair</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241038.pdf') }}"
                                                                target="_blank">Toposurvey using Lidar for the
                                                                development of transportation infrastructure :- A case
                                                                study of the proposed Jakhalabandha- Badulipar Rail
                                                                line</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>32</td>
                                                        <td>21070241039</td>
                                                        <td>PRACHI</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241039.pdf') }}"
                                                                target="_blank">"Identification of Groundwater Potential
                                                                Zones Using RS, GIS and AHP Techniques: A Case Study in
                                                                Vidisha District of Madhya Pradesh, India" </a></td>
                                                    </tr>

                                                    <tr>
                                                        <td>33</td>
                                                        <td>21070241040</td>
                                                        <td>Pratiti Bhattacharya </td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241040.pdf') }}"
                                                                target="_blank">Assessment of land use and land cover
                                                                dynamics, Urban Sprawling and Environmental Condition of
                                                                Kolkata Municipal Corporation, West Bengal , India</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>34</td>
                                                        <td>21070241042</td>
                                                        <td>Priyanka Karmakar </td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241042.pdf') }}"
                                                                target="_blank">Identification of potential groundwater
                                                                zone in Nashik district of Maharashtra state using
                                                                geospatial analysis.</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>35</td>
                                                        <td>21070241043</td>
                                                        <td>Varad Purandare </td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241043.pdf') }}"
                                                                target="_blank">Geo-intelligent Model for Habitat
                                                                Suitability </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>36</td>
                                                        <td>21070241045</td>
                                                        <td>Risa Palit</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241045.pdf') }}"
                                                                target="_blank">Classification and Detection of
                                                                Mangroves using Deep Learning along Mumbai and its
                                                                adjoining areas.</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>37</td>
                                                        <td>21070241046</td>
                                                        <td>Sanchita Das</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241046.pdf') }}"
                                                                target="_blank">CORRIDOR MAPPING OF EXISTING
                                                                TRANSMISSION HT LINE, A CASE STUDY OF KANDLA,
                                                                GUJARAT</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>38</td>
                                                        <td>21070241047</td>
                                                        <td>Sannati Sawoo</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241047.pdf') }}"
                                                                target="_blank">Analyzing The Change Of LULC And It's
                                                                Effect On LST In Visakhapatnanm City - A study Of 2009
                                                                and 2019</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>39</td>
                                                        <td>21070241048</td>
                                                        <td>Sayani Mukherjee</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241048.pdf') }}"
                                                                target="_blank">Ground Water Quality Assessment and
                                                                Analysis using Geo-statistical techniques for Pune,
                                                                Maharashtra</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>40</td>
                                                        <td>21070241049</td>
                                                        <td>Sayani Pal</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241049.pdf') }}"
                                                                target="_blank">A Comprehensive Integration of
                                                                Geospatial Technology and Machine Learning Algorithms in
                                                                Demarcating Groundwater Potential Zones of Pune
                                                                District, Maharashtra, India.</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>41</td>
                                                        <td>21070241050</td>
                                                        <td>Moheiba Shaikh</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241050.pdf') }}"
                                                                target="_blank">Flood Susceptibility Mapping using
                                                                Geoprocessing tools to Map Flood Risk Areas of Gajapati
                                                                District of Odisha</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>42</td>
                                                        <td>21070241051</td>
                                                        <td>Shrestha Das</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241051.pdf') }}"
                                                                target="_blank">"GIS BASED DRONE SURVEY OF NEW PROPOSED
                                                                KT WEIR AT HARCHARI DAM &amp; IDENTIFICATION OF
                                                                SUBMERGENCE AREA OF LAND PARCEL ."</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td>43</td>
                                                        <td>21070241052</td>
                                                        <td>Sraosee Manna</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241052.pdf') }}"
                                                                target="_blank">Identifying Climatic Niche Shift of the
                                                                Endemic Avifauna of Western Ghats: An Ensemble Modeling
                                                                Approach with biomod2.</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>44</td>
                                                        <td>21070241053</td>
                                                        <td>Sreoshi Bhattacharyya</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241053.pdf') }}"
                                                                target="_blank">"Mapping the distribution of ‘ursus
                                                                arctos’ in the Western Himalayas using MaxEnt
                                                                algorithm"</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td>45</td>
                                                        <td>21070241054</td>
                                                        <td>Sriparna Pain</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241054.pdf') }}"
                                                                target="_blank">Exploring linkage between drought and
                                                                soil moisture over 21 years (2002-2022) using earth
                                                                observation technique : A case study of Ahmednagar </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>46</td>
                                                        <td>21070241055</td>
                                                        <td>Srishti</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241055.pdf') }}"
                                                                target="_blank">Real Time Mapping Chlorolphyll a in the
                                                                Brahmaputra River using google Earth Engine</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>47</td>
                                                        <td>21070241056</td>
                                                        <td>Sristi Choudhury</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241056.pdf') }}"
                                                                target="_blank">Assessing Forest cover vulnerability in
                                                                Pauri Garhwal District of Uttarakhand using AHP Model
                                                                technique</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>48</td>
                                                        <td>21070241057</td>
                                                        <td>Sugam Samriti Banchta</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241057.pdf') }}"
                                                                target="_blank">Land subsidence Mapping in Joshimath
                                                                Region of Chamoli, Uttrakhand</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>49</td>
                                                        <td>21070241058</td>
                                                        <td>Pavankumar Suryawanshi</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241058.pdf') }}"
                                                                target="_blank">Prediction of groundwater potential
                                                                zones in the Pune District using AHP and MIF technique
                                                            </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>50</td>
                                                        <td>21070241059</td>
                                                        <td>Tejas Kapoor </td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241059.pdf') }}"
                                                                target="_blank">Site Suitability Analysis for creation
                                                                of New and Modern Airports in Pune and Patna </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>51</td>
                                                        <td>21070241060</td>
                                                        <td>Trisha Nandan</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241060.pdf') }}"
                                                                target="_blank">Evaluating the measurement of litterfall
                                                                in the Sahyadri region of Maharashtra through the
                                                                utilisation of remote sensing data</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>52</td>
                                                        <td>21070241061</td>
                                                        <td>Upali Baral </td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241061.pdf') }}"
                                                                target="_blank">Water quality assessment of Chilika Lake
                                                                using geospatial technique </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>53</td>
                                                        <td>21070241062</td>
                                                        <td>Akshay Hemant Vaidya</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241062.pdf') }}"
                                                                target="_blank">Visualising city gas distribution
                                                                network using web-gis.</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>54</td>
                                                        <td>21070241065</td>
                                                        <td>Brinda Kashyap</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241065.pdf') }}"
                                                                target="_blank">"“Habitat suitability AND LANDSCAPE
                                                                CONNECTIVITY MODELLING OF GREATER ONE-HORNED RHINO
                                                                CONSERVATION IN KAZIRANGA NATIONAL PARK”-A SPATIALLY
                                                                EXPLICIT APPROACH</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td>55</td>
                                                        <td>21070241066</td>
                                                        <td>Kamaldeep</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241066.pdf') }}"
                                                                target="_blank">Estimation of soil erosion using RUSLE
                                                                model - case study of Tapi river basin</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>56</td>
                                                        <td>21070241067</td>
                                                        <td>Supriti Samanta</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241067.pdf') }}"
                                                                target="_blank">High performing web maps in Enterprise
                                                                GIS </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>57</td>
                                                        <td>21079241069</td>
                                                        <td>Puja Banerjee </td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241069.pdf') }}"
                                                                target="_blank">Web GIS application for water utility
                                                                management system </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>58</td>
                                                        <td>21070241070</td>
                                                        <td>Tripti</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/21070241070.pdf') }}"
                                                                target="_blank">Spatial pattern assessment of forest
                                                                fire in Uttarakhand using Analytical hierarchy process
                                                                of Uttarakhand </a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="batch-2023" role="tabpanel">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>PRN</th>
                                                        <th>Student Name</th>
                                                        <th>Title of the Project</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>20070241001</td>
                                                        <td>Aishwarya Rai</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241001.pdf') }}"
                                                                target="_blank">Forest Fire and smoke Map with Real-Time
                                                                GIS for Weather Information Web-Based Application</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>20070241003</td>
                                                        <td>Akanchha Vaishali</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241003.pdf') }}"
                                                                target="_blank">Glacial Lake and glacial outbrust flood
                                                                in Himalayan basian using remotes sensing &amp; GIS
                                                                Technquies </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>20070241004</td>
                                                        <td>Amiya Kumar Mohan</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241004.pdf') }}"
                                                                target="_blank">Flood Zone Risk Analysis of Rudraprayag,
                                                                Uttarakhand </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>20070241005</td>
                                                        <td>Amlan Ghosh</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241005.pdf') }}"
                                                                target="_blank">Changing Agricultural Area with Surface
                                                                Irrigation:A Study of Damodar River Basin.</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>20070241006</td>
                                                        <td>Angoja Ghosh</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241006.pdf') }}"
                                                                target="_blank">The Change Detection on Geographic And
                                                                Socio-Economic Environment In North Eastern India </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>20070241007</td>
                                                        <td>Anju Unnikrishnan</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241007.pdf') }}"
                                                                target="_blank">The Forest Fire Monitoring And Risk
                                                                Assesment using GIS &amp; Remote Sensing Techniquies</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>20070241009</td>
                                                        <td>Ashmita Ghosh</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241009.pdf') }}"
                                                                target="_blank">River Bank Failure Analysis of
                                                                Bhagirathi Hugli River in Lower Ganga Detla </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>20070241011</td>
                                                        <td>Swarada Badhe</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241011.pdf') }}"
                                                                target="_blank">Quantifiaction of Human
                                                                WildlifeConflicts [HWC] in India uisng geospatial
                                                                Technology &amp; Field Data:A Case study from Nagarhole
                                                                Tiger Reserve [NTR], Western Ghats,</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>20070241012</td>
                                                        <td>Barna Sarkar</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241012.pdf') }}"
                                                                target="_blank">Forest Fire Mapping &amp; Monitoring of
                                                                Deforestation using Remote sensing &amp; GIS Techniques
                                                                in the District of Deograh, Odisha, India.</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>20070241013</td>
                                                        <td>Barnali Saha</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241013.pdf') }}"
                                                                target="_blank">Assesment of Crop Health &amp;
                                                                Productivity Dynamics using Geospatial Technology &amp;
                                                                Machine Learning </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>20070241014</td>
                                                        <td>Bedatrayee Chatterjee</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241014.pdf') }}"
                                                                target="_blank">Topographic Effect Analysis of Solar
                                                                Radiation to Asess Optimum Solar Potential </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>20070241016</td>
                                                        <td>Chimaladinne Vinaya</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241016.pdf') }}"
                                                                target="_blank">Hyderabad City Future Greening using
                                                                Geopatial Modeling </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>20070241017</td>
                                                        <td>deepanwita dutt</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241017.pdf') }}"
                                                                target="_blank">Prediction of Road Accidents Hotspots in
                                                                Mumbai, using Forest Algorithm &amp;Gestis-Ord Gi*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>20070241018</td>
                                                        <td>Deepsikha Dey</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241018.pdf') }}"
                                                                target="_blank">Application of Markov Chain model for
                                                                the analysis for Urban Growtrh in Banglore,
                                                                Karnataka</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>15</td>
                                                        <td>20070241019</td>
                                                        <td>Dipisha Bose</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241019.pdf') }}"
                                                                target="_blank">Business locations in Major Cities of
                                                                Bangladesh</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>16</td>
                                                        <td>20070241020</td>
                                                        <td>Disha Jha</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241020.pdf') }}"
                                                                target="_blank">Storm Surge Vulnerability Assessment of
                                                                Coastal District Kutch,Gujarat using Remote Sensing
                                                                &amp; GIS </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>20070241022</td>
                                                        <td>Gayatri K.P</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241022.pdf') }}"
                                                                target="_blank">Analysis Comparison and Change Detection
                                                                of Urban Sprawl ofChennai city in the years 2001 &amp;
                                                                2021 </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>18</td>
                                                        <td>20070241023</td>
                                                        <td>Riddhi Gujar</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241023.pdf') }}"
                                                                target="_blank">Drainage Morphometric Analysis using GIS
                                                                &amp; Remote Sensing Techniques for Pravara River Basin
                                                                &amp; Upper Godavari River Basin</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>20070241024</td>
                                                        <td>Harsimran Kaur</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241024.pdf') }}"
                                                                target="_blank">Developing a R-Based Framework for
                                                                mapping flood for Tapovan Region Uttarakhand </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>20</td>
                                                        <td>20070241025</td>
                                                        <td>Jaita Chandra</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241025.pdf') }}"
                                                                target="_blank">Forest Fire Susceptibility Mapping for
                                                                selected Districts of Chhattisgarh </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>21</td>
                                                        <td>20070241027</td>
                                                        <td>Deepali Joshi</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241027.pdf') }}"
                                                                target="_blank">A Correlation Analysis between Land
                                                                Cover Indices &amp; Land Surface Temperature of Udaipur
                                                                &amp; Delhi Pre &amp; Post Pandemic</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>22</td>
                                                        <td>20070241030</td>
                                                        <td>Kunal Seth</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241030.pdf') }}"
                                                                target="_blank">GIS in Electrical Distribution Network
                                                                System </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>23</td>
                                                        <td>20070241031</td>
                                                        <td>Manika Sarkar</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241031.pdf') }}"
                                                                target="_blank">Identifying Per- Urban Growth in English
                                                                Bazar Urban Agglomeration, West Bengal,India</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>24</td>
                                                        <td>20070241035</td>
                                                        <td>NG Gayathri</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241035.pdf') }}"
                                                                target="_blank">Geospatial Technologies in Analyzing
                                                                Open Cast and Underground Coal Mines of Singrauli,
                                                                Madhya Pradesh, India</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>25</td>
                                                        <td>20070241037</td>
                                                        <td>Parth</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241037.pdf') }}"
                                                                target="_blank">Urban Expansion Impact on Agriculture: A
                                                                Case Study on Nagpur City</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>26</td>
                                                        <td>20070241038</td>
                                                        <td>Mustafa pipaliya</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241038.pdf') }}"
                                                                target="_blank">Morphometric Prioritization of Sub-
                                                                Water-sheds using a Fuzzy Analytic Hierarchy Process
                                                                &amp; Integrated Assessment of Extreme Events of
                                                                Rainfall &amp; Morphometric Characteristics in the
                                                                Brahmani River Basin</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>27</td>
                                                        <td>20070241039</td>
                                                        <td>Shravan Prabhu</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241039.pdf') }}"
                                                                target="_blank">Using Synthetic aperture radar for
                                                                effective flood management &amp; comparative analysis
                                                                between SAR &amp; optical imageries: Assam 2020 flood
                                                                case study approach </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>28</td>
                                                        <td>20070241041</td>
                                                        <td>Priyanka Das</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241041.pdf') }}"
                                                                target="_blank">Bell Project</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>29</td>
                                                        <td>20070241042</td>
                                                        <td>Rachita Mondal</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241042.pdf') }}"
                                                                target="_blank">Telecon Mc Turnkey </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>30</td>
                                                        <td>20070241044</td>
                                                        <td>Raunak</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241044.pdf') }}"
                                                                target="_blank">Landslide Susceptibility Mapping in
                                                                Almora District [Uttarakhand] using a set of
                                                                Geoprocessing tools &amp; a weighted overlay analysis
                                                                technique</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>31</td>
                                                        <td>20770241045</td>
                                                        <td>Retinaa Halder</td>
                                                        <td><a>Remote Sensing Based Technical Report on Mid - Season
                                                                Adversity due to Pests/Diseases in Red Gram Corp in
                                                                Latur District </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>32</td>
                                                        <td>20070241047</td>
                                                        <td>Rupsa Chanda</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241047.pdf') }}"
                                                                target="_blank">Spatial Temporal Changes of land Surface
                                                                Temperature &amp; Land Cover for Kolkata [2010-2020]</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>33</td>
                                                        <td>20070241048</td>
                                                        <td>Sadaf Khan</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241048.pdf') }}"
                                                                target="_blank">Forest Fire Risk Modeling using GIS
                                                                &amp; Remote sensing of two major lanscapes of Himachal
                                                                Pradesh</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>34</td>
                                                        <td>20070241049</td>
                                                        <td>Sanchari Das</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241049.pdf') }}"
                                                                target="_blank">Comparative Study of Temporal &amp;
                                                                Spatial Changes in Urbanization &amp; its Impact on the
                                                                environment among different cities across the globe </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>35</td>
                                                        <td>20070241051</td>
                                                        <td>Sayandeep Rakshit</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241051.pdf') }}"
                                                                target="_blank">Spatio-Temporal Analysis &amp;
                                                                Assessment of Mangrove Forest Cover Changes From
                                                                2001-2021 A Case study in Indian Sundarbans Deltaic
                                                                Region</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>36</td>
                                                        <td>20070241052</td>
                                                        <td>Seshanth. R</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241052.pdf') }}"
                                                                target="_blank">Monitoring Land Subsidence in Chennai
                                                                City using Mutli-Temporal Differential Interferometric
                                                                Synthetic Aperture Radar Technique</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>37</td>
                                                        <td>20070241053</td>
                                                        <td>Vidhi Shah</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241053.pdf') }}"
                                                                target="_blank">Land use &amp; Land Cover Dynamics of
                                                                the years 2002 &amp; 2022 0f Vadodara district.</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>38</td>
                                                        <td>20070241054</td>
                                                        <td>Shatarupa Ghosh</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241054.pdf') }}"
                                                                target="_blank">A Mobile-Based System for locating
                                                                suitable site for EV Charging Station Using Open Source
                                                                Geospatial Technology: A Case study of Pune District
                                                            </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>39</td>
                                                        <td>20070241056</td>
                                                        <td>Shreyasee Dutta</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241056.pdf') }}"
                                                                target="_blank">Modeling Spatial- Temporal Urban Growth
                                                                Using GIS &amp; Remote Sensing Techniques</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>40</td>
                                                        <td>20070241057</td>
                                                        <td>Sreemoyee Das</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241057.pdf') }}"
                                                                target="_blank">Monitoring of the Changing Pattern of
                                                                Land-Use Land Cover &amp; Urban Growth Dynamics of
                                                                Raiganj city,India </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>41</td>
                                                        <td>20070241059</td>
                                                        <td>Srilekha Bhunia</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241059.pdf') }}"
                                                                target="_blank">Site suitability analysis for the Solid
                                                                Waste disposal in Banglore Urban District </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>42</td>
                                                        <td>20070241061</td>
                                                        <td>SUBHAM MAJHI</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241061.pdf') }}"
                                                                target="_blank">Flood Risk Assessment using GIS &amp;
                                                                Remote Sensing: A case study of Hoogly District, West
                                                                Bengal </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>43</td>
                                                        <td>20070241062</td>
                                                        <td>Sudipto Roy</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241062.pdf') }}"
                                                                target="_blank">An Assessment of Forest Fire &amp; its
                                                                impact on Wildlife in Mirzoram </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>44</td>
                                                        <td>20070241063</td>
                                                        <td>Tiasha Ganguly</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241063.pdf') }}"
                                                                target="_blank">Smart City Mapping </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>45</td>
                                                        <td>20070241064</td>
                                                        <td>Sukanya De</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241064.pdf') }}"
                                                                target="_blank">Site Suitability for analyisis for
                                                                Farmlands in Agro-climatic zone of Andhra Pradhesh using
                                                                Geo-spatial Techniques</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>46</td>
                                                        <td>20070241066</td>
                                                        <td>Upasana Dasgupta</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241066.pdf') }}"
                                                                target="_blank">Effects of Deforestation and climate
                                                                change on forest cover over Selangor and Pahang
                                                                Malaysia</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>47</td>
                                                        <td>20070241067</td>
                                                        <td>Urmi Ganguly</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241067.pdf') }}"
                                                                target="_blank">Assessment of Crop Loss Vulnearbility
                                                                using Geo-spatial Technology &amp; machine Learning </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>48</td>
                                                        <td>20070241070</td>
                                                        <td>Pallapati Dhanush</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241070.pdf') }}"
                                                                target="_blank">Modeling the APE, LANGUR Species And
                                                                FLYING SQUIRRELS of SOUTHEAST ASIA under the influence
                                                                of Climate change from 1970-2080</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>49</td>
                                                        <td>20070241071</td>
                                                        <td>Peral Swaminathan</td>
                                                        <td><a href="{{ asset('assets/pdf/research_student/geo/2020-22/20070241071.pdf') }}"
                                                                target="_blank">Analyzing Urban sprawl using Geospatial
                                                                Technology for Pune District in Maharashtra </a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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