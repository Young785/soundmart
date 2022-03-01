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
                                        <li>Creator Name: {{ $project->fullname }}</li>
                                        <li>Stage Name: {{ $project->stage_name }}</li>
                                        <li>Distributor Name: {{ $project->distributor_name }}</li>
                                        <li>Year of Career Onset: {{ $project->year_career_onset }}</li>
                                        <li>Target Amount: ₦{{ $project->target_amount }}</li>
                                        <li>Method of Funding: {{ $project->method_funding }}</li>
                                        <li>Content Name: {{ $project->content_name }}</li>
                                        <li>Type of Funding: {{ $project->type_funding }}</li>
                                        <li>Royalty Avenues: {{ $project->royalty_avenues }}</li>
                                        <p>
                                            @if ($project->investment_type == "nft")
                                                <a href="http://soundmart.io/nftmarketplace" class="btn btn-success" style="margin-top: 30px;" href="java">NFT Available</a>
                                                @elseif(Auth::user() == null && $project->investment_type != "nft")
                                                <a href="/home" class="btn btn-success" style="margin-top: 30px;" href="java">Invest Now</a>
                                               @else
                                                <button class="btn btn-success btn-1" id="investButton" type="button" style="margin-top: 30px;">Invest Now</button>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-box widget" id="investForm">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                            <div class="col-md-12 col-md-offset-2">
                                                <input type="hidden" name="orderID" value="{{ Str::random(10) }}">
                                                {{-- <input type="hidden" name="amount" value="360000"> --}}
                                                <input type="hidden" name="quantity" value="1">
                                                <input type="hidden" name="currency" value="NGN">
                                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" >
                                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="row" style="margin-bottom:40px;">
                                                    <div class="col-lg-6">
                                                        <div class="quote-item">
                                                            <input type="text" name="fullname" placeholder="Fullname" value="{{ Auth::user()->fullname ?? ''}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="quote-item">
                                                            <input type="email" name="email" placeholder="Email" value="{{ Auth::user()->email ?? ''}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="quote-item">
                                                            <label for="phone">Phone Number</label>
                                                            <input type="number" name="phone" value="{{ Auth::user()->phone ?? ''}}" placeholder="Phone Number" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="quote-item">
                                                            <label for="unit">Note: 1 Unit = $100 and $1 = 570</label>
                                                            <input type="number" name="unit" value="1" min="1" placeholder="So, How many unit?" class="unitNumber" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="quote-item">
                                                            <label for="">For you to invest, you are to Pay the below amount (including 1.5% paystack transaction fees).</label>
                                                            <input type="number" value="6840000" name="amount" id="totalAmount2" hidden>
                                                            <input type="number" value="{{ $project->id }}" class="listID" hidden>
                                                            <input type="text" value="₦68400" min="1" placeholder="Pay the Sum 68,400" id="totalAmount" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="quote-item" id="submitInvestment">
                                                            <button class="btn-1 btn-3 submit" id="paySum" type="submit">Pay ₦68,400</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           </form>
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