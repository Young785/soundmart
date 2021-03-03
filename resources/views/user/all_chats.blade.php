@php
    $msgs = App\Message::where("sender_id", $from)
            ->where("receiver_id", $to)
            ->orWhere("sender_id", $to)
            ->where("receiver_id", $from)->get();
    $auth = App\User::where("id", $from)->first();
    $user = App\User::where("id", $to)->first();
@endphp
<div class="text-center">
    <li>
        <div class="chat-thumb"><img src="{{ asset("users") }}/{{ substr($auth->user_image, 0, 10) }}.{{$auth->secrete_id}}.jpg" alt="{{ $auth->name }}" title="{{ $auth->name }}"></div>
        <div class="current-time text-center">
            <b>{{ $auth->name }}</b><br>
            {{ Carbon\Carbon::now() }}
            <p>Chat with <b>{{ $user->name }}</b> below !</p>
        </div>
    </li> 
</div>
@foreach ($msgs as $msg)

    @if ($msg->sender_id == $from)
        @if ($auth->user_image == null)
            <li class="me">
                <a href="/profile/{{$auth->secrete_id}}">
                    <div class="chat-thumb"><img src="/assets/images/default.png" alt="{{ $auth->name }}" title="{{ $auth->name }}"></div>
                </a>
                    <div class="notification-event">
                    <span class="chat-message-item me-msg">
                        {{ $msg->message }}
                    </span>
                    <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">{{ $msg->created_at->diffForHumans() }}</time></span>
                </div>
            </li>
        @else
            <li class="me">
                <a href="/profile/{{$auth->secrete_id}}">
                <div class="chat-thumb"><img src="{{ asset("users") }}/{{ substr($auth->user_image, 0, 10) }}.{{$auth->secrete_id}}.jpg" alt="{{ $auth->name }}" title="{{ $auth->name }}"></div>
                </a>
                <div class="notification-event">
                    <span class="chat-message-item me-msg">
                        {{ $msg->message }}
                    </span>
                    <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">{{ $msg->created_at->diffForHumans() }}</time></span>
                </div>
            </li>
        @endif
       
    @elseif($msg->sender_id == $to)
    @if ($user->user_image == null)
        <li class="you">
            <a href="/profile/{{$user->secrete_id}}">
                <div class="chat-thumb"><img src="/assets/images/default.png" alt="{{ $user->name }}"  title="{{ $user->name }}"></div>
            </a>
                <div class="notification-event">
                <span class="chat-message-item you-msg">
                    {{ $msg->message }}
                </span>
                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">{{ $msg->created_at->diffForHumans() }}</time></span>
            </div>
        </li>
        @else
        <li class="you">
            <a href="/profile/{{$user->secrete_id}}">
                <div class="chat-thumb"><img src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" alt="{{ $user->name }}"  title="{{ $user->name }}"></div>
            </a>
                <div class="notification-event">
                <span class="chat-message-item you-msg">
                    {{ $msg->message }}
                </span>
                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">{{ $msg->created_at->diffForHumans() }}</time></span>
            </div>
        </li>
    @endif
    @else
        <div class="text-center">
            <li>
                <div class="chat-thumb"><img src="{{ asset("users") }}/{{ substr($auth->user_image, 0, 10) }}.{{$auth->secrete_id}}.jpg" alt="{{ $auth->name }}" title="{{ $auth->name }}"></div>
                <div class="current-time text-center">
                    {{ Carbon::now() }}
                </div>
            </li> 
        </div>
    @endif
    
@endforeach
