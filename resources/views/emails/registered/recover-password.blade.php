<style>
#wrapper {
    font-family: sans-serif;
    display: block;
    width: 650px;
    margin: auto;
    border-radius: 5px;
    margin-top: 55px;
    box-shadow: rgba(0, 0, 0, 0.15) 2px 3px 35px 0;
    overflow: hidden;
}

#top-img {
    background: linear-gradient(45deg, #07203c 0%, #491c1c 100%);
    color: #fff;
    font-size: 20px;
    font-weight: 100;
    text-align: center;
    padding: 75px 0;
}

#top-img b {
    display: block;
    margin-bottom: 12px;
    font-size: 32px;
}

#content {
    margin: 40px 25px;
}

hr {
    margin: 20px 5px;
    border: none;
    background: linear-gradient(45deg, #07203c 0%, #491c1c 100%);
    height: 1px;
}

.btn {
    display: block;
    width: 40%;
    text-align: center;
    margin: auto;
    background-color: #ff1531;
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    font-weight: 100;
    padding: 15px 0;
    border-radius: 45px;
    margin-top: 15px;
}
</style>
@component('mail::message')
<div id="wrapper">
    <div id="top-img">
      <b>Fromme</b>
        <img src="/users/image/key.png" alt="">
    </div>
    <div id="content">
      <h3>Forgot your password?</h3>
      <br />
      Hi,
      <p>Looks like you're having some trouble logging in.</p>
      <p>Click <b>Reset Password</b> below and you'll be able to set a new password for your account.</p>
      <p>If you didn't try to reset your password, get in touch with our support team right away.</p>
      <br />
      <a href="http://www.fromme.ng/recover/click?{{ session('recover_pass') }}" target="_blank" class="btn">Reset Password</a>
      <hr />
      Thanks, <br>
      Fromme
      <br />
      Copyright © 2021-{{ date("Y") }}, Fromme, All rights reserved.
    </div>
  </div>
@endcomponent
