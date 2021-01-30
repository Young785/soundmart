@section('title', 'Edit Account - Chatbook')
@include('/user/includes/header')
<!--<div class="se-pre-con"></div>-->
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
        @include('/user/includes/timeline')

		<section>
			<div class="gap gray-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="row merged20" id="page-contents">
								<div class="col-lg-3">
									<aside class="sidebar static">
										<div class="widget">
											@if ($user['place'] == null || $user['education'] == null || $user['about'] == null || $user['occupation'] == null)
												<h4 class="widget-title">Your Info</h4>
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
										@include('/user/includes/sidebar')
									</aside>
								</div><!-- sidebar -->
								<div class="col-lg-6">
									<div class="central-meta">
										<div class="editing-info">
											<h5 class="f-title"><i class="ti-lock"></i>Edit Account</h5>
											<form method="POST" action="/profile/{{ $user['secrete_id'] }}/edit-profile" enctype="multipart/form-data">
												@csrf
												@if (session()->has("msg"))
													<div role="alert" class="alert alert-danger alert-dismissible" id="remove">
														<button type="button" data-dismiss="alert" aria-label="Close" class="close">
															<span aria-hidden="true" class="mdi mdi-close"></span>
														</button><span class="icon mdi mdi-info-outline"></span>
														<strong>Wrong Password!</strong> The Password is incorrect!
													</div>
												@endif
												<div class="form-group">
												  <input type="text" id="input" name="name" value="{{ $user['name'] }}"/>
												  <label class="control-label" for="input">Name</label><i class="mtrl-select"></i>
												  <p class="errors">{{ $errors->first("name") }}</p>
												</div>
												<div class="form-group">
													<input type="text" id="input" name="fullname" value="{{ $user['fullname'] }}" />
													<label class="control-label" for="input">Full Name</label><i class="mtrl-select"></i>
													<p class="errors">{{ $errors->first("fullname") }}</p>
												</div>
												<div class="form-group">
													<input type="email" id="input" readonly="readonly" name="email" value="{{ $user['email'] }}" />
													<label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
													<p class="errors">{{ $errors->first("email") }}</p>
												</div>
												<div class="form-group">
													<input type="number" maxlength="11" id="input" name="phone" value="{{ $user['phone'] }}"  />
													<label class="control-label" for="input">Phone</label><i class="mtrl-select"></i>
													<p class="errors">{{ $errors->first("phone") }}</p>
												</div>
												<div class="form-group">
													<input type="file" class="form-control" id="input" name="user_image" value="{{ $user['name'] }}" />
												</div>
												<div class="form-group col-md-6 col-lg-6 col-sm-12 desc-edit">
													<input type="phone" id="input" name="about" value="{{ $user['about'] }}" />
													<label class="control-label" for="input">About Me</label><i class="mtrl-select"></i>
												</div>
												<div class="form-group col-md-6 col-lg-6 col-sm-12 desc-edit">
													<input type="phone" id="input" name="occupation" value="{{ $user['occupation'] }}" />
													<label class="control-label" for="input">Occupation</label><i class="mtrl-select"></i>
												</div>
												<div class="form-group col-md-6 col-lg-6 col-sm-12 desc-edit">
													<input type="phone" id="input" name="education" value="{{ $user['education'] }}" />
													<label class="control-label" for="input">Education</label><i class="mtrl-select"></i>
												</div>
												<div class="form-group col-md-6 col-lg-6 col-sm-12 desc-edit">
													<input type="phone" id="input" name="place" value="{{ $user['place'] }}" />
													<label class="control-label" for="input">Place</label><i class="mtrl-select"></i>
												</div>
												<div class="form-group col-md-12 col-lg-12 col-sm-12 desc-edit">
													<input type="password" id="input" name="password" required placeholder="********" />
													<label class="control-label" for="input">Confirm Password to change Password</label><i class="mtrl-select"></i>
												</div>
												<div class="submit-btns">
                                                    <p class="col-lg-3 col-md-3 col-sm-2"></p>
                                                    <button type="submit" class="btn mtr-btn"><span>Update</span></button>
                                                    <p class="col-lg-3 col-md-3 col-sm-2"></p>
													<a href="/profile/{{$user->secrete_id}}/edit-password">
                                                        <button type="submit" class="btn mtr-btn" style="color:black;"><span>Change Password</span></button>
                                                    </a>
                                                </div>
											</form>
										</div>
									</div>
								</div><!-- centerl meta -->
								<div class="col-lg-3">
									<aside class="sidebar static">
										<div class="widget">
											<div class="banner medium-opacity bluesh">
											<div style="background-image: url(/assets/images/resources/baner-widgetbg.jpg)" class="bg-image"></div>
											<div class="baner-top">
												<span><img src="/assets/images/book-icon.png" alt=""></span>
												<i class="fa fa-ellipsis-h"></i>
											</div>
											<div class="banermeta">
												<p>
													create your own favourit page.
												</p>
												<span>like them all</span>
												<a href="#" title="" data-ripple="">start now!</a>
											</div>
										</div>
										</div>
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
