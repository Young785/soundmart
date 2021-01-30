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
	<section>
		<div class="page-header">
			<div class="header-inner">
				<h2>People Nearby "searched"</h2>
				<nav class="breadcrumb">
				  <a href="index.html" class="breadcrumb-item"><i class="fa fa-home"></i></a>
				  <span class="breadcrumb-item active">People Nearby</span>
				</nav>
			</div>
		</div>
	</section>
		
	<section>
		<div class="gap gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="advertisment-box">
										<h4 class="">advertisment</h4>
										<figure>
											<a href="#" title="Advertisment"><img src="/assets/images/resources/ad-widget.gif" alt=""></a>
										</figure>
									</div>
									@include('/user/includes/recent-photos')
									@include('/user/includes/sidebar')							
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="nearby-pepl">
										<div class="nearby-map">
											<div id="map-canvas"></div>
										</div>
									</div><!-- near by map -->
									<ul class="nearby-contct">
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="/assets/images/resources/friend-avatar9.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">jhon kates</a></h4>
													<span>ftv model</span>
													<em><i class="fa fa-map-marker"></i>400m away</em>
													<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="/assets/images/resources/nearly1.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">sophia Gate</a></h4>
													<span>ftv model</span>
													<em><i class="fa fa-map-marker"></i>800mm away</em>
													<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="/assets/images/resources/nearly2.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">sara grey</a></h4>
													<span>ftv model</span>
													<em><i class="fa fa-map-marker"></i>1km away</em>
													<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="/assets/images/resources/nearly3.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">Sexy cat</a></h4>
													<span>ftv model</span>
													<em><i class="fa fa-map-marker"></i>1.3km away</em>
													<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="/assets/images/resources/nearly4.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">Sara grey</a></h4>
													<span>ftv model</span>
													<em><i class="fa fa-map-marker"></i>2km away</em>
													<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="/assets/images/resources/nearly5.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">Amy watson</a></h4>
													<span>ftv model</span>
													<em><i class="fa fa-map-marker"></i>2km away</em>
													<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="/assets/images/resources/nearly6.jpg" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">caty lasbo</a></h4>
													<span>ftv model</span>
													<em><i class="fa fa-map-marker"></i>2.5km away</em>
													<a href="#" title="" class="add-butn" data-ripple="">add friend</a>
												</div>
											</div>
										</li>

									</ul>
								</div><!-- photos -->
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
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
									<div class="widget friend-list stick-widget">
										<h4 class="widget-title">Friends</h4>
										<div id="searchDir"></div>
										<ul id="people-list" class="friendz-list">
											<li>
												<figure>
													<img src="/assets/images/resources/friend-avatar.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">bucky barnes</a>
													<i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5126383f253423223e3d35342311363c30383d7f323e3c">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="/assets/images/resources/friend-avatar2.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">Sarah Loren</a>
													<i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7715160519120437101a161e1b5914181a">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="/assets/images/resources/friend-avatar3.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">jason borne</a>
													<i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82e8e3f1edece0c2e5efe3ebeeace1edef">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="/assets/images/resources/friend-avatar4.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">Cameron diaz</a>
													<i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="355f54465a5b57755258545c591b565a58">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="/assets/images/resources/friend-avatar5.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">daniel warber</a>
													<i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6e040f1d01000c2e09030f0702400d0103">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="/assets/images/resources/friend-avatar6.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">andrew</a>
													<i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="99f3f8eaf6f7fbd9fef4f8f0f5b7faf6f4">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="/assets/images/resources/friend-avatar7.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">amy watson</a>
													<i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="107a71637f7e7250777d71797c3e737f7d">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="/assets/images/resources/friend-avatar5.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">daniel warber</a>
													<i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6802091b07060a280f05090104460b0705">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="/assets/images/resources/friend-avatar2.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">Sarah Loren</a>
													<i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="80e2e1f2eee5f3c0e7ede1e9ecaee3efed">[email&#160;protected]</a></i>
												</div>
											</li>
										</ul>
										<div class="chat-box">
											<div class="chat-head">
												<span class="status f-online"></span>
												<h6>Bucky Barnes</h6>
												<div class="more">
													<span><i class="ti-more-alt"></i></span>
													<span class="close-mesage"><i class="ti-close"></i></span>
												</div>
											</div>
											<div class="chat-list">
												<ul>
													<li class="me">
														<div class="chat-thumb"><img src="/assets/images/resources/chatlist1.jpg" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
													<li class="you">
														<div class="chat-thumb"><img src="/assets/images/resources/chatlist2.jpg" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
													<li class="me">
														<div class="chat-thumb"><img src="/assets/images/resources/chatlist1.jpg" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
												</ul>
												<form class="text-box">
													<textarea placeholder="Post enter to post..."></textarea>
													<div class="add-smiles">
														<span title="add icon" class="em em-expressionless"></span>
													</div>
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
										</div>
									</div><!-- friends list sidebar -->								
								</aside>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

	@include('/user/includes/footer')
