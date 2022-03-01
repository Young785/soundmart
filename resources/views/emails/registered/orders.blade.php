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
        Your Order has been placed Successfully
    </div>
    <div id="content">
      Dear {{ $order['name'] }},
      <br />
      <p>Thanks for placing an Order, we will get in touch with you soon</p>
      <br />
      <p>To get a gift, please click the button below to get started. </p>
      <br />
      <a href="https://fromme.ng/home" target="_blank" class="btn">Check Orders History</a>
      <hr />
      Any doubts? have some questions?
      <br />
      Send us an email to <a href="mailto:fromme@gmail.com">fromme@gmail.com</a> we will happy to help.
      <br />
      <br />
      Happy Gifting,
      <br />
      Fromme Team,
      <br />
      Copyright © 2021-{{ date("Y") }}, Aydev, All rights reserved.
    </div>
  </div>
@endcomponent
