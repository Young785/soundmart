@php
    $id = $item->data['id'];
    $user = App\Models\User::where("id", $id)->first();
@endphp
<a href="{{ $item->data['url']}}" class="dropdown-item d-flex pb-3">
    @if ($user->user_image == null)
        <span class="avatar brround mr-3 align-self-center cover-image" data-image-src="/admin/assets/images/faces/male/41.jpg"></span>
    @else
        <span class="avatar brround mr-3 align-self-center cover-image" data-image-src="/vendor/assets/users/{{ Auth::user()->user_image}}"></span>
    @endif
    <div>
        <strong>{{ $user->fname }}</strong> {{ $item->data['notification'] }}
        <div class="small text-muted">{{ $item->created_at->diffForHumans() }}</div>
    </div>
</a>