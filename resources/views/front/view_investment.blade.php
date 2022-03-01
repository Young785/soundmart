<title>SOUNDMART - {{ $project->content_name }}</title>
@include('layouts.header')
<!-- :: Header -->
        <style>
            .trending-img{
                height: 300px !important;
            }
            #investForm{
                display: none;
            }
            /* #submitInvestment{
                display: none;
            } */
        </style>
        <section class="breadcrumb-header" id="page" style="background-image: url(/assets/images/header/04_header.png)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner">
                            <h1>{{ $project->content_name }}</h1>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><i class="fas fa-angle-right"></i></li>
                                <li>{{ $project->content_name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-page py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog-item">
                                    <div class="img-box">
                                        <a href="/invest/{{ $project->contant_name }}" class="open-post">
                                            <img class="img-fluid" src="/assets/images/documents/{{ $project->content_artwork }}" alt="{{ $project->content_name }}">
                                        </a>
                                        <span class="blog-date">{{ $project->created_at->diffForHumans() }}</span>
                                    </div>
                                    <div class="text-box">
                                        <ul class="blog-tags">
                                        </ul>
                                        <a href="/invest/{{ $project->contant_name }}" class="title-blog">
                                            <h5>{{ $project->fullname }}</h5>
                                        </a>
                                        <h5>About Listing</h5>
                                        <li>Creator Name: {{ $project->fullname }}</li>
                                        <li>Stage Name: {{ $project->stage_name }}</li>
                                        <li>Distributor Name: {{ $project->distributor_name }}</li>
                                        <li>Year of Career Onset: {{ $project->year_career_onset }}</li>
                                        <li>Target Amount: ₦{{ $project->target_amount }}</li>
                                        <li>Method of Funding: {{ $project->method_funding }}</li>
                                        <li>Content Name: {{ $project->content_name }}</li>
                                        <li>Type of Funding: {{ $project->type_funding }}</li>
                                        <li>Royalty Avenues: {{ $project->royalty_avenues }}</li>
                                        <h5>Investment Details</h5>
                                        <li>Amount: ₦{{ $project->amount }}</li>
                                        <li>Unit: {{ $project->unit }}</li>
                                        <p>
                                        <button class="btn btn-success btn-1" id="investButton" type="button" style="margin-top: 30px;">Withdraw</button>
                                        </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-blog ml-20">
                            <div class="widget">
                                <div class="widget-title">
                                    <h3>Search</h3>
                                </div>
                                <div class="widget-body">
                                    <form class="search" action="/search" method="GET">
                                        <input type="search" name="search" placeholder="Search Your Keywords..." required="">
                                        <button class="click" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@include('layouts.footer')