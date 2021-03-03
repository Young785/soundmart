 <li id="notification">
    <a href="{{ $item->data['url'] }}" title="">
        <img src="/assets/images/resources/thumb-1.jpg" alt="">
        <div class="mesg-meta">
            <span>{{ $item->data['notification'] }}</span>
            <i>{{ $item->created_at->diffForHumans() }}</i>
        </div>
    </a>
    <span class="tag green">New</span>
</li>