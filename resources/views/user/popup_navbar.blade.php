<div class="user-setting dropDiv">
    <div class="dropUser">
        <a href="/profile/4722497077" title="">
            <figure style="float: left">
                <img src="http://127.0.0.1:8000/users/1615144360.4722497077.jpg" class="req-image" style="height: 50px;" alt="Haryormekun Hariyo">
            </figure>
            <div class="drop--p">
                <p class="dropName">{{ $user->name }}</p>
            <p class="dropPtag">View Profile</p>
            </div>
        </a>
    </div>
    <hr style="margin-top: 0px !important">
    <a href="/profile/4722497077/edit-profile" class="drop--a" title="">
        <i class="ti-pencil-alt drop--i"></i>
        <p class="drop-a-p">edit profile</p>
        <span class="ryt-span">
            <i class="fa fa-angle-double-right ryt-i"></i>
        </span>
    </a>
    <a href="/accout-setting" title="" class="drop--a">
        <i class="ti-settings drop--i"></i>
        <p class="drop-a-p">account setting</p>
        <span class="ryt-span">
            <i class="fa fa-angle-double-right ryt-i"></i>
        </span>
    </a>
    <a href="/logout" title="" class="drop--a">
        <i class="ti-power-off drop--i"></i>
        <p class="drop-a-p">log out</p>
    </a>
</div>