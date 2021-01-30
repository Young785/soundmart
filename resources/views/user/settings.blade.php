@include('/user/includes/header')
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="postoverlay"></div>
	<div class="responsive-header">
		<div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">
				<a href="newsfeed.html" title=""><img src="/assets/images/logo2.png" alt=""></a>
			</span>
			<span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
		</div>
		<div class="mh-head second">
			<form class="mh-form">
				<input placeholder="search" />
				<a href="#/" class="fa fa-search"></a>
			</form>
		</div>
		@include('/user/includes/navbar')
		
	<section>
		<div class="gap2 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static left">
									@include('/user/includes/sidebar')
									@include('/user/includes/sidebar-titles')
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-9 col-md-12 col-sm-12">
								<style>
                                    .setting-ul{
                                        border-top: 1px solid #aaa;
                                        border-bottom: 1px solid #aaa;
                                        height: 58px;
                                        margin-top: 40px;
                                    }
                                    .setting-li{
                                        padding: 8px 0;
                                        border-width: 0;
                                        border-color: #ebedf0;
                                        border-style: solid;
                                    }
                                    .setting-a{
                                        display: block;
                                        text-decoration: none;
                                    }
                                    .setting-p{
                                        width: 190px; 
                                        float: left
                                    }
                                    .setting-span{
                                        color: #65676b;
                                        font-size: 15px;
                                        letter-spacing: -0.24px;
                                        line-height: 20px;
                                        margin-left: 200px;
                                        padding-left: 0;
                                        width: 420px;
                                        display: block;
                                    }
                                    .setting-edit{
                                        float: right;
                                        color: #216fdb;
                                        font-size: 15px;
                                        margin-top: -15px;
                                        text-align: right;
                                    }
                                    .setting-edit:hover{
                                        float: right;
                                        color: blue;
                                        text-decoration: underline;
                                        margin-top: -15px;
                                        font-size: 15px;
                                        text-align: right;
                                    }
                                </style>
								<div class="central-meta new-pst">
									<div class="new-postbox">
										<div class="col-lg-12 col-md-12 col-sm-12">
                                            <div>
                                                <h2>General Account Settings</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                           <ul class="setting-ul">
                                               <li class="setting-li">
                                                    <a href="" class="setting-a">
                                                        <p class="setting-p">Name</p>
                                                        <span class="setting-span">
                                                            <strong>Ayomikun</strong>
                                                        </span>
                                                        <span class="setting-edit">
                                                            <span>Edit</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="setting-li">
                                                    <a href="" class="setting-a">
                                                        <p class="setting-p">Name</p>
                                                        <span class="setting-span">
                                                            <strong>Ayomikun</strong>
                                                        </span>
                                                        <span class="setting-edit">
                                                            <span>Edit</span>
                                                        </span>
                                                    </a>
                                                </li>
                                           </ul>
                                        </div>
									</div>
								</div><!-- add post new box -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>
@include('/user/includes/footer')