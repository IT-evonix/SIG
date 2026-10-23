@extends('layouts.app')

@section('title', 'The Artificial Intelligence Club of SIG')

@section('description', 'Explore NirvAI, SIG Pune’s AI club - student-led, innovation-driven, connecting academic
learning with real-world AI application and expert talks.')

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
                        <h1 class="inner_banner_heading">AI <span>Club</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('pages.student-corner.student-corner') }}">Student Corner</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">AI Club</li>
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
    <section class="ai_club_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ai_club_mainbox">
                        <div class="ai_club_firstbox">
                            <div class="ai_club_firstbox_left">
                                <h2 class="inner_heading">
                                    NirvAI – The Artificial Intelligence Club of SIG
                                </h2>
                                <p class="m-0">
                                    NirvAI, the official Artificial Intelligence Club of the Symbiosis Institute of
                                    Geoinformatics, is a dynamic student-led initiative founded by the MSc Data Science
                                    and Spatial Analytics (Batch 2024–26) students on February 28, 2025. The name NirvAI
                                    is inspired by “Nirvana” – a state of enlightenment. The club embodies the pursuit
                                    of knowledge and innovation in the AI domain, aiming to elevate student learning
                                    beyond textbooks to real-world impact. The club is dedicated to fostering a vibrant
                                    ecosystem of learning, innovation, and collaboration in the rapidly evolving domain
                                    of Artificial Intelligence (AI).
                                </p>
                            </div>
                            <div class="ai_club_firstbox_right">
                                <img src="{{ asset('assets/images/student-corner/ai-club-01.webp') }}"
                                    alt="AI club image" class="img-fluid">
                            </div>
                        </div>
                        <div class="ai_club_secondbox">
                            <div class="ai_club_secondbox_list">
                                <div class="ai_club_secondbox_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/vision.svg') }}" alt="Icon"
                                        class="img-fluid">
                                </div>
                                <div class="ai_club_secondbox_content">
                                    <h3 class="vision_mission_heading">Vision</h3>
                                    <p class="m-0">
                                        To become a hub for AI excellence within the institute by bridging academic
                                        learning with real-world applications, empowering students to become future
                                        leaders in the AI and data science landscape
                                    </p>
                                </div>
                            </div>
                            <div class="ai_club_secondbox_list">
                                <div class="ai_club_secondbox_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/mission.svg') }}" alt="Icon"
                                        class="img-fluid">
                                </div>
                                <div class="ai_club_secondbox_content">
                                    <h3 class="vision_mission_heading">Mission</h3>
                                    <ul class="custom_listing">
                                        <li>To cultivate an inclusive and intellectually stimulating environment where
                                            AI enthusiasts can learn, innovate, and share.</li>
                                        <li>To provide a platform for collaborative projects, workshops, and industry
                                            interactions.</li>
                                        <li>To enhance awareness and proficiency in AI tools, technologies, and ethical
                                            implications.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ai_club_thirdbox">
                            <h2 class="inner_heading">Team</h2>
                            <div class="ai_club_thirdbox_wrapper">
                                <div class="ai_club_thirdbox_listing">
                                    <h4 class="ai_club_thirdbox_heading">Faculty In-charge</h4>
                                    <p class="m-0">Ms. Neeta Nandgude, Assistant Professor, SIG,Pune</p>
                                </div>
                                <div class="ai_club_thirdbox_listing">
                                    <h4 class="ai_club_thirdbox_heading">Student Coordinators</h4>
                                    <p class="m-0">Atharva Pendse, Devika Mullay (Msc.DSSA,Batch 2024-26)</p>
                                </div>
                                <div class="ai_club_thirdbox_listing">
                                    <h4 class="ai_club_thirdbox_heading">Student Core Committee</h4>
                                    <ul class="custom_listing">
                                        <li>Atharva Pendse</li>
                                        <li>Devika Mullay</li>
                                        <li>Shoaib Vanu</li>
                                        <li>Anisha Seles</li>
                                        <li>Atharv Kolekar</li>
                                        <li>Alviya Ali</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ai_club_fourthbox">
                            <h2 class="inner_heading">Activities and Initiatives</h2>
                            <div class="general_card_mainbox">
                                <h3 class="general_card_mainheading">NirvAI club’s Activities and Initiatives</h3>
                                <div class="general_card_wraper">
                                    <div class="general_card_listing">
                                        <div class="general_card_icon">
                                            <img src="{{ asset('assets/images/programmes/icon/creativity.svg') }}"
                                                alt="Icon" class="img-fluid">
                                        </div>
                                        <div class="general_card_conent">
                                            <p class="m-0">Organize hands-on training sessions on new cutting edge
                                                technologies</p>
                                        </div>
                                    </div>
                                    <div class="general_card_listing">
                                        <div class="general_card_icon">
                                            <img src="{{ asset('assets/images/programmes/icon/group.svg') }}" alt="Icon"
                                                class="img-fluid">
                                        </div>
                                        <div class="general_card_conent">
                                            <p class="m-0">Support student-led projects for competitions to encourage
                                                practical implementation and creativity</p>
                                        </div>
                                    </div>
                                    <div class="general_card_listing">
                                        <div class="general_card_icon">
                                            <img src="{{ asset('assets/images/programmes/icon/ai.svg') }}" alt="Icon"
                                                class="img-fluid">
                                        </div>
                                        <div class="general_card_conent">
                                            <p class="m-0">Schedule sessions to review and discuss the latest
                                                publications in AI and data science</p>
                                        </div>
                                    </div>
                                    <div class="general_card_listing">
                                        <div class="general_card_icon">
                                            <img src="{{ asset('assets/images/programmes/icon/employee.svg') }}"
                                                alt="Icon" class="img-fluid">
                                        </div>
                                        <div class="general_card_conent">
                                            <p class="m-0">Arrange knowledge-sharing meetups with industry
                                                professionals, researchers, and alumni from leading organizations and
                                                institutions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ai_club_fifthbox">
                            <h2 class="inner_heading">Membership Guidelines</h2>
                            <div class="ai_club_fifthbox_wrapper">
                                <div class="ai_club_fifthbox_listing">
                                    <div class="ai_club_fifthbox_icon">
                                        <img src="{{ asset('assets/images/programmes/icon/documen.svg') }}"
                                            alt="Icon" class="img-fluid">
                                    </div>
                                    <div class="ai_club_fifthbox_content">
                                        <h4 class="ai_club_thirdbox_heading">Eligibility Criteria</h4>
                                        <ul class="custom_listing">
                                            <li>Membership is open to all students currently enrolled in Symbiosis Institute of Geoinformatics (SIG).</li>
                                            <li>Students from any department or specialization can apply, provided they have an interest in Artificial Intelligence (AI), Machine Learning (ML), or Data Science.</li>
                                            <li>Members must commit to active participation in club activities, events, and projects.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ai_club_fifthbox_listing">
                                    <div class="ai_club_fifthbox_icon">
                                        <img src="{{ asset('assets/images/programmes/icon/document.svg') }}"
                                            alt="Icon" class="img-fluid">
                                    </div>
                                    <div class="ai_club_fifthbox_content">
                                        <h4 class="ai_club_thirdbox_heading">Membership Application Process</h4>
                                        <ul class="custom_listing">
                                            <li>Interested students must fill out a membership form, including their interests, skills, and reason for joining.</li>
                                            <li>Shortlisted applicants may be required to complete a technical round, such as solving an AI-related problem or submitting a small project.</li>
                                            <li>A brief discussion with the core team to assess enthusiasm, commitment, and alignment with the club’s objectives.</li>
                                            <li>Selected members will receive an official confirmation and be added to the club’s communication channels.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ai_club_fifthbox_listing">
                                    <div class="ai_club_fifthbox_icon">
                                        <img src="{{ asset('assets/images/programmes/icon/group.svg') }}"
                                            alt="Icon" class="img-fluid">
                                    </div>
                                    <div class="ai_club_fifthbox_content">
                                        <h4 class="ai_club_thirdbox_heading">Benefits of Membership</h4>
                                        <ul class="custom_listing">
                                            <li>Access to exclusive workshops, guest lectures, and mentorship programs.</li>
                                            <li>Priority access to club-organized competitions and external AI challenges.</li>
                                            <li>Guidance on AI-related internships and career opportunities.</li>
                                            <li>Financial support will be provided to members for research publications and paper submissions.</li>
                                            <li>Receive certificates for active participation and contributions.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ai_club_sixthbox">
                            <h2 class="inner_heading">Photos</h2>
                            <div class="ai_club_gallery_box">
                                <h4 class="ai_club_thirdbox_heading">Expert Talk on GenAI and Quantum Computing</h4>
                                <p>Date: 28th Feb 2025</p>
                                <div class="ai_club_gallery_img">
                                    <img src="{{ asset('assets/images/student-corner/ai-club-02.webp') }}" alt="AI club image" class="img-fluid">
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