
<title>SOUNDMART - List a Project</title>
@include('layouts.header')
<style>
    .red{
        color: #fd0202;
    }
    #royalty_avenues{
                                            cursor: pointer;
                                            height: 53px;
                                            border: 2px solid #E9E9E9;
                                            padding: 15px;
                                            width: 100%;
                                            color: #8d8c8c;
                                            font-size: 14px;
                                            margin-bottom: 30px;
                                            border-radius: 5px;
                                        }
                                        #type_funding{
                                            cursor: pointer;
                                            height: 53px;
                                            border: 2px solid #E9E9E9;
                                            padding: 15px;
                                            width: 100%;
                                            color: #8d8c8c;
                                            font-size: 14px;
                                            margin-bottom: 30px;
                                            border-radius: 5px;
                                        }
                                        .multiselect {
                                            width: 200px;
                                        }

                                        .selectBox {
                                            position: relative;
                                        }

                                        .selectBox select {
                                            width: 100%;
                                            font-weight: bold;
                                        }

                                        .overSelect {
                                            position: absolute;
                                            left: 0;
                                            right: 0;
                                            top: 0;
                                            bottom: 0;
                                        }

                                        #checkboxes {
                                            width: 247px;
                                            display: none;
                                            padding-top: 10px;
                                            border: 1px #dadada solid;
                                        }

                                        #checkboxes label {
                                        display: block;
                                        }

                                        #checkboxes label:hover {
                                            background-color: #f6f6f6;
                                        }
                                        #advanceTerm{
                                            margin-bottom: 10px;
                                            display: none;
                                        }
                                        #typeFunding{
                                            width: 247px;
                                            display: none;
                                            padding-top: 10px;
                                            border: 1px #dadada solid;
                                        }
                                        #funding-label{
                                            width: 100%;
                                        }
</style>

 <!-- :: Breadcrumb Header -->
 <section class="breadcrumb-header home-2" id="page" style="background-image: url(/assets/images/header/02_header.png)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner">
                    <h1>List a Project</h1>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>List a Project</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- :: List a Project -->
