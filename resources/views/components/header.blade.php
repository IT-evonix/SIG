<div class="top_header_wrap">
    <!-- top header with scrolling button animation start -->
    <!-- <div class="top_header">
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
    </div> -->
    <!-- top header with scrolling button animation ends -->

    <!-- top header without scrolling button animation start -->
     <div class="top_header_without_scrolling">
        <a href="#" target="_blank" class="top_header_listing top_header_popup_trigger" data-bs-toggle="modal"
        data-bs-target="#topHeaderModal">Admission Open 2027</a>
    </div>
    <!-- top header without scrolling button animation ends -->
</div>
<section class="hero_section">
    @yield('banner')
    <header class="header_main" id="my_header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header">
                        <div class="header_logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets/images/home/header-logo.webp') }}" alt="SIG Logo"
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="navbar">
                            <div class="container nav-flex">
                                <!-- <div class="menu-toggle">☰</div> -->
                                <div class="menu-toggle open-btn">☰</div>
                                <div class="menu-toggle close-btn">✖</div>
                                <nav class="nav-menu">                   
                                    <ul>
                                        <li><a href="{{ route('index') }}">Home</a></li>
                                        <li class="has-submenu">
                                            <a href="#">
                                                About
                                                <span class="submenu-arrow">▼</span>
                                                <span class="submenu-toggle">+</span>
                                            </a>
                                            <div class="submenu about_submenu_wrapper">
                                                <div class="about_submenu_listing">
                                                    <div class="about_submenu_heading">About SIU</div>
                                                    <ul>
                                                        <li><a href="https://www.siu.edu.in/" target="_blank">About SIU</a></li>
                                                        <li><a href="https://www.siu.edu.in/about-us/vision-mission" target="_blank">Vision and Mission</a></li>
                                                        <li><a href="https://www.siu.edu.in/about-us/leaderships" target="_blank">Leadership</a></li>
                                                        <li><a href="https://www.siu.edu.in/about-us/authorities-committees/board-management" target="_blank">Executive council</a></li>
                                                        <li><a href="https://www.siu.edu.in/about-us/authorities-committees/university-sports-board" target="_blank">University Sports Board</a></li>
                                                        <li><a href="{{ asset('assets/pdf/Code-of-Conduct.pdf') }}" target="_blank">Code of Conduct</a></li>
                                                    </ul>
                                                </div>
                                                <div class="about_submenu_listing">
                                                    <div class="about_submenu_heading">About SIG</div>
                                                    <ul>
                                                        <li><a href="{{ route('pages.about.about-us') }}">About SIG</a></li>
                                                        <li><a href="{{ route('pages.about.director') }}">Director's message</a></li>
                                                        <li><a href="{{ route('pages.about.deputy-director') }}">Deputy director's message</a></li>
                                                        <li><a href="{{ route('pages.faculty-profile') }}">Full Time Faculty</a></li>
                                                        <li><a href="{{ route('pages.comming-soon') }}">Faculty Awards and recognition </a></li>
                                                        <!-- <li><a href="{{ route('pages.comming-soon') }}">Visiting Faculty </a></li> -->
                                                        <li><a href="{{ route('pages.about.administrative-staff') }}">Administrative Staff</a></li>
                                                        <li><a href="{{ route('pages.about.infrastructure') }}">Infrastructure</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- <li class="has-submenu {{ request()->routeIs('pages.programmes.*') ? 'has-submenu_active' : '' }}"> -->
                                        <li class="has-submenu">
                                            <a href="#">
                                                Programmes
                                                <span class="submenu-arrow">▼</span>
                                                <span class="submenu-toggle">+</span>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('pages.programmes.msc-geoinformatics.msc-in-geoinformatics') }}">M.Sc. Geoinformatics</a></li>
                                                <li><a href="{{ route('pages.programmes.msc-dssa.msc-in-dssa') }}">M. Sc. Data Science and Spatial Analytics</a></li>
                                                <li><a href="{{ route('pages.programmes.msc-dssa-dual-degree.msc-in-dssa-dual-degree') }}">MSc. Data Science and Spatial Analytics - Dual Degree</a></li>
                                                <li><a href="https://www.sitpune.edu.in/m-tech-addmission" target="_blank">M.Tech Geoinformatics</a></li>
                                                <li><a href="{{ route('pages.programmes.certificate-course-drone-data-processing.certificate-course-in-data-processing') }}">Certificate Course Drone Data Acquisition and Processing</a></li>
                                                <li><a href="{{ route('pages.programmes.certificate-course-data-visualization.certificate-course-in-data-visual') }}">Certification in Data Visualization</a></li>
                                                <li><a href="https://scri.siu.edu.in/" target="_blank">Ph.D. Programme</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('pages.placement.placement') }}">Placement</a></li>
                                        <li class="has-submenu">
                                            <a href="#">
                                                Research
                                                <span class="submenu-arrow">▼</span>
                                                <span class="submenu-toggle">+</span>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('pages.research.research-publications') }}">Research Publication</a></li>
                                                <li><a href="{{ route('pages.research.research-projects') }}">Research Projects</a></li>
                                                <li><a href="{{ route('pages.research.research-student-geo') }}">Student Research</a></li>
                                                <li><a href="https://dms.sig.ac.in/" target="_blank">Drought System</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('pages.student-corner.student-corner') }}">Student Corner</a></li>
                                        <li><a href="{{ route('pages.blog') }}">Blog</a></li>
                                        <li><a href="{{ route('pages.social-initiative') }}">Social Initiatives</a></li>
                                        <li><a href="{{ route('pages.contact') }}">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- <nav class="header_menu">
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">About</a></li>
                                <li><a href="">Programmes</a></li>
                                <li><a href="">Placement</a></li>
                                <li><a href="">Research</a></li>
                                <li><a href="">Student Corner</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Social Initiatives</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </nav> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
</section>
<!--For smooth sticky header start -->
    <div class="header-spacer"></div>
    <div id="scroll-sentinel" style="position: absolute; top: 300px; height: 1px; width: 1px;"></div>
<!--For smooth sticky header ends -->
