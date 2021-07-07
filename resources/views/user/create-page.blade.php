<title>Create an Official Page - CHatbook</title>
@include('/user/includes/header')
<div class="theme-layout searcher">
	<div class="postoverlay"></div>
	<div class="responsive-header">
		<div class="mh-head second keep">
			<form class="mh-form" action="/search" method="GET">
                @csrf
				<input placeholder="search" class="m-input" name="q" type="text"/>
				<button href="#/" class="fa fa-search"></button>
			</form>
		</div>
		@include('/user/includes/navbar')
    </div>
</div>
<div>
    <div class="col-lg-3 story-sd-nav">
        <div style="padding: 20px 0px 10px 10px;">
            <p id="cp-p">Pages &gt; Create a Page
            </p>
            <h2 id="cp-h2">Create Pages
            </h2>
            <form action="/create_page" method="POST">
                @csrf
                <div class="cpage-sidebar-div">
                    <p style="    font-size: 14px;
                    color: #464646;
                    font-weight: bold;">Page Information</p>
                    <div>
                        <input type="text" class="form-control" style="border-radius: 5px !important" placeholder="Page Name (required)" name="page_name" id="pg-name">
                        <p id="pn-p"></p>
                    </div>
                    <p style="line-height: 16px;">Here you are required to write the name of your business, brand or organisation or a name that explain more about the page you want to create.</p>
                    <input type="text" class="form-control" style="border-radius: 5px !important" placeholder="Category Name (required)" name="category" id="pg-category">
                    <p style="line-height: 16px;">Use a Category that best describe what type of business or organisation you deal with. You are allowed to add upto 3 Categories.</p>
                    <input type="text" class="form-control" placeholder="Description" style="height: 150px !important;" name="page_description" id="pg-description">
                    <p style="line-height: 16px;">You Can add something about your business, contact info, social media links and other details you see useful.</p>
                    <h3 style="image-h3">Images</h3>
                    <p style="line-height: 16px;">Profile Photo &gt; optional</p>
                    <div>
                        <div class="image-div">
                            <span class="image-span" class="m-icon create-sth">
                                <i class="fa fa-camera" id="ti-plus"></i>
                            </span>
                            <h3 class="image-h3_2">Add a Profile photo</h3>
                            <p style="text-align: center;">or drag and drop</p>
                        </div>
                        <input type="file" class="upload-image" placeholder="Title" name="title" id="pg-name" multiple="">
                    </div>
                    <p style="line-height: 16px;">Cover Photo &gt; optional</p>
                    <div>
                        <div class="image-div">
                            <span class="image-span" class="m-icon create-sth">
                                <i class="fa fa-camera" id="ti-plus"></i>
                            </span>
                            <h3 class="image-h3_2">Add a Cover Photo</h3>
                            <p style="text-align: center;">or drag and drop</p>
                        </div>
                        <input type="file" class="upload-image" placeholder="Title" name="title" id="pg-name" multiple="">
                    </div>
                </div>
                <hr>
                <div>
                    <button class="btn btn-primary create-page">Create</button>
                </div>
            </form>
        <div>
    </div>
</div>
    
</div>
<div  class="col-lg-9" style="background:#eee">
    <div class="cp-div">
        <p class="sup-p">Desktop View</p>
        <div class="cp-desktop-view-mdiv">
            <div style="height: 375px;">
            <div class="cp-desktop-view-div">
                <div>
                    <div class="cp-desktop-view-dv">    
                        <img src="http://127.0.0.1:8000/users/1620679831.2579194992.jpg" class="cp-desktop-view-img">
                    </div>
                    <div id="cp-desktop-view-dv">
                    <h3 style="color: #fff; font-weight: 600;" id="pg-name-show">Page Name</h3>
                    <p style="font-weight: 700;" id="pg-category-show">Category</p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-sm-10 type-div">
            <div class="timeline-info">
                <ul>
                    <li>
                        
                        <a class="info-name" href="/time-line" title="" data-ripple="">Home</a>

                        <a class="info-name" href="/2579194992/timeline-images" title="" data-ripple="">About</a>

                        <a class="info-name" href="/about" title="" data-ripple="">Photos</a>

                        <a class="info-name " href="/timeline-friends" title="" data-ripple="">
                            Videos
                        </a>

                        <div class="dropdown infodrop">
                            <button class="info-drop dropdown-toggle" type="button" data-toggle="dropdown">More</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div style="width: 40%; float: left;">
            <button class="btn cp-desktop-view-mbutton">
                <i class="fa fa-thumbs-up" style="margin-right: 10px;"></i>Like
            </button>
            <button class="btn cp-desktop-view-mbutton">
                <i class="fa fa-comment" style="margin-right: 10px;"></i>Message
            </button>
            <button class="btn cp-desktop-view-lbutton">
                <i class="fa fa-search" style="margin-right: 10px;"></i>
            </button>
            <button class="btn cp-desktop-view-lbutton">
                <i class="fa fa-ellipsis-h" style="margin-right: 10px;"></i>
            </button>
        </div>
    </div>
    <div class="cp-details-mdiv">
        <div id="cp-details-mdiv">
            <h4 class="cp-details-h4">About</h4>
                <div>
                    <span style="margin-right: 6px; float: left;">
                        <i class="fa fa-warning"></i>
                    </span><p id="pg-description-show">Description</p> 
                </div>
            </div>
        <div>
    </div>
    <div id="cp-details-mdiv">
        <span class="m-icon">
            <i class="fa fa-flag"></i>
        </span>
        <button class="btn text-center cp-details-button">Create Post</button>
        <div style="padding-top: 20px; padding-left: 10px">
            <div>
                <span class="cp-details-span">
                    <i class="fa fa-image" style="font-size: 25px; color: #45bd62;"></i>
                    <b style="margin-left: 6px; font-weight: 600;">Photos/Videos</b>
                </span>
                <span class="cp-details-span">
                    <i class="fa fa-map-marker" style="font-size: 25px;color: #f02849;"></i>
                    <b style="margin-left: 6px; font-weight: 600;">Check in</b>
                </span>
                <span class="cp-details-span">
                    <i class="fa fa-user" style="font-size: 25px;color: #1877f2;"></i>
                    <b style="margin-left: 6px; font-weight: 600;">Tag Friends</b>
                </span>
            </div>
        </div>
    </div>  
</div>
        </div>
    <div>
</div>

</div></div></div>

@include('/user/includes/footer')
