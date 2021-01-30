@include('/user/includes/header')
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
                    // dd($lin);
        $found = false;
    @endphp

	<section>
		<div class="gap gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">
							<div class="col-lg-3">
										<aside class="sidebar static left">
											@include('/user/includes/sidebar')
											@include('/user/includes/sidebar-titles')
										</aside>
                                    </div><!-- sidebar -->

							<div class="col-lg-9">
								<div class="central-meta">
                                    <h2 class="recent-photos">Recents Photos</h2>
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
                                @foreach ($users as $user)
                                    @if ($user->user_image == null || $user->user_cover_image == null)

                                        @elseif($user->user_image == null && $user->user_cover_image != null)
                                            <div class="central-meta">
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
                                            <div class="central-meta">
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
                                    @elseif($user->user_cover_image != null && $user->user_image != null)
                                    {{-- {{dd($user->secrete_id)}} --}}
                                        <div class="central-meta ">.
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
                                        </div><!-- photos -->
                                    @endif
                                @endforeach


							</div><!-- centerl meta -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <script src="/assets/js/main.min.js"></script>
    <script src="/assets/js/my.js"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
