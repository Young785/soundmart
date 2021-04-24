{{-- <nav id="menu" class="res-menu">
    <ul>
        <div class="topbar stick" id="topbar" style="">
            <div class="logo">
                <a title="" href="/newsfeed"><img src="/assets/images/logo.png" class="m-logo" alt=""></a>
            </div>

                @php
                $id = Auth::user()->id;
                $user = App\User::find($id);

                $notification = $user->notifications->take(10);
                @endphp

        <div class="top-area">
            <div class="top-search">
                <form method="GET" action="/search">
                    @csrf
                    <input type="text" placeholder="Search Friend" name="q">
                    <button data-ripple><i class="ti-search"></i></button>
                </form>
            </div>
            <ul class="setting-area">
                <li class="m-icon"><a href="/newsfeed" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
                <li class="m-icon">
                    <a href="#"  onclick="markRead()" title="Notification" >
                        <i class="ti-bell"></i>
                        @if ($notification != null)
                            <span>{{ count(Auth::user()->unreadNotifications) }}</span>
                        @else
                        @endif
                    </a>
                    <div class="dropdowns">
                        @if ($notification != null)
                        <span>{{ count(Auth::user()->notifications) }} New Notifications</span>
                        @else
                        @endif
                        <ul class="drops-menu">
                            @foreach ($notification as $item)
                            @include('layouts.notifications.'.class_basename($item->type))
                            
                            @endforeach
                        </ul>
                        <a href="/notifications" title="" class="more-mesg">view more</a>
                    </div>
                </li>

                <li class="m-icon">
                    <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                    <div class="dropdowns">
                        <span>5 New Messages</span>
                        <ul class="drops-menu">
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="/assets/images/resources/thumb-1.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>sarah Loren</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag green">New</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="/assets/images/resources/thumb-2.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Jhon doe</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag red">Reply</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="/assets/images/resources/thumb-3.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Andrew</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag blue">Unseen</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="/assets/images/resources/thumb-4.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Tom cruse</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag">New</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="/assets/images/resources/thumb-5.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Amy</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag">New</span>
                            </li>
                        </ul>
                        <a href="messages.html" title="" class="more-mesg">view more</a>
                    </div>
                </li>
                <li class="m-icon"><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
                    <div class="dropdowns languages">
                        <a href="#" title=""><i class="ti-check"></i>English</a>
                        <a href="#" title="">Arabic</a>
                        <a href="#" title="">Dutch</a>
                        <a href="#" title="">French</a>
                    </div>
                </li>
            </ul>
            <div class="user-img nav-img">
                @if ($user->user_image == null)
                    <img src="/assets/images/default.png" class="profile-image" alt="{{ $user->name }}">
                @else
                    <img src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="profile-image nav-img" alt="{{ $user->name }}">
                @endif
                <span class="status f-online"></span>
                <div class="user-setting">
                    <a href="/profile/{{ Auth::user()->secrete_id }}" title=""><i class="ti-user"></i> view profile</a>
                    <a href="/profile/{{  Auth::user()->secrete_id }}/edit-profile" title=""><i class="ti-pencil-alt"></i>edit profile</a>
                    <a href="/accout-setting" title=""><i class="ti-settings"></i>account setting</a>
                    <a href="/logout" title=""><i class="ti-power-off"></i>log out</a>
                </div>
            </div>
            <span class="ti-menu main-menu" data-ripple=""></span>
        </div>
        </div><!-- topbar -->
    </ul>
</nav> --}}

</div>
<div class="top-search">
    <form method="GET" action="/search">
        @csrf
        <input type="text" placeholder="Search Friend" name="q">
        <button data-ripple><i class="ti-search"></i></button>
    </form>
