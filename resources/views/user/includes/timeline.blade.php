<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<section class="sec">
    @php
        $user_sec = Auth::user()->secrete_id;
        $id = App\User::where("secrete_id", $user->secrete_id)->firstOrFail();
    @endphp
    <div class="feature-photo">
        @if ($user_sec != $user->secrete_id)
            @if ( $check_friend == null)
                <div class="add-btn">
                    {{-- <span>1205 followers</span> --}}
                    <form action="/profile/friend-request/{{ $id->id }}" method="POST">
                        @csrf
                        <button data-ripple="" type="submit">Add Friend</button>
                    </form>
                </div>
            @elseif( $check_friend->request_status == "pending")
                <div class="add-btn">
                    {{-- <span>1205 followers</span> --}}
                    <form action="/profile/cancel-request/{{ $check_friend->id }}" method="POST">
                        @csrf
                        <button data-ripple="" type="submit">Cancel Request</button>
                    </form>
                </div>
            @elseif( $check_friend->request_status == "accepted")
                <div class="add-btn">
                    {{-- <span>1205 followers</span> --}}
                    <div class="dropdown">
                        <button class="btn btn-blue dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Friends
                             <i class="fa fa-user"></i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <form  action="/profile/cancel-request/{{ $check_friend->id }}" method="POST">
                                @csrf
                                <button class="dropdown-item">Unfriend</button>
                            </form>
                            <button class="dropdown-item">Message</button>
                            <button class="dropdown-item">Unfriend</button>
                        </div>
                      </div>
                </div>
               
                @else
            @endif
        @endif

        @if ($user->user_cover_image == null)
            <figure class="timeline-figure"></figure>
            @else
            <a href="/cover/{{ substr($user->user_cover_image, 0, 10) }}.{{$user->secrete_id}}.jpg">
                <figure class="timeline-figure">
                    <img src="{{asset("/cover")}}/{{ substr($user->user_cover_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="sub" alt="{{$user->username}}" title="{{$user->username}}">
                </figure>
            </a>
        @endif
        @if ($user_sec == $user->secrete_id)
            <form class="edit-phto">
                <i class="fa fa-camera-retro"></i>
                <label class="fileContainer">
                    Edit Cover Photos
                    <button type="button" class="btn btn-default profile-button" data-toggle="modal" data-target="#uploadCoverPic"></button>
                </label>
            </form>
        @else
            
        @endif
       
        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        @if ($user_sec == $user->secrete_id && $user->user_image == null)
                            <figure>
                                <img src="/assets/images/default.png" class="profile-picture" alt="{{$user->username}}" title="{{$user->username}}">
                                <form class="edit-phto" action="/profile/{{$user->secrete_id}}" method="POST" enctype="multipart/form-data">
                                    <!-- Button to Open the Modal -->
                                    <i class="fa fa-camera-retro"></i>
                                    <label class="fileContainer">
                                        Edit Display Photo
                                        <button type="button" class="btn btn-default profile-button" data-toggle="modal" data-target="#uploadPhoto"></button>
                                    </label>
                                </form>
                            </figure>
                            @elseif($user_sec == $user->secrete_id && $user->user_image == 1)
                            <figure>
                                <img src="{{asset("/users")}}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="profile-picture" alt="{{$user->username}}" title="{{$user->username}}">
                                <form class="edit-phto" action="/profile/{{$user->secrete_id}}" method="POST" enctype="multipart/form-data">
                                    <!-- Button to Open the Modal -->
                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    Edit Display Photo
                                    <button type="button" class="btn btn-default profile-button" data-toggle="modal" data-target="#uploadPhoto"></button>
                                </label>
                            </form>
                            </figure>
                            @elseif($user_sec != $user->secrete_id && $user->user_image == null)
                            <figure>
                                    <img src="/assets/images/default.png" class="profile-picture" alt="{{$user->username}}" title="{{$user->username}}">
                            </figure>
                            @else
                            <figure>
                                <a href="/users/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg">
                                    <img src="{{asset("/users")}}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" class="profile-picture" alt="{{$user->username}}" title="{{$user->username}}">
                                </a>
                            </figure>
                        @endif

                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                              <h2 style="font-weight: 700;">{{ $user->name }}</h5>
                            </li>
                            <li>
                                {{-- {{ $_SERVER['PHP_SELF']  }} --}}
                                <a  @if ($_SERVER['PHP_SELF'] == "/index.php/time-line")
                                class="active"
                                @else
                                class=""
                                @endif  href="/time-line" title="" data-ripple="">Timeline</a>

                                <a  @if ($_SERVER['PHP_SELF'] == "/index.php/timeline-images")
                                class="active"
                                @else
                                class=""
                                @endif  href="/{{$user->secrete_id}}/timeline-images" title="" data-ripple="">Photos</a>

                                <a  @if ($_SERVER['PHP_SELF'] == "/index.php/timeline-videos")
                                class="active"
                                @else
                                class=""
                                @endif  href="/timeline-videos" title="" data-ripple="">Videos</a>

                                <a  @if ($_SERVER['PHP_SELF'] == "/index.php/timeline-friends")
                                class="active"
                                @else
                                class=""
                                @endif  href="/timeline-friends" title="" data-ripple="">Friends</a>

                                <a  @if ($_SERVER['PHP_SELF'] == "/index.php/timeline-groups")
                                class="active"
                                @else
                                class=""
                                @endif  href="/timeline-groups" title="" data-ripple="">Groups</a>

                                <a  @if ($_SERVER['PHP_SELF'] == "/index.php/about")
                                class="active"
                                @else
                                class=""
                                @endif  href="/about" title="" data-ripple="">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
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
            <form action="/profile/{{$user->secrete_id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="fileContainer">
                    <button class="btn btn-primary profile-but  col-lg-12 col-md-12 col-sm-12">
                    <i class="fa fa-plus "></i> Upload Photo
                    <input type="file" required name="user_image"></button>
                </label>
                <button class="btn btn-junior profile-but col-lg-5 col-md-5 col-sm-12">
                <i class="fa fa-frame"></i> Add Frame
                </button>
         </div>
         <div class="text-center">
             <p class="errors">{{$errors->first("user_image")}}</p>
         </div>
        <!-- Modal footer -->
        <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" >Save</button>
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
            <form action="/profile/{{$user->secrete_id}}/cover" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="fileContainer">
                    <button class="btn btn-primary profile-but  col-lg-12 col-md-12 col-sm-12">
                    <i class="fa fa-plus "></i> Upload Photo
                    <input type="file" required name="user_cover_image"></button>
                </label>
                <button class="btn btn-junior profile-but col-lg-5 col-md-5 col-sm-12">
                <i class="fa fa-frame"></i> Add Frame
                </button>
         </div>
         <div class="text-center">
             <p class="errors">{{$errors->first("user_cover_image")}}</p>
         </div>
        <!-- Modal footer -->
        <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" >Save</button>
            </form>
        </div>

      </div>
    </div>
  </div>

</div>

<script>
    $(document).ready(function(){
      $("#myBtn").click(function(){
        $("#myModal").modal();
      });
    });
    </script>
