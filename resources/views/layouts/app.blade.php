<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Best College for Geoinformatics & MSc Data Science in India - SIG')</title>
    <meta name="description" content="@yield('description', 'SIG is among the best Geoinformatics & MSc Data Science colleges in India. Explore industry-focused courses and build a future-ready career. Apply now!')">
    <!-- <meta name="keywords" content="@yield('keywords', '')"> -->
    <link rel="canonical" href="@yield('canonical', url()->current())">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>
<body data-page="{{ Route::currentRouteName() }}">
    <div class="caution_notice_popup">
        <div class="top_header_popup">
            <!-- Modal -->
            <div class="modal fade top_header_popup_modal" id="cautionNoticeModal" tabindex="-1"
                aria-labelledby="topHeaderModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content top_header_popup_content">
                        <!-- Modal Header -->
                        <div class="top_header_popup_header">
                            <div class="top_header_popup_heading">
                                Caution Notice
                            </div>
                            <button type="button" class="top_header_popup_close" data-bs-dismiss="modal" aria-label="Close">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    aria-hidden="true">
                                    <path d="m18 6-12 12" />
                                    <path d="m6 6 12 12" />
                                </svg>

                            </button>
                        </div>

                        <div class="top_header_popup_body">
                            <p>
                                Admission to all the courses and programmes at Symbiosis International (Deemed University)
                                (SIU) are strictly on merit, based on the eligibility criteria, admission criteria and
                                processes prescribed by the University from time to time and assessment of individual
                                performance in different entrance tests / procedures conducted by SIU including Symbiosis
                                National Aptitude Test [SNAP], Symbiosis Entrance Test [SET], Symbiosis Law Admission Test
                                [SLAT], Symbiosis All India Admission Test [AIAT], Symbiosis Entrance Exam for Design
                                [SEED], Symbiosis Institute of Technology Engineering Entrance Exam [SITEEE] and Symbiosis
                                Ph.D. Entrance Test (PET).
                            </p>
                            <p>
                                It is a matter of Policy that Symbiosis International (Deemed University) does not charge
                                capitation fee for admission from students and this is widely and prominently published as
                                well on all the relevant places like prospectus, website, Admission Booklets, etc.
                            </p>
                            <p>
                                All aspirants / parents are hereby notified that some individuals and/or organisations are
                                giving / making false and misleading advertisements / claims in newspapers, websites, social
                                media platforms or other means that they can secure/ ensure admission to various programme
                                offered by Symbiosis International (Deemed University). Such individuals or organisations
                                may also seek or demand money from aspirants or their parents in consideration of such
                                purported assurances.
                            </p>
                            <p>
                                Aspirants and parents are advised to rely only on information and communications issued
                                through the University's official channels, and to independently verify any claim regarding
                                admission made by any third party.
                            </p>
                            <p>
                                It is informed at large that the University has not authorised or appointed any individual,
                                agent, consultant or organisation to guarantee, assure or otherwise represent that admission
                                to any course or programme, can be secured against payment of money or through any means
                                other than the prescribed admission process. In this regard, Symbiosis International (Deemed
                                University) requests the aspirants / parents to refrain from entering into any transaction
                                with such elements. Despite this Notice, if any aspirant / parent still proceeds with or
                                enters into transaction with such elements, they would be doing so at their own risk and
                                cost.
                            </p>
                            <p>
                                Symbiosis International (Deemed University) further notifies that any aspirant attempting to
                                approach Symbiosis International (Deemed University) for admission through or at the
                                instances of such agents will be permanently debarred from admission to all the courses and
                                programmes at Symbiosis International (Deemed University).
                            </p>
                            <p class="m-0"><strong>By order</strong></p>
                            <p class="caution_red_para">Registrar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.header')
    @yield('content')
    @include('components.footer')
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>