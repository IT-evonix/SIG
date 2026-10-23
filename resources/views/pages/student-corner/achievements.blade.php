@extends('layouts.app')

@section('title', 'Achievements and Social Activities of SIG Students')

@section('description', 'SIG proudly showcases the accomplishments of its staff and talented students, highlighting
their hard work, innovation, and contributions to various fields.')

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
                        <h1 class="inner_banner_heading"><span>Achievements</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('pages.student-corner.student-corner') }}">Student Corner</a>
                                <li class="breadcrumb-item active" aria-current="page">Achievements</li>
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

<main class="student_corner_main one_liner_heading">
    <section class="acheivement_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="acheivement_mainbox">
                        <div class="acheivement_firstbox">
                            <div class="table-responsive">
                                <table class="table mb-0 fee_table">
                                    <thead>
                                        <tr>
                                            <th>Period</th>
                                            <th>Type (National/International)</th>
                                            <th>Details of Honor / Award</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Jun-15</td>
                                            <td>National</td>
                                            <td>Sir. Vishwesariya National best Engineering award 2015</td>
                                        </tr>
                                        <tr>
                                            <td>Nov-16</td>
                                            <td>State</td>
                                            <td>Special Achievement Award in Memory of Acharya Mahavir Prasad Dewediji</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="acheivement_secondbox">
                            <div class="acheivement_secondbox_listing">
                                <div class="acheivement_secondbox_imgbox">
                                    <div class="acheivement_secondbox_img">
                                        <img src="{{ asset('assets/images/student-corner/acheivement-01.webp') }}" alt="Acheivement image" class="img-fluid">
                                    </div>
                                    <div class="acheivement_secondbox_img">
                                        <img src="{{ asset('assets/images/student-corner/acheivement-02.webp') }}" alt="Acheivement image" class="img-fluid">
                                    </div>
                                </div>
                                <div class="acheivement_secondbox_content">
                                    <p class="m-0">
                                        Dr Dharmaveer Singh (Assistant Professor) of Symbiosis Institute of Geoinformatics (SIG) visited Institute of International Rivers & Eco-Security (IIRES), Yunnan University (China) from 17th–28th December 2018 to discuss perspectives of academic exchange and collaborative research
                                    </p>
                                </div>
                            </div>
                            <div class="acheivement_secondbox_listing">
                                <div class="acheivement_secondbox_imgbox">
                                    <div class="acheivement_secondbox_img">
                                        <img src="{{ asset('assets/images/student-corner/acheivement-03.webp') }}" alt="Acheivement image" class="img-fluid">
                                    </div>
                                    <div class="acheivement_secondbox_img">
                                        <img src="{{ asset('assets/images/student-corner/acheivement-04.webp') }}" alt="Acheivement image" class="img-fluid">
                                    </div>
                                </div>
                                <div class="acheivement_secondbox_content">
                                    <p class="m-0">
                                        First batch of SIG students reached to RUDN university under Global Immersion Programme (GIP) in Geospatial Technology
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="acheivement_thirdbox">
                            <div class="ai_club_firstbox">
                            <div class="ai_club_firstbox_left">
                                <h2 class="inner_heading">
                                    Achievements and Social Responsibility
                                </h2>
                                <p class="m-0">
                                    At SIG, we have always encouraged are students and staff to pursue their academic interests. Our faculties and students have brought the institute and Symbiosis in general, a series of accolades. In fact, we at SIG, encourage our students and staff to volunteer for socially relevant causes as well. As part of this initiative, SIG like other Symbiosis institute in Pune takes up welfare activities for the underprivileged strata of the society in association with NGO's. From participating in national level seminars on Geoinformatics to winning laurels in events across other colleges in the country and even doing their bit for the society, SIG has an ever growing list of achievements to showcase as a result of the merits of its staff and students.
                                </p>
                            </div>
                            <div class="ai_club_firstbox_right">
                                <img src="{{ asset('assets/images/student-corner/acheivement-05.webp') }}"
                                    alt="AI club image" class="img-fluid">
                            </div>
                        </div>
                        </div>
                        <div class="acheivement_fourthbox">
                            <div class="my_tabbing">
                                    <ul class="nav nav-tabs custom-tabs" id="batchTabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="batch-2026-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2026" type="button" role="tab">
                                                Institute
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="batch-2025-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2025" type="button" role="tab">
                                                Staff
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="batch-2024-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2024" type="button" role="tab">
                                                Students
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="batchTabsContent">
                                        <div class="tab-pane fade show active" id="batch-2026" role="tabpanel">
                                            <ul class="custom_listing">
                                                <li>SIG has bagged National Education Leadership award 2014 by Lokmat.</li>
                                                <li>The report of National Task Force on Geo-Special education-MHRD, August 2013 has benchmarked the SIG programme.</li>
                                                <li>SIG has been invited as an academic advisor during the formation of Indian National GIS Organisation (INGO) by the Minister of HRD, Govt. of India.</li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="batch-2025" role="tabpanel">
                                            <h4 class="ai_club_thirdbox_heading">Participation in FDPs and National and International Conferences</h4>
                                            <ul class="custom_listing">
                                                <li>Dr T.P.Singh Sir visit to Dhaka. (attended a three day meeting from 20th to 23rd April was organized by the United Nation WMO , IWMI , GWP with Bangladesh Government (BMO).for the project to develop an online drought monitoring system for South Asia.)</li>
                                                <li>Dr T.P. Singh sir award details (International Institute for Social And Economic Reforms has confirmed for the "Sir M. Visweswariah Best Engineering National Award" . The award was given by the Hon'ble Speaker Govt. of Karnataka at Bangalore on 28th of June)</li>
                                                <li>Associate Prof Dr T.P. Singh was selected and attended a FDP of one week duration on 'RS and GIS for Earth Sciences' conducted at national level by Indian Institute of Sciences, Bangalore. </li>
                                                <li>Associate Prof Dr T.P. Singh was the only person selected from India by Japan Aerospace Exploratory Administration Centinal Asia for an international one week duration Centinal Asia Step II Programme for Disaster Management, held at ICIMOD Kathmandu, Nepal and Macao, China from 28th February to 5th March 2011 .</li>
                                                <li>Dr T.P. Singh attended an international seminar of International Society of Photogrammetry and Remote Sensing conducted by IIRS at Dehradun on 7th and 8th March 2011, to represent SIG and present a paper written jointly by Dr. T.P. Singh and Brig K.K.V. Khanzode.</li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="batch-2024" role="tabpanel">
                                            <ul class="custom_listing">
                                                <li>OrleneD'cunha and Leon Ratinam won the best technical paper award at the International Conference held at IIT-Bombay in June 2014 (Geomatrix 2014).</li>
                                                <li>The paper entitled - An Innovative Approach using Crowd Management (Crowd Control), Crowd Sourcing and GIS Techniques towards a Comprehensive Disaster Management Preparedness for The Kumbh Mela 2015.</li>
                                                <li>Congratulations to Ms Andrie Singh for her outstanding presentation at "Brand-e-Gram" held at Chandragupta Institute of Management,Patna.</li>
                                                <li>Ms Andrie Singh, Batch 2011-13 student participated in the event "Brand-e-Gram" held at Chandragupta Institute of Management,Patna 10th November 2012.</li>
                                                <li>SIG students participated in an international seminar on 'Geospatial Technology in Biodiversity Management' at IIT Kharagpur in December 2010. Our students team won the first prize for paper presentation, competing with participants from various IITs, engineering colleges and GIS institutes of repute.</li>
                                                <li>SIG students also participated in Map India 2011, a renowned annual national seminar on GIS and Remote Sensing held at Hyderabad, in January 2011.</li>
                                                <li>SIG student Ms Preethy Chandran's paper on 'Spatial Strategies for Sustainable Management' was adjudged the best Powertech paper in the national seminar organized by Department of Environment Management, Bharathidasan University, Tiruchirapalli in January 2011.</li>
                                                <li>Ms Pallavi Srivastava, SIG student of 2006-08 batch and Shri Pratardhan Sakalkar student of 2010-12 batch have been selected for commission in the Indian Army through Officers Training Academy , Chennai.</li>
                                                <li>Ms. Santh Rubini, Alumni of Batch 2009-11 is doing Research Assistantship at Oregon State University , School of Civil and Construction Engineering at US. Her research focus is on Mapping the landslides based on probabilistic techniques. She is working with the combinations of GIS and Remote sensing for analysis and LIDAR and Photogrammetric techniques for data.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="acheivement_fifthbox">
                            <div class="acheivement_fifthbox_left">
                                <div class="acheivement_fifthbox_left_background">
                                    <img src="{{ asset('assets/images/student-corner/acheivement-06.webp') }}" alt="Acheivement image" class="img-fluid">
                                </div>
                                <div class="acheivement_fifthbox_left_wrapper">
                                    <h3 class="vision_mission_heading">Social Activities</h3>
                                    <ul class="custom_listing">
                                        <li>SIG staff and students visited an Old Age Home to help the old people accommodated there.</li>
                                        <li>SIG staff and students visited an orphanage and taught them the basics of computers and geography.</li>
                                        <li>Students conducted a Traffic Rules Awareness Drive and Safety on Roads campaign.</li>
                                        <li>Tree Plantation in Army area.</li>
                                        <li>Students visited schools for awareness programme on environment.</li>
                                        <li>Faculty provide training to the differently abled army personnel.</li>
                                        <li>Students, staff and faculties visited Old Age and Orphan home Ishaprema-Niketan, in Nana Peth for Social cause.</li>
                                        <li>SIG staff, faculty and students undertook plantation of 800 saplings at Army Camp Aundh in August 2010.</li>
                                        <li>SIG donated 1000 saplings for planting at SIU, Lavale on the occasion of FEST workshop conducted at SIG in August 2010.</li>
                                        <li>SIG had organized a blood donation camp at Atur Center under the aegis of SCHC in September 2010.</li>
                                        <li>Students and faculty visited Queens Mary's Technical Institute for war disabled and physically challenged soldiers located at Aundh Road, Kirkee for conducting classes of IT skills.</li>
                                        <li>Students and faculty members also visited Kendriya Vidyalaya located at Range Hills to conduct classes in various subjects for underprivileged students.</li>
                                        <li>A short certificate course of eight weeks duration in Fundamentals of GIS and Photogrammetry has been introduced for the disabled soldiers of Queen Mary's Technical Institute, at their request to generate interest amongst the members of the institute and to generate rehabilitation opportunities for them.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="acheivement_fifthbox_right">
                                <div class="acheivement_fifthbox_right_img">
                                    <img src="{{ asset('assets/images/student-corner/acheivement-07.webp') }}" alt="Acheivement image" class="img-fluid">
                                </div>
                                <div class="acheivement_fifthbox_right_content">
                                    <h3 class="vision_mission_heading">SIG Student Awarded UGC Merit Scholarship!</h3>
                                    <p class="m-0">
                                        Ms. Andrie Singh student of Batch 2011-13 M.Sc Geoinformatics has been awarded UGC Merit Scholarship of Rs 2000/- per month and lump sum of Rs 1, 00, 000/- on completion of her PG degree and for her outstanding performance at undergraduate Physics Honors Examination. Ms. Andrie Singh is a Gold medalist in B.Sc (Physics) from Patna University.
                                    </p>
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