<div class="story-upload keep">
    <link rel="stylesheet" href="/assets/css/style.css">
    <div class="col-lg-12">
        <div class="col-lg-3 story-sd-nav">
            <div class="story-sd-div">
                <span class="m-icon close-story" id="m-icon"><i class="ti-close"></i></span>
                <div class="">
                    <a title="" href="/"><img src="/assets/images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="" style="margin-top: 30px;"> 
                <div style="height: 43px;">
                    <p class="story--p">Your Story</p>
                    <span class="story--span m-icon">
                        <i class="fa fa-cog"></i>
                    </span>
                </div>
                <div style="float: left">
                    <figure class="story--fig">
                        @if ($user->user_image == null)
                            <img src="/assets/images/default.png" style="border-radius: 100%" alt="">
                            @else
                            <img src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" style="border-radius: 100%" alt="">
                        @endif
                    </figure>
                    <div class="story--p-div">Haryormekun Hariyor</div>
                </div>
            </div>
        </div>
        @include('/user/includes/popupnav')
            <div style="padding: 125px;margin-left: 360px;">
                <label class="fileContainer">
                    <input type="file" id="story-image">
                    <div class="st-fdiv">
                        <div class="st-sdiv">
                            <span class="st-span"><i class="ti-camera" style="color: #000;font-weight: bold;"></i></span><br>
                            <span>Create a Photo Story</span>
                        </div>
                    </div>
                </label>
                <div class="st-fdiv2">
                    <div class="st-sdiv">
                        <span class="st-span"><i class="ti-text" style="color: #000;font-weight: bold;"></i></span><br>
                        <span>Create a Photo Story</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
