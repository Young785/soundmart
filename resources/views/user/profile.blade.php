@section('title', 'Profile - Chatbook')
@include('/user/includes/header')

<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="postoverlay"></div>
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
        @if (session()->has("msg"))
            <script>alert("The image width should be in the range of 1000px and the height of 315px! if not crop the image. Thanks")</script>
        @endif
        @include('/user/includes/navbar')
        @include('/user/includes/timeline')
        @php
            $user_sec = Auth::user()->secrete_id;
        @endphp
         @if(session()->has("mssg"))
            <div class=" col-lg-2 col-md-2 col-sm-2"></div>
                <div role="alert" class="alert alert-success alert-dismissible col-lg-8 col-md-8 col-sm-8" id="remove">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button><span class="icon mdi mdi-info-outline"></span>
                    <strong>Success!</strong> Friend Request sent Successfully!
                </div>
            <div class=" col-lg-2 col-md-2 col-sm-2"></div>
        @endif    
        @if(session()->has("delMsg"))
        <div class=" col-lg-2 col-md-2 col-sm-2"></div>
            <div role="alert" class="alert alert-danger alert-dismissible col-lg-8 col-md-8 col-sm-8" id="remove">
                <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                    <span aria-hidden="true">&times;</span>
                </button><span class="icon mdi mdi-info-outline"></span>
                <strong>Success!</strong> You Cancelled the friend request Successfully!
            </div>
        <div class=" col-lg-2 col-md-2 col-sm-2"></div>
    @endif    
        @if ($user_sec == $user->secrete_id)
           
        <section class="sec">
            <div class="gap gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row merged20" id="page-contents">
                                <div class="col-lg-4">
                                    <aside class="sidebar static">
                                        @php
                                            $id = Auth::user('id');
                                            $posts = App\Post::where(['user_id'=> $id->id])->whereNotNull("type")->get();;
                                            // dd($posts)
                                        @endphp
                                          <div class="widget">
                                            <h4 class="widget-title">Your Info</h4>
                                            @if ($user['place'] == null || $user['education'] == null || $user['about'] == null || $user['occupation'] == null)
                                                <ul class="activitiez">
                                                    <li>
                                                        <div class="activity-meta">
                                                            <span> <b>About Me: </b>  <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">Add something about you...</a></span>
                                                        </div>
                                                        <div class="activity-meta">
                                                            <span><b>Occupation: </b> <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">Add your Occupation...</a></span>
                                                        </div>
                                                        <div class="activity-meta">
                                                            <span><b>Education: </b> <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">Add your school of Education...</a></span>
                                                        </div>
                                                        <div class="activity-meta">
                                                            <span><b>Place: </b> <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">Add your Location...</a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                @else
                                                <ul class="activitiez">
                                                    <li>
                                                        <div class="activity-meta">
                                                            <span> <b>About Me: </b>  <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">{{ $user['about'] }}</a></span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="activity-meta">
                                                            <span><b>Occupation: </b> <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">{{ $user['occupation'] }}</a></span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="activity-meta">
                                                            <span><b>Education: </b> <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">{{ $user['education'] }}</a></span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="activity-meta">
                                                            <span><b>Place: </b> <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">{{ $user['place'] }}</a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            @endif
                                        </div>
                                        @if ($posts == null)

                                        @else
                                          @include('/user/includes/recent-photos')
                                        @endif

                                        <div class="widget">
                                            <h4 class="widget-title">Shortcuts</h4>
                                            <ul class="naves">
                                                <li>
                                                    <i class="ti-clipboard"></i>
                                                    <a href="newsfeed.html" title="">News feed</a>
                                                </li>
                                                <li>
                                                    <i class="ti-mouse-alt"></i>
                                                    <a href="inbox.html" title="">Inbox</a>
                                                </li>
                                                <li>
                                                    <i class="ti-files"></i>
                                                    <a href="fav-page.html" title="">My pages</a>
                                                </li>
                                                <li>
                                                    <i class="ti-user"></i>
                                                    <a href="timeline-friends.html" title="">friends</a>
                                                </li>
                                                <li>
                                                    <i class="ti-image"></i>
                                                    <a href="timeline-photos.html" title="">/assets/images</a>
                                                </li>
                                                <li>
                                                    <i class="ti-video-camera"></i>
                                                    <a href="timeline-videos.html" title="">videos</a>
                                                </li>
                                                <li>
                                                    <i class="ti-comments-smiley"></i>
                                                    <a href="messages.html" title="">Messages</a>
                                                </li>
                                                <li>
                                                    <i class="ti-bell"></i>
                                                    <a href="notifications.html" title="">Notifications</a>
                                                </li>
                                                <li>
                                                    <i class="ti-share"></i>
                                                    <a href="people-nearby.html" title="">People Nearby</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-bar-chart-o"></i>
                                                    <a href="insights.html" title="">insights</a>
                                                </li>
                                                <li>
                                                    <i class="ti-power-off"></i>
                                                    <a href="landing.html" title="">Logout</a>
                                                </li>
                                            </ul>
                                        </div><!-- Shortcuts -->
                                        <div class="widget">
                                            <h4 class="widget-title">Recent Activity</h4>
                                            <ul class="activitiez">
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>10 hours Ago</i>
                                                        <span><a href="#" title="">Commented on Video posted </a></span>
                                                        <h6>by <a href="newsfeed.html">black demon.</a></h6>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>30 Days Ago</i>
                                                        <span><a href="newsfeed.html" title="">Posted your status. “Hello guys, how are you?”</a></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="activity-meta">
                                                        <i>2 Years Ago</i>
                                                        <span><a href="#" title="">Share a video on her timeline.</a></span>
                                                        <h6>"<a href="newsfeed.html">you are so funny mr.been.</a>"</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- recent activites -->
                                        <div class="widget stick-widget">
                                            <h4 class="widget-title">Who's follownig</h4>
                                            <ul class="followers">
                                                <li>
                                                    <figure><img src="/assets/images/resources/friend-avatar2.jpg" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Kelly Bill</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="/assets/images/resources/friend-avatar4.jpg" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Issabel</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="/assets/images/resources/friend-avatar6.jpg" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Andrew</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="/assets/images/resources/friend-avatar8.jpg" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Sophia</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="/assets/images/resources/friend-avatar3.jpg" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Allen</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- who's following -->
                                    </aside>
                                </div><!-- sidebar -->
                                <div class="col-lg-6">
                                    <div class="central-meta new-pst">
                                        <div class="new-postbox">
                                            @if ($user->user_image == null)
                                                <figure>
                                                    <a href="/profile/{{ $user->secrete_id }}"><img src="/assets/images/default.png" alt="{{ $user->name }}"></a>
                                                </figure>
                                            @else
                                                <figure>
                                                    <a href="/profile/{{ $user->secrete_id }}"><img src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="img-tag" alt="{{ $user->name }}"></a>
                                                </figure>
                                            @endif

                                            <div class="newpst-input">
                                                <form method="POST" action="/newsfeed" enctype="multipart/form-data">
                                                    @csrf
                                                    <textarea rows="2" name="image_name" placeholder="What's on your mind?"></textarea>
                                                    <div class="attachments">
                                                        <ul>
                                                            <li>
                                                                <i class="fa fa-image"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file" name="image[]" multiple title="Photo">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-camera"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <button type="submit">Post</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- add post new box -->
                                    @if (count($posts) != null)
                                    <div class="loadMore">
                                        @foreach ($posts as $item)
                                        {{-- {{ dd($user->user_image) }} --}}
                                                    <div class="central-meta item">
                                                        <div class="user-post">
                                                            <div class="friend-info">
                                                                @if ($user->user_image == null)
                                                                    <figure>
                                                                        <img src="/assets/images/default.png" alt="{{ $item->name }}" title="{{ $item->name }}">
                                                                    </figure>
                                                                    @else
                                                                    <figure>
                                                                        <img src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="img-tag" alt="{{ $item->name }}" title="{{ $item->name }}">
                                                                    </figure>
                                                                @endif
                                                                <div class="friend-name">
                                                                    <ins><a href="time-line.html" title="">{{ $item->name }}</a></ins>
                                                                    <span>published: {{ $item->created_at->diffForHumans() }}</span>
                                                                </div>
                                                                <div class="description">
                                                                    <p>
                                                                        {{ $item->image_name }}
                                                                    </p>
                                                                </div>
                                                                <div class="post-meta" >
                                                                    @php
                                                                        $image_explode = explode("/", $item->image);
                                                                        $count = count($image_explode);
                                                                    @endphp
                                                                        @foreach ($image_explode as $value)
                                                                            @if ($count == 1)
                                                                                <a href="/profile/{{ $user->secrete_id }}"> <img src="{{ asset("posts") }}/{{ $value }}"  alt=""></a>
                                                                            @elseif($count == 2)
                                                                                <a href="/profile/{{ $user->secrete_id }}"> <img src="{{ asset("posts") }}/{{ $value }}" class="two-post"  alt=""></a>
                                                                            @endif

                                                                        @endforeach
                                                                        @if ($count == 3)
                                                                            <img src="{{ asset("posts") }}/{{ $image_explode[0] }}" class="one-three-post"  alt="">
                                                                            <img src="{{ asset("posts") }}/{{ $image_explode[1] }}" class="three-post"  alt="">
                                                                            <img src="{{ asset("posts") }}/{{ $image_explode[2] }}" class="three-post"  alt="">
                                                                        @endif
                                                                        @if ($count == 4)
                                                                            <img src="{{ asset("posts") }}/{{ $image_explode[0] }}" class="one-three-post"  alt="">
                                                                            <img src="{{ asset("posts") }}/{{ $image_explode[1] }}" class="four-post"  alt="">
                                                                            <img src="{{ asset("posts") }}/{{ $image_explode[2] }}" class="four-post"  alt="">
                                                                            <img src="{{ asset("posts") }}/{{ $image_explode[3] }}" class="four-post"  alt="">
                                                                        @endif

                                                                        @if ($count == 5 || $count == 6)
                                                                            {{-- {{ $count }} --}}
                                                                                <img src="{{ asset("posts") }}/{{ $image_explode[0] }}" class="one-five-post"  alt="">
                                                                                <img src="{{ asset("posts") }}/{{ $image_explode[1] }}" class="one-five-post"  alt="">
                                                                                <img src="{{ asset("posts") }}/{{ $image_explode[2] }}" class="five-post"  alt="">
                                                                                <img src="{{ asset("posts") }}/{{ $image_explode[3] }}" class="five-post"  alt="">
                                                                                <img src="{{ asset("posts") }}/{{ $image_explode[4] }}" class="five-post"  alt="">
                                                                        @endif
                                                                    <div class="we-video-info">
                                                                        <ul>
                                                                            <li>
                                                                                <span class="comment" data-toggle="tooltip" title="Comments">
                                                                                    <i class="fa fa-comments-o"></i>
                                                                                    <ins>52</ins>
                                                                                </span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="like" data-toggle="tooltip" title="like">
                                                                                    <i class="ti-heart"></i>
                                                                                    <ins>2.2k</ins>
                                                                                </span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                                    <i class="ti-heart-broken"></i>
                                                                                    <ins>200</ins>
                                                                                </span>
                                                                            </li>
                                                                            <li class="social-media">
                                                                                <div class="menu">
                                                                                <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                                <div class="rotater">
                                                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                                                </div>
                                                                                <div class="rotater">
                                                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                                                </div>
                                                                                <div class="rotater">
                                                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                                                </div>
                                                                                <div class="rotater">
                                                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                                                </div>
                                                                                <div class="rotater">
                                                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                                                </div>
                                                                                <div class="rotater">
                                                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                                    <div class="rotater">
                                                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="rotater">
                                                                                    <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                                    </div>
                                                                                </div>

                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="coment-area">
                                                                 <ul class="we-comet">
                                                                    <li>
                                                                        <a href="#" title="" class="showmore underline">more comments</a>
                                                                    </li>
                                                                    <li class="post-comment">
                                                                        @if ($user->user_image == null)
                                                                            <div class="comet-avatar">
                                                                                <a href="/profile/{{ $user->secrete_id }}">
                                                                                    <img class="img-a" src="/assets/images/resources/admin2.jpg" alt="{{ $user->name }}">
                                                                                </a>
                                                                            </div>
                                                                            @else
                                                                            <div class="comet-avatar">
                                                                                <a href="/profile/{{ $user->secrete_id }}">
                                                                                <img class="img-a" src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" alt="{{ $user->name }}">
                                                                                </a>
                                                                            </div>
                                                                        @endif
                                                                        {{-- <div class="comet-avatar">

                                                                            <a class="img-a" href="/profile/{{ $user->secrete_id }}">
                                                                                <img class="img-a" src="/assets/images/resources/admin2.jpg" alt="{{ $user->name }}"> --}}
                                                                            {{-- </a> --}}

                                                                        {{-- </div> --}}
                                                                        <div class="post-comt-box">
                                                                            <form method="post">
                                                                                  <p class="lead emoji-picker-container">
                                                                                    <textarea placeholder="Write a comment..." data-emojiable="true" id="emojiTextarea"></textarea>
                                                                                </p>
                                                                                <div class="smiles-bunch">
                                                                                    <i class="em em---1"></i>
                                                                                    <i class="em em-smiley"></i>
                                                                                    <i class="em em-anguished"></i>
                                                                                    <i class="em em-laughing"></i>
                                                                                    <i class="em em-angry"></i>
                                                                                    <i class="em em-astonished"></i>
                                                                                    <i class="em em-blush"></i>
                                                                                    <i class="em em-disappointed"></i>
                                                                                    <i class="em em-worried"></i>
                                                                                    <i class="em em-kissing_heart"></i>
                                                                                    <i class="em em-rage"></i>
                                                                                    <i class="em em-stuck_out_tongue"></i>
                                                                                </div>
                                                                                <button type="submit"></button>
                                                                            </form>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <script>
                                                    $(document).ready(function(){
                                                        $("#emojiTextarea").emojioneArea();
                                                    })
                                                </script>
                                        {{-- <div class="central-meta item">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img src="/assets/images/resources/friend-avatar10.jpg" alt="">
                                                    </figure>
                                                    <div class="friend-name">
                                                        <ins><a href="time-line.html" title="">{{ $user['name'] }}</a></ins>
                                                        <span>published: june,2 2018 19:PM</span>
                                                    </div>
                                                    <div class="description">

                                                            <p>
                                                                World's most beautiful car in Curabitur <a href="#" title="">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
                                                            </p>
                                                        </div>
                                                    <div class="post-meta">
                                                        <div class="linked-image align-left">
                                                            <a href="#" title=""><img src="/assets/images/resources/page1.jpg" alt=""></a>
                                                        </div>
                                                        <div class="detail">
                                                            <span>Love Maid - ChillGroves</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... </p>
                                                            <a href="#" title="">www.sample.com</a>
                                                        </div>
                                                        <div class="we-video-info">
                                                            <ul>

                                                                <li>
                                                                    <span class="views" data-toggle="tooltip" title="views">
                                                                        <i class="fa fa-eye"></i>
                                                                        <ins>1.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="comment" data-toggle="tooltip" title="Comments">
                                                                        <i class="fa fa-comments-o"></i>
                                                                        <ins>52</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="like" data-toggle="tooltip" title="like">
                                                                        <i class="ti-heart"></i>
                                                                        <ins>2.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                        <i class="ti-heart-broken"></i>
                                                                        <ins>200</ins>
                                                                    </span>
                                                                </li>
                                                                <li class="social-media">
                                                                    <div class="menu">
                                                                      <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                      <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                                      </div>
                                                                      <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                                      </div>
                                                                      <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                                      </div>
                                                                      <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                                      </div>
                                                                      <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                                      </div>
                                                                      <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                        </div>
                                                                      </div>
                                                                        <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                        </div>
                                                                      </div>
                                                                      <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                        </div>
                                                                      </div>

                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                    @else
                                    <div class="widget">
                                        <h2 class="text-center"><b>Your Timeline!</b></h2>
                                        <p class="text-center">You can write, post photos, videos and more activities on your timeline!</p>
                                    </div>
                                @endif
                                </div><!-- centerl meta -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            @else
            <section class="sec">
                <div class="gap gray-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row merged20" id="page-contents">
                                    <div class="col-lg-4">
                                        <aside class="sidebar static">
                                            @php
                                                $posts = App\Post::where(['user_id'=> $user->id])->whereNotNull("type")->get();
                                            @endphp
                                            @if ($posts == null)

                                            @else
                                              @include('/user/includes/recent-photos')
                                            @endif
                                            <div class="widget">
                                                <h4 class="widget-title">Your Info</h4>
                                                @if ($user['place'] == null || $user['education'] == null || $user['about'] == null || $user['occupation'] == null)
                                                    <ul class="activitiez">
                                                        <li>
                                                            <div class="activity-meta">
                                                                <span> <b>About Me: </b>  <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">Add something about you...</a></span>
                                                            </div>
                                                            <div class="activity-meta">
                                                                <span><b>Occupation: </b> <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">Add your Occupation...</a></span>
                                                            </div>
                                                            <div class="activity-meta">
                                                                <span><b>Education: </b> <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">Add your school of Education...</a></span>
                                                            </div>
                                                            <div class="activity-meta">
                                                                <span><b>Place: </b> <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">Add your Location...</a></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    @else
                                                    <ul class="activitiez">
                                                        <li>
                                                            <div class="activity-meta">
                                                                <span> <b>About Me: </b>  <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">{{ $user['about'] }}</a></span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="activity-meta">
                                                                <span><b>Occupation: </b> <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">{{ $user['occupation'] }}</a></span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="activity-meta">
                                                                <span><b>Education: </b> <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">{{ $user['education'] }}</a></span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="activity-meta">
                                                                <span><b>Place: </b> <a href="/profile/{{ $user['secrete_id'] }}/edit-profile">{{ $user['place'] }}</a></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                @endif
                                            </div>
                                            @include('/user/includes/recent-photos')
                                            <div class="widget">
                                                <h4 class="widget-title">Shortcuts</h4>
                                                <ul class="naves">
                                                    <li>
                                                        <i class="ti-clipboard"></i>
                                                        <a href="newsfeed.html" title="">News feed</a>
                                                    </li>
                                                    <li>
                                                        <i class="ti-mouse-alt"></i>
                                                        <a href="inbox.html" title="">Inbox</a>
                                                    </li>
                                                    <li>
                                                        <i class="ti-files"></i>
                                                        <a href="fav-page.html" title="">My pages</a>
                                                    </li>
                                                    <li>
                                                        <i class="ti-user"></i>
                                                        <a href="timeline-friends.html" title="">friends</a>
                                                    </li>
                                                    <li>
                                                        <i class="ti-image"></i>
                                                        <a href="timeline-photos.html" title="">/assets/images</a>
                                                    </li>
                                                    <li>
                                                        <i class="ti-video-camera"></i>
                                                        <a href="timeline-videos.html" title="">videos</a>
                                                    </li>
                                                    <li>
                                                        <i class="ti-comments-smiley"></i>
                                                        <a href="messages.html" title="">Messages</a>
                                                    </li>
                                                    <li>
                                                        <i class="ti-bell"></i>
                                                        <a href="notifications.html" title="">Notifications</a>
                                                    </li>
                                                    <li>
                                                        <i class="ti-share"></i>
                                                        <a href="people-nearby.html" title="">People Nearby</a>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-bar-chart-o"></i>
                                                        <a href="insights.html" title="">insights</a>
                                                    </li>
                                                    <li>
                                                        <i class="ti-power-off"></i>
                                                        <a href="landing.html" title="">Logout</a>
                                                    </li>
                                                </ul>
                                            </div><!-- Shortcuts -->
                                            <div class="widget">
                                                <h4 class="widget-title">Recent Activity</h4>
                                                <ul class="activitiez">
                                                    <li>
                                                        <div class="activity-meta">
                                                            <i>10 hours Ago</i>
                                                            <span><a href="#" title="">Commented on Video posted </a></span>
                                                            <h6>by <a href="newsfeed.html">black demon.</a></h6>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="activity-meta">
                                                            <i>30 Days Ago</i>
                                                            <span><a href="newsfeed.html" title="">Posted your status. “Hello guys, how are you?”</a></span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="activity-meta">
                                                            <i>2 Years Ago</i>
                                                            <span><a href="#" title="">Share a video on her timeline.</a></span>
                                                            <h6>"<a href="newsfeed.html">you are so funny mr.been.</a>"</h6>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- recent activites -->
                                            <div class="widget stick-widget">
                                                <h4 class="widget-title">Who's follownig</h4>
                                                <ul class="followers">
                                                    <li>
                                                        <figure><img src="/assets/images/resources/friend-avatar2.jpg" alt=""></figure>
                                                        <div class="friend-meta">
                                                            <h4><a href="time-line.html" title="">Kelly Bill</a></h4>
                                                            <a href="#" title="" class="underline">Add Friend</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <figure><img src="/assets/images/resources/friend-avatar4.jpg" alt=""></figure>
                                                        <div class="friend-meta">
                                                            <h4><a href="time-line.html" title="">Issabel</a></h4>
                                                            <a href="#" title="" class="underline">Add Friend</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <figure><img src="/assets/images/resources/friend-avatar6.jpg" alt=""></figure>
                                                        <div class="friend-meta">
                                                            <h4><a href="time-line.html" title="">Andrew</a></h4>
                                                            <a href="#" title="" class="underline">Add Friend</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <figure><img src="/assets/images/resources/friend-avatar8.jpg" alt=""></figure>
                                                        <div class="friend-meta">
                                                            <h4><a href="time-line.html" title="">Sophia</a></h4>
                                                            <a href="#" title="" class="underline">Add Friend</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <figure><img src="/assets/images/resources/friend-avatar3.jpg" alt=""></figure>
                                                        <div class="friend-meta">
                                                            <h4><a href="time-line.html" title="">Allen</a></h4>
                                                            <a href="#" title="" class="underline">Add Friend</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- who's following -->
                                        </aside>
                                    </div><!-- sidebar -->
                                    <div class="col-lg-6">
                                        <div class="central-meta new-pst">
                                            <div class="new-postbox">
                                                @if ($user->user_image == null)
                                                    <figure>
                                                        <a href="/profile/{{ $user->secrete_id }}"><img src="/assets/images/resources/admin2.jpg" alt="{{ $user->name }}"></a>
                                                    </figure>
                                                @else
                                                    <figure>
                                                        <a href="/profile/{{ $user->secrete_id }}"><img src="{{ asset("users") }}/{{ $user->user_image }}" class="img-tag" alt="{{ $user->name }}"></a>
                                                    </figure>
                                                @endif

                                                <div class="newpst-input">
                                                    <form method="POST" action="/newsfeed" enctype="multipart/form-data">
                                                        @csrf
                                                        <textarea rows="2" name="image_name" placeholder="Write something on {{substr($user->name, 5) }}'s timeline"></textarea>
                                                        <div class="attachments">
                                                            <ul>
                                                                <li>
                                                                    <i class="fa fa-image"></i>
                                                                    <label class="fileContainer">
                                                                        <input type="file" name="image[]" multiple title="Photo">
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-camera"></i>
                                                                    <label class="fileContainer">
                                                                        <input type="file">
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <button type="submit">Post</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- add post new box -->
                                        <div class="loadMore">
                                            @foreach ($posts as $item)
                                            {{-- {{ dd($user->user_image) }} --}}
                                                        <div class="central-meta item">
                                                            <div class="user-post">
                                                                <div class="friend-info">
                                                                    @if ($user->user_image == null)
                                                                        <figure>
                                                                            <img src="/assets/images/default.png" alt="{{ $item->name }}" title="{{ $item->name }}">
                                                                        </figure>
                                                                        @else
                                                                        <figure>
                                                                            <img src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="img-tag" alt="{{ $item->name }}" title="{{ $item->name }}">
                                                                        </figure>
                                                                    @endif
                                                                    <div class="friend-name">
                                                                        <ins><a href="time-line.html" title="">{{ $item->name }}</a></ins>
                                                                        <span>published: {{ $item->created_at->diffForHumans() }}</span>
                                                                    </div>
                                                                    <div class="description">
                                                                        <p>
                                                                            {{ $item->image_name }}
                                                                        </p>
                                                                    </div>
                                                                    <div class="post-meta" >
                                                                        @php
                                                                            $image_explode = explode("/", $item->image);
                                                                            $count = count($image_explode);
                                                                        @endphp
                                                                            @foreach ($image_explode as $value)
                                                                                @if ($count == 1)
                                                                                    <a href="/profile/{{ $user->secrete_id }}"> <img src="{{ asset("posts") }}/{{ $value }}"  alt=""></a>
                                                                                @elseif($count == 2)
                                                                                    <a href="/profile/{{ $user->secrete_id }}"> <img src="{{ asset("posts") }}/{{ $value }}" class="two-post"  alt=""></a>
                                                                                @endif

                                                                            @endforeach
                                                                            @if ($count == 3)
                                                                                <img src="{{ asset("posts") }}/{{ $image_explode[0] }}" class="one-three-post"  alt="">
                                                                                <img src="{{ asset("posts") }}/{{ $image_explode[1] }}" class="three-post"  alt="">
                                                                                <img src="{{ asset("posts") }}/{{ $image_explode[2] }}" class="three-post"  alt="">
                                                                            @endif
                                                                            @if ($count == 4)
                                                                                <img src="{{ asset("posts") }}/{{ $image_explode[0] }}" class="one-three-post"  alt="">
                                                                                <img src="{{ asset("posts") }}/{{ $image_explode[1] }}" class="four-post"  alt="">
                                                                                <img src="{{ asset("posts") }}/{{ $image_explode[2] }}" class="four-post"  alt="">
                                                                                <img src="{{ asset("posts") }}/{{ $image_explode[3] }}" class="four-post"  alt="">
                                                                            @endif

                                                                            @if ($count == 5 || $count == 6)
                                                                                {{-- {{ $count }} --}}
                                                                                    <img src="{{ asset("posts") }}/{{ $image_explode[0] }}" class="one-five-post"  alt="">
                                                                                    <img src="{{ asset("posts") }}/{{ $image_explode[1] }}" class="one-five-post"  alt="">
                                                                                    <img src="{{ asset("posts") }}/{{ $image_explode[2] }}" class="five-post"  alt="">
                                                                                    <img src="{{ asset("posts") }}/{{ $image_explode[3] }}" class="five-post"  alt="">
                                                                                    <img src="{{ asset("posts") }}/{{ $image_explode[4] }}" class="five-post"  alt="">
                                                                            @endif
                                                                        <div class="we-video-info">
                                                                            <ul>
                                                                                <li>
                                                                                    <span class="comment" data-toggle="tooltip" title="Comments">
                                                                                        <i class="fa fa-comments-o"></i>
                                                                                        <ins>52</ins>
                                                                                    </span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="like" data-toggle="tooltip" title="like">
                                                                                        <i class="ti-heart"></i>
                                                                                        <ins>2.2k</ins>
                                                                                    </span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                                        <i class="ti-heart-broken"></i>
                                                                                        <ins>200</ins>
                                                                                    </span>
                                                                                </li>
                                                                                <li class="social-media">
                                                                                    <div class="menu">
                                                                                    <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                                    <div class="rotater">
                                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                                                    </div>
                                                                                    <div class="rotater">
                                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                                                    </div>
                                                                                    <div class="rotater">
                                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                                                    </div>
                                                                                    <div class="rotater">
                                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                                                    </div>
                                                                                    <div class="rotater">
                                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                                                    </div>
                                                                                    <div class="rotater">
                                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                        <div class="rotater">
                                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="rotater">
                                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                                        </div>
                                                                                    </div>

                                                                                    </div>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="coment-area">
                                                                     <ul class="we-comet">
                                                                        <li>
                                                                            <a href="#" title="" class="showmore underline">more comments</a>
                                                                        </li>
                                                                        <li class="post-comment">
                                                                            @if ($user->user_image == null)
                                                                                <div class="comet-avatar">
                                                                                    <a href="/profile/{{ $user->secrete_id }}">
                                                                                        <img class="img-a" src="/assets/images/resources/admin2.jpg" alt="{{ $user->name }}">
                                                                                    </a>
                                                                                </div>
                                                                                @else
                                                                                <div class="comet-avatar">
                                                                                    <a href="/profile/{{ $user->secrete_id }}">
                                                                                    <img class="img-a" src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" alt="{{ $user->name }}">
                                                                                    </a>
                                                                                </div>
                                                                            @endif
                                                                            {{-- <div class="comet-avatar">

                                                                                <a class="img-a" href="/profile/{{ $user->secrete_id }}">
                                                                                    <img class="img-a" src="/assets/images/resources/admin2.jpg" alt="{{ $user->name }}"> --}}
                                                                                {{-- </a> --}}

                                                                            {{-- </div> --}}
                                                                            <div class="post-comt-box">
                                                                                <form method="post">
                                                                                      <p class="lead emoji-picker-container">
                                                                                        <textarea placeholder="Write a comment..." data-emojiable="true" id="emojiTextarea"></textarea>
                                                                                    </p>
                                                                                    <div class="smiles-bunch">
                                                                                        <i class="em em---1"></i>
                                                                                        <i class="em em-smiley"></i>
                                                                                        <i class="em em-anguished"></i>
                                                                                        <i class="em em-laughing"></i>
                                                                                        <i class="em em-angry"></i>
                                                                                        <i class="em em-astonished"></i>
                                                                                        <i class="em em-blush"></i>
                                                                                        <i class="em em-disappointed"></i>
                                                                                        <i class="em em-worried"></i>
                                                                                        <i class="em em-kissing_heart"></i>
                                                                                        <i class="em em-rage"></i>
                                                                                        <i class="em em-stuck_out_tongue"></i>
                                                                                    </div>
                                                                                    <button type="submit"></button>
                                                                                </form>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    <script>
                                                        $(document).ready(function(){
                                                            $("#emojiTextarea").emojioneArea();
                                                        })
                                                    </script>
                                            {{-- <div class="central-meta item">
                                                <div class="user-post">
                                                    <div class="friend-info">
                                                        <figure>
                                                            <img src="/assets/images/resources/friend-avatar10.jpg" alt="">
                                                        </figure>
                                                        <div class="friend-name">
                                                            <ins><a href="time-line.html" title="">{{ $user['name'] }}</a></ins>
                                                            <span>published: june,2 2018 19:PM</span>
                                                        </div>
                                                        <div class="description">

                                                                <p>
                                                                    World's most beautiful car in Curabitur <a href="#" title="">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
                                                                </p>
                                                            </div>
                                                        <div class="post-meta">
                                                            <div class="linked-image align-left">
                                                                <a href="#" title=""><img src="/assets/images/resources/page1.jpg" alt=""></a>
                                                            </div>
                                                            <div class="detail">
                                                                <span>Love Maid - ChillGroves</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... </p>
                                                                <a href="#" title="">www.sample.com</a>
                                                            </div>
                                                            <div class="we-video-info">
                                                                <ul>

                                                                    <li>
                                                                        <span class="views" data-toggle="tooltip" title="views">
                                                                            <i class="fa fa-eye"></i>
                                                                            <ins>1.2k</ins>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="comment" data-toggle="tooltip" title="Comments">
                                                                            <i class="fa fa-comments-o"></i>
                                                                            <ins>52</ins>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="like" data-toggle="tooltip" title="like">
                                                                            <i class="ti-heart"></i>
                                                                            <ins>2.2k</ins>
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                            <i class="ti-heart-broken"></i>
                                                                            <ins>200</ins>
                                                                        </span>
                                                                    </li>
                                                                    <li class="social-media">
                                                                        <div class="menu">
                                                                          <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                          <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                                          </div>
                                                                          <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                                          </div>
                                                                          <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                                          </div>
                                                                          <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                                          </div>
                                                                          <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                                          </div>
                                                                          <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                            </div>
                                                                          </div>
                                                                            <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                            </div>
                                                                          </div>
                                                                          <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                            </div>
                                                                          </div>

                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div><!-- centerl meta -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif


    {{-- <div class="bottombar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="copyright">© ChatBook 2020 - {{ date("Y")}}. All rights reserved.</span>
                    <i><img src="/assets/images/credit-cards.png" alt=""></i>
                </div>
            </div>
        </div>
    </div> --}}
    </div></div>

    <script src="/assets/js/main.min.js"></script>
    <script src="/assets/js/my.js"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

