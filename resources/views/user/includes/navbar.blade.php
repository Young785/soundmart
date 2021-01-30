<nav id="menu" class="res-menu">
    <ul>
        <li><span>Home</span>
            <ul>
                <li><a href="index.html" title="">Home Social</a></li>
                <li><a href="index2.html" title="">Home Social 2</a></li>
                <li><a href="index-company.html" title="">Home Company</a></li>
                <li><a href="landing.html" title="">Login page</a></li>
                <li><a href="/logout" title="">Logout Page</a></li>
                <li><a href="newsfeed.html" title="">news feed</a></li>
            </ul>
        </li>
        <li><span>Time Line</span>
            <ul>
                <li><a href="time-line.html" title="">timeline</a></li>
                <li><a href="timeline-friends.html" title="">timeline friends</a></li>
                <li><a href="timeline-groups.html" title="">timeline groups</a></li>
                <li><a href="timeline-pages.html" title="">timeline pages</a></li>
                <li><a href="timeline-photos.html" title="">timeline photos</a></li>
                <li><a href="timeline-videos.html" title="">timeline videos</a></li>
                <li><a href="social-post-single.html" title="">Post Single</a></li>
                <li><a href="fav-page.html" title="">favourit page</a></li>
                <li><a href="groups.html" title="">groups page</a></li>
                <li><a href="page-likers.html" title="">Likes page</a></li>
                <li><a href="people-nearby.html" title="">people nearby</a></li>


            </ul>
        </li>
        <li><span>Account Setting</span>
            <ul>
                <li><a href="create-fav-page.html" title="">create fav page</a></li>
                <li><a href="edit-account-setting.html" title="">edit account setting</a></li>
                <li><a href="edit-interest.html" title="">edit-interest</a></li>
                <li><a href="edit-password.html" title="">edit-password</a></li>
                <li><a href="edit-profile-basic.html" title="">edit profile basics</a></li>
                <li><a href="edit-work-eductation.html" title="">edit work educations</a></li>
                <li><a href="messages.html" title="">message box</a></li>
                <li><a href="inbox.html" title="">Inbox</a></li>
                <li><a href="notifications.html" title="">notifications page</a></li>
            </ul>
        </li>
        <li><span>forum</span>
            <ul>
                <li><a href="forum.html" title="">Forum Page</a></li>
                <li><a href="forums-category.html" title="">Fourm Category</a></li>
                <li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
                <li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
            </ul>
        </li>
        <li><span>Our Shop</span>
            <ul>
                <li><a href="shop.html" title="">Shop Products</a></li>
                <li><a href="shop-masonry.html" title="">Shop Masonry Products</a></li>
                <li><a href="shop-single.html" title="">Shop Detail Page</a></li>
                <li><a href="shop-cart.html" title="">Shop Product Cart</a></li>
                <li><a href="shop-checkout.html" title="">Product Checkout</a></li>
            </ul>
        </li>
        <li><span>Our Blog</span>
            <ul>
                <li><a href="blog-grid-wo-sidebar.html" title="">Our Blog</a></li>
                <li><a href="blog-grid-right-sidebar.html" title="">Blog with R-Sidebar</a></li>
                <li><a href="blog-grid-left-sidebar.html" title="">Blog with L-Sidebar</a></li>
                <li><a href="blog-masonry.html" title="">Blog Masonry Style</a></li>
                <li><a href="blog-list-wo-sidebar.html" title="">Blog List Style</a></li>
                <li><a href="blog-list-right-sidebar.html" title="">Blog List with R-Sidebar</a></li>
                <li><a href="blog-list-left-sidebar.html" title="">Blog List with L-Sidebar</a></li>
                <li><a href="blog-detail.html" title="">Blog Post Detail</a></li>
            </ul>
        </li>
        <li><span>Portfolio</span>
            <ul>
                <li><a href="portfolio-2colm.html" title="">Portfolio 2col</a></li>
                <li><a href="portfolio-3colm.html" title="">Portfolio 3col</a></li>
                <li><a href="portfolio-4colm.html" title="">Portfolio 4col</a></li>
            </ul>
        </li>
        <li><span>Support & Help</span>
            <ul>
                <li><a href="support-and-help.html" title="">Support & Help</a></li>
                <li><a href="support-and-help-detail.html" title="">Support & Help Detail</a></li>
                <li><a href="support-and-help-search-result.html" title="">Support & Help Search Result</a></li>
            </ul>
        </li>
        <li><span>More pages</span>
            <ul>
                <li><a href="careers.html" title="">Careers</a></li>
                <li><a href="career-detail.html" title="">Career Detail</a></li>
                <li><a href="404.html" title="">404 error page</a></li>
                <li><a href="404-2.html" title="">404 Style2</a></li>
                <li><a href="faq.html" title="">faq's page</a></li>
                <li><a href="insights.html" title="">insights</a></li>
                <li><a href="knowledge-base.html" title="">knowledge base</a></li>
            </ul>
        </li>
        <li><a href="about.html" title="">about</a></li>
        <li><a href="about-company.html" title="">About Us2</a></li>
        <li><a href="contact.html" title="">contact</a></li>
        <li><a href="contact-branches.html" title="">Contact Us2</a></li>
        <li><a href="widgets.html" title="">Widgts</a></li>
    </ul>
