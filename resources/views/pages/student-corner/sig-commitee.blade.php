@extends('layouts.app')

@section('title', 'Symbiosis Institute of Geoinformatics Committee Details')

@section('description', 'Discover detailed information about different SIG (Symbiosis Institute of Geoinformatics)
Committees, including their history, members and activities.')

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
                        <h1 class="inner_banner_heading">SIG <span>Committee</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('pages.student-corner.student-corner') }}">Student Corner</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">SIG Committee</li>
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
    <section class="sig_commitee_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sig_commitee_mainbox">
                        <div class="pdf_card_wraper">
                            <div class="pdf_card_list">
                                <div class="pdf_card_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                        class="img-fluid">
                                </div>
                                <div class="pdf_card_conent">
                                    <h3 class="pdf_card_heading">Alumni Committee</h3>
                                    <h4 class="pdf_card_subheading">A.Y. 2021-2022</h4>
                                    <a href="{{ asset('assets/pdf/sig-commitee/Alumni-committee-2021-2022.pdf') }}"
                                        target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                        <div class="pdf_card_btn_name">Click Here</div>
                                        <div class="pdf_card_btn_icon">
                                            <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                <path
                                                    d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                    fill="#000000" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pdf_card_list">
                                <div class="pdf_card_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                        class="img-fluid">
                                </div>
                                <div class="pdf_card_conent">
                                    <h3 class="pdf_card_heading">Anti Discrimination Cell</h3>
                                    <h4 class="pdf_card_subheading">A.Y. 2021-2022</h4>
                                    <a href="{{ asset('assets/pdf/sig-commitee/Anti-discrimenation-cell-2021-2022.pdf') }}"
                                        target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                        <div class="pdf_card_btn_name">Click Here</div>
                                        <div class="pdf_card_btn_icon">
                                            <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                <path
                                                    d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                    fill="#000000" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pdf_card_list">
                                <div class="pdf_card_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                        class="img-fluid">
                                </div>
                                <div class="pdf_card_conent">
                                    <h3 class="pdf_card_heading">Constitution of Anti Ragging Squad</h3>
                                    <h4 class="pdf_card_subheading">A.Y. 2021-2022</h4>
                                    <a href="{{ asset('assets/pdf/sig-commitee/Anti-ragging-squad-2021-2022.pdf') }}"
                                        target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                        <div class="pdf_card_btn_name">Click Here</div>
                                        <div class="pdf_card_btn_icon">
                                            <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                <path
                                                    d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                    fill="#000000" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pdf_card_list">
                                <div class="pdf_card_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                        class="img-fluid">
                                </div>
                                <div class="pdf_card_conent">
                                    <h3 class="pdf_card_heading">Diciplinary Committee</h3>
                                    <h4 class="pdf_card_subheading">A.Y. 2021-2022</h4>
                                    <a href="{{ asset('assets/pdf/sig-commitee/Disciplinary-committee-2021-2022.pdf') }}"
                                        target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                        <div class="pdf_card_btn_name">Click Here</div>
                                        <div class="pdf_card_btn_icon">
                                            <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                <path
                                                    d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                    fill="#000000" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pdf_card_list">
                                <div class="pdf_card_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                        class="img-fluid">
                                </div>
                                <div class="pdf_card_conent">
                                    <h3 class="pdf_card_heading">Exam Committee</h3>
                                    <h4 class="pdf_card_subheading">A.Y. 2021-2022</h4>
                                    <a href="{{ asset('assets/pdf/sig-commitee/Exam-committee-2021-2022.pdf') }}"
                                        target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                        <div class="pdf_card_btn_name">Click Here</div>
                                        <div class="pdf_card_btn_icon">
                                            <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                <path
                                                    d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                    fill="#000000" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pdf_card_list">
                                <div class="pdf_card_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                        class="img-fluid">
                                </div>
                                <div class="pdf_card_conent">
                                    <h3 class="pdf_card_heading">Exam Moderation Committee</h3>
                                    <h4 class="pdf_card_subheading">A.Y. 2021-2022</h4>
                                    <a href="{{ asset('assets/pdf/sig-commitee/Exam-modrate-committee-2021-2022.pdf') }}"
                                        target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                        <div class="pdf_card_btn_name">Click Here</div>
                                        <div class="pdf_card_btn_icon">
                                            <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                <path
                                                    d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                    fill="#000000" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pdf_card_list">
                                <div class="pdf_card_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                        class="img-fluid">
                                </div>
                                <div class="pdf_card_conent">
                                    <h3 class="pdf_card_heading">Exam Scrutiny Committee</h3>
                                    <h4 class="pdf_card_subheading">A.Y. 2021-2022</h4>
                                    <a href="{{ asset('assets/pdf/sig-commitee/Exam-scrutiny-committee-2021-2022.pdf') }}"
                                        target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                        <div class="pdf_card_btn_name">Click Here</div>
                                        <div class="pdf_card_btn_icon">
                                            <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                <path
                                                    d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                    fill="#000000" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pdf_card_list">
                                <div class="pdf_card_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                        class="img-fluid">
                                </div>
                                <div class="pdf_card_conent">
                                    <h3 class="pdf_card_heading">Gender Sensitization Committee</h3>
                                    <h4 class="pdf_card_subheading">A.Y. 2021-2022</h4>
                                    <a href="{{ asset('assets/pdf/sig-commitee/Gender-sanstization-committee-2021-2022.pdf') }}"
                                        target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                        <div class="pdf_card_btn_name">Click Here</div>
                                        <div class="pdf_card_btn_icon">
                                            <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                <path
                                                    d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                    fill="#000000" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pdf_card_list">
                                <div class="pdf_card_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                        class="img-fluid">
                                </div>
                                <div class="pdf_card_conent">
                                    <h3 class="pdf_card_heading">Grievance Redressal Committee</h3>
                                    <h4 class="pdf_card_subheading">A.Y. 2021-2022</h4>
                                    <a href="{{ asset('assets/pdf/sig-commitee/Grievance-redressal-committee-2021-2022.pdf') }}"
                                        target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                        <div class="pdf_card_btn_name">Click Here</div>
                                        <div class="pdf_card_btn_icon">
                                            <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                <path
                                                    d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                    fill="#000000" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pdf_card_list">
                                <div class="pdf_card_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                        class="img-fluid">
                                </div>
                                <div class="pdf_card_conent">
                                    <h3 class="pdf_card_heading">Internal Complaint Committee</h3>
                                    <h4 class="pdf_card_subheading">A.Y. 2021-2022</h4>
                                    <a href="{{ asset('assets/pdf/sig-commitee/ICC-Committee-2021-2022.pdf') }}"
                                        target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                        <div class="pdf_card_btn_name">Click Here</div>
                                        <div class="pdf_card_btn_icon">
                                            <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                <path
                                                    d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                    fill="#000000" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pdf_card_list">
                                <div class="pdf_card_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                        class="img-fluid">
                                </div>
                                <div class="pdf_card_conent">
                                    <h3 class="pdf_card_heading">Library Advisory Committee</h3>
                                    <h4 class="pdf_card_subheading">A.Y. 2021-2022</h4>
                                    <a href="{{ asset('assets/pdf/sig-commitee/Library-advisory-committee-2021-2022.pdf') }}"
                                        target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                        <div class="pdf_card_btn_name">Click Here</div>
                                        <div class="pdf_card_btn_icon">
                                            <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                <path
                                                    d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                    fill="#000000" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pdf_card_list">
                                <div class="pdf_card_icon">
                                    <img src="{{ asset('assets/images/programmes/icon/pdf.svg') }}" alt="Pdf Icon"
                                        class="img-fluid">
                                </div>
                                <div class="pdf_card_conent">
                                    <h3 class="pdf_card_heading">Anti Ragging Committee of your Campus</h3>
                                    <h4 class="pdf_card_subheading">A.Y. 2021-2022</h4>
                                    <a href="{{ asset('assets/pdf/sig-commitee/Anti-ragging-committee.pdf') }}"
                                        target="_blank" rel="noopener noreferrer" class="pdf_card_btn">
                                        <div class="pdf_card_btn_name">Click Here</div>
                                        <div class="pdf_card_btn_icon">
                                            <svg width="15" height="8" viewBox="0 0 12 8" fill="none">
                                                <path
                                                    d="M0 4.41211V3.38379H9.04395L6.14355 0.386719L6.4248 0L11.9971 3.69141V4.10449L6.4248 7.78711L6.14355 7.40039L9.04395 4.41211H0Z"
                                                    fill="#000000" />
                                            </svg>
                                        </div>
                                    </a>
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