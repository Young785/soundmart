
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Login & Register Page - Chatbook</title>
    <link rel="icon" href="/assets/images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="/assets/css/main.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/color.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
						<h2 class="log-title">Login</h2>
							<p>
								Login or Register to enjoy <a style="color: #579bd0;">Chatbook</a>
							</p>
						<form method="POST" action="/page/login">
							@csrf
							@if (session()->has("msg"))
								<p class="btn-danger text-center">The email or password is Wrong!</p>
                            @endif
                            @if (session()->has("mssg"))
								<p class="btn-success text-center">Thanks for Joining ChatBook, We hope you get the Satisfaction you desire! You can now login below.</p>
                            @endif
							<div class="form-group">
							  <input    type="text" id="input" name="email"/>
							  <label class="control-label" for="input">Email or Phone Number</label><i class="mtrl-select"></i>
							  <p class="errors">{{ $errors->first("email")}}</p>
							</div>
							<div class="form-group">
							  <input type="password" name="password"/>
							  <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
							  <p class="errors">{{ $errors->first("password")}}</p>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Always Remember Me.
							  </label>
							</div>
							<a href="#" title="" class="forgot-pwd">Forgot Password?</a>
							<div class="submit-btns text-center">
								<button class="btn btn-primary text-center" type="submit" style="line-height: 27px;">Login</button>
								<button class="mtr-btn signup" type="button"><span>Register</span></button>
							</div>
						</form>
					</div>
					<div class="log-reg-area reg" id="/page/#register">
						<h2 class="log-title">Register</h2>
							<p>
								Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join now</a>
							</p>
						<form method="post" action="/page/register">
							@csrf
							<div class="form-group">
							  	<input type="text" name="fullname" value="{{ old("fullname") }}"/>
							  	<label class="control-label" for="input">First & Last Name</label><i class="mtrl-select"></i>
								<p class="errors">{{ $errors->first("fullname") }}</p>
							</div>
							<div class="form-group">
								<input type="text" name="name" value="{{ old("name") }}"/>
								<label class="control-label" for="input">Username</label><i class="mtrl-select"></i>
								<p class="errors">{{ $errors->first("name") }}</p>
							</div>
							<div class="form-group">
							  <input type="email" name="email" value="{{ old("email") }}"/>
							  <label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
							  <p class="errors">{{ $errors->first("email") }}</p>
							</div>
							<div class="form-group">
								<input type="date" name="dob"  value="{{ old("dob") }}"/>
								<label class="control-label" for="input">DOB</label><i class="mtrl-select"></i>
								<p class="errors">{{ $errors->first("dob") }}</p>
							</div>
							<div class="form-group">
								<input type="number" name="phone"  value="{{ old("phone") }}"/>
								<label class="control-label" for="input">Phone Number</label><i class="mtrl-select"></i>
								<p class="errors">{{ $errors->first("phone") }}</p>
                            </div>
							<div class="form-group">
							  	<input type="password" name="password"/>
							  	<label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
								<p class="errors">{{ $errors->first("password") }}</p>
							</div>
							<div class="form-group">
								<input type="password" name="confPass"/>
								<label class="control-label" for="input">Confirm Password</label><i class="mtrl-select"></i>
								<p class="errors">{{ $errors->first("confPass") }}</p>
							</div>
							<div class="form-group">
								<select name="gender" class="form-control" id="gender">
									<option value="">Select Gender</option>
									<option value="1">Male</option>
									<option value="2">Female</option>
								</select>
								<p class="errors">{{ $errors->first("gender") }}</p>
							</div>
							<a href="#" title="" class="already-have">Already have an account</a>
							<div class="submit-btns">
								<button class="btn btn-primary text-center" type="submit" style="line-height: 25px;">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/assets/js/main.min.js"></script>
	<script src="/assets/js/script.js"></script>

</body>
</html>
