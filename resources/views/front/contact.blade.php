<title>SOUNDMART - Contact Us</title>
@include('layouts.header')
        <!-- :: Breadcrumb Header -->
        <section class="breadcrumb-header home-2" id="page" style="background-image: url(assets/images/header/07_header.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner">
                            <h1>Contact US</h1>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><i class="fas fa-angle-right"></i></li>
                                <li>Contact US</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- :: Contact US -->
        <div class="contact-us py-100">
            <div class="container">
                <div class="sec-title home-2">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2>Contact US</h2>
                            <h3>Send Your Messages</h3>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <p class="sec-explain">SOUNDMART is set out to completely decentralise the entertainment industry financially.
                                A lot of individual investors want to invest in the entertainment industry but can't join the clique based gatekeepers who take the lion's share from the industry.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- :: Map -->
                        <div class="map-box">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31711.88412137841!2d3.381213166494403!3d6.523511910237414!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b2ae68280c1%3A0xdc9e87a367c3d9cb!2sLagos!5e0!3m2!1sen!2sng!4v1644609842623!5m2!1sen!2sng" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="add-comments">
                            <div class="inner-add-comments">
                                <form class="row" method="POST" action="/contact">
                                    @csrf
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <input type="text" name="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <input type="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quote-item">
                                            <input type="text" name="subject" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quote-item">
                                            <div class="quote-item">
                                                <textarea placeholder="Message Details!" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quote-item">
                                            <button class="btn-1 btn-3 submit" type="submit">Submit Request</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="blog py-100-70">
            <div class="container">
                <div class="sec-title home-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2>How it Works</h2>
                            <h3>Creators &amp; Investors</h3>
                        </div>
                        <div class="col-lg-5 align-items-center">
                            <p class="sec-explain">SOUNDMART is set out to completely decentralise the entertainment industry financially. A lot of individual investors want to invest in the entertainment industry but can't join the clique based gatekeepers who take the lion's share from the industry.</p>
                            <div class="co-lg-6" style="margin-top: 25px;">
                                <a href="/how-it-works/creators" class="btn-1 btn-3" style="margin-right: 10px;">Read more on Creators</a>
                                <a href="/how-it-works/investors" class="btn-1 btn-3">Read more on Investor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@include('layouts.footer')