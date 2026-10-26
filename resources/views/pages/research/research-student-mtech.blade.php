@extends('layouts.app')

@section('title', 'Research Students Projects on M.Tech (Geoinformatics & ST) - SIG')

@section('description', 'Explore cutting-edge research projects in M.Tech (Geoinformatics & ST) at SIG. Discover innovative solutions and advancements in the field.')

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
                                <h2 class="inner_heading">Research Students Projects on M.Tech (Geoinformatics & ST) - SIG</h2>
                                <div class="my_tabbing">
                                    <ul class="nav nav-tabs custom-tabs" id="batchTabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="batch-2025-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2025" type="button" role="tab">
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
                                                        <tr><td>1 </td><td> 22070146001 </td><td> Ankita Jana </td><td><a href="{{ asset('assets/pdf/research_student/mtech/2022-24/22070146001.pdf') }}" target="_blank">Exploring Agriculture Landscapes: Geospatial Analysis of Farm boundaries for Accurate Detection and Proximity Assessment to Market Areas</a></td></tr>
                                                        <tr><td>2 </td><td> 22070146002 </td><td> Chavan Vineet Balkrishna </td><td><a href="{{ asset('assets/pdf/research_student/mtech/2022-24/22070146002.pdf') }}" target="_blank">Data migration of Electric Geometric network (GN) to Utility Network (UN) by using ESRI Utility tool, greeley, colorado</a></td></tr>
                                                        <tr><td>3 </td><td> 22070146003 </td><td> Hanwate Aniket Gautam </td><td><a href="{{ asset('assets/pdf/research_student/mtech/2022-24/22070146003.pdf') }}" target="_blank">Machine Learning-based classification of Urban Areas in Navi Mumbai: An index-based Approach </a></td></tr>
                                                        <tr><td>4 </td><td> 22070146004 </td><td> Kanse Sohan Pruthviraj Kalpana </td><td><a href="{{ asset('assets/pdf/research_student/mtech/2022-24/22070146004.pdf') }}" target="_blank">Development of Geo-Image Analytics toolbox for Pothole Repair Quantity Estimation &amp; Real time Pothole Maintenance Monitoring System</a></td></tr>
                                                        <tr><td>5 </td><td> 22070146005 </td><td> Mane Suraj Ravasaheb </td><td><a href="{{ asset('assets/pdf/research_student/mtech/2022-24/22070146005.pdf') }}" target="_blank">Monitoring Surface Water Change of Ganga River Basin by using Satellite Altimetry</a></td></tr>
                                                        <tr><td>6 </td><td> 22070146007 </td><td> Naykwadi Suhel Harun </td><td><a href="{{ asset('assets/pdf/research_student/mtech/2022-24/22070146007.pdf') }}" target="_blank">Agro-informatics: Farm Boundary and Crop Type Detection using Machine Learning &amp; Deep Learning Techniques.</a></td></tr>
                                                        <tr><td>7 </td><td> 22070146008 </td><td> Reure Poonam Shivsharan Sunanda </td><td><a href="{{ asset('assets/pdf/research_student/mtech/2022-24/22070146008.pdf') }}" target="_blank">Comprehensive Real Estate Analysis and Dashboard for Gurgaon</a></td></tr>
                                                        <tr><td>8 </td><td> 22070146009 </td><td> Sonawane Aniket Kishor </td><td><a href="{{ asset('assets/pdf/research_student/mtech/2022-24/22070146009.pdf') }}" target="_blank">Development of a Geo-enabled Portal for Monitoring &amp; maintaining the Medium-Density Residential Standards for the city of Maraetai, New-Zealand</a></td></tr>
                                                        <tr><td>9 </td><td> 22070146010 </td><td> Virkar Sanket Sandeep </td><td><a href="{{ asset('assets/pdf/research_student/mtech/2022-24/22070146010.pdf') }}" target="_blank">Integration of Geospatial data and Machine learning Approaches for soil erosion Susceptibility Mapping</a></td></tr>
                                                        <tr><td>10 </td><td> 22070146011 </td><td> Gagan Singhal </td><td><a href="{{ asset('assets/pdf/research_student/mtech/2022-24/22070146011.pdf') }}" target="_blank">Urban Park Vulnerability Assessment Tool: Decision Support System for Healthy Parks Planning</a></td></tr>
                                                        <tr><td>11 </td><td> 22070146012 </td><td> Patil Prathamesh Hindurao </td><td><a href="{{ asset('assets/pdf/research_student/mtech/2022-24/22070146012.pdf') }}" target="_blank">Multi-Criteria based Geospatial Approach for Public Transport EV Infrastructure Management of Kolhapur City.</a></td></tr>
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
                                                    <tr><td>1</td><td> 21070146001</td><td> Viraj Amin</td><td><a href="{{ asset('assets/pdf/research_student/mtech/21070146001.pdf') }}" target="_blank"> Web Application For Real Time Landslide Inventory</a></td></tr>
                                                    <tr><td>2</td><td> 21070146002</td><td> Ravi Badure</td><td><a href="{{ asset('assets/pdf/research_student/mtech/21070146002.pdf') }}" target="_blank"> Identification of ground water potential zones</a></td></tr>
                                                    <tr><td>3</td><td> 21070146004</td><td> Hrishikesh Dalvi </td><td><a href="{{ asset('assets/pdf/research_student/mtech/21070146004.pdf') }}" target="_blank"> Point to Multipoint (Slice creation Tool) for Coverage Analysis Using Python &amp; Geospatial Science </a></td></tr>
                                                    <tr><td>4</td><td> 21070146005</td><td> Debdarshi Das</td><td><a href="{{ asset('assets/pdf/research_student/mtech/21070146005.pdf') }}" target="_blank"> Disease-Based Crop Loss Estimation Using Geospatial Techniques</a></td></tr>
                                                    <tr><td>5</td><td> 21070146006</td><td> Rutuja Prakash Gorivale</td><td><a href="{{ asset('assets/pdf/research_student/mtech/21070146006.pdf') }}" target="_blank"> Analysing impact of land cover change on surface urban heat island effect in Hyderabad </a></td></tr>
                                                    <tr><td>6</td><td> 21070146007</td><td> Chetan Dhanaji Ingawale</td><td><a href="{{ asset('assets/pdf/research_student/mtech/21070146007.pdf') }}" target="_blank"> Web GIS technology based landslide risk assessment in mulshi taluka pune district </a></td></tr>
                                                    <tr><td>7</td><td> 21070146009</td><td> NIBEDITA MONDA</td><td><a href="{{ asset('assets/pdf/research_student/mtech/21070146009.pdf') }}" target="_blank">L ROLE OF URBAN GREEN SPACE IN REDUCING URBAN HEAT ISLAND EFFECT IN BANGALORE CITY</a></td></tr>
                                                    <tr><td>8</td><td> 21070146011</td><td> Shivani Bhatia </td><td><a href="{{ asset('assets/pdf/research_student/mtech/21070146011.pdf') }}" target="_blank"> Forecasting future of coffee arabica under influence of climate change </a></td></tr>
                                                    <tr><td>9</td><td> 21070146013</td><td> Susmita Banerjee</td><td><a href="{{ asset('assets/pdf/research_student/mtech/21070146013.pdf') }}" target="_blank"> Urban flood risk assessment using AHP and Google Earth Engine</a></td></tr>
                                                    <tr><td>10</td><td> 21070146014</td><td> Tej Arvindbhai Maheshwari</td><td> <a href="{{ asset('assets/pdf/research_student/mtech/21070146014.pdf') }}" target="_blank">Detecting spatiotemporary changes caused by tropical cyclone over the Indian coastal region </a></td></tr>
                                                    <tr><td>11</td><td> 21070146015</td><td> Pallavi Hiraman Thakare</td><td> <a href="{{ asset('assets/pdf/research_student/mtech/21070146015.pdf') }}" target="_blank">Identification of Suitable Site for Solid Waste Disposal in Kalyan using Geospatial Technologies</a></td></tr>
                                                    <tr><td>12</td><td> 21070146016</td><td> Bremkumar K</td><td> <a href="{{ asset('assets/pdf/research_student/mtech/21070146016.pdf') }}" target="_blank">Assessing land suitability for maize crop using remote sensing and gis in Pune district</a></td></tr>
                                                    <tr><td>13</td><td> 21070146017</td><td> Rachana Gaikwad</td><td><a href="{{ asset('assets/pdf/research_student/mtech/21070146017.pdf') }}" target="_blank"> Assessment of Urban Livability in Fringe Areas of Pune Metropolitan Using Geospatial Data</a></td></tr>
                                                    <tr><td>14</td><td> 21070146018</td><td> Ruikar Tejas Nitin</td><td> <a href="{{ asset('assets/pdf/research_student/mtech/21070146018.pdf') }}" target="_blank">Understanding The Forest Fire Impacts in India</a></td></tr>
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
                                                    <tr><td>1</td><td> 20070146001</td><td> Amogh Dange </td><td><a href="{{ asset('assets/pdf/research_student/mtech/2020-22/20070146001.pdf') }}" target="_blank">Identification of Ground Water Potential Zones in Guhagar Using GIS and Multi Criteria Decision Techniques</a></td></tr>
                                                    <tr><td>2</td><td> 20070146002</td><td> Halitha Banu M</td><td><a href="{{ asset('assets/pdf/research_student/mtech/2020-22/20070146002.pdf') }}" target="_blank"> Shoreline change and its impact on mangrove forest in Chidambaram, southeast coast of Tamil Nadu </a></td></tr>
                                                    <tr><td>3</td><td> 20070146005</td><td> Diksha Kolpe</td><td><a href="{{ asset('assets/pdf/research_student/mtech/2020-22/20070146005.pdf') }}" target="_blank"> Development of a Web-GIS application for Utility Management System </a></td></tr>
                                                    <tr><td>4</td><td> 20070146009</td><td> Nirbhay Rathod</td><td><a href="{{ asset('assets/pdf/research_student/mtech/2020-22/20070146009.pdf') }}" target="_blank"> A Geo-Spatial intelligence Decision Support System for Drought informatics</a></td></tr>
                                                    <tr><td>5</td><td> 20070146010</td><td> Sameer Tupkar</td><td><a href="{{ asset('assets/pdf/research_student/mtech/2020-22/20070146010.pdf') }}" target="_blank"> Mapping of debris covered glaciers using deep learning</a></td></tr>
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