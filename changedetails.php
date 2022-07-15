<?php 
  session_start();
  if(isset($_SESSION['admin']))
  {
    header('location:aindex.php');
  }
  elseif(!isset($_SESSION['username']))
  {
    header('location:gindex.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Acorp &mdash; Cylone Antiques</title>
<!--     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet"> -->
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
    <?php   include 'connection.php' ?>
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
    <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn btn-danger btn-s" data-dismiss="modal" style="margin-left: 97%;margin-top: -3vw;"><span class="icon-close"></span></button>
                        <!-- Form -->
                        <form method="POST" action="search.php">
                            <input type="text" name="insearch" class="form-control" placeholder="Search and hit enter..." >
                              <br>
                            <button type="submit" class="btn btn-primary btn-md" style="margin-left:40%" name="setsearch">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- ***** Top Search Area End ***** -->
<!-- ***** User Model ***** -->  
        <div class="modal fade" id="UserModal" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 2000">
            <div class="modal-dialog modal-dialog-centered" role="document" >
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn btn-danger btn-s" data-dismiss="modal" style="margin-left: 97%;margin-top: -3vw;"><span class="icon-close"></span></button>

                        <!-- Table -->
                        <div>
                            
<?php

  $username=$_SESSION['username'];

      $dis=mysqli_query($con,"SElECT * FROM customers WHERE username='$username'") or mysqli_error("server error");

      while ($row=mysqli_fetch_array($dis)) 
      {
        echo "
        <table cellspacing='0' style='text-align: center;'>
        <tbody>";
        echo "<h2 style='color: darkblue'>".$row['username']." <span class='icon-account_circle'></span></h2></tr>";
        echo "<tr><th>First Name</th><td id='t'>".$row['fname']."</td></tr>";
        echo "<tr><th>Last Name</th><td id='t'>".$row['lname']."</td></tr>";
        echo "<tr><th>Address</th><td id='t'>".$row['address']."</td></tr>";
        echo "<tr><th>Email</th><td id='t'>".$row['email']."</td></tr>";
        echo "<tr><th>Phone</th><td id='t'>".$row['phone']."</td></tr>";
        echo "<tr><th>Country</th><td id='t'>".$row['country']."</td></tr>";
        echo "<tr><th>Payment Method</th><td id='t'>".$row['method']."</td></tr>";
        echo "
        </tbody>
        </table>
        <br>
        <a href='changedetails.php'>Change Details</a>
        ";
      }


?>
                        </div>

                        <a href="logout.php" class="btn btn-warning btn-md" style="margin-left: 75%;position: relative">LogOut</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- ***** End of the UserModal ***** -->
    <header class="site-navbar py-4" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-3">
            <h1 class="mb-0 site-logo"><a href="herbalbed.php" class="text-black h2 mb-0">Change Details</a></h1>
          </div>
          <div class="col-12 col-md-9 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php">Home</a></li>
                <li class="has-children">
                  <a href="Categories.php">Categories</a>
                  <ul class="dropdown">
                    <li><a href="Wooden.php">Wooden</a></li>
                    <li><a href="Metalic.php">Metalic</a></li>
                    <li><a href="Cerimic.php">Cerimic</a></li>
                    <li><a href="Jewells.php">Jewells</a></li>
                  </ul>
                </li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
               <li><a href="#" data-toggle="modal" data-target="#UserModal">User <span class="icon-account_circle"></span></a></li>
                <li><a href="cart.php" id="SignUp">Cart <span class="icon-shopping-cart"></span></a></li>
                <li>
                  <a href="#" class="search-icon" data-toggle="modal" data-target="#searchModal">
                      <span class="icon-search"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
    </header>

<script src="js/jquery.js"></script>
                        <script>
    $(document).ready(function(){
    $("#call").click(function(){
        $("#fcall").slideToggle("slow");
        }); 
    });
    $(document).ready(function(){
    $("#mail").click(function(){
        $("#fmail").slideToggle("slow");
        });
    });
        $(document).ready(function(){
    $("#visit").click(function(){
        $("#fvisit").slideToggle("slow");
        });
    });
</script>
    <div class="container" style="margin-right: 20%">
        <div class="row">
          <div class="col-md-7 mb-5">

                        <label id="call">Want to change Account details? <p style="color: orange">Click Here</p></label>
                        <fieldset id="fcall" style="display: none;">
                            <form  class="p-5 bg-white" method="POST" action="edit.php">

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
                              <input type="submit" value="Edit" name="edit1" class="btn btn-primary btn-md text-white">
                            </div>
                          </div>
                            </form>
                        </fieldset>
                        <br>
                        <label id="mail">Want change Password? <p style="color: orange">Click Here</p></label>
                        <fieldset id="fmail" style="display: none;">
                        <form  class="p-5 bg-white" method="POST" action="edit.php">

                          <div class="row form-group">
                            <div class="col-md-12">
                              <label class="text-black" for="password">New password</label> <label id="vapassword" style="visibility: hidden;color: red">Please use length above 8 char</label> 
                              <input type="password" id="password" name="password" class="form-control" onblur="fpassword()"> 
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col-md-12">
                              <label class="text-black" for="cpassword">Confirm password</label> <label id="vacpassword" style="visibility: hidden;color: red">Password not Matched</label> 
                              <input type="password" id="cpassword" name="cpassword" class="form-control" onblur="fcpassword()"> 
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col-md-12">
                              <input type="submit" value="Change" name="change" class="btn btn-primary btn-md text-white">
                            </div>
                          </div>
                        </form>
                        </fieldset>
                        <br>
                        <label id="visit">Want to Renew Payment Method? <p style="color: orange">Click Here</p></label>
                        <fieldset id="fvisit" style="display: none;">
                        <form  class="p-5 bg-white" method="POST" action="edit.php">
        
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
                              <input type="submit" value="Renew" name="renew" class="btn btn-primary btn-md text-white">
                            </div>
                          </div>
                        </form>
                        </fieldset>
                    </div>
                </div>
                <form  class="p-5 bg-white" method="POST" action="delete.php">
                  <div class="row form-group">
                    <div class="col-md-12" style="margin-left: -4vw;margin-top: -4vw">
                      <button type="submit" class="btn btn-danger btn-md" name="accountdelete">Delete Account</button>
                    </div>
                  </div>          
                </form>
            </div>
            <br>
  <!--Footer-->
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
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="Categories.php">Categories</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
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

  <script src="js/main.js"></script>
  <script src="js/Script.js"></script>
    
  </body>
</html>