<div class="contact-us py-100">
    <div class="container">
        <div class="sec-title home-2">
            <div class="row">
                <div class="col-lg-5">
                    <h2>List a Project</h2>
                    <h3>Create a Project below</h3>
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
                    <img class="img-fluid" src="/assets/images/about/about.png" alt="About">
                </div>
            </div>
                                <div class="col-md-6">
                        <div class="add-comments">
                            <div class="inner-add-comments">
                                <form class="row" method="POST" action="/list-a-project" enctype="multipart/form-data">
                                    @csrf
                                    {{-- @if (session()->has("submit"))
                                        @foreach (session("submit") as $item)
                                        <p class="red">  {{  $item[0] }} </p>
                                        @endforeach
                                        @else
                                    @endif --}}
                                    <div class="col-md-12">
                                        <div class="quote-item">
                                            <input type="text" name="fullname" value="{{ old("fullname")}}" placeholder="Creators Fullname (As appears on your Govt. approved ID Card)." required>
                                            <p class="red">  {{ $errors->first("fullname") }} </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <input type="text" name="stage_name" value="{{ old("stage_name")}}" placeholder="Stage Name" required>
                                            <p class="red">{{ $errors->first("stage_name") }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <input type="text" name="distributor_name" value="{{ old("distributor_name")}}" placeholder="Distributor's Name (Optional)">
                                            <p class="red">{{ $errors->first("distributor_name") }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <label for="year_career_onset">Year of Career Onset</label>
                                            <input type="date" name="year_career_onset" value="{{ old("year_career_onset")}}" placeholder="Year of Career Onset" required>
                                            <p class="red">{{ $errors->first("year_career_onset") }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <label for="target_amount">Starting Target Amount</label>
                                            <input type="number" name="target_amount" value="{{ old("target_amount")}}" placeholder="10000" required>
                                            <p class="red">{{ $errors->first("target_amount") }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <select name="method_funding"  id="">
                                                <option>Method of Funding</option>
                                                <option value="auction">Auction</option>
                                                <option value="fixed">Fixed Listing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <div class="form-control" onclick="typeFunding();" id="type_funding" style="margin-bottom: 5px">Type of Funding</div>
                                            <i>Note: Choose or type year term. Only one is !</i>
                                            <div id="typeFunding">
                                                <label id="funding-label" for="one">
                                                    <input type="checkbox" name="type_funding[]" value="liferight" id="one" style="width: 50px">Life of Right
                                                </label>
                                                <label id="funding-label" for="two" style="height: 40px;">
                                                    <input type="checkbox" name="type_funding[]" value="nft" id="two" style="width: 50px">NFT
                                                </label>
                                                <label id="funding-label" for="three" style="margin-left: 20px;">
                                                    <a style="margin-right: 10px;">Advanced term(Years)</a>
                                                    <input type="number" name="type_funding[]" min="1" max="100" id="three" placeholder="Type advanced term" class="form-control" style="width: 210px;">
                                                </label>
                                                <label id="funding-label" for="four" style="margin-left: 20px;">
                                                    <a style="margin-right: 10px;">Fixed Return(in percentage)</a>
                                                    <input type="number" name="type_funding[]" min="1" max="100" id="four" placeholder="Type fixed term" class="form-control" style="width: 210px;">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item" onclick="showCheckboxes()">
                                            <div class="form-control" onclick="Invest();" id="royalty_avenues">Investment Benefit</div>
                                            <div id="checkboxes">
                                                <label for="one">
                                                    <input type="checkbox" name="royalty_avenues[]" value="online" id="one" style="width: 50px;">Online Streaming
                                                </label>
                                                <label for="two" style="height: 40px;">
                                                    <input type="checkbox" name="royalty_avenues[]" value="public" id="two" style="width: 50px;">Public Performance
                                                </label>
                                                <label for="three">
                                                    <input type="checkbox" name="royalty_avenues[]" value="radio" id="three" style="width: 50px;">Radio Plays
                                                </label>
                                                <label for="three">
                                                    <input type="checkbox" name="royalty_avenues[]" value="copyright" id="three" style="width: 50px;">Copyright play royalties
                                                </label>
                                                <label for="three">
                                                    <input type="checkbox" name="royalty_avenues[]" value="mechanical" id="three" style="width: 50px;">Mechanical distributions (CDs)
                                                </label>
                                                <input type="text" name="royalty_avenues[]" class="form-control" id="three" style="margin: 0 0 10 10px; width: 225px;" placeholder="Add one More(Optional)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <input type="text" name="content_name" value="{{ old("content_name") }}" placeholder="Content Name" required>
                                            <p class="red">{{ $errors->first("content_name") }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quote-item">
                                            <label>Upload Valid Id Card</label>
                                            <input type="file" name="id_card" accept="image/png, image/jpg, image/gif, image/jpeg" value="{{ old("id_card") }}" required>
                                            <p class="red">{{ $errors->first("id_card") }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quote-item">
                                            <label>Upload Current Streaming Platform Payouts</label>
                                            <input type="file" name="current_payout" accept="image/png, image/jpg, image/gif, image/jpeg" value="{{ old("current_payout") }}" required>
                                            <p class="red">{{ $errors->first("current_payout") }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quote-item">
                                            <label>Upload Content Payout for Others</label>
                                            <input type="file" name="content_others" accept="image/png, image/jpg, image/gif, image/jpeg" value="{{ old("content_others") }}" required>
                                            <p class="red">{{ $errors->first("content_others") }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quote-item">
                                            <label>Upload Content Artwork</label>
                                            <input type="file" name="content_artwork" accept="image/png, image/jpg, image/gif, image/jpeg" value="{{ old("content_artwork") }}" required>
                                            <p class="red">{{ $errors->first("content_artwork") }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quote-item">
                                            <input type="text" name="content_link" placeholder="Content Link" value="{{ old("content_link") }}">
                                            <p class="red">{{ $errors->first("content_link") }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quote-item">
                                            <button class="btn-1 btn-3 submit" type="submit">Save Project</button>
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
        <script>
        var extended = false;
            function typeFunding()
        {
            var typeFunding = document.getElementById("typeFunding");
          if (!extended) {
            typeFunding.style.display = "block";
            extended = true;
          } else {
            typeFunding.style.display = "none";
            extended = false;
          }
        }
        </script>
        <script>
        var expanded = false;
        
        function Invest() {
          var checkboxes = document.getElementById("checkboxes");
          if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
          } else {
            checkboxes.style.display = "none";
            expanded = false;
          }
            
        }
        
        </script>