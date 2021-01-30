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
									@include('/user/includes/sidebar')						
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-9">
								<div class="central-meta">
									<div class="messages">
										<h5 class="f-title"><i class="ti-bell"></i>All Messages <span class="more-options"><i class="fa fa-ellipsis-h"></i></span></h5>
										<div class="message-box">
											<ul class="peoples">
												<li>
													
													<figure>
														<img src="/assets/images/resources/friend-avatar2.jpg" alt="">
														<span class="status f-online"></span>
													</figure>
													<div class="people-name">
														<span>Molly cyrus</span>
													</div>
												</li>
												<li>
													
													<figure><img src="/assets/images/resources/friend-avatar3.jpg" alt="">
														<span class="status f-away"></span>
													</figure>
													<div class="people-name">
														<span>Andrew</span>
													</div>
												</li>
												<li>
													
													<figure>
														<img src="/assets/images/resources/friend-avatar.jpg" alt="">
														<span class="status f-online"></span>
													</figure>
													
													<div class="people-name">
														<span>jason bourne</span>
													</div>
												</li>
												<li>
													
													<figure><img src="/assets/images/resources/friend-avatar4.jpg" alt="">
														<span class="status off-online"></span>
													</figure>
													<div class="people-name">
														<span>Sarah Grey</span>
													</div>
												</li>
												<li>
													
													<figure><img src="/assets/images/resources/friend-avatar5.jpg" alt="">
														<span class="status f-online"></span>
													</figure>
													<div class="people-name">
														<span>bill doe</span>
													</div>
												</li>
												<li>
													
													<figure><img src="/assets/images/resources/friend-avatar6.jpg" alt="">
														<span class="status f-away"></span>
													</figure>
													<div class="people-name">
														<span>shen cornery</span>
													</div>
												</li>
												<li>
													
													<figure><img src="/assets/images/resources/friend-avatar7.jpg" alt="">
														<span class="status off-online"></span>
													</figure>
													<div class="people-name">
														<span>kill bill</span>
													</div>
												</li>
												<li>
													
													<figure><img src="/assets/images/resources/friend-avatar8.jpg" alt="">
														<span class="status f-online"></span>
													</figure>
													<div class="people-name">
														<span>jasmin walia</span>
													</div>
												</li>
												<li>
													
													<figure><img src="/assets/images/resources/friend-avatar6.jpg" alt="">
														<span class="status f-online"></span>
													</figure>
													<div class="people-name">
														<span>neclos cage</span>
													</div>
												</li>
											</ul>
											<div class="peoples-mesg-box">
												<div class="conversation-head">
													<figure><img src="/assets/images/resources/friend-avatar.jpg" alt=""></figure>
													<span>jason bourne <i>online</i></span>
												</div>
												<ul class="chatting-area">
													<li class="you">
														<figure><img src="/assets/images/resources/userlist-2.jpg" alt=""></figure>
														<p>what's liz short for? :)</p>
													</li>
													<li class="me">
														<figure><img src="/assets/images/resources/userlist-1.jpg" alt=""></figure>
														<p>Elizabeth lol</p>
													</li>
													<li class="me">
														<figure><img src="/assets/images/resources/userlist-1.jpg" alt=""></figure>
														<p>wanna know whats my second guess was?</p>
													</li>
													<li class="you">
														<figure><img src="/assets/images/resources/userlist-2.jpg" alt=""></figure>
														<p>yes</p>
													</li>
													<li class="me">
														<figure><img src="/assets/images/resources/userlist-1.jpg" alt=""></figure>
														<p>Disney's the lizard king</p>
													</li>
													<li class="me">
														<figure><img src="/assets/images/resources/userlist-1.jpg" alt=""></figure>
														<p>i know him 5 years ago</p>
													</li>
													<li class="you">
														<figure><img src="/assets/images/resources/userlist-2.jpg" alt=""></figure>
														<p>coooooooooool dude ;)</p>
													</li>
												</ul>
												<div class="message-text-container">
													<form method="post">
														<textarea></textarea>
														<button title="send"><i class="fa fa-paper-plane"></i></button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div><!-- centerl meta -->
							
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>
@include('/user/includes/footer')