</nav>

</div>

<div class="topbar stick" id="topbar" style="">
    <div class="logo">
        <a title="" href="/newsfeed"><img src="/assets/images/logo.png" alt=""></a>
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
        <li><a href="/newsfeed" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
        <li>
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
                        <li id="notification">
                            <a href="/notifications" title="">
                                <img src="/assets/images/resources/thumb-1.jpg" alt="">
                                <div class="mesg-meta">
                                    <h6>{{ $item->data['name'] }}</h6>
                                    <span>{{ $item->data['notification'] }}</span>
                                    <i>{{ $item->created_at->diffForHumans() }}</i>
                                </div>
                            </a>
                            <span class="tag green">New</span>
                        </li>
                    @endforeach
                </ul>
                <a href="/notifications" title="" class="more-mesg">view more</a>
            </div>
        </li>

        <li>
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
        <li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
            <div class="dropdowns languages">
                <a href="#" title=""><i class="ti-check"></i>English</a>
                <a href="#" title="">Arabic</a>
                <a href="#" title="">Dutch</a>
                <a href="#" title="">French</a>
            </div>
        </li>
    </ul>
    <div class="user-img">
        @if ($user->user_image == null)
            <img src="/assets/images/default.png" class="profile-image" alt="{{ $user->name }}">
        @else
            <img src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="profile-image" alt="">
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


{{-- <div class="fixed-sidebar right">
<div class="chat-friendz">
    <ul class="chat-users">
        <li>
            <div class="author-thmb">
                <img src="/assets/images/resources/side-friend1.jpg" alt="">
                <span class="status f-online"></span>
            </div>
        </li>
        <li>
            <div class="author-thmb">
                <img src="/assets/images/resources/side-friend2.jpg" alt="">
                <span class="status f-away"></span>
            </div>
        </li>
        <li>
            <div class="author-thmb">
                <img src="/assets/images/resources/side-friend3.jpg" alt="">
                <span class="status f-online"></span>
            </div>
        </li>
        <li>
            <div class="author-thmb">
                <img src="/assets/images/resources/side-friend4.jpg" alt="">
                <span class="status f-offline"></span>
            </div>
        </li>
        <li>
            <div class="author-thmb">
                <img src="/assets/images/resources/side-friend5.jpg" alt="">
                <span class="status f-online"></span>
            </div>
        </li>
        <li>
            <div class="author-thmb">
                <img src="/assets/images/resources/side-friend6.jpg" alt="">
                <span class="status f-online"></span>
            </div>
        </li>
        <li>
            <div class="author-thmb">
                <img src="/assets/images/resources/side-friend7.jpg" alt="">
                <span class="status f-offline"></span>
            </div>
        </li>
        <li>
            <div class="author-thmb">
                <img src="/assets/images/resources/side-friend8.jpg" alt="">
                <span class="status f-online"></span>
            </div>
        </li>
        <li>
            <div class="author-thmb">
                <img src="/assets/images/resources/side-friend9.jpg" alt="">
                <span class="status f-away"></span>
            </div>
        </li>
        <li>
            <div class="author-thmb">
                <img src="/assets/images/resources/side-friend10.jpg" alt="">
                <span class="status f-away"></span>
            </div>
        </li>
        <li>
            <div class="author-thmb">
                <img src="/assets/images/resources/side-friend8.jpg" alt="">
                <span class="status f-online"></span>
            </div>
        </li>
    </ul>
    <div class="chat-box">
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
    </div>
</div>
</div> --}}
<!-- right sidebar user chat -->

