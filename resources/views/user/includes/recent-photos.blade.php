@php
    $id = $user->id;
    $photos = App\User::where(["id" => $id ])->get();

    foreach ($photos as $key => $value) {
        $image_explode = explode("/", $value->user_image);
        $image_cover_explode = explode("/", $value->user_cover_image);
    }
@endphp
<div class="widget">
        <h4 class="widget-title" style="width: 50%">Recent Photos</h4>
        <a href="/{{$user->secrete_id}}/timeline-images" class="recent-a">View all photos</a>
        <ul class="recent-photos" style="padding: 0px !important">
            @if (empty($image_explode))

                @else
                @foreach ($image_explode as $item)
                    @foreach ($image_cover_explode as $cover)
                        @if ($value->user_image != null && $value->user_cover_image == null)
                            <li>
                                <a class="strip" href="/users/{{ substr($item, 0, 10) }}.{{$user->secrete_id}}.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                    <img src="{{ asset("/users")}}/{{ substr($item, 0, 10) }}.{{$user->secrete_id}}.jpg" class="recent-img" alt=""></a>
                            </li>
                        @elseif($value->user_cover_image != null && $value->user_image == null)
                            <li>
                                <a class="strip" href="/cover/{{ substr($cover, 0, 10) }}.{{$user->secrete_id}}.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                    <img src="{{ asset("/cover")}}/{{ substr($cover, 0, 10) }}.{{$user->secrete_id}}.jpg" class="recent-img" alt=""></a>
                            </li>
                        @elseif($value->user_cover_image != null && $value->user_image != null)
                            <li>
                                <a class="strip" href="/users/{{ substr($item, 0, 10) }}.{{$user->secrete_id}}.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                    <img src="{{ asset("/users")}}/{{ substr($item, 0, 10) }}.{{$user->secrete_id}}.jpg" class="recent-img" alt=""></a>
                            </li>
                            <li>
                                <a class="strip" href="/cover/{{ substr($cover, 0, 10) }}.{{$user->secrete_id}}.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                    <img src="{{ asset("/cover")}}/{{ substr($cover, 0, 10) }}.{{$user->secrete_id}}.jpg" class="recent-img" alt=""></a>
                            </li>
                        @else

                        @endif
                    @endforeach
                @endforeach
            @endif
        </ul>
    </div><!-- recent photos-->

