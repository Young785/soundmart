<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<section class="sec col-lg-12">
    @php
    
        $user_sec = Auth::user()->secrete_id;
        $user_details = Auth::user();
        $id = App\User::where("secrete_id", $user->secrete_id)->firstOrFail();
    @endphp
    <div class="feature-photo">
  
        <div class="col-lg-2"></div>
        <div>
            <div class="append-img"></div>

            @if ($user->user_cover_image == null)
                <figure class="timeline-figure"></figure>
                @else
                <a href="/cover/{{ substr($user->user_cover_image, 0, 10) }}.{{$user->secrete_id}}.jpg">
                    <div>
                        <figure class="timeline-figure previous-cover col-lg-8">
                            <img src="{{asset("/cover")}}/{{ substr($user->user_cover_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="sub" alt="{{$user->name}}" title="{{$user->name}}">
                        </figure>
                    </div>
                </a>
            @endif
        </div>
        <div class="col-lg-2"></div>
       <span style="
    /* float: right; */
    margin-left: 20px;
">
    <i class="fa fa-reply" style="
    color: #b4b6b8;
    font-size: 16px;
    letter-spacing: 5px;
" title="remove"></i>
<i class="fa fa-trash" style="
    color: #b4b6b8;
    font-size: 16px;
    letter-spacing: 5px;
" title="remove"></i><i class="fa fa-share" style="
    color: #b4b6b8;
    font-size: 16px;
    letter-spacing: 5px;
" title="remove"></i>

