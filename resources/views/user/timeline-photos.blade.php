@section('title', ''.$user->name. ' (Photos) - Chatbook')
@include('/user/includes/header')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
{{-- {{dd($image_explode)}} --}}
<div class="theme-layout">

	<div class="responsive-header">
		<div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">
				<a href="newsfeed.html" title=""><img src="/assets/images/logo2.png" alt=""></a>
			</span>
			<span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
		</div>
		<div class="mh-head second">
			<form class="mh-form">
				<input placeholder="search" />
				<a href="#/" class="fa fa-search"></a>
			</form>
		</div>
		@include('/user/includes/navbar')
	</div><!-- responsive header -->
	@include('/user/includes/timeline')

    @php
    foreach ($users as $user) {
    }
        $j = $user->secrete_id;
        $userImage = scandir("users/");
        $coverImage = scandir("cover/");
                    // dd($userImage);
        $found = false;
    @endphp

	<section>
		<div class="gap gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">
                            <div class="col-lg-2"></div>
							<div class="col-lg-8">
								{{-- <div class="central-meta">
                                    <div  class="col-lg-12 col-sm-9">
                                        <h2 class="recent-photos col-lg-9 col-sm-6">Photos</h2>
                                        <div>
                                            <h2 class="add-photos"><a href="">Add Photos/Video</a></h2>
                                            <p class="add-p"><span><i class="fa fa-ellipsis-h"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-9">
                                        <div class="timeline-info filter" style="margin-bottom: 30px">
                                            <ul class="filter-nav">
                                                <li class="selected"><a class="info-name" href="#photos-of-you" title="" data-filter=".pou">Photos of You</a></li>
                                                <li><a class="info-name" href="#all-photos" data-filter=".ap" title="">Your Photos</a></li>    
                                                <li><a class="info-name" href="/about" title="" data-ripple="">Album</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="filter-content">
                                        <div class="pou">
                                            <p>Ayomikun</p>
                                        </div>
                                    </div>
                                    <div class="filter-content">
                                        <div class="ap">
                                            <p>Ayomikun</p>
                                        </div>
                                    </div>
									<ul class="photos">
                                        @if (count($posts) == null)
                                            <div class="widget">
                                                <h2 class="text-center"><b>No Photo Available!</b></h2>
                                                <p class="text-center">You can post photos, videos, gifs to clear this message!</p>
                                            </div>
                                        @else
                                            @foreach ($image_explode as $item)
                                                <li>
                                                    <a class="strip" href="/posts/{{$item}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                        <img class="my-photos" src="{{asset("/posts")}}/{{$item}}" alt=""></a>
                                                </li>
                                            @endforeach
                                        @endif

                                        <li>
                                            <a class="strip" href="/assets/images/resources/photo-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img class="my-photos" src="/assets/images/resources/photo2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="strip" href="/assets/images/resources/photo-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img class="my-photos" src="/assets/images/resources/photo2.jpg" alt=""></a>
                                        </li>
									</ul>
                                    <div class="filter-content"> --}}
                                        {{-- @foreach ($users as $user)
                                        @if ($user->user_image == null || $user->user_cover_image == null)
    
                                            @elseif($user->user_image == null && $user->user_cover_image != null)
                                                <div class="central-meta ap">
                                                    <h2 class="recent-photos">Profile Photos</h2>
                                                    <ul class="photos">
                                                    @foreach ($user_image as $item)
                                                        <li>
                                                            <a class="strip" href="/cover/{{ substr($item->user_cover_image, 0, 10) }}.{{$user->secrete_id}}.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                                <img class="my-photos" src="{{asset("/cover")}}/{{$item['user_cover_image']}}" alt=""></a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @elseif($user->user_cover_image == null && $user->user_image != null)
                                                <div class="central-meta ap">
                                                    <h2 class="recent-photos">Profile Photos</h2>
                                                    <ul class="photos">
                                                        @foreach ($user_image as $item)
                                                            <li>
                                                                <a class="strip" href="/users/{{ substr($item['user_image'], 0, 10) }}.{{$user->secrete_id}}.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                                    <img class="my-photos" src="{{asset("/users")}}/{{ substr($item['user_image'], 0, 10) }}.{{$user->secrete_id}}.jpg" alt=""></a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                        @elseif($user->user_cover_image != null && $user->user_image != null) --}}
                                        {{-- {{dd($user->secrete_id)}} --}}
                                            {{-- <div class="central-meta ap">.
                                                <h2 class="recent-photos">Profile Photos</h2>
                                                <ul class="photos">
                                                    @foreach ($user_image as $item)
                                                        @foreach ($userImage as $value)
                                                            @if (strpos($value, $j) !== false)
                                                                <li class="user-li col-lg-2 col-md-2 col-sm-6">
                                                                    <a class="strip" href="/users/{{ $value}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                                        <img class="my-photos" src="{{asset("/users")}}/{{$value}}" alt=""></a>
                                                                    </a>
                                                                </li>
    
                                                                @else
    
                                                            @endif
                                                        @endforeach
                                                        @foreach ($coverImage as $value)
                                                            @if (strpos($value, $j) !== false)
                                                                <li class="user-li col-lg-2 col-md-2 col-sm-6">
                                                                    <a class="strip" href="/cover/{{ $value}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                                        <img class="my-photos" src="{{asset("/cover")}}/{{$value}}" alt=""></a>
                                                                    </a>
                                                                </li>
    
                                                                @else
    
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </ul>
                                                <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                            </div><!-- photos --> --}}
                                        {{-- @endif
                                    @endforeach
                                    </div>
                                   
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                </div><!-- photos --> --}}
                                
                                <div class="central-meta">
                                    <div  class="col-lg-12 col-sm-9">
                                        <h2 class="recent-photos col-lg-7 col-sm-6">Story Achive</h2>
                                        <div>
                                            {{-- <p class="add-p"><span><i class="fa fa-lock"></i></span></p> --}}
                                            <h2 class="story-h2"><i class="fa fa-lock story-i"></i>Only you can see your story achieve</h2>
                                            <p class="add-p"><span><i class="fa fa-wrench"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-9">
                                        <div class="timeline-info filter" style="margin-bottom: 30px">
                                            <ul class="filter-nav">
                                                <li><a class="info-name active" href="#storyAchive" title="" data-ripple="" data-filter="ysa">Your Story Achive</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- {{ dd($post_story) }} --}}
                                    @if (count($post_story) != null)
                                        <ul class="photos">
                                            @foreach ($post_story as $story)
                                                <li class="col-lg-12">
                                                    <a class="strip" href="/posts/pexels-brett-sayles-1322185.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                        <img class="sa-photos" src="{{ asset("/posts")}}/{{ $story->image}}" alt="$story->image_name">
                                                    </a>
                                                        <div class="vertical-align">
                                                            <div class="verical-container">
                                                                <h2 class="color-white">{{ $story->created_at->diffForhumans()}}</h2>
                                                            </div>
                                                        </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        @else
                                        <div class="col-lg-12 col-sm-9" id="nasa">No available Story Achieve</div>
                                    @endif
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                </div><!-- photos -->

                                <div class="central-meta">
                                    <div class="col-lg-12 col-sm-9">
                                        <h2 class="recent-photos col-lg-9 col-sm-6">Check Ins</h2>
                                        <div class="add-elip">
                                            <p class="add-p"><span><i class="fa fa-ellipsis-h"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-9">
                                        <div class="timeline-info" style="margin-bottom: 30px">
                                            <ul>
                                                <li>
                                                    <a class="info-name " href="#recent" title="" data-ripple="">Recent</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
									<div class="col-lg-12">
                                        @if (count([$check_ins]) != null)
                                            @foreach ($check_ins as $check)
                                                <div class="col-lg-6" id="check-div">
                                                    <div class="col-lg-3" style="padding-right: 0px !important"><img src="http://127.0.0.1:8000/posts/pexels-brett-sayles-1322185.jpg" alt=""></div>
                                                    <div class="col-lg-9">
                                                        <h3 class="check-h3">{{ $check->location_name }}</h3>
                                                        <p class="check-p">{{ $check->location_country }}</p>
                                                        <p class="check-p">Visited on {{ $check->created_at->diffForhumans() }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                            @else
                                            <div class="col-lg-12 col-sm-9" id="nasa">No available Check Ins</div>
                                        @endif
                                        
                                    </div>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                </div>  

                                 {{-- <div class="central-meta">
                                    <div  class="col-lg-12 col-sm-9">
                                        <h2 class="recent-photos col-lg-9 col-sm-6">Sports</h2>
                                        <div class="add-elip">
                                            <p class="add-p"><span><i class="fa fa-ellipsis-h"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-9">
                                        <div class="timeline-info" style="margin-bottom: 30px">
                                            <ul>
                                                <li>
                                                    <a class="info-name " href="#sport-teams" title="" data-filter=".spt" data-ripple="">Sport Teams</a>
                                                    <a class="info-name " href="#athletes" title="" data-filter=".ath" data-ripple="">Athletes</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                </div><!-- photos --> --}}
                                 <div class="central-meta">
                                    <div  class="col-lg-12 col-sm-9">
                                        <h2 class="recent-photos col-lg-9 col-sm-6">Music</h2>
                                        <div class="add-elip">
                                            <p class="add-p"><span><i class="fa fa-ellipsis-h"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-9">
                                        <div class="timeline-info" style="margin-bottom: 30px">
                                            <ul>
                                                <li>
                                                    <a class="info-name " href="#artists" title="" data-filter=".art" data-ripple="">Artists</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
									<div class="col-lg-12">
                                        <div class="col-lg-6" id="check-div">
                                            <div class="col-lg-3" style="padding-right: 0px !important"><img src="http://127.0.0.1:8000/posts/pexels-brett-sayles-1322185.jpg" alt=""></div>
                                            <div class="col-lg-9">
                                                <h3 class="check-h3">GGB Dance Crew</h3>
                                                <p class="check-p">Musician/Band</p>
                                            </div>
                                        </div>
                                    </div>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                </div><!-- photos -->
                                {{-- <div class="central-meta">
                                    <div  class="col-lg-12 col-sm-9">
                                        <h2 class="recent-photos col-lg-9 col-sm-6">Movies</h2>
                                        <div>
                                            <h2 class="add-photos"><a href="">Add Photos/Video</a></h2>
                                            <p class="add-p"><span><i class="fa fa-ellipsis-h"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-9">
                                        <div class="timeline-info" style="margin-bottom: 30px">
                                            <ul>
                                                <li>
                                                    <a class="info-name " href="/time-line" title="" data-ripple="">Photos of You</a>
                                                    <a class="info-name " href="/4722497077/timeline-images" title="" data-ripple="">Your Photos</a>
                                                    <a class="info-name " href="/about" title="" data-ripple="">Album</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
									<ul class="photos">
                                        @if (count($posts) == null)
                                            <div class="widget">
                                                <h2 class="text-center"><b>No Photo Available!</b></h2>
                                                <p class="text-center">You can post photos, videos, gifs to clear this message!</p>
                                            </div>
                                        @else
                                            @foreach ($image_explode as $item)
                                                <li>
                                                    <a class="strip" href="/posts/{{$item}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                        <img class="my-photos" src="{{asset("/posts")}}/{{$item}}" alt=""></a>
                                                </li>
                                            @endforeach
                                        @endif

                                        <li>
                                            <a class="strip" href="/assets/images/resources/photo-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img class="my-photos" src="/assets/images/resources/photo2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="strip" href="/assets/images/resources/photo-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img class="my-photos" src="/assets/images/resources/photo2.jpg" alt=""></a>
                                        </li>
									</ul>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                </div><!-- photos -->
                                <div class="central-meta">
                                    <div  class="col-lg-12 col-sm-9">
                                        <h2 class="recent-photos col-lg-9 col-sm-6">Tv Shows</h2>
                                        <div>
                                            <h2 class="add-photos"><a href="">Add Photos/Video</a></h2>
                                            <p class="add-p"><span><i class="fa fa-ellipsis-h"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-9">
                                        <div class="timeline-info" style="margin-bottom: 30px">
                                            <ul>
                                                <li>
                                                    <a class="info-name " href="/time-line" title="" data-ripple="">Photos of You</a>
                                                    <a class="info-name " href="/4722497077/timeline-images" title="" data-ripple="">Your Photos</a>
                                                    <a class="info-name " href="/about" title="" data-ripple="">Album</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
									<ul class="photos">
                                        @if (count($posts) == null)
                                            <div class="widget">
                                                <h2 class="text-center"><b>No Photo Available!</b></h2>
                                                <p class="text-center">You can post photos, videos, gifs to clear this message!</p>
                                            </div>
                                        @else
                                            @foreach ($image_explode as $item)
                                                <li>
                                                    <a class="strip" href="/posts/{{$item}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                        <img class="my-photos" src="{{asset("/posts")}}/{{$item}}" alt=""></a>
                                                </li>
                                            @endforeach
                                        @endif

                                        <li>
                                            <a class="strip" href="/assets/images/resources/photo-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img class="my-photos" src="/assets/images/resources/photo2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="strip" href="/assets/images/resources/photo-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img class="my-photos" src="/assets/images/resources/photo2.jpg" alt=""></a>
                                        </li>
									</ul>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                </div><!-- photos -->
                                <div class="central-meta">
                                    <div  class="col-lg-12 col-sm-9">
                                        <h2 class="recent-photos col-lg-9 col-sm-6">Books</h2>
                                        <div>
                                            <h2 class="add-photos"><a href="">Add Photos/Video</a></h2>
                                            <p class="add-p"><span><i class="fa fa-ellipsis-h"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-9">
                                        <div class="timeline-info" style="margin-bottom: 30px">
                                            <ul>
                                                <li>
                                                    <a class="info-name " href="/time-line" title="" data-ripple="">Photos of You</a>
                                                    <a class="info-name " href="/4722497077/timeline-images" title="" data-ripple="">Your Photos</a>
                                                    <a class="info-name " href="/about" title="" data-ripple="">Album</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
									<ul class="photos">
                                        @if (count($posts) == null)
                                            <div class="widget">
                                                <h2 class="text-center"><b>No Photo Available!</b></h2>
                                                <p class="text-center">You can post photos, videos, gifs to clear this message!</p>
                                            </div>
                                        @else
                                            @foreach ($image_explode as $item)
                                                <li>
                                                    <a class="strip" href="/posts/{{$item}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                        <img class="my-photos" src="{{asset("/posts")}}/{{$item}}" alt=""></a>
                                                </li>
                                            @endforeach
                                        @endif

                                        <li>
                                            <a class="strip" href="/assets/images/resources/photo-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img class="my-photos" src="/assets/images/resources/photo2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="strip" href="/assets/images/resources/photo-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                <img class="my-photos" src="/assets/images/resources/photo2.jpg" alt=""></a>
                                        </li>
									</ul>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                </div><!-- photos --> --}}
                                <div class="central-meta">
                                    <div  class="col-lg-12 col-sm-9">
                                        <h2 class="recent-photos col-lg-9 col-sm-6">Likes</h2>
                                        <div class="add-elip">
                                            <p class="add-p"><span><i class="fa fa-ellipsis-h"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-9">
                                        <div class="timeline-info" style="margin-bottom: 30px">
                                            <ul>
                                                <li>
                                                    <a class="info-name active" href="#all_likes" title="" data-ripple="">All Likes</a>
                                                    <a class="info-name " href="#movies" title="" data-ripple="">Movies</a>
                                                    <a class="info-name " href="#tvshows" title="" data-ripple="">Tv Shows</a>
                                                    <a class="info-name " href="#artists" title="" data-ripple="">Artists</a>
                                                    <a class="info-name " href="#books" title="" data-ripple="">Books</a>
                                                    <a class="info-name " href="#sport_team" title="" data-ripple="">Sport Teams</a>
                                                    <a class="info-name " href="#athletes" title="" data-ripple="">Athletes</a>
                                                    <div class="dropdown infodrop">
                                                        <button class="info-drop dropdown-toggle" type="button" data-toggle="dropdown">More Info</button>
                                                        <ul class="dropdown-menu drop-menu">
                                                            <div class="filter-content">
                                                                <div class="pou">
                                                                    <li class="drop-li"><a href="#storyAchive" class="drop-a">Story Acheive</a></li>
                                                                </div>
                                                            </div>
                                                          <li class="drop-li"><a href="/{{ $user->secrete_id }}/videos" class="drop-a">Videos</a></li>
                                                          <li class="drop-li"><a href="/{{ $user->secrete_id }}/sports" class="drop-a">Sports</a></li>
                                                          <li class="drop-li"><a href="/{{ $user->secrete_id }}/music" class="drop-a">Music</a></li>
                                                          <li class="drop-li"><a href="/{{ $user->secrete_id }}/likes" class="drop-a">Likes</a></li>
                                                          <li class="drop-li"><a href="/{{ $user->secrete_id }}/tv-shows" class="drop-a">Tv Shows</a></li>
                                                          <li class="drop-li"><a href="/{{ $user->secrete_id }}/events" class="drop-a">Events</a></li>
                                                          <li class="drop-li"><a href="/{{ $user->secrete_id }}/movies" class="drop-a">Movies</a></li>
                                                          <li class="drop-li"><a href="/{{ $user->secrete_id }}/groups" class="drop-a">Groups</a></li>
                                                          <li class="drop-li"><a href="/{{ $user->secrete_id }}/check-ins" class="drop-a">Check Ins</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
									<div class="col-lg-12" class="like-div">
                                        <div class="col-lg-3">
                                            <div class="col-lg-12">
                                                <img src="http://127.0.0.1:8000/posts/pexels-brett-sayles-1322185.jpg" alt="" class="like-img">
                                            </div>
                                            <div class="like-pad">
                                                <h3 class="like-h3">Shopify Store Developer</h3>
                                                <p>Product/Service</p>
                                            </div>
                                        </div>
                                    </div>
									<div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                </div><!-- photos -->
                                
                                <div class="col-lg-12">
                                    <div class="central-meta">
                                        <div class="frnds">
                                            <ul class="nav nav-tabs">
                                                 <li class="nav-item active"><a class="active show" href="#frends" aria-expanded="true" data-toggle="tab">My Friends</a> <span>{{ count($friend) }}</span></li>
                                                 <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Friend Requests</a><span>{{ count($request) }}</span></li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                              <div class="tab-pane fade active show in" id="frends">
                                                <ul class="nearby-contct">
                                                    @if (count($friend) == null)
                                                        <h3 style="font-weight: 400;">You have no friend yet!</h3>
                                                        @else
                                                            @foreach ($friend as $frd)
                                                            <li>
                                                                <div class="nearly-pepls">
                                                                    <figure>
                                                                        <a href="/profile/{{  $frd->secrete_id }}" title="">
                                                                            <img src="http://127.0.0.1:8000/posts/pexels-brett-sayles-1322185.jpg" alt=""></a>
                                                                    </figure>
                                                                    <div class="pepl-info">
                                                                        <h4><a href="/profile/{{  $frd->secrete_id }}" title="">{{ $frd->name }}</a></h4><br>
                                                                        @if ($frd->occupation != null)
                                                                            {{ $frd->occupation }}
                                                                            @else
                                                                            Self Employed
                                                                        @endif
                                                                        <div class="after-add">
                                                                            <div class="replace_{{ $frd->id }}" id="remove_rep">
                                                                                <button value="{{ $frd->sender_id }}" type="submit" data-id="{{ $frd->id }}" id="fq-cancel" class="keep-{{ $frd->id }} add-butn">Unfriend</button>
                                                                                <input type="text" hidden value="{{ $frd->sender_id }}" class="fq-input_{{ $frd->sender_id }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>  
                                                        @endforeach
                                                    @endif
                                                </ul>
                                                <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                              </div>
                                              <div class="tab-pane fade" id="frends-req">
                                                <ul class="nearby-contct">
                                                    @if ($request != null)
                                                        @foreach ($request as $req)
                                                            <li>
                                                                <div class="nearly-pepls">
                                                                    <figure class="">
                                                                        <a href="/profile/{{  $req->secrete_id }}" title="{{ $req->name }}"><img src="http://127.0.0.1:8000/posts/pexels-brett-sayles-1322185.jpg" alt=""></a>
                                                                    </figure>
                                                                    <div class="pepl-info">
                                                                        <div class="">
                                                                            <h4><a href="/profile/{{  $req->secrete_id }}" title="{{ $req->name }}">{{ $req->name }}</a></h4>
                                                                            @if ($req->occupation == null)
                                                                            <span>Self Employed</span>
                                                                            @else
                                                                            <span>{{ $req->occupation }}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="after-add">
                                                                            <div class="replace_{{ $req->id }}" id="remove_rep">
                                                                                <button title="" value="{{ $req->sender_id }}" data-id="{{ $req->id }}" id="fq-cancel" class="keep-{{ $req->id }} add-butn more-action">delete Request</button>
                                                                                <button value="{{ $req->sender_id }}" type="submit" data-id="{{ $req->id }}" id="fq-confirm" class="keep-{{ $req->id }} add-butn">Confirm Request</button>
                                                                                <input type="text" hidden value="{{ $req->sender_id }}" class="fq-input_{{ $req->sender_id }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                </ul>	
                                                  <button class="btn-view btn-load-more"></button>
                                              </div>
                                            </div>
                                        </div>
                                    </div>	
                                </div>
							</div><!-- centerl meta -->
                            <div class="col-lg-1"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <script src="/assets/js/main.min.js"></script>
    <script src="/assets/js/my.js"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
         $(document).on("click", "#fq-cancel", function(){
            $("#fq-cancel").attr("disabled", true);
            var id = $(this).val();
            var add_id = $(".fq-input_"+id).val();
            var req_id = $(this).attr("data-id");
            console.log(add_id);

            $.ajax({
                url:"/profile/cancel-request/"+req_id,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
                method:"POST",
                success:function(data){
                    $(".keep-"+req_id).addClass("keep");
                    $(".friends-div").addClass("keep");
                    var fq = '<button data-ripple="" type="submit" class="addfq add-butn" data-id="'+add_id+'" value="'+req_id+'" style="top: 0px !important">Add Friend</button>';
                    $(".replace_"+req_id).append(fq);
                }
            });
        }); 
        $(document).on("click", "#fq-confirm", function(){
            $("#fq-confirm").attr("disabled", true);
            var id = $(this).val();
            var add_id = $(".fq-input_"+id).val();
            var req_id = $(this).attr("data-id");
            var id = $("#fq-confirm").val();
            console.log(add_id);
            $.ajax({
                url:"/profile/friend-requests/confirm/"+req_id,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
                method:"POST",
                success:function(){
                    $(".keep-"+req_id).addClass("keep");
                    $(".friends-div").addClass("keep");
                    var fq = '<button data-id="'+req_id+'" id="fq-cancel" class="keep-'+req_id+' add-butn more-action" value="'+add_id+'">Unfriend</button>';
                    $(".replace_"+req_id).append(fq);
                }
            });
        }); 
        
        $(document).on("click",".addfq",function(){
            $(".addfq").attr("disabled", true);
            var add_id = $(this).data("id");
            var req_id = $(this).val();
            console.log(add_id);
            console.log(req_id);
            $.ajax({
                url:"/profile/friend-request/"+add_id,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
                method:"POST",
                // data:{
                //     "receiver_id":
                // }
                // beforeSend : function()
                // {
                //     $("#preview").fadeOut();
                //     $("#err").fadeOut();
                // },
                success:function(res){
                    // setInterval(function(){
                    //     fetch_user(res);
                    //     }, 10000
                    // );
                    $(".addfq").addClass("keep");
                    $(".more-action").removeClass("fq-cancel");
                    var removebtn = '<div class="replace_'+res+'">';
                        removebtn += '<button data-id="'+res+'" id="fq-cancel" class="keep-'+res+' add-butn more-action" class="add-butn fq-cancel more-action" value="'+add_id+'">delete Request</button>';
                        removebtn += '<input type="text" hidden value="'+add_id+'" class="fq-input_'+add_id+'">';
                        removebtn += '</div>';

                    $(".replace_"+req_id).append(removebtn);
                    $("#remove_rep").removeClass("replace_"+req_id);
                }
            });
        });
    }); 
    </script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script>
        var initValue = $('.filter-nav').find('.selected a').attr('data-filter');

        $container = $('.filter-content');
            $('.filter-nav').on('click', 'a', function() {
                var filterValue = $(this).attr('data-filter');
                $container.isotope({ filter: filterValue });
                var $buttonGroup = $(this).parent().parent();
                $buttonGroup.find('.selected').removeClass('selected');
                $(this).parent().addClass('selected');
            });
    </script>