@extends('layouts.app')

@section('title', 'Hostel & Amenities | Symbiosis Institute of Geoinformatics')

@section('description', 'Experience top-notch hostel facilities and amenities at SIG Pune. Enjoy comfortable rooms,
modern facilities, and a welcoming atmosphere for a delightful stay.')

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
                        <h1 class="inner_banner_heading">Hostel <span>Facilities</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('pages.student-corner.student-corner') }}">Student Corner</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Hostel Facilities</li>
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
    <section class="hostel_facility_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hostel_facility_mainbox">
                        <div class="hostel_facility_firstbox">
                            <div class="hostel_facility_firstbox_img">
                                <img src="{{ asset('assets/images/student-corner/hostel-image-01.webp') }}"
                                    alt="Hostel image" class="img-fluid">
                            </div>
                            <div class="hostel_facility_firstbox_content">
                                <div class="hostel_facility_firstbox_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/group.svg') }}" alt="Icon"
                                        class="img-fluid">
                                </div>
                                <div class="hostel_facility_firstbox_devider"></div>
                                <div class="hostel_facility_firstbox_paras">
                                    <p>
                                        Limited number of seats are available on first-cum-first served basis, which are
                                        allotted on confirmation of provisional admission. Students desirous of availing
                                        hostel accommodation should apply on a plain paper while sending their first
                                        installment of fees.
                                    </p>
                                    <p>
                                        The hostel rooms are spacious with natural light and ventilation. Each room has
                                        an attached toilet and bathroom.
                                    </p>
                                    <p class="m-0">
                                        Each student is provided with a steel cot, a study table and chair and a
                                        mattress.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hostel_facility_secondbox">
                            <h2 class="sholarships_heading text-center">
                                Security: The following arrangements have been made to ensure the security of the inmates of the hostels:
                            </h2>
                            <div class="hostel_facility_card_wrapper">
                                <div class="hostel_facility_card_listing">
                                    <div class="hostel_facility_card_icon">
                                        <img src="{{ asset('assets/images/programmes/icon/gate.svg') }}" alt="Icon" class="img-fluid">
                                    </div>
                                    <div class="hostel_facility_card_para">
                                        <p class="m-0">
                                            Security check at the main gate of each Hostel
                                        </p>
                                    </div>
                                </div>
                                <div class="hostel_facility_card_listing">
                                    <div class="hostel_facility_card_icon">
                                        <img src="{{ asset('assets/images/programmes/icon/policeman.svg') }}" alt="Icon" class="img-fluid">
                                    </div>
                                    <div class="hostel_facility_card_para">
                                        <p class="m-0">
                                            Individual security guard at each hostel building
                                        </p>
                                    </div>
                                </div>
                                <div class="hostel_facility_card_listing">
                                    <div class="hostel_facility_card_icon">
                                        <img src="{{ asset('assets/images/programmes/icon/woman-security.svg') }}" alt="Icon" class="img-fluid">
                                    </div>
                                    <div class="hostel_facility_card_para">
                                        <p class="m-0">
                                            Lady guard at girls hostels, round the clock
                                        </p>
                                    </div>
                                </div>
                                <div class="hostel_facility_card_listing">
                                    <div class="hostel_facility_card_icon">
                                        <img src="{{ asset('assets/images/programmes/icon/security-camera.svg') }}" alt="Icon" class="img-fluid">
                                    </div>
                                    <div class="hostel_facility_card_para">
                                        <p class="m-0">
                                            Surveillance video camera at entrance of all hostel buildings
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="hostel_facility_img_card_wrapper">
                                <div class="hostel_facility_img_card_list">
                                    <div class="hostel_facility_img_card_img">
                                        <img src="{{ asset('assets/images/student-corner/hostel-image-02.webp') }}" alt="Hostel image" class="img-fluid">
                                    </div>
                                    <div class="hostel_facility_img_card_content">
                                        <div class="hostel_facility_img_card_heading">Wi-Fi Internet Facilities</div>
                                        <div class="hostel_facility_img_card_para">
                                            <p class="m-0">
                                                All hostels have secure Wi-Fi internet connectivity, through high end firewall
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hostel_facility_img_card_list">
                                    <div class="hostel_facility_img_card_img">
                                        <img src="{{ asset('assets/images/student-corner/hostel-image-03.webp') }}" alt="Hostel image" class="img-fluid">
                                    </div>
                                    <div class="hostel_facility_img_card_content">
                                        <div class="hostel_facility_img_card_heading">TV Lounge</div>
                                        <div class="hostel_facility_img_card_para">
                                            <p class="m-0">
                                                Common TV lounge with cable connection on the ground floor of each hostel building
                                            </p>
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