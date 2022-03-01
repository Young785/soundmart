<title>SOUNDMART - My Account</title>
@include('layouts.header')
<!-- :: Header -->
        <style>
            .trending-img{
                height: 300px !important;
            }
        </style>
        <section class="breadcrumb-header" id="page" style="background-image: url(assets/images/header/04_header.png)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner">
                            <h1>My Account</h1>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><i class="fas fa-angle-right"></i></li>
                                <li>My Account</li>
                            </ul>
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
                            <h2>My Account</h2>
                        </div>
                    </div>
                </div>
                @foreach ($projects as $project)
                    @if ($project != null)
                        <div class="owl-item cloned active" style="width: 340px; margin-right: 30px; float: left;">
                            <a href="/invest/{{ $project->name_slug }}">
                                <div class="services-item-2">
                                    <div class="services-item-img-box">
                                        <img class="img-fluid trending-img" src="assets/images/documents/{{ $project->content_artwork }}" alt="{{ $project->content_name }}">
                                    </div>
                                    <div class="services-item-text-box">
                                        <span style="top: 12.8125px; left: -1.5px;"></span>
                                        <div class="content-box" style="padding: 0px">
                                            <h4>{{ $project->content_name }}</h4>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div>
                            <h1 class="text-center" style="color: #fff;">No result found</h1>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@include('layouts.footer')