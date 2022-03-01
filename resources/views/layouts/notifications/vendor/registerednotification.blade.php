@php
    $id = $item->data['id'];
    $user = App\Models\User::where("id", $id)->first();
@endphp
<li class="py-2 mb-1 border-bottom">
    <a href="{{ $item->data['url']}}" class="d-flex">
        @if ($user->user_image == null)
            <img class="avatar rounded-circle" src="/vendor/assets/images/xs/avatar1.svg" alt="">
        @else
            <img class="avatar rounded-circle" src="/vendor/assets/users/{{ $user->user_image}}" alt="">
        @endif
        <div class="flex-fill ms-2">
            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">{{ $user->fname }}</span> <small>{{ $item->created_at->diffForHumans() }}</small></p>
            <span class="">{{ $item->data['notification'] }}
                @if ($item->read_at == null)
                    <span class="badge bg-warning">New</span>
                @endif
            </span>
        </div>
    </a>
</li>