<div class="top_header_wrap">
    <div class="top_header">
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
        <a href="#" target="_blank" class="top_header_listing">Symbiosis Institute of Geoinformatics (SIG)</a>
    </div>
</div>
<section class="hero_section">
    @yield('banner')
    <header class="header_main" id="my_header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header">
                        <div class="header_logo">
                            <a href="">
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
                                        <li><a href="">Home</a></li>
                                        <li class="has-submenu">
                                            <a href="#">
                                                About
                                                <span class="submenu-arrow">▼</span>
                                                <span class="submenu-toggle">+</span>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="#">About us</a></li>
                                                <li><a href="#">Vision & Mission</a></li>
                                                <li><a href="#">Leadership</a></li>
                                                <li><a href="#">Executive council</a></li>
                                                <li><a href="#">University Sports Board</a></li>
                                                <li><a href="#}">Code of Conduct</a></li>
                                                <!-- <li class="has-submenu sum_menu_inner">
                                                    <a href="#">
                                                        CSR
                                                        <span class="submenu-arrow">▼</span>
                                                        <span class="submenu-toggle">+</span>
                                                    </a>
                                                    <ul class="submenu">
                                                        <a href="#">CSR Activities</a>
                                                        <a href="{{ asset('assets/pdf/CSR-Policy-K-Drive.pdf') }}" target="_blank">CSR Policy</a>
                                                    </ul>
                                                </li> -->
                                            </ul>
                                        </li>
                                        <!-- <li class="has-submenu {{ request()->routeIs('pages.programmes.*') ? 'has-submenu_active' : '' }}"> -->
                                        <li class="has-submenu">
                                            <a href="#">
                                                Programmes
                                                <span class="submenu-arrow">▼</span>
                                                <span class="submenu-toggle">+</span>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('pages.programmes.msc-in-geoinformatics') }}">M.Sc. Geoinformatics</a></li>
                                                <li><a href="#">M. Sc. Data Science and Spatial Analytics</a></li>
                                                <li><a href="#">MSc. Data Science and Spatial Analytics - Dual Degree</a></li>
                                                <li><a href="#">M.Tech Geoinformatics</a></li>
                                                <li><a href="#">Certificate Course Drone Data Acquisition and Processing</a></li>
                                                <li><a href="#">Certification in Data Visualization</a></li>
                                                <li><a href="#">Ph.D. Programme</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">
                                                Placement
                                                <span class="submenu-arrow">▼</span>
                                                <span class="submenu-toggle">+</span>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="#">Placement at SIG</a></li>
                                                <li><a href="#">Internship</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">
                                                Research
                                                <span class="submenu-arrow">▼</span>
                                                <span class="submenu-toggle">+</span>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="#">Research Publication</a></li>
                                                <li><a href="#">Research Projects</a></li>
                                                <li><a href="#">Student Research</a></li>
                                                <li><a href="#">Drought System</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">
                                                Student Corner
                                                <span class="submenu-arrow">▼</span>
                                                <span class="submenu-toggle">+</span>
                                            </a>
                                            <ul class="submenu">
                                                <li class="has-submenu sum_menu_inner">
                                                    <a href="#">
                                                        Section 1
                                                        <span class="submenu-arrow">▼</span>
                                                        <span class="submenu-toggle">+</span>
                                                    </a>
                                                    <ul class="submenu">
                                                        <a href="#">Learning Management System (LMS)</a>
                                                        <a href="#">Examination Portal</a>
                                                        <a href="#">Eligibility Portal</a>
                                                        <a href="#">Scholarship</a>
                                                        <a href="#">Hostel Facilities</a>
                                                        <a href="#">Library Portal</a>
                                                        <a href="#">Student Uniform</a>
                                                    </ul>
                                                </li>
                                                <li class="has-submenu sum_menu_inner">
                                                    <a href="#">
                                                         Section 2
                                                        <span class="submenu-arrow">▼</span>
                                                        <span class="submenu-toggle">+</span>
                                                    </a>
                                                    <ul class="submenu">
                                                        <a href="#">AI Club</a>
                                                        <a href="#">SIG committee</a>
                                                    </ul>
                                                </li>
                                                <li class="has-submenu sum_menu_inner">
                                                    <a href="#">
                                                        Section 3
                                                        <span class="submenu-arrow">▼</span>
                                                        <span class="submenu-toggle">+</span>
                                                    </a>
                                                    <ul class="submenu">
                                                        <a href="#">Achievements</a>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('pages.blog') }}">Blog</a></li>
                                        <li><a href="">Social Initiatives</a></li>
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
