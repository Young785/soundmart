@php
    $id = session("result");
   $auth = Auth::user()->id;
    $post = App\Post::where("id", $id->id)->first();
    $item = App\User::where("id", $auth)->first();
@endphp
<div class="more" id="new-post">
        <div class="central-meta item" id="post-{{ $post->post_id }}">
            <div class="user-post">
                <div class="friend-info">
                    @if ($item->user_image == null)
                        <figure>
                            <a href="/profile/{{$item->secrete_id}}">
                                <img src="/assets/images/default.png" alt="{{ $item->name }}" title="{{ $item->name }}">
                            </a>
                        </figure>
                        @else
                        <figure>
                            <a href="/profile/{{$item->secrete_id}}" title="">
                                <img src="{{ asset("users") }}/{{ substr($item->user_image, 0, 10) }}.{{$item->secrete_id}}.jpg"  class="req-image" style="height: 50px;"  title="{{ $item->name }}">
                            </a>
                        </figure>
                    @endif
                    @php
                        $likes = App\Like::where("post_id", $post->post_id)->where("user_id", Auth::user()->id)->get();
                        $dates = App\Post::where("post_id", $post->post_id)->get();
                        $count_likes = App\Like::where("post_id", $post->post_id)->count();
                        
                        // $likes = App\Like::where("post_id", $item->post_id)->where("user_id", Auth::user()->id)->get();
                        // dd($likes);
                    @endphp
                    <div class="friend-name">
                        <ins><a href="/profile/{{$item->secrete_id}}" title="">{{ $item->name }}</a></ins>
                        @foreach ($dates as $date)
                        <span>published: {{ $date->updated_at->diffForHumans() }}</span>
                            
                        @endforeach
                     
                  
           {{-- <span class="likes_count">{{ count($likes) }} likes</span> --}}
                    </div>  
                    <div class="description">
                        <p>
                            {{ $post->image_name }}
                        </p>
                    </div>
                    <div class="post-meta" >
                        @php
                            $image_explode = explode("/", $post->image);
                            $count = count($image_explode);
                        @endphp
                            @foreach ($image_explode as $value)
                                @if ($count == '')
                                @elseif ($count == 1)
                                    <img src="{{ asset("posts") }}/{{ $value }}"  alt="">
                                @elseif($count == 2)
                                    <img src="{{ asset("posts") }}/{{ $value }}" class="two-post"  alt="">
                                @endif

                            @endforeach
                            @if ($count == 3)
                                <img src="{{ asset("posts") }}/{{ $image_explode[0] }}" class="one-three-post"  alt="">
                                <img src="{{ asset("posts") }}/{{ $image_explode[1] }}" class="three-post"  alt="">
                                <img src="{{ asset("posts") }}/{{ $image_explode[2] }}" class="three-post"  alt="">
                            @endif
                            @if ($count == 4)
                                <img src="{{ asset("posts") }}/{{ $image_explode[0] }}" class="one-three-post"  alt="">
                                <img src="{{ asset("posts") }}/{{ $image_explode[1] }}" class="four-post"  alt="">
                                <img src="{{ asset("posts") }}/{{ $image_explode[2] }}" class="four-post"  alt="">
                                <img src="{{ asset("posts") }}/{{ $image_explode[3] }}" class="four-post"  alt="">
                            @endif

                            @if ($count == 5 || $count == 6)
                                {{-- {{ $count }} --}}
                                    <img src="{{ asset("posts") }}/{{ $image_explode[0] }}" class="one-five-post"  alt="">
                                    <img src="{{ asset("posts") }}/{{ $image_explode[1] }}" class="one-five-post"  alt="">
                                    <img src="{{ asset("posts") }}/{{ $image_explode[2] }}" class="five-post"  alt="">
                                    <img src="{{ asset("posts") }}/{{ $image_explode[3] }}" class="five-post"  alt="">
                                    <img src="{{ asset("posts") }}/{{ $image_explode[4] }}" class="five-post"  alt="">
                            @endif
                            <div class="we-video-info uf_div">
                                <ul style="padding-left: 40px;">
                                    <span>
                                        <span id="dislike_{{ $post->post_id }}"></span>
                                        <span id="like_{{ $post->post_id }}"></span>

                                        @if (count($likes) != null)
                                            <!-- user already likes post -->
                                            <li class="dislike-li" data-id="{{ $post->post_id }}">
                                                <span class="dislike" title="dislike">
                                                    <i class="fa fa-thumbs-up dislike-thumb"></i>
                                                    <span class="dislike-span">Like</span>
                                                </span>

                                                <span class="like hide" data-id="{{ $post->post_id }}" title="like">
                                                    <i class="fa fa-thumbs-up like-thumb"></i>
                                                    <span class="like-span">Like</span>
                                                </span>
                                            </li>
                                            @else
                                                <!-- user has not yet liked post -->
                                                <li class="like-li" data-id="{{ $post->post_id }}">
                                                    <span class="like" title="like">
                                                        <i class="fa fa-thumbs-up like-thumb"></i>
                                                        <span class="like-span">Like</span>
                                                    </span>

                                                    <span class="dislike hide" data-id="{{ $post->post_id }}" title="dislike">
                                                        <i class="fa fa-thumbs-up dislike-thumb"></i>
                                                        <span class="dislike-span">Like</span>
                                                    </span>
                                                </li> 
                                        @endif
                                    </span>
                                    <li>
                                        <span class="comment" id="com-tooltip" data-toggle="tooltip" title="Comments">
                                            <i class="ti-comment comment-i"></i>
                                            <span class="comment-span">Comments</span>
                                        </span>
                                    </li>
                                    <li class="social-media">
                                        <div class="menu share-menu share-div">
                                        <div class="btn trigger sharepost"><i class="fa fa-share"></i></div>
                                        <span class="share-span">Share</span>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <div class="coment-area">
                    <ul class="we-comet" id="dis_comment">
                        @php
                            $comments = App\Comment::rightjoin("users", "comments.user_id", "=","users.id")->where("post_id", $post->post_id)->get();
                        @endphp

                          @foreach ($comments as $comment)
                        @php
                        $date = App\Comment::where("comment_id", $comment->comment_id)->first();
                        $com_id = $comment->comment_id;
                        @endphp
                        <li>
                            @if ($comment->user_image == null)
                                <div class="comet-avatar">
                                    <img src="/assets/images/default.png" alt="">
                                </div>
                            @else
                                <div class="comet-avatar">
                                    <img src="{{ asset("users") }}/{{ substr($comment->user_image, 0, 10) }}.{{$comment->secrete_id}}.jpg" alt="">
                                </div>
                            @endif
                            <div class="we-comment comment-div">
                                <div class="coment-head">
                                    <h5><a href="time-line.html" title="">{{ $comment->name }}</a></h5>
                                    <span>{{ $date->created_at->diffForHumans() }}</span>
                                    <a class="we-reply" href="#comment-{{ $com_id }}"
                                        id="com_id" data-commentid='$com_id' name='com_reply' onclick='com({{ $com_id}})' data-respondelement='respond'
                                        aria-label='Reply to' title="Reply">
                                        <i class="fa fa-reply"></i>
                                    </a>
                                </div>

                                <p>{{ $comment->comment }}</p>
                            </div>
                                <div class='keep reply reply-div' id='{{ $com_id }}'>
                                    <div class="post-reply-box">
                                        <form method="post" name="commentForm" action="/comment/{{ $post->post_id }}">
                                            @csrf
                                            <p class="lead emoji-picker-container">
                                                <input class="comment-message comment-input" name="comment" style="display: block !important" placeholder="Write a REPLY..." data-emojiable="true" id="emojiinput">
                                                <input hidden class="post_id" name="post_id" value="{{ $post->post_id }}" data-id="{{ $post->post_id }}">
                                                <input type="hidden" name="commentId" class="commentId" value="0" />
                                            </p>
                                            <button type="submit" class="comment-button">Reply</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        <li>
                            <a href="#" title="" class="showmore underline">more comments</a>
                        </li>
                   
    <li class="post-comment">
        @if ($item->user_image == null)
        <a href="/profile/{{ $item->secrete_id }}">
            <div class="comet-avatar">
                <img src="/assets/images/default.png" alt="">
            </div>
        </a>
        @else
        <a href="/profile/{{ $item->secrete_id }}">
            <figure class="comet-avatar">
                <img src="{{ asset("users") }}/{{ substr($item->user_image, 0, 10) }}.{{$item->secrete_id}}.jpg"  class="req-image" style="height: 50px;"  alt="">
            </figure>
        </a>    
        @endif
        <div class="post-comt-box">
            <form method="POST" name="commentForm" class="comment-form">
                {{ csrf_field() }}
                <p class="lead emoji-picker-container">
                    <input  class="comment-message comment-input" name="comment" type="text" style="display: block !important" placeholder="Write a comment..." data-emojiable="true" data-emoji-input="unicode" id="emojiinput">
                    <input hidden class="post_id" name="post_id" value="{{ $post->post_id }}">
                    <input type="hidden" name="commentId" class="commentId" value="0" />
                </p>
                <p id="empty-comment"></p>
                <button  type="submit" id="comment-button" class="comment-button">Comment</button>
            </form>
        </div>
    </li>

</ul>
</div>
</div>
</div>
</div>

<script src="/assets/js/jquery.min.js" type="text/javascript"></script>

<script src="/assets/js/my.js"></script>
<script src="/assets/js/function.js" type="text/javascript"></script>
@include('/user/includes/footer')
