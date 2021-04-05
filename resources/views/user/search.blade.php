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
		@include('/user/includes/navbar')

			<div class="fixed-sidebar left">
		<div class="menu-left">
			<ul class="left-menu">
				<li><a href="newsfeed.html" title="Newsfeed Page" data-toggle="tooltip" data-placement="right"><i class="ti-magnet"></i></a></li>
				<li><a href="fav-page.html" title="favourit page" data-toggle="tooltip" data-placement="right"><i class="fa fa-star-o"></i></a></li>
				<li><a href="insights.html" title="Account Stats" data-toggle="tooltip" data-placement="right"><i class="ti-stats-up"></i></a></li>
				<li><a href="inbox.html" title="inbox" data-toggle="tooltip" data-placement="right"><i class="ti-import"></i></a></li>
				<li><a href="messages.html" title="Messages" data-toggle="tooltip" data-placement="right"><i class="ti-comment-alt"></i></a></li>
				<li><a href="edit-account-setting.html" title="Setting" data-toggle="tooltip" data-placement="right"><i class="ti-panel"></i></a></li>
				<li><a href="faq.html" title="Faq's" data-toggle="tooltip" data-placement="right"><i class="ti-light-bulb"></i></a></li>
				<li><a href="timeline-friends.html" title="Friends" data-toggle="tooltip" data-placement="right"><i class="ti-themify-favicon"></i></a></li>
				<li><a href="widgets.html" title="Widgets" data-toggle="tooltip" data-placement="right"><i class="ti-eraser"></i></a></li>
				<li><a href="notifications.html" title="Notification" data-toggle="tooltip" data-placement="right"><i class="ti-bookmark-alt"></i></a></li>
			</ul>
		</div>
	</div><!-- left sidebar menu -->
	<section>
		<div class="gap2 gray-bg">
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
							<div class="col-lg-6">
								@if (session()->has("msg"))
								<div role="alert" class="alert alert-success alert-dismissible" id="remove">
									<button type="button" data-dismiss="alert" aria-label="Close" class="close">
										<span aria-hidden="true" class="mdi mdi-close"></span>
									</button><span class="icon mdi mdi-info-outline"></span>
									<strong>Success!</strong> You Successfully Updated your Profile!
								</div>
                                @endif
                                <style>
                                     .search-div{
                                         float: left;
                                     }
                                    .search-span{
                                        font-size: 12px;
                                        color: #8c8b8b;
                                        margin-left: 5px;
                                    }
                                    .search-p{
                                        color: #424242;
                                        margin-bottom: 0px !important;
                                        font-weight: 500;
                                    }
                                    .drop{
                                        float: left;
                                    }
                                    .search-i{
                                        padding: 7px;
                                    }
                                    .fa-span{
                                        font-size: 30px;
                                        color: #000;
                                        border-radius: 20px;
                                        background: #e1e0e4;
                                    }
                                    .sear-a:hover{
                                        text-decoration: underline;
                                    }
                                    .search-image{
                                        width: 50px;
                                        border-radius: 100%;
									}
									.central-li{
										height: 80px;
										border-bottom: 2px solid #d4d4d4;
										margin-bottom: 25px;
									}
									.central-div{
										margin-bottom: 25px;
									}
									.central-h3{
										font-size:20px;
										margin-bottom: 25px;
									}
									.central-but{
										width: 100%;
									}
								</style>
                                <div class="central-meta new-pst">
									<div class="central-div">
										<h3 class="central-h3">People</h3>
									</div>
									 @if (count($user) == null)
                                    <div class="central-meta new-pst text-center">
                                        <i class="fa fa-search" style="font-size: 40px"></i>
                                        <p>No friends, user, place, group and page Found</p>
                                    </div>
                                        @else
                                        @foreach ($user as $item)
                                            <div class="central-li">
                                                @if ($item->user_image == null)
                                                    <figure style="float: left" class="search-image">
                                                        <img src="/assets/images/default.png" class="img-tag search-image" alt="{{ $item->name }}" title="{{ $item->name }}">
                                                    </figure>
                                                @else
                                                    <figure style="float: left">
                                                        <img src="/users/{{ substr($item['user_image'], 0, 10) }}.{{$item->secrete_id}}.jpg"  class="img-tag search-image" alt="{{ $item->name }}" title="{{ $item->name }}">
                                                    </figure>
                                                @endif
                                                <div class="newpst-input">
                                                        <div class="search-div col-lg-9 col-md-9 col-sm-9">
                                                            <p class="search-p"><a href="/profile/{{ $item->secrete_id }}" class="sear-a">{{ $item->fullname }}</a> </p>
                                                            <span class="search-span">
                                                                2 mutual friends
                                                            </span><br>
                                                            <span class="search-span">
                                                                @if($item->education != null)
                                                                    <strong>Education:</strong> {{ $item->education }}
                                                                @else
                                                                @endif
                                                            </span><br>
                                                            @if($item->education != null)
                                                            <span class="search-span">
                                                                <strong>Lives:</strong> {{ $item->place }}
                                                            </span>
                                                            @else
                                                            @endif
                                                        </div>
                                                    <div class="drop col-lg-3 col-md-3 col-sm-3">
                                                        <span class="fa-span" style="cursor: pointer">
                                                            <i class="search-i fa fa-user-plus"></i></span>
													</div>

                                                </div>
                                            </div>
                                    @endforeach
									@endif
									<div>
										<form action="">
										<a href="/search/people">
											<button class="btn btn-primary central-but"> See all
											</button>
										</a>
									</form>
									</div>
								</div><!-- add post new box -->

                                </div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static right">
									<div class="widget">
										<h4 class="widget-title">Your page</h4>
										<div class="your-page">
											<figure>
												<a href="#" title=""><img src="/assets/images/resources/friend-avatar9.jpg" alt=""></a>
											</figure>
											<div class="page-meta">
												<a href="#" title="" class="underline">My page</a>
												<span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em>9</em></a></span>
												<span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em>2</em></a></span>
											</div>
											<div class="page-likes">
												<ul class="nav nav-tabs likes-btn">
													<li class="nav-item"><a class="active" href="#link1" data-toggle="tab">likes</a></li>
													 <li class="nav-item"><a class="" href="#link2" data-toggle="tab">views</a></li>
												</ul>
												<!-- Tab panes -->
												<div class="tab-content">
												  <div class="tab-pane active fade show " id="link1" >
													<span><i class="ti-heart"></i>884</span>
													  <a href="#" title="weekly-likes">35 new likes this week</a>
													  <div class="users-thumb-list">
														<a href="#" title="Anderw" data-toggle="tooltip">
															<img src="/assets/images/resources/userlist-1.jpg" alt="">
														</a>
														<a href="#" title="frank" data-toggle="tooltip">
															<img src="/assets/images/resources/userlist-2.jpg" alt="">
														</a>
														<a href="#" title="Sara" data-toggle="tooltip">
															<img src="/assets/images/resources/userlist-3.jpg" alt="">
														</a>
														<a href="#" title="Amy" data-toggle="tooltip">
															<img src="/assets/images/resources/userlist-4.jpg" alt="">
														</a>
														<a href="#" title="Ema" data-toggle="tooltip">
															<img src="/assets/images/resources/userlist-5.jpg" alt="">
														</a>
														<a href="#" title="Sophie" data-toggle="tooltip">
															<img src="/assets/images/resources/userlist-6.jpg" alt="">
														</a>
														<a href="#" title="Maria" data-toggle="tooltip">
															<img src="/assets/images/resources/userlist-7.jpg" alt="">
														</a>
													  </div>
												  </div>
												  <div class="tab-pane fade" id="link2" >
													  <span><i class="ti-eye"></i>440</span>
													  <a href="#" title="weekly-likes">440 new views this week</a>
													  <div class="users-thumb-list">
														<a href="#" title="Anderw" data-toggle="tooltip">
															<img src="/assets/images/resources/userlist-1.jpg" alt="">
														</a>
														<a href="#" title="frank" data-toggle="tooltip">
															<img src="/assets/images/resources/userlist-2.jpg" alt="">
														</a>
														<a href="#" title="Sara" data-toggle="tooltip">
															<img src="/assets/images/resources/userlist-3.jpg" alt="">
														</a>
														<a href="#" title="Amy" data-toggle="tooltip">
															<img src="/assets/images/resources/userlist-4.jpg" alt="">
														</a>
														<a href="#" title="Ema" data-toggle="tooltip">
															<img src="/assets/images/resources/userlist-5.jpg" alt="">
														</a>
														<a href="#" title="Sophie" data-toggle="tooltip">
															<img src="/assets/images/resources/userlist-6.jpg" alt="">
														</a>
														<a href="#" title="Maria" data-toggle="tooltip">
															<img src="/assets/images/resources/userlist-7.jpg" alt="">
														</a>
													  </div>
												  </div>
												</div>
											</div>
										</div>
									</div><!-- page like widget -->
									<div class="widget">
										<div class="banner medium-opacity bluesh">
											<div class="bg-image" style="background-image: url(/assets/images/resources/baner-widgetbg.jpg)"></div>
											<div class="baner-top">
												<span><img alt="" src="/assets/images/book-icon.png"></span>
												<i class="fa fa-ellipsis-h"></i>
											</div>
											<div class="banermeta">
												<p>
													create your own favourit page.
												</p>
												<span>like them all</span>
												<a data-ripple="" title="" href="#">start now!</a>
											</div>
										</div>
									</div>
									<div class="widget stick-widget">
										<h4 class="widget-title">Profile intro</h4>
										<ul class="short-profile">
											<li>
												<span>about</span>
												<p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft </p>
											</li>
											<li>
												<span>fav tv show</span>
												<p>Sacred Games, Spartcus Blood, Games of Theron </p>
											</li>
											<li>
												<span>favourit music</span>
												<p>Justin Biber, Shakira, Nati Natasah</p>
											</li>
										</ul>
									</div>
								</aside>
							</div><!-- sidebar -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<script src="/assets/js/my.js"></script>

@include('/user/includes/footer')
