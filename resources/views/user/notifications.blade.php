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

	@php

	@endphp
	<section>
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
                                    @if ($posts == null)

                                    @else
                                      @include('/user/includes/recent-photos')
                                    @endif
                                      @include('/user/includes/sidebar')
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-8">
								<div class="central-meta">
									<div class="editing-interest">
										<h5 class="f-title"><i class="ti-bell"></i>All Notifications </h5>
										@if (session()->has("msg"))
											<div role="alert" class="alert alert-success alert-dismissible" id="remove">
												<button type="button" data-dismiss="alert" aria-label="Close" class="close">
													<span aria-hidden="true" class="mdi mdi-close"></span>
												</button><span class="icon mdi mdi-info-outline"></span>
												<strong>Success!</strong> Notification deleted Successfully!
											</div>
										@endif
										<div class="notification-box">
											<ul>
												@if (count($notifications) == null)
													<p class="text-center">No Notification Available...</p>
												@else
													@foreach ($notifications as $notification)
													<li>
														<figure>
															@if ($user->user_image == null)
                                                                <a href="/profile/{{ $user->secrete_id }}">
                                                                    <img src="/assets/images/resources/friend-avatar.jpg" alt="{{  $notification->data['name'] }}" title="{{  $notification->data['name'] }}">
                                                                </a>
                                                        </figure>
															@else
                                                                <a href="/profile/{{ $user->secrete_id }}">
                                                                    <img src="/users/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" alt="{{ $user->name }}" title="{{ $user->name }}">
                                                                </a>
															@endif
														</figure>
														<div class="notifi-meta">
                                                            <p class="col-lg-9 col-md-6 col-sm-3">{{ $notification->data['notification'] }}<br>
															<span class="notifi-date">{{ $notification->created_at->diffForHumans() }}</span>
                                                        </p>
                                                            <form action="/notifications/{{ $notification->id }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="notifi-button col-lg-3 col-md-3 col-sm-3">
                                                                    <button type="submit"><i class="del fa fa-close"></i></button>
                                                                </div>
                                                            </form>
                                                        </div>

													</li>
													@endforeach
												@endif
											</ul>
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
