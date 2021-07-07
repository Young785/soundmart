@include('/user/includes/header')
<div class="create-group keep">
    <link rel="stylesheet" href="/assets/css/style.css">
    <div class="col-lg-12">
        <div class="col-lg-3 story-sd-nav">
            <div class="story-sd-div">
                <span class="m-icon close-Cgroup" id="m-icon"><i class="ti-close"></i></span>
                <div class="">
                    <a title="" href="/"><img src="/assets/images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="" style="margin-top: 15px;"> 
                <p id="cp-p">Pages &gt; Create a Page</p>
                <div style="height: 43px;">
                    <p class="story--p">Create Group</p>
                </div>
                <div style="float: left">
                    <figure class="story--fig">
                        @if ($user->user_image == null)
                            <img src="/assets/images/default.png" style="border-radius: 100%" alt="">
                            @else
                            <img src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" style="border-radius: 100%" alt="">
                        @endif
                    </figure>
                    <div class="story--p-div">{{$user->name}}</div>
                    <span style="color: #65676b; margin-left: 15px;">Admin</span>
                </div>
                <form style="margin-top: 90px;" action="/create_group" method="POST">
                    @csrf
                    <input type="text" class="form-control" style="border-radius: 5px !important" placeholder="Group Name (required)" name="name" id="pg-name">
                    <select class="form-control" name="privacy" style="border-radius: 5px !important;margin-top: 20px;color: #999999 !important;nt; */">
                        <option value="1">Choose Privacy</option>
                        <option value="2">Only Me</option>
                        <option value="3">Choose Privacy</option>
                        <option value="4">Choose Privacy</option>
                    </select>
                    <input type="text" class="form-control" style="border-radius: 5px !important;margin-top: 20px;" placeholder="Invite Friends (optional)" name="" id="pg-name">
                    <p>Suggested:
                        <span class="tagspeople">
                            @foreach ($friendsList as $item)
                                @if ($item->id == Auth::user()->id)
                                    @else
                                    {{ $item->name }}
                                @endif
                            @endforeach
                            
                        </span>
                    </p>
                    <div style="margin-top: 38%;">
                        <button class="btn btn-primary create-group" disabled="">Create</button>
                    </div>
                </form>
            </div>  
        </div>
        @include('/user/includes/popupnav')
        <div  class="col-lg-9" style="background:#eee">
            <div class="cg-div">
                <p class="sup-p">Desktop View
                    <span class="view-type">
                        <i class="fa fa-tv tv-view"></i>
                        <i class="fa fa-mobile mobile-view" style=""></i>
                    </span>
                </p>
                <div class="cp-desktop-view-mdiv">
                    <div style="height: 375px;">
                    <div class="cp-desktop-view-div">
                        <div>
                            <div id="cg-desktop-view-dv">
                            <h3 style="color: #fff; font-weight: 600;" id="pg-name-show">Group Name</h3>
                            <p style="font-weight: 700;" id="pg-category-show">Group Privacy . 1 Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-10 type-div">
                    <div class="timeline-info">
                        <ul>
                            <li>
                                <a class="info-name" href="" title="" data-ripple="">About</a>

                                <a class="info-name" href="" title="" data-ripple="">Posts</a>

                                <a class="info-name" href="" title="" data-ripple="">Members</a>

                                <a class="info-name" href="" title="" data-ripple="">
                                    Events
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div style="width: 35%; float: left;">
                    <button class="btn cp-desktop-view-lbutton" style="float: right;">
                        <i class="fa fa-search" style="margin-right: 10px;"></i>
                    </button>
                    <button class="btn cp-desktop-view-lbutton" style="float: right;">
                        <i class="fa fa-ellipsis-h" style="margin-right: 10px;"></i>
                    </button>
                </div>
            </div>
            <div class="cp-details-mdiv">
                <div id="cp-details-mdiv">
                    <h4 class="cp-details-h4">About</h4>
                        <div>
                            <span style="margin-right: 6px;">
                                <i class="fa fa-warning"></i>
                            </span>Description
                        </div>
                    </div>
                <div>
            </div>
            <div id="cp-details-mdiv">
                <span class="m-icon">
                    <i class="fa fa-flag"></i>
                </span>
                <button class="btn text-center cp-details-button">Create Post</button>
                <div style="padding-top: 20px; padding-left: 10px">
                    <div>
                        <span class="cp-details-span">
                            <i class="fa fa-image" style="font-size: 25px; color: #45bd62;"></i>
                            <b style="margin-left: 6px; font-weight: 600;">Photos/Videos</b>
                        </span>
                        <span class="cp-details-span">
                            <i class="fa fa-map-marker" style="font-size: 25px;color: #f02849;"></i>
                            <b style="margin-left: 6px; font-weight: 600;">Check in</b>
                        </span>
                        <span class="cp-details-span">
                            <i class="fa fa-user" style="font-size: 25px;color: #1877f2;"></i>
                            <b style="margin-left: 6px; font-weight: 600;">Tag Friends</b>
                        </span>
                    </div>
                </div>
            </div>  
        </div>
        </div>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8" style="background:#eee">
        <div class="mcg-div keep">
            <p class="sup-p">Mobile View
                <span class="view-type">
                    <i class="fa fa-tv tv-view"></i>
                    <i class="fa fa-mobile mobile-view" style=""></i>
                </span>
            </p>
            <div class="cp-desktop-view-mdiv">
                <div style="height: 320px;">
                <div class="cp-mobile-view-div">
                    <div>
                        <div id="cg-mobile-view-dv">
                        <h3 style="color: #fff; font-weight: 600;" id="pg-name-show">Group Name</h3>
                        <p style="font-weight: 700;" id="pg-category-show">Group Privacy . 1 Member</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 type-div">
                <div class="timeline-info">
                    <ul style="padding-left: 0px;">
                        <li>
                            <a class="m-info-name" title="" data-ripple="">About</a>

                            <a class="m-info-name" title="" data-ripple="">Posts</a>

                            <a class="m-info-name" title="" data-ripple="">Members</a>

                            <a class="m-info-name" title="" data-ripple="">
                                Events
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="width: 25%; float: left;">
                <button class="btn cp-mobile-view-lbutton">
                    <i class="fa fa-search" style="margin-right: 10px;"></i>
                </button>
                <button class="btn cp-mobile-view-lbutton ">
                    <i class="fa fa-ellipsis-h" style="margin-right: 10px;"></i>
                </button>
            </div>
        </div>
        <div class="cp-details-mdiv">
            <div id="cp-details-m-mdiv">
                <h4 class="cp-details-h4">About</h4>
                    <p id="mAbout">
                        <span style="margin-right: 6px;">
                            <i class="fa fa-users"></i>
                        </span>General Group
                    </p>
                </div>
            <div>
        </div>
    </div>
    </div>
</div>
</div>
<div class="col-lg-2"></div>
</div>
    </div></div>