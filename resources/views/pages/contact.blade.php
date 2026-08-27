@extends('layouts.app')

@section('title', 'Symbiosis Institute of Geoinformatics Pune | Contact Us')

@section('description', 'Symbiosis Institute of Geoinformatics Pune is one fo the best institute for Geoinformatics and
Data Science in India. Contact us for your enquiries.')

@section('banner')
<div class="inner_banner_section">
    <div class="inner_banner_imgbox">
        <div class="banner_imgbox">
            <img src="{{ asset('assets/images/inner-banner.webp') }}" alt="Inner Banner Image" class="img-fluid">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner_banner_mainbox">
                    <div class="inner_banner_headingbox">
                        <h1 class="inner_banner_heading"><span>Contact</span> Us</h1>
                        <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Programmes</a></li>
                                <li class="breadcrumb-item active" aria-current="page">M.Sc. in Geoinformatics</li>
                            </ol>
                        </nav> -->
                    </div>
                    <div class="inner_banner_rightbox"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<main class="contact_main">
    <section class="contact_first_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact_first_mainbox">
                        <div class="contact_first_left">
                            <h2 class="inner_heading">Enquire Now</h2>
                            <p>
                                Please don't hesitate to reach out to us whenever you need assistance. We'll make sure
                                to respond to you promptly
                            </p>
                            <form action="" method="post">
                                <div class="form_group">
                                    <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                </div>
                                <div class="form_group">
                                    <input type="email" name="email" id="email" placeholder="Email"
                                        class="form-control">
                                </div>
                                <div class="form_group">
                                    <input type="text" name="phone" id="phone" placeholder="Phone No."
                                        class="form-control">
                                </div>
                                <div class="form_group">
                                    <textarea name="message" id="message" placeholder="Message" class="form-control"
                                        rows="1"></textarea>
                                </div>
                                <div class="form_group">
                                    <input type="submit" value="Submit" class="send_button">
                                </div>
                            </form>
                        </div>
                        <div class="contact_first_right">
                            <h2 class="inner_heading">Address</h2>
                            <div class="contact_adderess_listing_mainbox">
                                <div class="contact_adderess_listing">
                                    <div class="contact_adderess_icon">
                                        <svg width="20" height="20" x="0" y="0" viewBox="0 0 682.667 682.667">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#ffffff" opacity="1"
                                                            data-original="#000000"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)"
                                                    transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path
                                                        d="M0 0s199.059 116.715 199.059 280.941C199.059 390.878 109.937 480 0 480s-199.059-89.122-199.059-199.059C-199.059 116.715 0 0 0 0Z"
                                                        style="stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(256 17)" fill="none" stroke="#ffffff"
                                                        stroke-width="30" stroke-linecap="butt" stroke-linejoin="miter"
                                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000" opacity="1"></path>
                                                    <path
                                                        d="M0 0c0-39.98-32.411-72.391-72.391-72.391S-144.782-39.98-144.782 0s32.41 72.391 72.391 72.391C-32.411 72.391 0 39.98 0 0Z"
                                                        style="stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(328.391 301.043)" fill="none"
                                                        stroke="#ffffff" stroke-width="30" stroke-linecap="butt"
                                                        stroke-linejoin="miter" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000" opacity="1"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="contact_adderess_text">
                                        5th Floor, Atur Centre, Gokhale Cross Road, Model Colony, Pune – 411016
                                    </div>
                                </div>
                                <div class="contact_adderess_listing">
                                    <div class="contact_adderess_icon">
                                        <svg width="20" height="20" x="0" y="0" viewBox="0 0 682.667 682.667">
                                            <g transform="matrix(1,0,0,1,0,5.684341886080802e-14)">
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#ffffff" opacity="1"
                                                            data-original="#000000"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)"
                                                    transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path
                                                        d="M0 0a30 30 0 0 0-13.368 24.967v.025c0 17.737 14.38 32.116 32.118 32.116h417.763c17.737 0 32.117-14.379 32.117-32.116v-.025c0-10.033-5.012-19.4-13.367-24.967-40.769-27.185-163.615-109.076-209.806-139.876a32.13 32.13 0 0 0-35.651 0C163.614-109.076 40.769-27.185 0 0"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(28.369 375.624)" fill="none"
                                                        stroke="#ffffff" stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000" opacity="1"></path>
                                                    <path
                                                        d="M0 0v-289.199a32.1 32.1 0 0 1 9.415-22.718 32.1 32.1 0 0 1 22.718-9.415h417.732a32.1 32.1 0 0 1 22.718 9.415 32.1 32.1 0 0 1 9.415 22.718V0"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(15.001 400.6)" fill="none" stroke="#ffffff"
                                                        stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000" opacity="1"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="contact_adderess_text">
                                        <a href="mailto:enquiry@sig.ac.in">enquiry@sig.ac.in</a> <span>|</span> <a
                                            href="mailto:admissions@sig.ac.in">admissions@sig.ac.in</a> <span>|</span>
                                        <a href="mailto:info@sig.ac.in">info@sig.ac.in</a>
                                    </div>
                                </div>
                                <div class="contact_adderess_listing">
                                    <div class="contact_adderess_icon">
                                        <svg width="20" height="20" x="0" y="0" viewBox="0 0 682.667 682.667">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#ffffff" opacity="1"
                                                            data-original="#000000"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)"
                                                    transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path
                                                        d="M0 0a128.55 128.55 0 0 1-90.889-37.646 128.55 128.55 0 0 1-37.644-90.887C-128.533-323.748 29.716-482 224.934-482a128.55 128.55 0 0 1 90.888 37.646 128.55 128.55 0 0 1 37.645 90.887L192.8-289.2l-32.133-80.333h-.017c-97.596 0-176.716 79.118-176.716 176.717v.016l80.333 32.133z"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(143.533 497)" fill="none" stroke="#ffffff"
                                                        stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000" opacity="1"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="contact_adderess_text">
                                        <a href="tel:+02025672841">020 25672841</a>/<a href="tel:+02025672842">42</a>/<a
                                            href="tel:+02025672843">43</a>
                                    </div>
                                </div>
                                <div class="contact_adderess_listing">
                                    <div class="contact_adderess_icon">
                                        <svg width="20" height="20" x="0" y="0" viewBox="0 0 682.667 682.667">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#ffffff" opacity="1"
                                                            data-original="#000000"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)"
                                                    transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path
                                                        d="M0 0h-201c-23.472 0-42.5 19.028-42.5 42.5v397.001c0 23.472 19.028 42.5 42.5 42.5H0c23.472 0 42.5-19.028 42.5-42.5V42.5C42.5 19.028 23.472 0 0 0"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(356.5 15)" fill="none" stroke="#ffffff"
                                                        stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000" opacity="1"></path>
                                                    <path d="M0 0h286"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(113 102)" fill="none" stroke="#ffffff"
                                                        stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000" opacity="1"></path>
                                                    <path d="M0 0v-2"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(256 60)" fill="none" stroke="#ffffff"
                                                        stroke-width="30" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000" opacity="1"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="contact_adderess_text">
                                        <a href="tel:+917709998185">+91 7709998185</a>
                                    </div>
                                </div>
                                <div class="contact_adderess_listing">
                                    <div class="contact_adderess_icon">
                                        <svg width="20" height="20" x="0" y="0" viewBox="0 0 682.667 682.667">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#ffffff" opacity="1"
                                                            data-original="#000000"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)"
                                                    transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path
                                                        d="M0 0c-19.514 34.714-30.643 74.772-30.643 117.43 0 132.549 108.452 241 241 241 132.549 0 241-108.451 241-241 0-132.548-108.451-241-241-241-42.658 0-82.716 11.13-117.43 30.643l-123.57-30.643z"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(45.643 138.57)" fill="none"
                                                        stroke="#ffffff" stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000" opacity="1"></path>
                                                    <path
                                                        d="M0 0c-9.947 9.979-49.872 54.285-35.344 68.813 3.993 3.993 19.959 14.899 26.188 21.128 21.213 21.213-3.125 47.477-18.732 63.084-1.275 1.275-25.3 27.132-57.196-4.765-57.025-57.025 24.258-159.275 49.042-184.302C-11.015-60.827 91.235-142.11 148.261-85.085c31.897 31.897 6.039 55.922 4.764 57.196-15.606 15.607-41.871 39.945-63.084 18.732-6.228-6.229-17.134-22.194-21.128-26.187C54.285-49.873 9.979-9.948 0 0Z"
                                                        style="stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(227.735 227.736)" fill="none"
                                                        stroke="#ffffff" stroke-width="30" stroke-linecap="butt"
                                                        stroke-linejoin="miter" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000" opacity="1"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="contact_adderess_text">
                                        <a href="https://wa.me/917709998185">+91 7709998185</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_second_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="follow_us_mainbox">
                        <h2 class="inner_heading">Follow Us</h2>
                        <div class="follow_us_listing_box">
                            <a href="#" target="_blank" class="follow_us_listing">
                                <div class="follow_us_icon">
                                    <svg width="30" height="30" x="0" y="0" viewBox="0 0 112.196 112.196">
                                        <g>
                                            <circle cx="56.098" cy="56.098" r="56.098" style="" fill="#3b5998"
                                                data-original="#3b5998"></circle>
                                            <path
                                                d="M70.201 58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34c0-5.964 2.833-15.303 15.301-15.303l11.234.047v12.51h-8.151c-1.337 0-3.217.668-3.217 3.513v7.585h11.334z"
                                                style="" fill="#ffffff" data-original="#ffffff"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="follow_us_link">
                                    Facebook
                                </div>
                            </a>
                            <a href="#" target="_blank" class="follow_us_listing">
                                <div class="follow_us_icon">
                                    <svg width="30" height="30" x="0" y="0" viewBox="0 0 1227 1227">
                                        <g>
                                            <path
                                                d="M613.5 0C274.685 0 0 274.685 0 613.5S274.685 1227 613.5 1227 1227 952.315 1227 613.5 952.315 0 613.5 0"
                                                fill="#000000" opacity="1" data-original="#000000"></path>
                                            <path fill="#ffffff"
                                                d="m680.617 557.98 262.632-305.288h-62.235L652.97 517.77 470.833 252.692H260.759l275.427 400.844-275.427 320.142h62.239l240.82-279.931 192.35 279.931h210.074L680.601 557.98zM345.423 299.545h95.595l440.024 629.411h-95.595z"
                                                opacity="1" data-original="#ffffff"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="follow_us_link">
                                    Twitter
                                </div>
                            </a>
                            <a href="#" target="_blank" class="follow_us_listing">
                                <div class="follow_us_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 152 152">

                                        <defs>
                                            <linearGradient id="instagram-gradient" x1="76" x2="76" y1="151.3" y2="10.3"
                                                gradientUnits="userSpaceOnUse">

                                                <stop offset="0" stop-color="#e09b3d" />
                                                <stop offset=".24" stop-color="#c74c4d" />
                                                <stop offset=".65" stop-color="#c21975" />
                                                <stop offset="1" stop-color="#7024c4" />

                                            </linearGradient>
                                        </defs>

                                        <circle cx="76" cy="76" r="76" fill="url(#instagram-gradient)" />

                                        <g fill="#fff">

                                            <path
                                                d="M91.36 38H60.64A22.67 22.67 0 0 0 38 60.64v30.72A22.67 22.67 0 0 0 60.64 114h30.72A22.66 22.66 0 0 0 114 91.36V60.64A22.67 22.67 0 0 0 91.36 38m15 53.36a15 15 0 0 1-15 15H60.64a15 15 0 0 1-15-15V60.64a15 15 0 0 1 15-15h30.72a15 15 0 0 1 15 15z" />

                                            <path
                                                d="M76 56.35A19.66 19.66 0 1 0 95.65 76 19.67 19.67 0 0 0 76 56.35M76 88a12 12 0 1 1 12-12 12 12 0 0 1-12 12" />

                                            <circle cx="95.77" cy="56.35" r="4.86" />

                                        </g>
                                    </svg>
                                </div>
                                <div class="follow_us_link">
                                    Instagram
                                </div>
                            </a>
                            <a href="#" target="_blank" class="follow_us_listing">
                                <div class="follow_us_icon">
                                    <svg width="30" height="30" x="0" y="0" viewBox="0 0 112.196 112.196">
                                        <g>
                                            <circle cx="56.098" cy="56.097" r="56.098" style="" fill="#007ab9"
                                                data-original="#007ab9"></circle>
                                            <path
                                                d="M89.616 60.611v23.128H76.207V62.161c0-5.418-1.936-9.118-6.791-9.118-3.705 0-5.906 2.491-6.878 4.903-.353.862-.444 2.059-.444 3.268v22.524h-13.41s.18-36.546 0-40.329h13.411v5.715c-.027.045-.065.089-.089.132h.089v-.132c1.782-2.742 4.96-6.662 12.085-6.662 8.822 0 15.436 5.764 15.436 18.149m-54.96-36.642c-4.587 0-7.588 3.011-7.588 6.967 0 3.872 2.914 6.97 7.412 6.97h.087c4.677 0 7.585-3.098 7.585-6.97-.089-3.956-2.908-6.967-7.496-6.967m-6.791 59.77H41.27v-40.33H27.865z"
                                                style="" fill="#f1f2f2" data-original="#f1f2f2"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="follow_us_link">
                                    Linkedin
                                </div>
                            </a>
                            <a href="#" target="_blank" class="follow_us_listing">
                                <div class="follow_us_icon">
                                    <svg height="30" viewBox="0 0 152 152" width="30">
                                        <g id="Layer_2" data-name="Layer 2">
                                            <g id="Color">
                                                <g id="_02.YouTube" data-name="02.YouTube">
                                                    <circle id="Background" cx="76" cy="76" fill="#f00" r="76" />
                                                    <path id="Icon"
                                                        d="m100.87 47.41h-49.74a15.13 15.13 0 0 0 -15.13 15.14v26.9a15.13 15.13 0 0 0 15.13 15.14h49.74a15.13 15.13 0 0 0 15.13-15.14v-26.9a15.13 15.13 0 0 0 -15.13-15.14zm-35.41 40.85v-24.52l21.08 12.26z"
                                                        fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="follow_us_link">
                                    Youtube
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_map_section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11526.02583650969!2d73.833643!3d18.533385!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf7e4fffffff%3A0xd306560568b9ee1d!2sSymbiosis%20Institute%20of%20Geoinformatics%20%7C%20SIG%20Pune!5e1!3m2!1sen!2sin!4v1787822584227!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
    </section>
</main>

@endsection