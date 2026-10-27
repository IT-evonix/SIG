@extends('layouts.app')

@section('title', 'Research Students Projects on MSc Data Science - SIG Pune')

@section('description', 'Discover innovative research projects in M.Sc Data Science & Spatial Analytics at SIG. Stay
updated with the latest advancements in this dynamic field.')

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
                                <h2 class="inner_heading">Research Students Projects on MSc Data Science & Spatial
                                    Analytics - SIG Pune</h2>
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
                                                            <td> 22070243001 </td>
                                                            <td> Aayushi Gautam </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Human Activity Recognition(HAR)
                                                                    using CNN+LSTM</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2 </td>
                                                            <td> 22070243002 </td>
                                                            <td> Abishek Banerjee </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Topic Modelling with RACE Dataset
                                                                </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3 </td>
                                                            <td> 22070243003 </td>
                                                            <td> Agarwal Kaushik Dharmendra </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Super Resolution</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4 </td>
                                                            <td> 22070243004 </td>
                                                            <td> Attar Niyaj Mohiddin </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Object Detection From UAV Based
                                                                    Aerial Imagery Using Deep Learning </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>5 </td>
                                                            <td> 22070243005 </td>
                                                            <td> Avesh Kumar Bhati </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Market Mix Modelling for Footwear
                                                                    firm</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>6 </td>
                                                            <td> 22070243006 </td>
                                                            <td> Ayan Datta </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Document Intelligence: RAG-Based
                                                                    Question Answering with Vector Database using
                                                                    LangChain Framework</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>7 </td>
                                                            <td> 22070243007 </td>
                                                            <td> Ayush Mitra </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Video Tampering Detection using
                                                                    Deep Learning</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>8 </td>
                                                            <td> 22070243008 </td>
                                                            <td> Bankar Omkar Santosh </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> DeepMood: Leveraging BERT and
                                                                    transformer models for Depression Detection in
                                                                    Text</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>9 </td>
                                                            <td> 22070243009 </td>
                                                            <td> Bhand Prajakta Karbhari </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> AI Enabled Coversational Chat
                                                                    Platform</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10 </td>
                                                            <td> 22070243010 </td>
                                                            <td> Bhosale Sahil Akhil Anuja </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Detecting clouds and predicting
                                                                    their movement from INSAT imagery</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>11 </td>
                                                            <td> 22070243011 </td>
                                                            <td> Bhuvan Singh Mangat </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Intelligent Data Automation and
                                                                    Sales Prediction for Electric Vehicles Registered in
                                                                    India</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12 </td>
                                                            <td> 22070243012 </td>
                                                            <td> Cardozo Tasha Criselda </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> AI Driven Summarization of Audio
                                                                    &amp; Video Using Speech to Text Technology.</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>13 </td>
                                                            <td> 22070243013 </td>
                                                            <td> Chhavi Baliyan </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Advanced Driver Behavior Detection:
                                                                    From Safe Driving to Distractions Using camera based
                                                                    system</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>14 </td>
                                                            <td> 22070243014 </td>
                                                            <td> Dambhare Piyush Champat </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> PotHole Detection using YOLOv8</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>15 </td>
                                                            <td> 22070243015 </td>
                                                            <td> Desai Khyati Nimeshkumar </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Real-Time Yoga Pose Detection with
                                                                    Artificial Neural Networks and Mediapipe</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>16 </td>
                                                            <td> 22070243016 </td>
                                                            <td> Dighe Priyal Vaibhav </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Malware Detection And
                                                                    Classification Using Deep Learning Techniques</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>17 </td>
                                                            <td> 22070243017 </td>
                                                            <td> Dilpreet Kaur </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Visual Question Answering System
                                                                    for E-Commerce</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>18 </td>
                                                            <td> 22070243018 </td>
                                                            <td> Divyanshu Singh Bisht </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Agentic Retrieval Augmented
                                                                    Generation(RAG) Chatbot using large language
                                                                    models</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>19 </td>
                                                            <td> 22070243019 </td>
                                                            <td> Ekta Bramhadas Chaware </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Groundwater Level Quality
                                                                    Prediction Using Machine Learning</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>20 </td>
                                                            <td> 22070243020 </td>
                                                            <td> Gadge Ashwin Shashikant </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> AI-Driven PDF Analysis and Customer
                                                                    Support Solutions</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>21 </td>
                                                            <td> 22070243021 </td>
                                                            <td> Idhika Nikhil Vaidya </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Exploring India's Export Landscape:
                                                                    Data-Driven Forecasting and Spatiotemporal
                                                                    Analysis</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>22 </td>
                                                            <td> 22070243022 </td>
                                                            <td> Jawalekar Aman Doma </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Intrusion Detection System with
                                                                    Deep Neural Networks</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>23 </td>
                                                            <td> 22070243023 </td>
                                                            <td> Juned Samir Manyar </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Bitcoin Price Analysis: Integrating
                                                                    Social Sentiment and Historical Data</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>24 </td>
                                                            <td> 22070243024 </td>
                                                            <td> Kadam Ajinkya Vijay </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Action Recognition using LSTM -
                                                                    RNN</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>25 </td>
                                                            <td> 22070243025 </td>
                                                            <td> Kamble Prachi Chandrakant </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Gesture Recognition</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>26 </td>
                                                            <td> 22070243026 </td>
                                                            <td> Katariya Pranav Sharad </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> BI Dashboards for Lending as SaaS
                                                                </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>27 </td>
                                                            <td> 22070243027 </td>
                                                            <td> Khot Sourav Balasaheb </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Deep Fake Detection using Vision
                                                                    Transformers and Sequential Neural Networks on
                                                                    Diverse Datasets</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>28 </td>
                                                            <td> 22070243028 </td>
                                                            <td> Kinjal Bandopadhyay </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Advanced Real-Time Single Player
                                                                    Identification and Tracking with Deep Siamese
                                                                    Networks</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>29 </td>
                                                            <td> 22070243029 </td>
                                                            <td> Manu Mallika </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Fine-Tuning BERT for NER: Unveiling
                                                                    the Power of Named Entity Recognition!</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>30 </td>
                                                            <td> 22070243030 </td>
                                                            <td> Nadar Janice Jebastin </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Crime Rate Prediction</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>31 </td>
                                                            <td> 22070243031 </td>
                                                            <td> Nagarale Santosh Basagonda </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Smartcity Flow: Deep Learning
                                                                    Powered Real-Time Traffic Manageme NT And
                                                                    Optimization</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>32 </td>
                                                            <td> 22070243032 </td>
                                                            <td> Nimbalkar Kunal Laxman </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Anti-Money Laundering using Machine
                                                                    Learning</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>33 </td>
                                                            <td> 22070243033 </td>
                                                            <td> Omkar Pol </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Gravity Glitch Classification using
                                                                    Deep Learning</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>34 </td>
                                                            <td> 22070243034 </td>
                                                            <td> Panchal Dhruvi Dilipkumar </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Live Social Media Trend Analysis
                                                                    and Virality Prediction</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>35 </td>
                                                            <td> 22070243035 </td>
                                                            <td> Raj Aryan </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Enhancing Fraud Detection in
                                                                    Financial Transactions through Autoencoder-Based
                                                                    Anomaly Detection</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>36 </td>
                                                            <td> 22070243037 </td>
                                                            <td> Reetam Ghosh </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Land Cover Detection: ML Pipeline
                                                                    with Drift Monitoring and User-Friendly
                                                                    Interface</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>37 </td>
                                                            <td> 22070243038 </td>
                                                            <td> Ritwik Dubey </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Comprehensive Explainable AI for
                                                                    Melanoma Detection: Integrating Grad-CAM and Meta
                                                                    Learner</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>38 </td>
                                                            <td> 22070243039 </td>
                                                            <td> Sabavath Raghuram </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Conversational SQL: Advanced
                                                                    Techniques in NLP-Driven PostgreSQL Data
                                                                    Querying</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>39 </td>
                                                            <td> 22070243040 </td>
                                                            <td> Sahil Raj </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Enhancing DDoS Attack Detection
                                                                    Using Deep Learning and Synthetic Data
                                                                    Augmentation</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>40 </td>
                                                            <td> 22070243041 </td>
                                                            <td> Sampurna Mondal </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Traffic Sign Detection using
                                                                    different versions of YOLO</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>41 </td>
                                                            <td> 22070243043 </td>
                                                            <td> Saranya Roy </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Deepfake Detection: A comprehensive
                                                                    approach using Deep Learning </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>42 </td>
                                                            <td> 22070243044 </td>
                                                            <td> Sharma Gaurav Vijay </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Performance analysis of FNN, LSTM
                                                                    and CNN for Fake News Detection</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>43 </td>
                                                            <td> 22070243045 </td>
                                                            <td> Shedekar Shubham Sanjay </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Optimizing Supply Chain Efficacy
                                                                    using Machine Learning and Deep Learning
                                                                    Techniques</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>44 </td>
                                                            <td> 22070243046 </td>
                                                            <td> Shivani Shukla </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Streamlit-Based NLP Solutions for
                                                                    English-to-Hindi Language Translation</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>45 </td>
                                                            <td> 22070243047 </td>
                                                            <td> Shobhit Kaptiyal </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Vehicle Number Plate Detection </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>46 </td>
                                                            <td> 22070243048 </td>
                                                            <td> Singh Gaurav Kaushlendra </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> 2024 Indian Election Sentiment
                                                                    Analysis </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>47 </td>
                                                            <td> 22070243051 </td>
                                                            <td> Thakur Harsh Kishor </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Eye for a blind: Image Captioning
                                                                    using deep learning and transformers</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>48 </td>
                                                            <td> 22070243052 </td>
                                                            <td> Vedanti Pramod Joshi </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Enviormental Health Analysis using
                                                                    ML Techniques:Punjab and Haryana AQI Prediction </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>49 </td>
                                                            <td> 22070243053 </td>
                                                            <td> Vimarsh Kumar Manju </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Geospatial Analytics Agent using
                                                                    Large Action Models</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>50 </td>
                                                            <td> 22070243055 </td>
                                                            <td> Vohra Mohammad Abbasbhai </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Extraction of Spatial Data using
                                                                    Prompt Engineering through Integration of Web App
                                                                    and Natural Language</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>51 </td>
                                                            <td> 22070243058 </td>
                                                            <td> Rutvik Sawant </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2022-24/22070243001.pdf') }}"
                                                                    target="_blank"> Movie Success Prediction with
                                                                    Content Based Recommendation</a></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="batch-2024" role="tabpanel">
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
                                                            <td>1</td>
                                                            <td> 21070243001</td>
                                                            <td>Aayush Arun Dable</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243001.pdf') }}"
                                                                    target="_blank"> Evaluating the Efficacy of GAN
                                                                    Variants for Creation of Synthetic Martian Crater
                                                                    Images</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td> 21070243003</td>
                                                            <td> Akanksha Palsole</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243003.pdf') }}"
                                                                    target="_blank"> A comparison of Species
                                                                    distribution models to predict habitat of the Indian
                                                                    Gaur</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td> 21070243004</td>
                                                            <td> Aman Khobragade </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243004.pdf') }}"
                                                                    target="_blank"> Bike-Sharing Count Prediction </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td> 21070243006</td>
                                                            <td> Anurag Shashikant Saste</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243006.pdf') }}"
                                                                    target="_blank"> Crop health advisory system using
                                                                    ML</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td> 21070243007</td>
                                                            <td> Shubham Bhange </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243007.pdf') }}"
                                                                    target="_blank"> Lane detection using CNN :
                                                                    Comparative analysis of U-Net, AlexNet, LaneNet
                                                                    Models.</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td> 21070243008</td>
                                                            <td> Nainisha Sanjay Kumar</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243008.pdf') }}"
                                                                    target="_blank"> Harnessing NLP and Machine Learning
                                                                    techniques for spoken language recognition </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td> 21070243009</td>
                                                            <td> Sanika Satish Chavan</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243009.pdf') }}"
                                                                    target="_blank"> Sentiment Analysis on ChapGPT A
                                                                    Large Language Model Trained By OpenAI</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td> 21070243010</td>
                                                            <td> Sushil Dalvi</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243010.pdf') }}"
                                                                    target="_blank"> Comparing different ML algorithms
                                                                    for Prediction of resale car price</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td> 21070243011</td>
                                                            <td> Sailee Suraj Desai</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243011.pdf') }}"
                                                                    target="_blank"> Facial Emotions Based Music
                                                                    Recommender App</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td> 21070243012</td>
                                                            <td> Gajwani Kashish Kamal</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243012.pdf') }}"
                                                                    target="_blank"> Integrating Data Mining Techniques
                                                                    in Actuarial Science : Pension Assessment, Claims
                                                                    and Frauds of Insurance</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td> 21070243014</td>
                                                            <td> Jeffrey Jose</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243014.pdf') }}"
                                                                    target="_blank"> Dementia Prediction Using Machine
                                                                    Learning</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td> 21070243015</td>
                                                            <td> Arwa Mustanshir Jiniyawala</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243015.pdf') }}"
                                                                    target="_blank"> Enhancing search and rescue
                                                                    operation in Disasters: Object Detection Using YOLO
                                                                    v8 algorithm </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td> 21070243016</td>
                                                            <td> Joel Joseph </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243016.pdf') }}"
                                                                    target="_blank"> Music Instrument Classification
                                                                    using Convolution Neural Network </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td> 21070243018</td>
                                                            <td> Saurabh kamble</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243018.pdf') }}"
                                                                    target="_blank"> Synergistic optimisation of bike
                                                                    rental services: unveiling hyperparameters and
                                                                    orchestrating Logistics Algorithms for optimal
                                                                    vehicle count</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td> 21070243020</td>
                                                            <td> Manali Lad</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243020.pdf') }}"
                                                                    target="_blank"> Twitter sentiment analysis of
                                                                    G-20</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>16</td>
                                                            <td> 21070243023</td>
                                                            <td> Mihir Singh</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243023.pdf') }}"
                                                                    target="_blank"> Development of geo intelligent
                                                                    models for crop disease identification using high
                                                                    resolution imagery</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>17</td>
                                                            <td> 21070243024</td>
                                                            <td> Navya Cherian</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243024.pdf') }}"
                                                                    target="_blank"> Consumer price index inflation </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>18</td>
                                                            <td> 21070243025</td>
                                                            <td> Neha Pitale </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243025.pdf') }}"
                                                                    target="_blank"> Real-time cotton disease detection
                                                                    using Deep Learning Techniques </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>19</td>
                                                            <td> 21070243026</td>
                                                            <td> Nikita Chadha</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243026.pdf') }}"
                                                                    target="_blank"> Stack Overflow An Auto Search
                                                                    Tool</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>20</td>
                                                            <td> 21070243027</td>
                                                            <td> Nishikant Mundokar </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243027.pdf') }}"
                                                                    target="_blank"> Consumer price index inflation </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>21</td>
                                                            <td> 21070243028</td>
                                                            <td> Digvijaysing Patil</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243028.pdf') }}"
                                                                    target="_blank"> PERFORMANCE EVALUATION OF DEEP
                                                                    LEARNING ALGORITHM ON FRACTURE DETECTION</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>22</td>
                                                            <td> 21070243029</td>
                                                            <td> Siddhi Jaysing Pawar</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243029.pdf') }}"
                                                                    target="_blank"> Graph Neural Network Based
                                                                    Recommendation System To Recommend Different
                                                                    Products By Building Knowledge Graphs</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>23</td>
                                                            <td> 21070243030</td>
                                                            <td> PRAJAKTA MANE</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243030.pdf') }}"
                                                                    target="_blank"> Exploiting Shallow and Deep
                                                                    learning based strategies in satellite images for
                                                                    detection of water tanks</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>24</td>
                                                            <td> 21070243031</td>
                                                            <td> Pruthviraj Chavan</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243031.pdf') }}"
                                                                    target="_blank"> "Deep Learning Approaches for Waste
                                                                    Classification: A ResNet-based Analysis"</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>25</td>
                                                            <td> 21070243032</td>
                                                            <td> Rahul Pratap Dalvi</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243032.pdf') }}"
                                                                    target="_blank"> Hand gesture controlled home
                                                                    automation </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>26</td>
                                                            <td> 21070243033</td>
                                                            <td> Rahul Mohandas Punjabi</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243033.pdf') }}"
                                                                    target="_blank"> Virtual Mouse Using Hand Gesture
                                                                    Recognition Model</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>27</td>
                                                            <td> 21070243035</td>
                                                            <td> Samruddhi Satpute </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243035.pdf') }}"
                                                                    target="_blank"> Lane detection and semantic
                                                                    segmentation using opencv and neural network </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>28</td>
                                                            <td> 21070243036</td>
                                                            <td> Hinal Rakesh Shah</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243036.pdf') }}"
                                                                    target="_blank"> Number Plate Recognition System for
                                                                    Vehicle Information Retrieval</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>29</td>
                                                            <td> 21070243037</td>
                                                            <td> Snehal Santosh Sankanna </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243037.pdf') }}"
                                                                    target="_blank"> Natural Language Processing based
                                                                    Text Summarisation of News Articles </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>30</td>
                                                            <td> 21070243039</td>
                                                            <td> Utkarsh Mishra</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243039.pdf') }}"
                                                                    target="_blank"> Social media sentimental analysis
                                                                </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>31</td>
                                                            <td> 21070243040</td>
                                                            <td> Swetlena Joyce Viegas</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243040.pdf') }}"
                                                                    target="_blank"> Waste Discrimination using Deep
                                                                    Learning</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>32</td>
                                                            <td> 21070243041</td>
                                                            <td> Samsun Paulraj</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243041.pdf') }}"
                                                                    target="_blank"> Comment Toxicity Classification
                                                                    Using Deep Learning </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>33</td>
                                                            <td> 21070243043</td>
                                                            <td> Arbaz Sayed </td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243043.pdf') }}"
                                                                    target="_blank">Deep learning based last mile
                                                                    deliveries optimization. </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>34</td>
                                                            <td> 21070243045</td>
                                                            <td> Aditya Chandra</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243045.pdf') }}"
                                                                    target="_blank"> Mahanta TEXT SUMMARISATION ( TEXT
                                                                    ABSTRACTION ) USING TEXT RANK ALGORITHM</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>35</td>
                                                            <td> 21070243046</td>
                                                            <td> Muskan Sharma</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243046.pdf') }}"
                                                                    target="_blank"> Study of web data mining to detect
                                                                    online terrorism spread</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>36</td>
                                                            <td> 21070243047</td>
                                                            <td> Hrushabh Pawar</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243047.pdf') }}"
                                                                    target="_blank"> A Multivariate Time Series Analysis
                                                                    of Energy Consumption </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>37</td>
                                                            <td> 21070243049</td>
                                                            <td> Syed Humam Shah</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243049.pdf') }}"
                                                                    target="_blank"> Fake review detection using machine
                                                                    learning </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>38</td>
                                                            <td> 21070243050</td>
                                                            <td> Deepali Tomar</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243050.pdf') }}"
                                                                    target="_blank"> A study on Tourism in Goa- A deep
                                                                    learning approach</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>39</td>
                                                            <td> 21070243051</td>
                                                            <td> NAMISHA TARI</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/21070243051.pdf') }}"
                                                                    target="_blank"> EXPLORING THE PERFORMNACE OF DEEP
                                                                    LEARNING MODEL FOR ASSESSING CAR DAMAGE</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="batch-2023" role="tabpanel">
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
                                                            <td>1</td>
                                                            <td>20070243001</td>
                                                            <td>Akshay Kumar</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243001.pdf') }}"
                                                                    target="_blank">Analyzing Company Acquisition Data
                                                                    to Predict the Cost of Acquisition Using Machine
                                                                    Learning Tools</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>20070243002</td>
                                                            <td>Akshita Saxena</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243002.pdf') }}"
                                                                    target="_blank">Analyzing Impact of COVID-19 on GDP
                                                                    Using Machine Learning: A Case Study</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>20070243003</td>
                                                            <td>Anshul Hooda</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243003.pdf') }}"
                                                                    target="_blank">Loan Eligibility Prediction Using
                                                                    Machine Learning Technique</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>20070243004</td>
                                                            <td>Antara Asthana</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243004.pdf') }}"
                                                                    target="_blank">Analyzing the Hourly Usage of
                                                                    Vehicles in a Warehouse</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>20070243005</td>
                                                            <td>Atul Rampragat Pandey</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243005.pdf') }}"
                                                                    target="_blank">Classification of Type of
                                                                    Disaster</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>20070243007</td>
                                                            <td>Chatterjee Anirudh Amitava</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243007.pdf') }}"
                                                                    target="_blank">Building a Warehouse from OLTP Data
                                                                    and Analysing the Sales Domain by Creating
                                                                    Dashboards</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>20070243008</td>
                                                            <td>Chirantan Chatterjee</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243008.pdf') }}"
                                                                    target="_blank">Conversational Chat BOT in the
                                                                    Bengali Language for the 'Krishak Bandhu' Scheme of
                                                                    Government of West Bengal</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>20070243010</td>
                                                            <td>Doyel Tapli</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243010.pdf') }}"
                                                                    target="_blank">Estimate the Age and Gender of
                                                                    Persons from Pictures</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>20070243011</td>
                                                            <td>Kanika Mehta</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243011.pdf') }}"
                                                                    target="_blank">Machine Learning Algorithms for
                                                                    Predicting Cardiovascular Diseases</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>20070243012</td>
                                                            <td>Kavyalakshmi P</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243012.pdf') }}"
                                                                    target="_blank">Customer Churn Analysis in
                                                                    E-Commerce</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>20070243014</td>
                                                            <td>Siddhi Diwakar Kothekar</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243014.pdf') }}"
                                                                    target="_blank">Market Basket and Clustering
                                                                    Analysis to Determine Warehouse Storage Location and
                                                                    Slotting Strategy Using R Shiny.</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>20070243015</td>
                                                            <td>More Piyusha Sanjay</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243015.pdf') }}"
                                                                    target="_blank">Sales API for Predicting Future
                                                                    Sales of Bigmart Products Using Machine Learning
                                                                    Techniques</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>20070243016</td>
                                                            <td>Narsinghani Girish Ashoklal</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243016.pdf') }}"
                                                                    target="_blank">Zomato Restaurant Rating
                                                                    Prediction</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>20070243017</td>
                                                            <td>Pagare Nisha Ramesh</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243017.pdf') }}"
                                                                    target="_blank">Starbucks Prediction Modelling Using
                                                                    RFM Modeling</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td>20070243018</td>
                                                            <td>Patil Anagha Vishwas</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243018.pdf') }}"
                                                                    target="_blank">Automatic MCQ Generation, PII
                                                                    Masking Project, Chatbot Conversation Flow</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>16</td>
                                                            <td>20070243021</td>
                                                            <td>Purohit Sahil Santosh</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243021.pdf') }}"
                                                                    target="_blank">Classification of Ducks, Kookaburra
                                                                    and SG Red Cricket Ball Using CNN Model</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>17</td>
                                                            <td>20070243023</td>
                                                            <td>Gauri Raskar Prashant</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243023.pdf') }}"
                                                                    target="_blank">Churn Prediction Model Using Deep
                                                                    Learning Algorithms and Machine Learning
                                                                    Algorithms</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>18</td>
                                                            <td>20070243025</td>
                                                            <td>Rutuja Dnyaneshwar Papade</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243025.pdf') }}"
                                                                    target="_blank">Time Series Analysis and Forecasting
                                                                    of Product Sales</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>19</td>
                                                            <td>20070243026</td>
                                                            <td>Sahil Abbas Naqvi</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243026.pdf') }}"
                                                                    target="_blank">Insurance Fraud Detection</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>20</td>
                                                            <td>20070243027</td>
                                                            <td>Salunke Purva Ashish</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243027.pdf') }}"
                                                                    target="_blank">Analysis of the Recent Trends in
                                                                    Elections</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>21</td>
                                                            <td>20070243028</td>
                                                            <td>Saran S P</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243028.pdf') }}"
                                                                    target="_blank">Steam Platform Analysis and
                                                                    Recommendation Using Natural Language Processing</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>22</td>
                                                            <td>20070243029</td>
                                                            <td>Sathe Shefali Sanjay</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243029.pdf') }}"
                                                                    target="_blank">Analysis and Prediction on Effect of
                                                                    COVID 19 on Taxi Trips in Chicago</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>23</td>
                                                            <td>20070243031</td>
                                                            <td>Singh Shrishti Ramnarayan</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243031.pdf') }}"
                                                                    target="_blank">Comparative Study of Machine
                                                                    Learning Techniques for Music Audio
                                                                    Classification</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>24</td>
                                                            <td>20070243033</td>
                                                            <td>Sona Simon</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243033.pdf') }}"
                                                                    target="_blank">Twitter Sentiment Analysis Using
                                                                    Machine Leaning: Hashtag and User Based
                                                                    Profiling</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>25</td>
                                                            <td>20070243034</td>
                                                            <td>Sreejoni Banerjee</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243034.pdf') }}"
                                                                    target="_blank">Sentiment Analysis in the Education
                                                                    Sector</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>26</td>
                                                            <td>20070243035</td>
                                                            <td>T . S . Jabeen</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243035.pdf') }}"
                                                                    target="_blank">Cart Abandonment Issues and
                                                                    Propensity Model for an Insurance Company</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>27</td>
                                                            <td>20070243036</td>
                                                            <td>Taksale Raj Mahesh</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243036.pdf') }}"
                                                                    target="_blank">Hand Gesture Recognition System for
                                                                    Mute and Deafblind Individuals</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>28</td>
                                                            <td>20070243037</td>
                                                            <td>Thakur Shanu Kanchansingh</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243037.pdf') }}"
                                                                    target="_blank">AIDA - Artificially Intelligent
                                                                    Doctor's Assistance</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>29</td>
                                                            <td>20070243038</td>
                                                            <td>Singh Nitesh Uttam</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243038.pdf') }}"
                                                                    target="_blank">Analysis &amp; Prediction on Income
                                                                    Tax Data Form Different Sectors</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>30</td>
                                                            <td>20070243040</td>
                                                            <td>Wadhwa Vinay Rohit</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243040.pdf') }}"
                                                                    target="_blank">Image Caption Generator</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>31</td>
                                                            <td>20070243041</td>
                                                            <td>Aadhiban Sj</td>
                                                            <td><a href="{{ asset('assets/pdf/research_student/dssa/2020-22/20070243041.pdf') }}"
                                                                    target="_blank">Securing E-election Using Face
                                                                    Recognition and Blockchain</a></td>
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
        </div>
    </section>
</main>

@endsection