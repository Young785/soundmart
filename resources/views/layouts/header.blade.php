<!doctype html>
<html lang="en">
<head>
        <!-- :: Required Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Soundmart">
        <meta name="keywords" content="soundmart, creators, investors, nft, listing, project">

        <!-- :: Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

        <!-- :: Favicon -->
        <link rel="icon" type="image/png" href="/assets/images/favicon.png">

        <!-- :: Title -->
        <title>SOUNDMART -  @yield('title', 'Home')</title>

        <!-- :: Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;family=Teko:wght@400;500;600;700&amp;display=swap">

        <!-- :: Fontawesome -->
        <link rel="stylesheet" href="/assets/fonts/fontawesome/css/all.min.css">

        <!-- :: Icomoon -->
        <link rel="stylesheet" href="/assets/fonts/icomoon/style.css">

        <!-- :: Animate -->
        <link rel="stylesheet" href="/assets/css/animate.css">

        <!-- :: Owl Carousel -->
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">

        <!-- :: Lity -->
        <link rel="stylesheet" href="/assets/css/lity.min.css">

        <!-- :: Nice Select CSS -->
        <link rel="stylesheet" href="/assets/css/nice-select.css">

        <!-- :: Magnific Popup CSS -->
        <link rel="stylesheet" href="/assets/css/magnific-popup.css">

        <!-- :: Style CSS -->
        <link rel="stylesheet" href="/assets/css/style.css">

        <!-- :: Style Responsive CSS -->
        <link rel="stylesheet" href="/assets/css/responsive.css">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <body>
        <!-- :: Loading -->
        {{-- <div class="loading">
            <div class="loading-box">
                <div class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div> --}}

        <!-- :: All Navbar -->
        <header class="all-navbar fixed-top">
            <!-- :: Navbar -->
            <nav class="nav-bar">
                <div class="container">
                    <div class="content-box d-flex align-items-center justify-content-between">
                        <div class="logo">
                            <a href="/" class="logo-nav">
                                <img class="img-fluid one" src="/assets/images/logo/logo.png" alt="01 Logo">
                                <img class="img-fluid two" src="/assets/images/logo/logo.png" alt="02 Logo">
                            </a>
                            <a href="#open-nav-bar-menu" class="open-nav-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        @php
                            $result = trim($_SERVER["REQUEST_URI"], "/");
                        @endphp
                        <div class="nav-bar-links" id="open-nav-bar-menu">
                            <ul class="level-1">
                                <li class="item-level-1">
                                    
                                    <a href="/" class="link-level-1 {{ $result == '' ? 'color-active' : ''}} ">Home</a>
                                </li>
                                <li class="item-level-1">
                                    <a href="/list-a-project" class="link-level-1 {{ $result == 'list-a-project' ? 'color-active' : ''}}">List your Project</a>
                                </li>
                                <li class="item-level-1">
                                    <a href="/invest" class="link-level-1 {{ $result == 'invest' ? 'color-active' : ''}}">Invest</a>
                                </li>
                                <li class="item-level-1">
                                    <a href="http://soundmart.io/nftmarketplace" class="link-level-1 {{ $result == 'nft-marketplace' ? 'color-active' : ''}}">NFT Marketplace</a>
                                </li>
                                <li class="item-level-1 has-menu">
                                    <a href="#" class="link-level-1">How it Works</a>
                                    <ul class="level-2">
                                        <li class="item-level-2">
                                            <a class="link-level-2" href="/how-it-works/creators">Content Creator</a>
                                        </li>
                                        <li class="item-level-2">
                                            <a class="link-level-2" href="/how-it-works/investors">Investor</a>
                                        </li>
                                    </ul>
                                </li>
                                @if (Auth::user() != null)
                                    <li class="item-level-1 has-menu">
                                        <a href="#" class="link-level-1">My Activies</a>
                                        <ul class="level-2">
                                            <li class="item-level-2">
                                                <a class="link-level-2" href="/account">Profile</a>
                                            </li>
                                            <li class="item-level-2">
                                                <a class="link-level-2" href="/pending-listing">Pending Listing</a>
                                            </li>
                                            <li class="item-level-2">
                                                <a class="link-level-2" href="/approved-listing">Approved Listing</a>
                                            </li>
                                            <li class="item-level-2">
                                                <a class="link-level-2" href="/account/investments">My Investment</a>
                                            </li>
                                            <li class="item-level-2">
                                                <a class="link-level-2" href="/logout">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                                <li class="item-level-1">
                                    @if (Auth::user() != null)
                                        <a class="btn-1 btn-3" href="/account">My Account</a>
                                        @else
                                        <a class="btn-1 btn-3" href="/login">Login/Register</a>
                                    @endif
                                </li>
                                <a href="#" class="item-level-1" style="margin-left: 15px;">
                                    <span class="search-icon open link-level-1"><i class="fas fa-search"> Search</i></span>
                                </a>
                            </ul>
                        </div>
                        {{-- <ul class="nav-bar-tools d-flex align-items-center justify-content-between">
                            <li class="item">
                                <span class="search-icon open"><i class="fas fa-search"></i></span>
                            </li>
                            <li class="item phone">
                                <div class="nav-bar-contact">
                                    <i class="icon-call"></i>
                                    <div class="content-box">
                                        <span>Phone Number</span>
                                        <a href="tel:00201212843661">0121-2843-661</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <span class="menu-icon open"><i class="fas fa-list"></i></span>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </nav>
        </header>

        <!-- :: Search Box -->
        <div class="search-box">
            <form action="/search" method="GET">
                <input type="search" name="search" placeholder="Search Here.....">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
            <span class="search-box-icon exit"><i class="fas fa-times"></i></span>
        </div>

        {{-- <!-- :: Menu Box -->
        <div class="menu-box">
            <div class="inner-menu">
                <div class="website-info">
                    <a href="/" class="logo"><img class="img-fluid" src="/assets/images/logo/logo.png" alt="01 Logo"></a>
                    <p>GateData are a IT Solutions &amp; Technology Services Provider Institutions. Suitable For IT Solutions, IT Technology, IT Business, Consulting, Software, Digital Solution and any Related Services Company Field.</p>
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <div class="contact-box">
                        <i class="icon-call"></i>
                        <div class="box">
                            <a class="phone" href="tel:00201212843661">+(002) 0121-2843-661</a>
                            <a class="phone" href="tel:00201029134630">+(002) 0102-9134-630</a>
                        </div>
                    </div>
                    <div class="contact-box">
                        <i class="icon-email"></i>
                        <div class="box">
                            <a class="mail" href="mailto:support@GateData.com">Support@GateData.com</a>
                            <a class="mail" href="mailto:mailbox@ar-coder.com">MailBox@AR-Coder.com</a>
                        </div>
                    </div>
                    <div class="contact-box">
                        <i class="icon-location"></i>
                        <div class="box">
                            <p>14D Street Brooklyn,</p>
                            <p>New York.</p>
                        </div>
                    </div>
                </div>
                <div class="follow-us">
                    <h4>Follow Us</h4>
                    <ul class="icon-follow">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <span class="menu-box-icon exit"><i class="fas fa-times"></i></span>
            </div>
        </div> --}}