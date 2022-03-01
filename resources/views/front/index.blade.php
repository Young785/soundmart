@include('layouts.header')
<!-- :: Header -->
        <section class="header home-2" id="page">
            <div class="header-carousel owl-carousel owl-theme">
                <div class="sec-hero display-table" style="background-image: url(assets/images/header/04_header.png)">
                    <div class="table-cell">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="banner">
                                        <div class="top-handline">We are here to help!</div>
                                        <h1 class="handline">BUILT FOR CREATORS AND INVESTORS</h1>
                                        <p class="about-website">SOUNDMART brings Decentralised finance to the African music industry,changing how artists access the funding they need and providing a platform for the first African music/movie Royalty sales and investment.</p>
                                        <a class="btn-1" href="02_request-quote.html">Invest</a>
                                        <a class="btn-1 btn-4 ml-30" href="/how-it-works/creators">How it works</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- :: Features -->
        <section class="features home-2">
            <div class="container">
                <div class="row all-features-item">
                    <div class="col-lg-4 padding-0">
                        <div class="features-item one">
                            <i class="icon-item icon-cloud-computing-1"></i>
                            <div class="content-box">
                                <h4>Steady reports on your investments</h4>
                                <p>Immediately after investing,you are assigned to an investment manager who will be with you every step of the way.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 padding-0">
                        <div class="features-item two active-bg" style="height: 248px">
                            <i class="icon-item icon-analytics-2"></i>
                            <div class="content-box">
                                <h4>Assignment of royalty proceeds</h4>
                                <p>You don't need to lift a finger,we will assign the royalty proceeds to the investor automatically and make deposits every 3 months...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 padding-0">
                        <div class="features-item three" style="height: 248px">
                            <i class="icon-item icon-big-data-2"></i>
                            <div class="content-box">
                                <h4>Assurance</h4>
                                <p> Both the creator and the investor will sign a binding agreement,which soundmart will ensure to uphold and operate on to make sure both parties...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- :: About Us -->
        {{-- <section class="about-us home-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="about-text-box">
                            <div class="sec-title home-2">
                                <h3>Content Creators</h3>
                                <p class="sec-explain">Set fund target and raise debt fee funds.</p>
                                <p>Set your own terms</p>
                                <p>List your song in just 3 steps and get funding UI as quality as a week</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="about-btn">
                                        <a href="/about" class="btn-1 btn-3">Explore</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="about-btn">
                                        <a href="/list-a-project" class="btn-1 btn-3">List your Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="about-img-box">
                            <div class="img-box">
                                <img class="img-fluid" src="/assets/images/about/about.png" alt="02 About">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-us home-3 py-100" id="start" style="padding: 130px 0 0 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="about-img-box">
                            <div class="img-box">
                                <img class="img-fluid" src="/assets/images/about/about2.jpg" alt="About">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-between">
                        <div class="about-text-box">
                            <div class="sec-title">
                                <h3>Investors</h3>
                            </div>
                            <p>Access passive UI came generating assets and NFTs</p>
                            <p>All listed items are voified.</p>
                            <p>Get your ROI immediately after investment on every quaterc(3 months)</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="about-btn">
                                        <a href="/about" class="btn-1 btn-3">Explore</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <style>
            .trending-img{
                height: 300px !important;
            }
        </style>
         <!-- :: Services -->
         <section class="services home-2 py-100">
            <div class="container">
                <div class="sec-title home-2">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2>Trending</h2>
                        </div>
                    </div>
                </div>
                <div class="services-carousel owl-carousel owl-theme">
                    <div class="services-item-2">
                        <div class="services-item-img-box">
                            <img class="img-fluid trending-img" src="/assets/images/documents/{{ $trend_one->content_artwork }}" alt="{{ $trend_one->content_name }}">
                        </div>
                        <div class="services-item-text-box">
                            <span style="top: 16.75px; left: -4.5px;"></span>
                            <div class="content-box">
                                <h4>{{ $trend_one->content_name}}</h4>
                                <ul class="" style="border-bottom: 1px solid #DDD;margin-top: 20px;"></ul>
                                <a href="02_services.html" class="more" style="margin-top: 20px;">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="services-item-2">
                        <div class="services-item-img-box">
                            <img class="img-fluid trending-img" src="/assets/images/documents/{{ $trend_two->content_artwork }}" alt="{{ $trend_two->content_name }}">
                        </div>
                        <div class="services-item-text-box">
                            <span style="top: 16.75px; left: -4.5px;"></span>
                            <div class="content-box" style="padding: 0px">
                                <h4>{{ $trend_two->content_name}}</h4>
                                <ul class="" style="border-bottom: 1px solid #DDD;margin-top: 20px;"></ul>
                                <a href="02_services.html" class="more" style="margin-top: 20px;">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="services-item-2">
                        <div class="services-item-img-box">
                            <img class="img-fluid trending-img" src="/assets/images/documents/{{ $trend_three->content_artwork }}" alt="{{ $trend_three->content_name }}">
                        </div>
                        <div class="services-item-text-box">
                            <span style="top: 16.75px; left: -4.5px;"></span>
                            <div class="content-box" style="padding: 0px">
                                <h4>{{ $trend_three->content_name}}</h4>
                                <ul class="" style="border-bottom: 1px solid #DDD;margin-top: 20px;"></ul>
                                <a href="02_services.html" class="more" style="margin-top: 20px;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services home-2 py-100">
            <div class="container">
                <div class="sec-title home-2">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2>Trending</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 340px; margin-right: 30px; float: left;">
                    <a href="/invest/{{ $trend_one->name_slug }}">
                    <div class="services-item-2">
                        <div class="services-item-img-box">
                            <img class="img-fluid trending-img" src="/assets/images/documents/{{ $trend_one->content_artwork }}" alt="{{ $trend_two->content_name }}">
                        </div>
                        <div class="services-item-text-box">
                            <span style="top: 16.75px; left: -4.5px;"></span>
                            <div class="content-box" style="padding: 0px">
                                <h4>{{ $trend_one->content_name}}</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="owl-item cloned" style="width: 340px; margin-right: 30px; float: left;">
                    <a href="/invest/{{ $trend_two->name_slug }}">
                        <div class="services-item-2">
                            <div class="services-item-img-box">
                                <img class="img-fluid trending-img" src="/assets/images/documents/{{ $trend_two->content_artwork }}" alt="{{ $trend_two->content_name }}">
                            </div>
                            <div class="services-item-text-box">
                                <span style="top: 16.75px; left: -4.5px;"></span>
                                <div class="content-box" style="padding: 0px">
                                    <h4>{{ $trend_two->content_name}}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="owl-item cloned" style="width: 340px; margin-right: 30px; float: left;">
                    <a href="/invest/{{ $trend_three->name_slug }}">
                    <div class="services-item-2">
                        <div class="services-item-img-box">
                            <img class="img-fluid trending-img" src="/assets/images/documents/{{ $trend_three->content_artwork }}" alt="{{ $trend_two->content_name }}">
                        </div>
                        <div class="services-item-text-box">
                            <span style="top: 16.75px; left: -4.5px;"></span>
                            <div class="content-box" style="padding: 0px">
                                <h4>{{ $trend_three->content_name}}</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </section>
        <div class="statistic home-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1 col-lg-1"></div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="statistic-item">
                            <i class="icon-user"></i>
                            <div class="content">
                                <div class="counter statistic-counter">3.998</div>
                                <div class="counter-name">Happy creators.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1 col-lg-1"></div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="statistic-item">
                            <i class="icon-development"></i>
                            <div class="content">
                                <div class="counter statistic-counter">4.112</div>
                                <div class="counter-name">Happy Investors</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1 col-lg-1"></div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="statistic-item">
                            <i class="icon-network-1"></i>
                            <div class="content">
                                <div class="counter statistic-counter">2.978</div>
                                <div class="counter-name">Successful project raise</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
@include('layouts.footer')