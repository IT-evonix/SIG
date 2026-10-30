@extends('layouts.app')

@section('title', 'Blockchain Technology | Gain Insights on Data Science and Geoinformatics - SIG Blog')

@section('description', 'This blog unveils the secrets of blockchain technology, a decentralized digital ledger revolutionizing data storage and transaction security. Click here.')

@section('banner')
<div class="inner_banner_section">
    <div class="inner_banner_imgbox">
        <div class="banner_imgbox">
            <img src="{{ asset('assets/images/inner-banner.webp') }}" alt="Inner Banner Image" class="img-fluid inner_desktop_banner_image">
            <img src="{{ asset('assets/images/mobile-inner-banner.webp') }}" alt="Inner Banner Image" class="img-fluid inner_mobile_banner_image">
        </div>
    </div>
    <div class="inner_banner_overlay_box"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner_banner_mainbox">
                    <div class="inner_banner_headingbox">
                        <h1 class="inner_banner_heading">The SIG <span>Blog</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">The SIG Blog</li>
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

<main class="blog_detail_main">
    <section class="blog_detail_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="blog_detail_mainbox">
                        <div class="blog_detail_leftbox">
                            <div class="blog_detail_image_box">
                                <div class="blog_detail_image">
                                    <img src="{{ asset('assets/images/blog/blog-detail.webp') }}" alt="Blog Image"
                                            class="img-fluid">
                                </div>
                                <div class="blog_detail_image_content">
                                    <div class="blog_card_category">Faculty</div>
                                    <div class="blog_detail_image_content_listing">
                                        <div class="blog_detail_list_icon">
                                            <img src="{{ asset('assets/images/blog/user.svg') }}" alt="User Icon" class="img-fluid">
                                        </div>
                                        <div class="blog_detail_list_name">Dr. Yogesh M Rajput</div>
                                    </div>
                                    <div class="blog_detail_image_content_listing">
                                        <div class="blog_detail_list_icon">
                                            <img src="{{ asset('assets/images/blog/calendar.svg') }}" alt="Calendar Icon" class="img-fluid">
                                        </div>
                                        <div class="blog_detail_list_name">March 29, 2023</div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_detail_content_box">
                                <div class="blog_detail_content_listing">
                                    <h2 class="inner_heading">Blockchain Technology</h2>
                                </div>
                                <div class="blog_detail_content_listing">
                                    <h3 class="blog_sub_heading">What is Blockchain and How Does it Work?</h3>
                                    <div class="blog_chain_imgbox">
                                        <div class="blog_chain_left">
                                            <p class="m-0">
                                                Blockchain is an innovative technology that has thepotential to revolutionize the way we store and share data. At its core, blockchain is a decentralized digitalledger that records transactions in a secure and transparent manner. It was initially designed for the cryptocurrency, Bitcoin, but it has since found many other applications in various industries.
                                            </p>
                                        </div>
                                        <div class="blog_chain_img">
                                            <img src="{{ asset('assets/images/blog/block-chain-01.webp') }}" alt="Blog chain" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_detail_content_listing">
                                    <h3 class="blog_sub_heading">How Does Blockchain Work?</h3>
                                    <div class="blog_chain_imgbox">
                                        <div class="blog_chain_left">
                                            <p class="m-0">
                                                The blockchain is a digital ledger that records transactions in a way that is secure, transparent, and decentralized. This means that no single entity controls the ledger, and all parties involved have access to the same information. Each transaction is recorded as a block, and these blocks are connected in a chain, hence the name “blockchain.” When a new transaction is initiated, it is verified by a network of computers, or nodes, that are connected to the blockchain. These nodes use complex algorithms to verify the transaction, and once it is verified, it is added to the blockchain. Once a block is added to the chain, it cannot be altered or deleted. This makes the blockchain incredibly secure, as any attempts to tamper with the ledger would require the consensus of the majority of the nodes in the network.
                                            </p>
                                        </div>
                                        <div class="blog_chain_img">
                                            <img src="{{ asset('assets/images/blog/block-chain-02.webp') }}" alt="Blog chain" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_detail_content_listing">
                                    <h3 class="blog_sub_heading">Benefits of Blockchain</h3>
                                    <div class="blog_chain_imgbox">
                                        <div class="blog_chain_left">
                                            <p class="m-0">
                                                One of the most significant benefits of blockchain technology is its transparency. Because all transactions are recorded on the blockchain, they can be easily audited, and there is no need for intermediaries such as banks to  verify transactions. This can help reduce costs and increase efficiency, particularly in industries such as finance and supply chain management. Blockchain is also incredibly secure. Because the ledger is decentralized, it is difficult for any one entity to control or manipulate it. Additionally, the use of complex algorithms and cryptography ensures that the data stored on the blockchain is tamper-proof and resistant to hacking.
                                            </p>
                                        </div>
                                        <div class="blog_chain_img">
                                            <img src="{{ asset('assets/images/blog/block-chain-03.webp') }}" alt="Blog chain" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_detail_content_listing">
                                    <h3 class="blog_sub_heading">Applications of Blockchain</h3>
                                    <div class="blog_chain_imgbox">
                                        <div class="blog_chain_left">
                                            <p class="m-0">
                                                Blockchain technology has many potential applicationsin various industries. In finance, blockchain can be used to facilitate cross-border transactions and reduce costs associated with traditional banking systems. In supplychain management, blockchain can help track products from their origin to their destination, ensuring transparency and reducing the risk of fraud. Blockchain is also being explored as a way to store and share medical records securely, as well as to improve the efficiency of voting systems by providing a transparent and tamper-proof ledger of votes.
                                            </p>
                                        </div>
                                        <div class="blog_chain_img">
                                            <img src="{{ asset('assets/images/blog/block-chain-04.webp') }}" alt="Blog chain" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_detail_content_listing">
                                    <h3 class="blog_sub_heading">Conclusion</h3>
                                    <p class="m-0">
                                        Blockchain technology has the potential to revolutionize the way we store and share data. Its decentralization, transparency, and security make it an attractive option for many industries. While there are still many challenges to be addressed, the potential benefits of blockchain make it an exciting technology to watch in the years to come
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="blog_detail_rightbox">
                            <div class="blog_program_imgbox">
                                <img src="{{ asset('assets/images/blog/background-glob.webp') }}" alt="Glob image" class="img-fluid">
                            </div>
                            <h4 class="blog_program_heading">
                                Shape a Smarter Tomorrow with Geoinformatics
                            </h4>
                            <p class="blog_program_sub_heading">
                                Build skills that solve real-world challenges and create global impact.
                            </p>
                            <div class="blog_program_listing_mainbox">
                                <a href="" class="blog_program_list">
                                    <div class="blog_program_list_icon">
                                        <img src="{{ asset('assets/images/blog/icon-satellite.svg') }}" alt="Program icon" class="img-fluid">
                                    </div>
                                    <div class="blog_program_list_conent">
                                        <h5 class="blog_program_list_heading">M.Sc. Geoinformatics</h5>
                                    </div>
                                    <div class="blog_program_list_right">
                                        <svg width="18" height="18" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#C4161C" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                                <a href="" class="blog_program_list">
                                    <div class="blog_program_list_icon">
                                        <img src="{{ asset('assets/images/blog/icon-analytics.svg') }}" alt="Program icon" class="img-fluid">
                                    </div>
                                    <div class="blog_program_list_conent">
                                        <h5 class="blog_program_list_heading">M.Sc. Data Science</h5>
                                    </div>
                                    <div class="blog_program_list_right">
                                        <svg width="18" height="18" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#C4161C" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                                <a href="" class="blog_program_list">
                                    <div class="blog_program_list_icon">
                                        <img src="{{ asset('assets/images/blog/icon-layer.svg') }}" alt="Program icon" class="img-fluid">
                                    </div>
                                    <div class="blog_program_list_conent">
                                        <h5 class="blog_program_list_heading">Spatial Analytics</h5>
                                    </div>
                                    <div class="blog_program_list_right">
                                        <svg width="18" height="18" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#C4161C" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                                <a href="" class="blog_program_list">
                                    <div class="blog_program_list_icon">
                                        <img src="{{ asset('assets/images/blog/icon-geological.svg') }}" alt="Program icon" class="img-fluid">
                                    </div>
                                    <div class="blog_program_list_conent">
                                        <h5 class="blog_program_list_heading">M.Tech. Geoinformatics & Surveying Technology</h5>
                                    </div>
                                    <div class="blog_program_list_right">
                                        <svg width="18" height="18" x="0" y="0" viewBox="0 0 24 24">
                                            <g>
                                                <path
                                                    d="m22.707 11.293-7-7a1 1 0 0 0-1.414 1.414L19.586 11H2a1 1 0 0 0 0 2h17.586l-5.293 5.293a1 1 0 1 0 1.414 1.414l7-7a1 1 0 0 0 0-1.414"
                                                    fill="#C4161C" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection