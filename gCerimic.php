<?php 
  session_start();
  if(isset($_SESSION['admin']))
  {
    header('location:aCerimic.php');
  }
  elseif(isset($_SESSION['username']))
  {
    header('location:Cerimic.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Acorp &mdash; Cylone Antiques</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
 <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="border-bottom top-bar py-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">
              <span class="mr-3"><strong>Phone:</strong> <a href="tel://#">0712342340</a></span>
              <span><strong>Email:</strong> <a href="#">cyloneantiques@acorp.com</a></span>
            </p>
          </div>
          <div class="col-md-6">
            <ul class="social-media">
              <li><a href="https://www.facebook.com" class="p-2"><span class="icon-facebook"></span></a></li>
              <li><a href="https://www.twitter.com" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="https://www.instagram.com" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="https://www.linkedin.com" class="p-2"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
      </div> 
    </div>
   
    <!-- ***** SignUp Model ***** -->  
        <div class="modal fade" id="SignUpModal" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 2000">
            <div class="modal-dialog modal-dialog-centered" role="document" >
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn btn-danger btn-s" data-dismiss="modal" style="margin-left: 97%;margin-top: -3vw;"><span class="icon-close"></span></button>
                        <!-- Form -->
                      <form  class="p-5 bg-white" method="POST" action="sign.php">
              
                          <center><h2 class="h1 mb-5" style="color: purple">SignUp <span class="icon-account_box"></span></h2></center>
                          <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                              <label class="text-black" for="fname">First Name</label> <label id="vfname" style="visibility: hidden;color: red">Please FillUp</label> 
                              <input type="text" id="fname" name="fname" class="form-control" onblur="ffname()">
                            </div>
                            <div class="col-md-6">
                              <label class="text-black" for="lname">Last Name</label> <label id="vlname" style="visibility: hidden;color: red">Please FillUp</label> 
                              <input type="text" id="lname" name="lname" class="form-control" onblur="flname()">
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col-md-12">
                              <label class="text-black" for="address">Address</label> <label id="vaddress" style="visibility: hidden;color: red">Please FillUp</label> 
                              <textarea name="address" id="address" cols="30" rows="7" class="form-control" placeholder="Type your address here.." onblur="faddress()"></textarea>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col-md-12">
                              <label class="text-black" for="email">Email</label> <label id="vemail" style="visibility: hidden;color: red">Invalid Email</label> 
                              <input type="text" id="email" name="email" class="form-control" onblur="femail()">
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col-md-12">
                              <label class="text-black" for="subject">Phone No:</label> <label id="vphone" style="visibility: hidden;color: red">Invalid Phone No:</label> 
                              <input type="text" id="phone" name="phone" class="form-control" onblur="fphone()">
                            </div>
                          </div>

                          <label class="text-black">Country: </label> <label id="vcountry" style="visibility: hidden;color: red">Please select a country:</label>
                          <select id="billing_country" name="billing_country" class="form-control" onclick="fcountry()">
                                    <option selected value="n">Select a country…</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="PW">Belau</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="VG">British Virgin Islands</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo (Brazzaville)</option>
                                    <option value="CD">Congo (Kinshasa)</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">CuraÇao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="CI">Ivory Coast</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Laos</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao S.A.R., China</option>
                                    <option value="MK">Macedonia</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia</option>
                                    <option value="MD">Moldova</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="KP">North Korea</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PS">Palestinian Territory</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="QA">Qatar</option>
                                    <option value="IE">Republic of Ireland</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russia</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="ST">São Tomé and Príncipe</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="SX">Saint Martin (Dutch part)</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="SM">San Marino</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia/Sandwich Islands</option>
                                    <option value="KR">South Korea</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syria</option>
                                    <option value="TW">Taiwan</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom (UK)</option>
                                    <option value="US">United States (US)</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VA">Vatican</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="WS">Western Samoa</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>                                                    
                          </select>
                          <br>
                          <div class="row form-group">
                            <div class="col-md-12">
                              <label class="text-black" for="UserName">UserName</label> <label id="vusername" style="visibility: hidden;color: red">Please FillUp</label> 
                              <input type="text" id="UserName" name="username" class="form-control" onblur="fusername()">
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col-md-12">
                              <label class="text-black" for="password">Account password</label> <label id="vapassword" style="visibility: hidden;color: red">Please use length above 8 char</label> 
                              <input type="password" id="password" name="password" class="form-control" onblur="fpassword()"> 
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col-md-12">
                              <label class="text-black" for="cpassword">Confirm password</label> <label id="vacpassword" style="visibility: hidden;color: red">Password not Matched</label> 
                              <input type="password" id="cpassword" name="cpassword" class="form-control" onblur="fcpassword()"> 
                            </div>
                          </div>

                          <h5>Payment Method</h5> <label id="vpmethod" style="visibility: hidden;color: red">Please fill only one of method</label> 
                          <ul>
                            <li>
                                <input type="radio" checked value="1" name="payment_method" id="payment_method_bacs">
                                <label class="text-black">Direct Bank Transfer <span class="icon-bank"></span>  </label>
                                <input type="text" id="Credit/Debit Card Code" name="Credit/Debit Card Code" class="form-control" placeholder="Credit/Debit Card Code:" onblur="fpayment()"> 
                            </li>
                            <li>
                                <input type="radio" value="1" name="payment_method" id="payment_method_paypal">
                                <label class="text-black"><a href="https://www.paypal.com">PayPal <span class="icon-paypal"></span></a> </label>
                                <input type="text" id="paypal_code" name="paypal_code" class="form-control" placeholder="Paypal Code:" onblur="fpayment()">
                            </li>
                            <li>
                                <input type="radio" value="1" name="payment_method" id="payment_method_coupen">
                                <label class="text-black">Coupon <span class="icon-ticket"></span></label>
                                <input type="text" placeholder="Coupon code" id="coupon_code" name="coupon_code" class="form-control" onblur="fpayment()">
                            </li>
                          </ul>

                          <div class="row form-group">
                            <div class="col-md-12">
                              <input type="submit" value="SignUp" name="SignUp" class="btn btn-primary btn-md text-white">
                            </div>
                          </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- ***** End of the SignUp ***** -->

    <!-- ***** SignIn Model ***** -->  
        <div class="modal fade" id="SignInModal" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 2000">
            <div class="modal-dialog modal-dialog-centered" role="document" >
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn btn-danger btn-s" data-dismiss="modal" style="margin-left: 97%;margin-top: -3vw;"><span class="icon-close"></span></button>
                        <!-- Form -->
                      <form  class="p-5 bg-white" method="POST" action="sign.php">
              
                          <center><h2 class="h1 mb-5" style="color: darkblue">SignIn <span class="icon-account_circle"></span></h2></center>
                          <div class="row form-group">
                            <div class="col-md-12">
                              <label class="text-black" for="UserName">UserName</label>
                              <input type="text" id="UserName" name="username" class="form-control">
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col-md-12">
                              <label class="text-black" for="password">Account password</label> 
                              <input type="password" id="password" name="password" class="form-control" > 
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col-md-12">
                              <input type="submit" value="SignIn" name="SignInce" class="btn btn-primary btn-md text-white">
                            </div>
                          </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- ***** End of the SignIn ***** -->
    <header class="site-navbar py-4" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="gCerimic.php" class="text-black h2 mb-0">Cerimic</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="gindex.php">Home</a></li>
                <li class="has-children">
                  <a href="gCategories.php">Categories</a>
                  <ul class="dropdown">
                    <li><a href="gWooden.php">Wooden</a></li>
                    <li><a href="gMetalic.php">Metalic</a></li>
                    <li><a href="gCerimic.php">Cerimic</a></li>
                    <li><a href="gJewells.php">Jewells</a></li>
                  </ul>
                </li>
                <li><a href="gabout.php">About</a></li>
                <li><a href="gcontact.php">Contact</a></li>
                <li><a href="#" data-toggle="modal" data-target="#SignInModal">SingIn <span class="icon-account_circle"></span></a></li>
                <li><a href="#" data-toggle="modal" data-target="#SignUpModal">SignUp <span class="icon-account_box"></span></a></li>
                <li>
                  <a href="#" onclick="fsearch();">
                      <span class="icon-search"></span>
                  </a>
                  <script type="text/javascript">function fsearch() {alert("In order to search you must SingIn/SignUp.");}</script>
                </li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      <!-- ***** Breadcrumb Area Start ***** -->
      <div class="breadcrumb-area">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="gindex.php"><span class="icon-home"></span>Home</a></li>
                                <li class="breadcrumb-item"><a href="gCategories.php">Categories</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cerimic</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    <!-- ***** Breadcrumb Area End ***** -->
      
    </header>

  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/d1img.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
            <a href="gindex.php"><img src="images/logo.png" height="180" width="300" style="position: absolute;z-index: 2004;margin-top: -1vw;margin-left: -40vw"></a>            
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>Cerimic</h1>
                <p class="lead mb-5" style="color: gold">We Got the history</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  


    
    <section class="site-section">
      
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="#" class="media-1" onclick="please();">
              <img src="images/ceremic ball.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Cerimic Ball</h2>
                <span class="category">Price <p style="color: red">Rs.3000<p></span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="#" class="media-1" onclick="please();">
              <img src="images/Ceremic Plate.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Ceremic Plate</h2>
                <span class="category">Price <p style="color: red">Rs.2000<p></span>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>


     <section class="site-section testimonial-wrap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">A word from heart</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              
              <blockquote class="mb-5">
                <p>&ldquo;It may found by us,but its belongs to the past so use it with care.&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/alen.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Alen Morgen</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Some of past is canot put away.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/mevin.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Mevin Loard</p>
              </figure>
              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;The art of past is a miracle.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/hill.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Hill Smith</p>
              </figure>

              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Antiques..,Those aren't just items from past also those are memories of our ancestors.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/fred.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Fred Morgen</p>
              </figure>

            </div>
          </div>

        </div>
    </section>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>We search for valuble and ancient items,keep them with caution and offer them to you with reasonable prices.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="aabout.php">About Us</a></li>
                  <li><a href="aCategories.php">Categories</a></li>
                  <li><a href="acontact.php">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="https://www.facebook.com" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="https://www.twitter.com" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="https://www.instagram.com" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="https://www.linkedin.com" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Acorp - Cylone Antiques</p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>
  <script type="text/javascript">
      function please()
      {
        alert("In order to get more details you must SignIn/SignUp");
      }
  </script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/Script.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>