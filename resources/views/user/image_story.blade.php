<div class="col-lg-12 keep images-mdiv">
    <div class="col-lg-3">
        <div class="story-sd-div" style="height: 52px !important">
            <span class="m-icon close-tudiv" id="m-icon"><i class="ti-close"></i></span>
            <div class="">
                <a title="" href="/"><img src="/assets/images/logo.png" alt=""></a>
            </div>
        </div>
        <div class="" style="margin-top: 30px;"> 
            <div style="height: 43px;">
                <p class="story--p">Your Story</p>
                <span class="story--span cog-span m-icon">
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
                <hr style="margin-top: 80px;">
                <div>
                    <span class="story--fig m-icon" style="width: 13% !important">
                        <i style="font-size: 18px;" class="fa ti-text"></i>
                    </span>
                    <div class="story--p-div">Add Text</div>
                </div>
            </div>
        </div>
    </div>
    <div class="sup-col3-bdiv">
        <hr>
        <div>
            <button class="btn btn-default sup-col3-bdivb1">Cancel</button>
            <button class="btn btn-primary sup-col3-bdivb2">Save Story</button>
        </div>
    </div>
    <div class="col-lg-9" style="background:#eee">
        <div class="st-header-div">
            <div class="st-header-mdiv">
                <div class="">
                    <span class="story--span m-icon user-img new--style">
                        <i class="fa fa-caret-down"></i>
                        @include('/user/popup_navbar')
                    </span>
                    <span class="story--span m-icon new--style">
                        <i class="fa fa-bell" style="font-size: 17px;"></i>
                    </span>
                    <span class="story--span m-icon new--style">
                        <i class="ti-plus" style="font-size: 18px;"></i>
                    </span>
                </div>
            </div> 
        </div>
        <div class="sup-div">
            <p class="sup-p">Preview</p>
            <div class="col-md-12 sup--div">
                <div class="col-md-6 sup---div">
                    <div id="sup-tdiv">
                        <img id="story-result" class="story-image keep" />
                    </div>
                </div>
            </div>
        <div>
    </div>
</div>

</div></div>