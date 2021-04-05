@php
    $id = $user->id;
    $friends =  App\User::join("friends", "users.id","=", "friends.sender_id")
        ->where("receiver_id", $id)->where(["request_status" => "accepted"])
        ->latest("friends.created_at")->limit(9)->get();
        // dd($friends);
@endphp
<div class="widget">
        <h4 class="widget-title" style="width: 50%">Friends({{ count($friends) }})</h4>
        <a href="/{{$user->secrete_id}}/timeline-friends" class="recent-a">View all Friends</a>
        <ul class="recent-photos">
            {{-- @if (empty($friends->user_image))

                @else --}}
                    @foreach ($friends as $value)
                        @if ($value->user_image != null)
                            <li>
                                <a class="" href="/profile/{{ $value->secrete_id }}" title="">
                                    <img src="{{ asset("/users")}}/{{ substr($value->user_image, 0, 10) }}.{{$value->secrete_id}}.jpg" class="recent-img" alt=""></a>
                                <a class="" href="/profile/{{ $value->secrete_id }}" title="">
                                    <span class="friends-img">{{ $value->name }}</span>
                                </a>
                            </li>
                        @else
                            <li>
                                <a class="" href="/profile/{{ $value->secrete_id }}" title="">
                                    <img src="/assets/images/default.png" class="recent-img" alt=""></a>
                                <a class="" href="/profile/{{ $value->secrete_id }}" title="">
                                    <p class="friends-img">{{ $value->name }}</p>
                                </a>
                            </li>
                        @endif
                    @endforeach
            {{-- @endif --}}
        </ul>
    </div><!-- recent photos-->

