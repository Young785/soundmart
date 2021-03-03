@php
    $query = session()->get('query');
    
    $data = App\Message::where("id", $query->id)->first();
    $auth = App\User::where("id", $data->sender_id)->first();
@endphp

@if ($auth->user_image == null)
    <li class="me">
        <a href="/profile/{{$auth->secrete_id}}">
            <div class="chat-thumb"><img src="/assets/images/default.png" alt="{{ $auth->name }}" title="{{ $auth->name }}"></div>
        </a>
        <div class="notification-event">
            <span class="chat-message-item">
                {{ $data->message }}
            </span>
            <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">{{ $data->created_at->diffForHumans() }}</time></span>
        </div>
    </li>
    @else
    <li class="me">
        <a href="/profile/{{$auth->secrete_id}}">
            <div class="chat-thumb"><img src="{{ asset("users") }}/{{ substr($auth->user_image, 0, 10) }}.{{$auth->secrete_id}}.jpg" alt="{{ $auth->name }}" title="{{ $auth->name }}"></div>
        </a>
            <div class="notification-event">
            <span class="chat-message-item">
                {{ $data->message }}
            </span>
            <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">{{ $data->created_at->diffForHumans() }}</time></span>
        </div>
    </li>
@endif