</span>
        <div class="col-lg-12 col-sm-3">
            <div class="col-lg-7 col-sm-3">
                <div class="user-avatar" style="margin-right: 30px;">
                    @if ($user_sec == $user->secrete_id && $user->user_image == null)
                            <div class="user-image">
                                <figure class="previous-image">
                                    <img src="/assets/images/default.png" class="profile-picture" alt="{{$user->name}}" title="{{$user->name}}">
                                    <form class="edit-phto">
                                        <!-- Button to Open the Modal -->
                                        <i class="fa fa-camera-retro"></i>
                                        <label class="fileContainer">
                                            Edit Display Photo
                                            <button type="button" class="btn btn-default keep profile-button" data-toggle="modal" data-target="#uploadPhoto"></button>
                                        </label>
                                    </form>
                                </figure>
                            </div>
                            
                            @elseif($user_sec == $user->secrete_id && count([$user->user_image]) == 1)
                            <div class="user-image">
                                <figure class="previous-image">
                                    <img src="{{asset("/users")}}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="profile-picture" alt="{{$user->name}}" title="{{$user->name}}">
                                    <form class="edit-phto">
                                            <!-- Button to Open the Modal -->
                                        <i class="fa fa-camera-retro"></i>
                                        <label class="fileContainer">
                                            Edit Display Photo
                                            <button type="button" class="btn btn-default keep profile-button" data-toggle="modal" data-target="#uploadPhoto"></button>
                                        </label>
                                    </form>
                                </figure>
                            </div>
                            @elseif($user_sec != $user->secrete_id && $user->user_image == null)
                            <figure>
                                    <img src="/assets/images/default.png" class="profile-picture" alt="{{$user->name}}" title="{{$user->name}}">
                            </figure>
                            @else
                            <figure>
                                <a href="/users/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg">
                                    <img src="{{asset("/users")}}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="profile-picture" alt="{{$user->name}}" title="{{$user->name}}">
                                </a>
                            </figure>
                        @endif
                        
                    {{-- <figure>
                        <img src="/assets/images/resources/user-avatar.jpg" alt="">
                        <form class="edit-phto">
                            <i class="fa fa-camera-retro"></i>
                            <label class="fileContainer">
                                Edit Display Photo
                                <input type="file">
                            </label>
                        </form>
                    </figure> --}}
                </div>
            </div>
            <div id="add_btn" class="add-btn"></div>
            <div id="conf_req"></div>
            <div id="cancel-req" class="add-btn"></div>
            <input type="text" hidden value="{{ $id->id }}" class="f-input">
            @if ($user_sec != $user->secrete_id)
                @if ( $check_friend == null)
                    <div class="add-btn">
                        {{-- <span>1205 followers</span> --}}
                            <button data-ripple="" class="friends-button add-friend" data-id="{{ $id->id }}" type="submit">Add Friend</button>
                    </div>
                @elseif( $check_friend->request_status == "pending" && $check_friend->sender_id == $user_details->id)
                <div class="add-btn">
                    <button data-ripple="" class="friends-button dropdown-item cancel-request"value="{{ $check_friend->id }}" type="submit">Cancel Request</button>
                </div>    
                @elseif( $check_friend->request_status == "pending" && $check_friend->sender_id != $user_details->id)
                <div class="add-btn respond-div">
                    {{-- <span>1205 followers</span> --}}
                    <div class="dropdown">
                        <button class="btn btn-blue dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Respond
                             <i class="fa fa-phone"></i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button data-ripple="" class="dropdown-item confirm-request"value="{{ $check_friend->id }}" type="submit">Accept Request</button>
                            <button data-ripple="" class="dropdown-item cancel-request"value="{{ $check_friend->id }}" type="submit">Cancel Request</button>
                            <button class="dropdown-item">Message</button>
                        </div>
                      </div>
                </div>    
                @elseif( $check_friend->request_status == "accepted")
                    <div class="add-btn friends-div">
                        {{-- <span>1205 followers</span> --}}
                        <div class="dropdown">
                            <button class="btn btn-blue dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Friends
                                 <i class="fa fa-user timeline-i"></i></button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <button class="dropdown-item cancel-request" value="{{ $check_friend->id }}" type="submit">Unfriend</button>
                                <button class="dropdown-item">Message</button>
                            </div>
                          </div>
                    </div>
                   
                    @else
                @endif
            @endif
            @if ($user_sec == $user->secrete_id)
                <div class="{{ Hash::make("editCover") }}">
                    <div class="edit-cover">
                        <form class="edit-phto">
                            <i class="fa fa-camera-retro"></i>
                            <label class="fileContainer">
                                Edit Cover Photos
                                <button type="button" class="btn btn-default profile-button keep" data-toggle="modal" data-target="#uploadCoverPic"></button>
                            </label>
                        </form>
                    </div>
                </div>
            @else
        
            @endif
            <div class="timeline--divname">
                <h2 class="timeline-name">{{ $user->name }}</h2>
                @if ($user->secrete_id == $user_sec)
                    <h4 class="timelin-h4"><a href="">Add Bio</a></h4>
                    @else
                    
                @endif
            </div>
        </div>
        
    
        {{-- <div class="container-fluid">
            <div class="row merged">
                <div class="made-center">
                    <div class="user-avatar">   
                        <div>
                        
                        @if ($user_sec == $user->secrete_id && $user->user_image == null)
                            <div class="user-image">
                                <figure class="previous-image">
                                    <img src="/assets/images/default.png" class="profile-picture" alt="{{$user->name}}" title="{{$user->name}}">
                                    <form class="edit-phto">
                                        <!-- Button to Open the Modal -->
                                        <i class="fa fa-camera-retro"></i>
                                        <label class="fileContainer">
                                            Edit Display Photo
                                            <button type="button" class="btn btn-default keep profile-button" data-toggle="modal" data-target="#uploadPhoto"></button>
                                        </label>
                                    </form>
                                </figure>
                            </div>
                            
                            @elseif($user_sec == $user->secrete_id && count([$user->user_image]) == 1)
                            <div class="user-image">
                                <figure class="previous-image">
                                    <img src="{{asset("/users")}}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="profile-picture" alt="{{$user->name}}" title="{{$user->name}}">
                                    <form class="edit-phto">
                                            <!-- Button to Open the Modal -->
                                        <i class="fa fa-camera-retro"></i>
                                        <label class="fileContainer">
                                            Edit Display Photo
                                            <button type="button" class="btn btn-default keep profile-button" data-toggle="modal" data-target="#uploadPhoto"></button>
                                        </label>
                                    </form>
                                </figure>
                            </div>
                            @elseif($user_sec != $user->secrete_id && $user->user_image == null)
                            <figure>
                                    <img src="/assets/images/default.png" class="profile-picture" alt="{{$user->name}}" title="{{$user->name}}">
                            </figure>
                            @else
                            <figure>
                                <a href="/users/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg">
                                    <img src="{{asset("/users")}}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="profile-picture" alt="{{$user->name}}" title="{{$user->name}}">
                                </a>
                            </figure>
                        @endif
                        
                    </div>
                </div> --}}
                {{-- <h2>{{ $user->name }}</h2>
                    </div> --}}
                <div class="col-lg-2"></div>
                <div class="col-lg-8 col-sm-10 type-div">
                    <div class="timeline-info">
                        <ul>
                            <li>
                                {{-- {{ $_SERVER['PHP_SELF']  }} --}}
                                <a  @if ($_SERVER['PHP_SELF'] == "/index.php/{{ $user->secrete_id }}/time-line")
                                class="info-name active"
                                @else
                                class="info-name"
                                @endif  href="/time-line" title="" data-ripple="">Timeline</a>

                                <a  @if ($_SERVER['PHP_SELF'] == "/index.php/{{ $user->secrete_id }}/timeline-images")
                                class="info-name active"
                                @else
                                class="info-name"
                                @endif  href="/{{$user->secrete_id}}/timeline-images" title="" data-ripple="">Photos</a>

                                <a  @if ($_SERVER['PHP_SELF'] == "/index.php/{{ $user->secrete_id }}/timeline-videos")
                                class="info-name active"
                                @else
                                class="info-name"
                                @endif  href="/about" title="" data-ripple="">About</a>

                                <a  @if ($_SERVER['PHP_SELF'] == "/index.php/{{ $user->secrete_id }}/timeline-friends")
                                class="info-name active"
                                @else
                                class="info-name "
                                @endif  href="/timeline-friends" title="" data-ripple="">
                                    Friends
                                <p class="timeline-f-p">({{ count($friends) }})</p>
                                </a>

                                <div class="dropdown infodrop">
                                    <button class="info-drop dropdown-toggle" type="button" data-toggle="dropdown">More Info</button>
                                    <ul class="dropdown-menu drop-menu">
                                        <div class="filter-content">
                                            <div class="pou">
                                                <li class="drop-li"><a href="#storyAchive" class="drop-a">Story Acheive</a></li>
                                            </div>
                                        </div>
                                      <li class="drop-li"><a href="/{{ $user->secrete_id }}/videos" class="drop-a">Videos</a></li>
                                      <li class="drop-li"><a href="/{{ $user->secrete_id }}/sports" class="drop-a">Sports</a></li>
                                      <li class="drop-li"><a href="/{{ $user->secrete_id }}/music" class="drop-a">Music</a></li>
                                      <li class="drop-li"><a href="/{{ $user->secrete_id }}/likes" class="drop-a">Likes</a></li>
                                      <li class="drop-li"><a href="/{{ $user->secrete_id }}/tv-shows" class="drop-a">Tv Shows</a></li>
                                      <li class="drop-li"><a href="/{{ $user->secrete_id }}/events" class="drop-a">Events</a></li>
                                      <li class="drop-li"><a href="/{{ $user->secrete_id }}/movies" class="drop-a">Movies</a></li>
                                      <li class="drop-li"><a href="/{{ $user->secrete_id }}/groups" class="drop-a">Groups</a></li>
                                      <li class="drop-li"><a href="/{{ $user->secrete_id }}/check-ins" class="drop-a">Check Ins</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2"></div>

            </div>
        </div>
    </div>
