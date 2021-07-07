<div class="allStory-div keep">
    <div class="story-upload1">
        <link rel="stylesheet" href="/assets/css/style.css">
        <div class="col-lg-12" id="keepDiv">
            <div class="col-lg-3 story-sd-nav" style="height: 685px">
                <div class="story-sd-div">
                    <span class="m-icon close-allStory" id="m-icon"><i class="ti-close"></i></span>
                    <div class="">
                        <a title="" href="/"><img src="/assets/images/logo.png" alt=""></a>
                    </div>
                </div>
                <div style="overflow-y: scroll;height: 600px;width: 315px;">
                    <div class="" style="margin-top: 30px;"> 
                        <div style="height: 43px;">
                            <p class="story--p">Stories</p>
                            <span class="story--span">
                                <a class="story-span-a">Achieve.</a>
                                <a class="story-span-a story-settings">Settings</a>
                            </span>
                        </div>
                        @if ($story != null)
                            <div class="post-sdiv">
                                <figure class="story--fig">
                                    <img src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" style="border-radius: 100%" alt="">
                                    <span class="story-fig-span">
                                        <i class="ti-plus aps-iplus"></i>
                                    </span>
                                </figure>
                                <div class="story--p-div">Your Story</div>
                                <p style="margin-top: 80px;"></p>
                            @else
                                <div class="all-sCS postStory">
                                    <figure class="story--fig">
                                        <img src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" style="border-radius: 100%" alt="">
                                    </figure>
                                    <div class="story--p-div">Create Story
                                        <p>Write and share Story</p>
                                    </div>
                                </div>
                            @endif
                            <div>
                                <p class="allStory-p">All Stories</p>
                                <div class="allStory-mdiv active">
                                    <a style="width: 16%; height: 52px; float: left;" class="fs--uimg-a">
                                        <img src="/assets/images/default.png" alt="" class="allStory-img">
                                    </a>
                                    <div style="padding-left: 70px; padding-top: 10px;">
                                        <p class="allStory-div-p">{{ $user->name }}</p>
                                        <p style="width: 25%; float: left;color: #3957e9;">1 new .</p>
                                        <p style="width: 50%; float: left;">1hr</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9" id="keep-col9">
                <div style="height: 86%">
                    <div class="col-lg-3"></div>
                    <div class="sup---div">
                        <div class="sup-tadiv"></div>
                    </div>
                    <div class="st-header-div">
                        <div class="">
                            <div class="">
                                <span class="story--span m-icon user-img new--style">
                                    <i class="fa fa-caret-down"></i>
                                    <div class="user-setting dropDiv">
                                        <div class="dropUser">
                                            <a href="/profile/4722497077" title="">
                                                <figure style="float: left">
                                                    <img src="http://127.0.0.1:8000/users/1615144360.4722497077.jpg" class="req-image" style="height: 50px;" alt="Haryormekun Hariyo">
                                                </figure>
                                                <div class="drop--p">
                                                    <p class="dropName">Ayomikun</p>
                                                <p class="dropPtag">View Profile</p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr style="margin-top: 0px !important">
                                        <a href="/profile/4722497077/edit-profile" class="drop--a" title="">
                                            <i class="ti-pencil-alt drop--i"></i>
                                            <p class="drop-a-p">edit profile</p>
                                            <span class="ryt-span">
                                                <i class="fa fa-angle-double-right ryt-i"></i>
                                            </span>
                                        </a>
                                        <a class="drop--a story-settings">
                                            <i class="ti-settings drop--i"></i>
                                            <p class="drop-a-p">account setting</p>
                                            <span class="ryt-span">
                                                <i class="fa fa-angle-double-right ryt-i"></i>
                                            </span>
                                        </a>
                                        <a href="/logout" title="" class="drop--a">
                                            <i class="ti-power-off drop--i"></i>
                                            <p class="drop-a-p">log out</p>
                                        </a>
                                    </div>
                                    <div class="as-main createDiv">
                                        <div class="dropUser" style="margin-bottom: -15px;">
                                            <p class="dropName">Create Something</p>
                                        </div>
                                        <div>
                                            <div class="create-div">
                                                <span class="m-icon cd-span">
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                <div id="create-div">Post<br>
                                                    <span id="create-span">Share a post on News Feed</span>
                                                </div>
                                                
                                            </div>
                                            <div class="create-div">
                                                <span class="m-icon">
                                                    <i class="fa fa-book"></i>
                                                </span>
                                                <div id="create-div">Story<br>
                                                    <span id="create-span">Share a photo, video or write a text.</span>
                                                </div>
                                                
                                            </div>
                                            <div class="create-div">
                                                <span class="m-icon">
                                                    <i class="fa fa-video"></i>
                                                </span>
                                                <div id="create-div">Room<br>
                                                    <span id="create-span">Video chat with anyone on Chatbook.</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <hr style="margin-top: 0px !important">
                                        <div>
                                            <a href="/pages/creation" class="dropClass">
                                                <div class="create-div">
                                                    <span class="m-icon">
                                                        <i class="fa fa-flag"></i>
                                                    </span>
                                                    <div id="create-div">Page<br>
                                                        <span id="create-span">Meet and share with patronizers or viewer.</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropClass creategroup">
                                                <div class="create-div">
                                                    <span class="m-icon">
                                                        <i class="fa fa-users"></i>
                                                    </span>
                                                    <div id="create-div">Group<br>
                                                        <span id="create-span">Meet with people who share your interest</span>
                                                    </div>
                                                    
                                                </div>
                                            </a>
                                            <div class="create-div">
                                                <span class="m-icon">
                                                    <i class="fa fa-map"></i>
                                                </span>
                                                <div id="create-div">Event<br>
                                                    <span id="create-span">Meet to invite people to your Events</span>
                                                </div>
                                                
                                            </div>
                                            <div class="create-div createadvert" style="padding-bottom: 10px;">
                                                <span class="m-icon">
                                                    <i class="fa fa-shopping-bag"></i>
                                                </span>
                                                <div id="create-div" style="padding-left: 50px;">MarketPlace<br>
                                                    <span id="create-span">Sell Market to people within your country or outside World.</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </span>
                                <span class="story--span m-icon new--style">
                                    <i class="fa fa-bell bell-i"></i>
                                    <span class="bell-span bell-span">12</span>
                                </span>
                                <span class="story--span m-icon new--style create-pages">
                                    <i class="ti-plus" style="font-size: 18px;"></i>
                                </span>
                            </div>
                        </div> 
                    </div>
                    <div class="central-meta col-lg-9 col-md-6 col-sm-4 keep story-settings-div">
                        <div class="">
                            <div class="head-title sps-ht">
                                <div class="" style="width: 30%;">
                                    <span style="float: left;">
                                        <i class="fa fa-adjust"></i>
                                    </span>
                                    <h3 class="sps-h3">Story Achieve Setting</h3>
                                </div>
                                <div class="sps-div">
                                    <span class="sps-span">
                                        <i class="ti-close"></i>
                                    </span>
                                    <h3 class="sps--h3">Story You've Muted</h3>
                                </div>
                                    <a class="sps-a"">
                                        <span class="sps--span">
                                            <i class="fa ti-lock"></i>
                                        </span>
                                        <h3 class="sps-h3">Story Privacy</h3>
                                    </a>
                                    <span class="post-span cancel-settings">
                                <i class="ti-close"></i>
                            </span>    
                        </div> 
                    </div>
                    <div class="post-box-popup" style="margin-top: 0px !important">
                        <p class="cancel-p" style="margin-bottom: 0px;">Who can see your Story?</p>
                        <p>Your Story will only be visible for 24 hours on this platform.</p>
                    </div>
                    <div>
                        <div style="sps-sdiv">
                            <div style="margin-bottom: 20px;">
                                <span class="story-setting-span m-icon">
                                    <i class="fa fa-globe" style="margin-top: 18px;"></i>
                                </span>
                                <div class="sps--div">
                                    <p class="allStory-div-p sps-div-p">Public</p>
                                    <div class="sps---div">
                                        <input class="" type="radio" style="cursor: pointer;">
                                    </div><br>
                                    <p>Anyone can See.</p><br>
                                </div>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <span class="story-setting-span m-icon">
                                    <i class="fa fa-users" style="margin-top: 18px;"></i>
                                </span>
                                <div class="sps--div">
                                    <p class="allStory-div-p" style="float: left;">Friends</p>
                                    <div class="sps---div">
                                        <input class="" type="radio" style="cursor: pointer;">
                                    </div><br>
                                    <p class="sps-p" style="margin-left: -50px;">Only your Friends</p>
                                </div>
                            </div>
                            <div class="sps----div">
                                <span class="story-setting-span m-icon">
                                    <i class="fa fa-user" style="margin-top: 18px;"></i>
                                </span>
                                <div class="sps--div">
                                    <p class="allStory-div-p sps-div-p">Custom</p>
                                    <div class="sps---div">
                                        <input class="" type="radio" style="cursor: pointer;">
                                    </div><br>
                                    <p class="sps-p">Choose People to view your Story</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="sps-----div">
                                <span class="story-setting-span m-icon"">
                                    <i class="fa fa-user" style="margin-top: 18px;"></i>
                                </span>
                                <div class="sps--div" style="padding-top: 19px !important">
                                    <p class="allStory-div-p" style="float: left;">Hide My Story From</p><br>
                                    <div class="sps---div">
                                        <i class="fa fa-angle-right sps-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-input cancel-div" style="padding-right: 15px;">
                            <a href="#" class="cancel-a cancel-settings">Cancel Setting</a>
                            <button class="btn btn-primary post-submit cancel-button" type="submit">Save</button>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="allStory--div">
                <input type="text" class="allStory-input" name="story_reply" placeholder="Reply...">
                <button type="button" id="20" class="allStory-button keep btn btn-primary">
                    <i class="fa fa-telegram" style="margin-left: -10px;"></i>
                </button>
            </div>
            </div>
        <div>
    </div>
</div>
    </div></div>