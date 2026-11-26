@extends('layouts.app')

@section('title', 'Adminstartive Staff | Symbiosis Institute of Geoinformatics')

@section('description', 'Explore the adminstartive staff profiles of SIG to uncover the expertise & achievements of our esteemed
members, showcasing their academic backgrounds & research contributions.')

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
                        <h1 class="inner_banner_heading">Adminstartive Staff</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">About SIG</li>
                                <li class="breadcrumb-item active" aria-current="page">Adminstartive Staff</li>
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

<main class="faculty_profile_main  new_faculty_profile_main">
    <section class="faculty_profile_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="inner_heading">Office Superintendent</h2>
                    <div class="faculty_profile_mainbox">
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-15.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Sumeet Choudhary</h3>
                                    <div class="faculty_designation">Senior Office Superintendent</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faculty_department_devider"></div>


                    <h2 class="inner_heading">PA to director</h2>
                    <div class="faculty_profile_mainbox">
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-07.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Rupali kaware</h3>
                                    <div class="faculty_designation">Senior Coordinator, PA to Director</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faculty_department_devider"></div>


                    <h2 class="inner_heading">Admissions and eligibility</h2>
                    <div class="faculty_profile_mainbox">
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-05.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Sonal Rawal</h3>
                                    <div class="faculty_designation">Sr. Supervisor, Admissions</div>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-06.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Vrushali Kende</h3>
                                    <div class="faculty_designation">Assistant Coordinator, Admissions</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faculty_department_devider"></div>


                    <h2 class="inner_heading">Programmes</h2>
                    <div class="faculty_profile_mainbox">
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-01.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Gauri Jadhav</h3>
                                    <div class="faculty_designation">Coordinator, Academics and  M. Tech. Geoinformatics</div>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-17.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Ashwini Wagh</h3>
                                    <div class="faculty_designation">Assistant Coordinator, MSc Data Science</div>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-08.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Akshay Sawant</h3>
                                    <div class="faculty_designation">Assistant Coordinator, MSc Geoinformatics</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faculty_department_devider"></div>


                    <h2 class="inner_heading">Examinations</h2>
                    <div class="faculty_profile_mainbox">
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-02.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Gauri Shinde</h3>
                                    <div class="faculty_designation">Supervisor, Examination</div>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-04.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Shreya Chounde</h3>
                                    <div class="faculty_designation">Office Assistant, Examination</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faculty_department_devider"></div>


                    <h2 class="inner_heading">Placements</h2>
                    <div class="faculty_profile_mainbox">
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-16.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Prashant Parekar</h3>
                                    <div class="faculty_designation">Placement Supervisor</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faculty_department_devider"></div>


                    <h2 class="inner_heading">IT support</h2>
                    <div class="faculty_profile_mainbox">
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-11.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Jayesh Dabi</h3>
                                    <div class="faculty_designation">System Engineer</div>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-18.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Sunil Shahane</h3>
                                    <div class="faculty_designation">IT Support</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faculty_department_devider"></div>


                    <h2 class="inner_heading">Library</h2>
                    <div class="faculty_profile_mainbox">
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-03.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Nisha Shivsharan</h3>
                                    <div class="faculty_designation"> Library Assistant</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faculty_department_devider"></div>


                    <h2 class="inner_heading">Support staff</h2>
                    <div class="faculty_profile_mainbox">
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-13.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Ravindra Gajmal</h3>
                                    <div class="faculty_designation">Senior Office Attendant</div>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-14.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Rohidas Kondhalkar</h3>
                                    <div class="faculty_designation">Senior Office Attendant</div>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-09.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Appa Bugadikattekar</h3>
                                    <div class="faculty_designation">Senior Office Attendant</div>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-10.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Deepak Kudale</h3>
                                    <div class="faculty_designation">Driver cum Sr. Office Attendant</div>
                                </div>
                            </div>
                        </div>
                        <div class="faculty_card">
                            <div class="faculty_image">
                                <img src="{{ asset('assets/images/adminstartive-staff/staff-12.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="faculty_content">
                                <div class="faculty_headingbox">
                                    <h3 class="faculty_name">Mahesh Shigwan</h3>
                                    <div class="faculty_designation">Office Attendant</div>
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