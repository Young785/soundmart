@include('/user/includes/header')
<div class="marketplace keep">
    <link rel="stylesheet" href="/assets/css/style.css">
    <div class="col-lg-12">
        <div class="col-lg-3 story-sd-nav">
            <div class="story-sd-div">
                <span class="m-icon close-Cadvert" id="m-icon"><i class="ti-close"></i></span>
                <div class="">
                    <a title="" href="/"><img src="/assets/images/logo.png" alt=""></a>
                </div>
            </div>
            <div> 
                <p id="cp-p">Marketplace</p>
                <div style="height: 43px;">
                    <p class="story--p">Item For Sale</p>
                </div>
                <p class="mp-line"></p>
             
                <form action="/create_group" method="POST">
                    @csrf
                    <div class="market-sidebar-div">
                        <div style="float: left">
                            <figure class="page--fig">
                                @if ($user->user_image == null)
                                    <img src="/assets/images/default.png" style="border-radius: 100%" alt="">
                                    @else
                                    <img src="{{ asset("users") }}/{{ substr($user->user_image, 0, 10) }}.{{$user->secrete_id}}.jpg" style="border-radius: 100%" alt="">
                                @endif
                            </figure>
                            <div class="page--p-div">{{$user->name}}</div>
                            <span style="color: #65676b; margin-left: 15px;">Listing to Marketplace . <i class="fa fa-globe"></i> Public</span>
                        </div>
                        <p style="font-size: 12px;">
                            <b>Photos . 0/10 -</b> You can add up to 10 photos
                        
                        </p>
                        <div>
                            <label for="fileContainer">
                                <input type="file" class="upload-image" placeholder="Title" name="title" id="pg-name" multiple>
                            </label>
                        </div>
                        <input type="text" class="form-control" required style="border-radius: 5px !important;margin-top: 20px;" placeholder="Title" name="" id=title">
                        <input type="text" class="form-control" required style="border-radius: 5px !important;margin-top: 20px;" placeholder="Price" name="" id=price">
                        <select class="form-control" required name="privacy" style="border-radius: 5px !important;margin-top: 20px;">
                            <option value="1">Category</option>
                            <option value="2">Phones</option>
                            <option value="3">Home Appliances</option>
                            <option value="3">Offices Appliances</option>
                            <option value="3">Tablet</option>
                            <option value="3">Laptops</option>
                            <option value="3">Fan</option>
                            <option value="3">Refrigerator</option>
                            <option value="3">Fridge</option>
                            <option value="3">Air Condition</option>
                            <option value="3">Clothes</option>
                        </select>
                        <select class="form-control" required name="privacy" style="border-radius: 5px !important;margin-top: 20px;">
                            <option value="1">Condition</option>
                            <option value="2">New</option>
                            <option value="3">Used</option>
                            <option value="3" id="other_conditions">Others</option>
                        </select>
                        <input type="text" class="form-control" style="border-radius: 5px !important;margin-top: 20px;" placeholder="Description" name="" id="description">
                        <div class="location-mdiv">
                            <div class="location-ldiv">
                                    <span class="location-lspan" style="color: #6d6d6d;">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                </div>
                            <input type="text" class="form-control location-input" placeholder="{{ $check_address->cityName }}" name="" id="location">
                                <div class="location-div">
                                    @if ($check_address->cityName == false)
                                    <span class="location-span" style="background: #f02849 !important;">
                                        <i class="fa fa-close" style="margin-left: -16px;"></i>
                                    </span>
                                    @else
                                    <span class="location-span">
                                        <i class="fa fa-check" style="margin-left: -17px;"></i>
                                    </span>
                                    @endif
                                    
                                </div>
                            </div>
                            <select id="year" name="year" class="form-control" required name="list" style="border-radius: 5px !important;margin-top: 20px;">
                                <option>year</option>
                                <option value="1900">1900</option>
                                <option value="1901">1901</option>
                                <option value="1902">1902</option>
                                <option value="1903">1903</option>
                                <option value="1904">1904</option>
                                <option value="1905">1905</option>
                                <option value="1906">1906</option>
                                <option value="1907">1907</option>
                                <option value="1908">1908</option>
                                <option value="1909">1909</option>
                                <option value="1910">1910</option>
                                <option value="1911">1911</option>
                                <option value="1912">1912</option>
                                <option value="1913">1913</option>
                                <option value="1914">1914</option>
                                <option value="1915">1915</option>
                                <option value="1916">1916</option>
                                <option value="1917">1917</option>
                                <option value="1918">1918</option>
                                <option value="1919">1919</option>
                                <option value="1920">1920</option>
                                <option value="1921">1921</option>
                                <option value="1922">1922</option>
                                <option value="1923">1923</option>
                                <option value="1924">1924</option>
                                <option value="1925">1925</option>
                                <option value="1926">1926</option>
                                <option value="1927">1927</option>
                                <option value="1928">1928</option>
                                <option value="1929">1929</option>
                                <option value="1930">1930</option>
                                <option value="1931">1931</option>
                                <option value="1932">1932</option>
                                <option value="1933">1933</option>
                                <option value="1934">1934</option>
                                <option value="1935">1935</option>
                                <option value="1936">1936</option>
                                <option value="1937">1937</option>
                                <option value="1938">1938</option>
                                <option value="1939">1939</option>
                                <option value="1940">1940</option>
                                <option value="1941">1941</option>
                                <option value="1942">1942</option>
                                <option value="1943">1943</option>
                                <option value="1944">1944</option>
                                <option value="1945">1945</option>
                                <option value="1946">1946</option>
                                <option value="1947">1947</option>
                                <option value="1948">1948</option>
                                <option value="1949">1949</option>
                                <option value="1950">1950</option>
                                <option value="1951">1951</option>
                                <option value="1952">1952</option>
                                <option value="1953">1953</option>
                                <option value="1954">1954</option>
                                <option value="1955">1955</option>
                                <option value="1956">1956</option>
                                <option value="1957">1957</option>
                                <option value="1958">1958</option>
                                <option value="1959">1959</option>
                                <option value="1960">1960</option>
                                <option value="1961">1961</option>
                                <option value="1962">1962</option>
                                <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1966</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                            </select>
                            <input type="text" class="form-control" style="border-radius: 5px !important;margin-top: 20px;" placeholder="Make" name="" id="make">

                            <select class="form-control" required name="list" style="border-radius: 5px !important;margin-top: 20px;">
                                <option>List as Single Item</option>
                                <option value="1">New</option>
                                <option value="2">Used</option>
                                <option value="3" id="other_conditions">Others</option>
                            </select>
                            <select class="form-control" required name="privacy" style="border-radius: 5px !important;margin-top: 20px;">
                                <option>Privacy</option>
                                <option value="1">Hide from friends</option>
                                <option value="2">Let friends view</option>
                            </select>
                        <input type="text" class="form-control" style="border-radius: 5px !important;margin-top: 20px;" placeholder="Location" name="" id="location">
                        <input type="text" class="form-control" style="border-radius: 5px !important;margin-top: 20px;" placeholder="Description" name="" id="description">
                        <input type="text" class="form-control" style="border-radius: 5px !important;margin-top: 20px;" placeholder="Invite Friends (optional)" name="" id="pg-name">
                    </div>
                    
                    <div>
                        <button class="btn btn-primary create-group" disabled="">Create</button>
                    </div>
                </form>
            </div>  
        </div>
        @include('/user/includes/popupnav')
        <div  class="col-lg-9" style="background:#eee">
            <div class="cg-div" style="
    width: 100%;
