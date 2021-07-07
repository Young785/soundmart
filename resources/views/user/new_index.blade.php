@include('/user/includes/header')
@include('/user/story-upload')
@include('/user/image_story')
@include('/user/text-story')
@include('/user/all_story')
</div></div>

<!--<div class="se-pre-con"></div>-->
<div class="theme-layout searcher">
	<div class="postoverlay"></div>
	<div class="responsive-header">
		<div class="mh-head second keep">
			<form class="mh-form" action="/search" method="GET">
                @csrf
				<input placeholder="search" class="m-input" name="q" type="text"/>
				<button href="#/" class="fa fa-search"></button>
			</form>
		</div>
		@include('/user/includes/navbar')
<style>
    .post {
	width: 30%;
	margin: 10px auto;
	border: 1px solid #cbcbcb;
	padding: 5px 10px 0px 10px;
}
.like, .unlike, .likes_count {
	color: blue;
}
.hide {
	display: none;
}
.fa-thumbs-up, .fa-thumbs-o-up {
	transform: rotateY(-180deg);
	font-size: 1.3em;
}
</style>
	<section>
		<div class="gap2 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static left"  id="sidebar-left">
                                    <div class="widget left-widget">
										<a href="/profile/{{$user->secrete_id}}"  class="profile-a col-lg-12 col-md-12 col-sm-12">
                                            <div>
                                                <figure class="col-lg-2 col-md-2 col-sm-3 req-figure">
                                                        <img src="/assets/images/default.png" class="req-image" alt="">
                                                </figure>
                                                <div class="col-lg-10 col-md-10 col-sm-10">
                                                    <h3 class="profile-name">Kodaolu Idris</h3>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/friends"  class="profile-a col-lg-12 col-md-12 col-sm-12">
                                            <div>
                                                <figure class="col-lg-2 col-md-2 col-sm-3 req-figure">
                                                        <img src="/assets/images/friends.png" class="req-image" alt="">
                                                </figure>
                                                <div class="col-lg-10 col-md-10 col-sm-10">
                                                    <h3 class="profile-name">Friends</h3>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="/groups"  class="profile-a col-lg-12 col-md-12 col-sm-12">
                                            <div>
                                                <figure class="col-lg-2 col-md-2 col-sm-3 req-figure">
                                                        <img src="/assets/images/groups.png" class="req-image" alt="">
                                                </figure>
                                                <div class="col-lg-10 col-md-10 col-sm-10">
                                                    <h3 class="profile-name">Groups</h3>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="profile-a col-lg-12 col-md-12 col-sm-12">
                                            <div>
                                               <span class="see-span">
                                                   <i class="fa fa-arrow-down"></i>
                                               </span>
                                                <div class="col-lg-10 col-md-10 col-sm-10">
                                                    <h3 class="see-more">See More</h3>
                                                </div>
                                            </div>
                                        </a>
                                        <h4 class="widget-title">Shortcuts</h4>
                                        <div>
                                            <a href="/profile/{{$user->secrete_id}}"  class="profile-a col-lg-12 col-md-12 col-sm-12">
                                                <div>
                                                    <figure class="col-lg-2 col-md-2 col-sm-3 req-figure">
                                                            <img src="/assets/images/default.png" class="req-image" alt="">
                                                    </figure>
                                                    <div class="col-lg-10 col-md-10 col-sm-10">
                                                        <h3 class="profile-name">Entertainment Zone</h3>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="profile-a col-lg-12 col-md-12 col-sm-12">
                                                <div>
                                                <span class="see-span">
                                                    <i class="fa fa-arrow-down"></i>
                                                </span>
                                                    <div class="col-lg-10 col-md-10 col-sm-10">
                                                        <h3 class="see-more">See More</h3>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!-- Shortcuts -->
									@include('/user/includes/sidebar-titles')
								</aside>
							</div><!-- sidebar -->
							
							<div class="col-lg-6 content-sec">
								@if (session()->has("mssg"))
									<p class="alert alert-success text-center">Thanks for Joining ChatBook, We hope you get the Satisfaction you desire! You can now login below.</p>
								@endif
								<div class="uwtps--div">
                                    <a class="postStory">
                                        <div class="uwtps">
                                            <div class="uwtps--mini-div">
                                                <span class="uwtps--span">
                                                    <i class="fa fa-plus uwtps-iplus"></i>
                                                </span>
                                                <img src="http://127.0.0.1:8000/users/1615144360.4722497077.jpg" class="uwtps--img" alt="">
                                                <p class="uwtps--p">Create a Story</p>
                                            </div>
                                        </div>
                                    </a>
									@if ($story != null)
										<div class="uwtps allStory">
											<a href="" class="fs--uimg-a">
												<span>
													<img src="http://127.0.0.1:8000/users/1615144360.4722497077.jpg" class="fs--uimg" alt="">
												</span>
											</a>
											<div class="fs--mini-div">
												<p class="fs-p">Haryormekun Hariyor</p>
												<img src="http://127.0.0.1:8000/users/1615144360.4722497077.jpg" alt="" class="mini-img">
											</div>
										</div>
										@else
									@endif
                                </div>
                                <div class="central-meta new-pst post-div-header keep">
                                    <div class="header-title">
                                        <h3 class="head-title">Create Post
                                            <span class="post-span">
                                                <i class="ti-close cancel-post"></i>
                                            </span>    
                                        </h3> 
                                    </div>
									<div class="post-box-popup">
										<div class="post-div">
                                            @if ($user->user_image == null)
                                                <figure class="post-figure">
                                                    <a href="/profile/{{$user->secrete_id}}">
                                                        <img src="/assets/images/default.png" alt="">
                                                    </a>
                                                </figure>
                                            @else
                                                <figure class="post-figure">
                                                    <a href="/profile/{{ $user->secrete_id }}">
                                                        <img src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="req-image" style="height: 50px;" alt="{{$user->name}}">
                                                    </a>
                                                </figure>
                                            @endif
                                            <p class="post-name">{{ $user->name }}</p>
                                            <div class="dropdown" style="margin-top: -10px;">
                                                <button class="btn btn-primary dropdown-toggle post-button" type="button" data-toggle="dropdown" aria-expanded="false">Friends</button>
                                                <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(70px, 30px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                  <li><a href="#">HTML</a></li>
                                                  <li><a href="#">CSS</a></li>
                                                  <li><a href="#">JavaScript</a></li>
                                                </ul>
                                              </div>
                                        </div>
										<div class="post-input">
											<form method="POST" class="post-form" enctype="multipart/form-data">
												@csrf												
                                                <p class="emoji-picker-container">
                                                    <textarea rows="2" class="post-textarea image_name" name="image_name" placeholder="What's on your mind, Hariyo?" data-emojiable="true" id="emojiinput"></textarea>
                                                </p>
                                                <p><img id="result" class="result-image keep" /></p>
                                                <div class="attachments">
													<ul>
                                                        <p class="post-add">Add to Your Post</p>
														<li class="post-li-image">
															<i class="fa fa-image"></i>
															<label class="fileContainer">
																<input type="file" id="files" class="image" name="image[]" multiple="" accept="image/*"  onchange="loadCoverFile(event)" title="Photo">
															</label>
														</li>
														<li class="post-li-camera">
															<i class="fa fa-camera"></i>
															<label class="fileContainer">
																<input type="file"  title="Camera">
															</label>
														</li>
                                                        <li class="post-li-user">
															<i class="fa fa-user"></i>
															<label class="fileContainer">
																<input type="file"  title="Tag Friends">
															</label>
														</li>
                                                        <li class="post-li-smile">
															<i class="fa fa-smile-o"></i>
															<label class="fileContainer"  title="Add Gifs">
																<input type="file">
															</label>
														</li>
													</ul>
												</div>
                                                <button class="btn btn-primary post-submit" type="submit">Post</button>
											</form>
										</div>
									</div>
                                </div>
								@if (session()->has("msg"))
								<div role="alert" class="alert alert-success alert-dismissible" id="remove">
									<button type="button" data-dismiss="alert" aria-label="Close" class="close">
										<span aria-hidden="true" class="mdi mdi-close"></span>
									</button><span class="icon mdi mdi-info-outline"></span>
									<strong>Success!</strong> You Successfully Updated your Profile!
								</div>
                                @endif
                                @if (session()->has("req_acc"))
								<div role="alert" class="alert alert-success alert-dismissible" id="remove">
									<button type="button" data-dismiss="alert" aria-label="Close" class="close">
										<span aria-hidden="true" class="mdi mdi-close"></span>
									</button><span class="icon mdi mdi-info-outline"></span>
									<strong>Success!</strong> You Successfully Accepted the friend Request!
								</div>
								@endif
								@if (session()->has("mssg"))
								<div role="alert" class="alert alert-success alert-dismissible" id="remove">
									<button type="button" data-dismiss="alert" aria-label="Close" class="close">
										<span aria-hidden="true" class="mdi mdi-close"></span>
									</button><span class="icon mdi mdi-info-outline"></span>
									<strong>Success!</strong> Post added Successfully!
								</div>
								@endif
								<div class="central-meta new-pst post-normal-div">
									<div class="new-postbox">
										@if ($user->user_image == null)
											<figure>
												<a href="/profile/{{$user->secrete_id}}">
                                                    <img src="/assets/images/default.png" alt="">
                                                </a>
											</figure>
										@else
											<figure>
                                                <a href="/profile/{{ $user->secrete_id }}">
                                                    <img src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="req-image" style="height: 50px;" alt="{{$user->name}}">
                                                </a>
											</figure>
										@endif
<a>
										<div class="newpst-input">
											<form method="POST" action="/newsfeed" enctype="multipart/form-data">
												@csrf
												<textarea rows="2" name="image_name" placeholder="write something"></textarea>
												<div class="attachments">
													<ul>
														<li>
															<i class="fa fa-image"></i>
															<label class="fileContainer">
																<input type="file" name="image[]" multiple title="Photo" disabled>
															</label>
														</li>
														<li aria-disabled="true">
															<i class="fa fa-camera"></i>
															<label class="fileContainer">
																<input type="file" disabled>
															</label>
														</li>
														<li>
															<button disabled type="submit">Post</button>

																	  <!-- Nifty Modal-->
																	  <div id="full-success" class="modal-container modal-full-color modal-full-color-success modal-effect-8">
																		<div class="modal-content">
																		  <div class="modal-header">
																			<button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
																		  </div>
																		  <div class="modal-body">

																  </div>
																</div>
															  </div>
														</li>
													</ul>
												</div>
											</form>
										</div></a>
									</div>
                                </div><!-- add post new box -->
                                    <div class="widget">
                                        <h2 class="text-center"><b>Welcome to Chatbook!</b> <i style="text-decoration: underline">{{Auth::user()->name}}</i></h2>
                                        <p class="text-center">You can post, like,comment,add friends, see family members and more</p>
                                    </div>
                            </div><!-- centerl meta -->

							<div class="col-lg-3">
                            <div class="sidebar-div">
                                <aside class="sidebar static right" id="sidebar-right">
                                    <div class="widget sidebar-widget">
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
                                    @if ($request != null)
                                        <div class="widget">
                                            <h3 class="friend-request">Friend Request</h3>
                                            <a href="/friend-request" class="req-a">See All</a>

                                                <div class="request-details col-lg-12 col-md-12 col-sm-12">
                                                    @if ($request->user_image == null)
                                                        <figure class="col-lg-2 col-md-2 col-sm-3 req-figure">
                                                            <a href="/profile/{{$request->secrete_id}}">
                                                                <img src="/assets/images/default.png" class="req-image" alt="{{ $request->name }}" title="{{ $request->name }}">
                                                            </a>
                                                        </figure>
                                                    @else
                                                        <figure class="col-lg-2 col-md-2 col-sm-3 req-figure">
                                                            <a href="/profile/{{$request->secrete_id}}">
                                                                <img src="{{ asset("users") }}/{{ substr($request->user_image, 0, 10) }}.{{$request->secrete_id}}.jpg" class="req-image" alt="{{ $request->name }}" title="{{ $request->name }}">
                                                            </a>
                                                        </figure>
                                                    @endif
                                                
                                                    <div class="r-details">
                                                        <a href="/profile/{{$request->secrete_id}}">
                                                            <p class="req-name col-lg-8 col-md-8 col-sm-7">{{ $request->name }} 
                                                                <div class="users-thumb-list ol-lg-8 col-md-8 col-sm-7">
                                                                    <a href="#" title="Anderw" data-toggle="tooltip">
                                                                        <img src="/assets/images/resources/userlist-1.jpg" alt="">
                                                                    </a>
                                                                    <a href="#" title="frank" data-toggle="tooltip">
                                                                        <img src="/assets/images/resources/userlist-2.jpg" alt="">
                                                                        <p class="req-p">Mutual Friends</p>
                                                                    </a>
                                                                </div>
                                                                <p class="req-date">{{ $request->created_at->diffForHumans() }}</p>
                                                            </p>
                                                        </a>
                                                        <div class="req-button col-lg-12 col-md-12 col-sm-12">
                                                            <form action="/friend-requests/confirm/{{ $request->id }}" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <button class="btn btn-primary col-lg-5 col-md-5 col-sm-12">Confirm</button>
                                                            </form>
                                                            <div class="col-lg-1 col-md-1 col-sm-1"></div>
                                                            <form action="" method="POST">
                                                                @csrf
                                                                <button class="btn btn-default col-lg-5 col-md-5 col-sm-12">Delete</button>
                                                            </form>
                                                        </div>
                                                        <div>

                                                        </div>
                                                    </div>

                                                </div>
                                            {{-- @endforeach --}}

                                        </div> 
                                        
                                    @endif
                                    
                                    <div class="widget" id="contacts-widget">
                                        <div class="contact">
                                            <h3 class="friend-request">Contacts</h3>
                                            <span class="req-a">
                                                <i class="fa fa-search search-contact"></i>
                                                <i class="ti-close search-cancel keep"></i>
                                            </span>
                                            <span class="req-a"><i class="fa fa-ellipsis-h"></i></span>
                                        </div>
                                        <input type="text" placeholder="Search friends" class="search-con form-control keep" id="search-me" name="search-me">
                                        <div class="online-friends-search"></div>
                                        <div class="online-friends-div">
                                            @foreach ($contacts as $contact)
                                                <div class="online-friends col-lg-12 col-md-12 col-sm-12 chatbox"  data-touserid="{{ $contact->id }}" data-tousername="{{ $contact->name }}" data-id="{{ $contact->id }}">
                                                        @if ($contact->user_image == null)
                                                            <figure class="col-lg-2 col-md-2 col-sm-3 req-figure">
                                                                <a href="/profile/{{$user->secrete_id}}">
                                                                    <img src="/assets/images/default.png" class="req-image" alt="">
                                                                    <span class="status-on f-online"></span>
                                                                </a>
                                                            </figure>
                                                        @else
                                                            <figure class="col-lg-2 col-md-2 col-sm-3 req-figure">
                                                                <a href="/profile/{{$user->secrete_id}}">
                                                                    <img src="{{ asset("users") }}/{{ substr($contact->user_image, 0, 10) }}.{{$contact->secrete_id}}.jpg" class="req-image" style="height: 50px;" alt="{{$contact->name}}">
                                                                    <span class="status-on f-online"></span>
                                                                </a>
                                                            </figure>
                                                        @endif
                                                    <div class="col-lg-10 col-md-10 col-sm-10">
                                                        <h3 class="online-h3">{{ $contact->name }}</h3>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <script>
                                    </script>
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
                            </div>
							
							</div><!-- sidebar -->
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    </div></div>
<script src="/assets/js/jquery.min.js" type="text/javascript"></script>

<script src="/assets/js/my.js"></script>
<script src="/assets/js/function.js" type="text/javascript"></script>

@include('/user/includes/footer')