</section><!-- top area -->

 <!-- The Modal -->
 <div class="modal fade" id="uploadPhoto">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header heading-div">
          <h4 class="modal-title heading">Update Profile Picture</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form id="userImageForm" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="fileContainer">
                    <button class="btn btn-primary profile-but  col-lg-12 col-md-12 col-sm-12">
                    <i class="fa fa-plus "></i> Upload Photo
                    <input type="file" required name="user_image" class="user_image" accept="image/*" onchange="loadUserImage(event)">
                </button>
                </label>
                <button class="btn btn-junior profile-but col-lg-5 col-md-5 col-sm-12">
                    <i class="fa fa-frame"></i> Add Frame
                </button>
         </div>
        <div class="col-lg-8 col-md-12 col-sm-12 col-xl-12 col-xs-12">
            <p><img id="u_imageResult"/></p>
        </div>
         <div class="text-center">
             <p class="errors">{{$errors->first("user_image")}}</p>
         </div>
        <!-- Modal footer -->
        <div class="modal-footer">
                <button type="submit" class="btn btn-secondary userImageButton" data-id="{{$user->secrete_id}}">Save</button>
            </form>
        </div>

      </div>
    </div>
  </div>

</div>

 <!-- The Modal -->
 <div class="modal fade" id="uploadCoverPic">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header heading-div">
          <h4 class="modal-title heading">Update Profile Picture</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form id="userCoverForm" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="fileContainer">
                    <button class="btn btn-primary profile-but  col-lg-12 col-md-12 col-sm-12">
                    <i class="fa fa-plus "></i> Upload Photo
                    <input type="file" required name="user_cover_image" id="user-cover" accept="image/*" onchange="loadCoverImage(event)">
                </button>
                </label>
                <button class="btn btn-junior profile-but col-lg-5 col-md-5 col-sm-12">
                    <i class="fa fa-frame"></i> Add Frame
                </button>
         </div>
         <div class="col-lg-8 col-md-12 col-sm-12 col-xl-12 col-xs-12">
             <p><img id="imageResult"/></p>
        </div>
         <div class="text-center">
             <p class="errors">{{$errors->first("user_cover_image")}}</p>
         </div>
        <!-- Modal footer -->
        <div class="modal-footer">
                <button type="submit" class="btn btn-secondary userCoverButton" data-id="{{ $user->secrete_id }}">Save</button>
            </form>
        </div>

      </div>
    </div>
  </div>
</div>
<script src="/assets/js/jquery.min.js" type="text/javascript"></script>

<script src="/assets/js/function.js" type="text/javascript"></script>
<script src="/assets/js/function_2.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
      $("#myBtn").click(function(){
        $("#myModal").modal();
      });
    });
    </script>