@php
    $post_id = session()->get("post_id");
    $comments = App\Comment::rightjoin("users", "comments.user_id", "=","users.id")->where("post_id", $post_id)->get();
        foreach ($comments as $key => $comment) {
            $date = App\Comment::where("comment_id", $comment->comment_id)->first();
        }
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
                aria-label='Reply to' title="Reply"><i class="fa fa-reply"></i></a>
        </div>

        <p>{{ $comment->comment }}</p>
    </div>
    <div class='keep reply reply-div' id='{{ $com_id }}'>
        <div class="post-reply-box">
            <form method="post" action="/comment/{{ $comment->post_id }}">
                @csrf
                <p class="lead emoji-picker-container">
                    <input required class="comment-input" name="comment" style="display: block !important" placeholder="Write a REPLY..." data-emojiable="true" id="emojiinput">
                </p>
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
                <button type="submit" class="comment-button">Reply</button>
            </form>
        </div>
    </div>
</li>