</div>
<div class="topbar stick" id="topbar" style="">
    <div class="logo--div keep">
        <div class="logo-div">
            <img src="/assets/images/logo.png" alt="">
        </div>
        <div class="logo-div">
            <li style="margin-top: 5px;" class="m-icon search-li user-img"><a href="#" style="padding-bottom: 10px !important;color: black; font-size: 16px;" title="More" data-ripple=""><i class="fa fa-align-justify"></i></a>
                <div class="user-setting">
                    <a href="/profile/{{ Auth::user()->secrete_id }}" title=""><i class="ti-user"></i> view profile</a>
                    <a href="/profile/{{  Auth::user()->secrete_id }}/edit-profile" title=""><i class="ti-pencil-alt"></i>edit profile</a>
                    <a href="/accout-setting" title=""><i class="ti-settings"></i>account setting</a>
                    <a href="/logout" title=""><i class="ti-power-off"></i>log out</a>
                </div>
            </li>
            <a href="#" data-ripple="" class="icon-a m-icon search-li" title="Search" data-ripple=""><i class="fa fa-search"></i></a>
        </div>
    </div>
    <div class="logo">
        <a title="" href="/"><img src="/assets/images/logo.png" alt=""></a>
    </div>

        @php
        $id = Auth::user()->id;
        $user = App\User::find($id);

        $notification = $user->notifications->take(10);
        @endphp