">
<p class="sup-p">Desktop View</p>
          <div style="
    height: 525px;
">  <div class="col-lg-7" style="
    height: 525px;
    background: #f0f2f5;
    margin-left: 20px;
    border-radius: 5px;
    border: 1px solid #e3e2e2;
">
    <div style="
    padding: 200px 42px 0px 65px;
">
    <h3 style="
    padding-left: 75px;
"><b>Your Listing Preview</b></h3>
        <p style="
    text-align: center;
    font-size: 20px;
    font-weight: 300;
">You can preview your created listings on how people see it.</p>
    </div> </div>
    <div class="col-lg-4">
<div>
   <h2 style="
    font-weight: 700;
    color: #65676b;
">Title</h2>
    <h4 style="
    font-weight: 500;
    color: #c1c1c1;
    margin: 0px;
">Price</h4>
    <p style="
    font-size: 11px;
    margin-bottom: 5px;
">Published 1 second ago</p>
    <div style="
    width: 341px;
    height: 50px;
"><button class="btn btn-disabled" style="
    width: 35.5%;
    border-radius: 9px;
    height: 41px;
    margin-right: 10px;
    float: left;
    font-size: 15px;
    background: #e4e6eb;
" disabled=""><i class="fa fa-cart-plus" style="
    margin-right: 5px;
"></i>Save Item</button><button class="btn btn-disabled" style="
    width: 35.5%;
    border-radius: 9px;
    height: 41px;
    margin-right: 10px;
    float: left;
    font-size: 15px;
    background: #e4e6eb;
" disabled=""><i class="fa fa-share" style="
    margin-right: 5px;
"></i>Save Item</button><button class="btn btn-disabled" style="
    width: 18%;
    border-radius: 9px;
    height: 41px;
    margin-right: 10px;
    float: left;
    font-size: 15px;
    background: #e4e6eb;
" disabled=""><i class="fa fa-ellipsis-h" style="
    margin-right: 5px;
"></i></button></div>
<h3 style="
    font-size: 20px;
    font-weight: 700;
">Details</h3><p>Description goes here!</p>
<hr>
<p>Seller's Infomation</p><p><a href="/profile/2579194992" class="col-lg-12 col-md-12 col-sm-12">
                                            </a></p><a href="/profile/2579194992" class="col-lg-12 col-md-12 col-sm-12">
                                                <figure class="col-lg-2 col-md-2 col-sm-3 req-figure">
                                                        <img src="http://127.0.0.1:8000/users/1620679831.2579194992.jpg" class="req-image" alt="">
                                                </figure>
                                                <div class="col-lg-10 col-md-10 col-sm-10">
                                                    <h3 class="profile-name">Ayomikun</h3>
                                                </div>
                                            </a>
<div style="margin-top: 60%;width: 350px;">
                        <button class="btn btn-disabled create-group" disabled="" style="
    background: #e4e6eb;
">Message Seller</button>
                    </div><a href="/profile/2579194992" class="col-lg-12 col-md-12 col-sm-12">
                                        </a>
    <div>
</div></div></div>
            </div></div>
        </div>
        </div>
    </div>
    <div class="col-lg-2"></div>
    </div>
</div>
</div>
<div class="col-lg-2"></div>
</div>
    </div></div>