<div class="top-area">
    <div class="top-search">
        <form method="GET" action="/search">
            @csrf
            <input type="text" placeholder="Search Friend" name="q">
            <button data-ripple><i class="ti-search"></i></button>
        </form>
    </div>
    <div class="other--div">
        <ul>
            <a href="#" title="Messages" data-ripple="" class="icon-a">
                <span class="other--icon icon-active">
                    <i class="ti-home" data-ripple=""></i>
                </span>
            </a> 
            <a href="#" title="Videos" data-ripple="" class="icon-a">
                <span class="other--icon" style="margin-right: 0px !important;">
                    <i class="fa fa-tv" data-ripple=""></i>
                </span>
            </a>
            <a href="#" title="Market" data-ripple="" class="icon-a">
                <span class="other--icon">
                        <i class="fa fa-laptop" data-ripple=""></i>
                </span>
            </a>           
            <a href="#" title="Friends" data-ripple="" class="icon-a">
                <span class="other--icon">
                    <i class="fa fa-users" data-ripple=""></i>
                </span>
            </a>    
            <a href="#" title="Messages" data-ripple="" class="icon-a">
                <span class="other--icon">
                    <i class="fa fa-users" data-ripple=""></i>
                </span>
            </a>       
        </ul>
    </div>
    <div class="user-img nav-img">
        @if ($user->user_image == null)
            <img src="/assets/images/default.png" class="profile-image" alt="{{ $user->name }}">
            <span class="prf-name">{{ Str::substr($user->name, 0, 6)}}</span>
        @else
            <img src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="profile-image nav-img" alt="{{ $user->name }}">
            <span class="prf-name">{{ Str::substr($user->name, 0, 6)}}</span>
        @endif  
    </div>
    <ul class="setting-area">
        <li class="m-icon search-li hide"><a href="#" class="search-click icon-a" title="Search" data-ripple=""><i class="fa fa-search"></i></a></li>
        <li class="m-icon homeli keep"><a href="#" class="search-click icon-a" title="Search" data-ripple=""><i class="fa fa-home"></i></a></li>
        <li class="m-icon more-option"><span class="fa fa-users main-menu" data-ripple=""></span></li>
        {{-- <li class="m-icon home-display"><a href="/newsfeed" type="button" title="Home" class="icon-a " onclick="home()" data-ripple=""><i class="fa fa-home"></i></a></li> --}}
        <li class="m-icon">
            <a href="#" title="Messages" data-ripple="" class="icon-a"><i class="fa fa-comment"></i><span class="msg-count">12</span></a>
            <div class="dropdowns">
                <span>5 New Messages</span>
                <ul class="drops-menu">
                    <li>
                        <a href="notifications.html" title="">
                            <img src="/assets/images/resources/thumb-1.jpg" alt="">
                            <div class="mesg-meta">
                                <h6>sarah Loren</h6>
                                <span>Hi, how r u dear ...?</span>
                                <i>2 min ago</i>
                            </div>
                        </a>
                        <span class="tag green">New</span>
                    </li>
                      </ul>
                <a href="messages.html" title="" class="more-mesg">view more</a>
            </div>
        </li>
        <li class="m-icon">
            <a href="#" title="Messages" data-ripple="" class="icon-a"><i class="fa fa-tv"></i><span class="msg-count">12</span></a>
            <div class="dropdowns">
                <span>5 New Messages</span>
                <ul class="drops-menu">
                    <li>
                        <a href="notifications.html" title="">
                            <img src="/assets/images/resources/thumb-1.jpg" alt="">
                            <div class="mesg-meta">
                                <h6>sarah Loren</h6>
                                <span>Hi, how r u dear ...?</span>
                                <i>2 min ago</i>
                            </div>
                        </a>
                        <span class="tag green">New</span>
                    </li>
                      </ul>
                <a href="messages.html" title="" class="more-mesg">view more</a>
            </div>
        </li>

        <li class="m-icon">
            <a href="#" class="icon-a" style="margin-top: -24px;" onclick="markRead()" title="Notification" >
                <i class="fa fa-bell"></i>
                @if ($notification != null)
                    <span class="count-span">{{ count(Auth::user()->unreadNotifications) }}</span>
                @else
                @endif
            </a>
            <div class="dropdowns">
                @if ($notification != null)
                <span>{{ count(Auth::user()->notifications) }} New Notifications</span>
                @else
                @endif
                <ul class="drops-menu">
                    @foreach ($notification as $item)
                    @include('layouts.notifications.'.class_basename($item->type))
                       
                    @endforeach
                </ul>
                <a href="/notifications" title="" class="more-mesg">view more</a>
            </div>
        </li>
        <li class="m-icon cartli keep">
            <a href="#" title="Messages" data-ripple="" class="icon-a"><i class="fa fa-shopping-cart"></i><span class="msg-count">12</span></a>
            <div class="dropdowns">
                <span>5 New Messages</span>
                <ul class="drops-menu">
                    <li>
                        <a href="notifications.html" title="">
                            <img src="/assets/images/resources/thumb-1.jpg" alt="">
                            <div class="mesg-meta">
                                <h6>sarah Loren</h6>
                                <span>Hi, how r u dear ...?</span>
                                <i>2 min ago</i>
                            </div>
                        </a>
                        <span class="tag green">New</span>
                    </li>
                      </ul>
                <a href="messages.html" title="" class="more-mesg">view more</a>
            </div>
        </li>
   
        <li class="m-icon caret-down user-img hide"><a href="#" style="padding-bottom: 10px !important;" title="More" data-ripple=""><i class="fa fa-align-justify"></i></a>
            <div class="user-setting">
                <a href="/profile/{{ Auth::user()->secrete_id }}" title=""><i class="ti-user"></i> view profile</a>
                <a href="/profile/{{  Auth::user()->secrete_id }}/edit-profile" title=""><i class="ti-pencil-alt"></i>edit profile</a>
                <a href="/accout-setting" title=""><i class="ti-settings"></i>account setting</a>
                <a href="/logout" title=""><i class="ti-power-off"></i>log out</a>
            </div>
        </li>
    </ul>
  
</div>
</div><!-- topbar -->

<script src="/assets/js/main.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/js/main.min.js"></script>


<div class="fixed-sidebar right">
<div class="chat-friendz">
    
    <ul class="chat-users">
       
    </ul>
    <div id="chat_users_box"></div>
    {{-- <div class="chat-box">
        <div class="chat-head">
            <span class="status f-online"></span>
            <h6>Bucky Barnes</h6>
            <div class="more">
                <span class="more-optns"><i class="ti-more-alt"></i>
                    <ul>
                        <li>block chat</li>
                        <li>unblock chat</li>
                        <li>conversation</li>
                    </ul>
                </span>
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
    </div> --}}
</div>
</div>
<!-- right sidebar user chat -->
