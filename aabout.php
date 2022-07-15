<?php 
  session_start();
  if(isset($_SESSION['username']))
  {
    session_unset();
    session_destroy();
    header('location:gindex.php');
  }
  elseif(!isset($_SESSION['admin']))
  {
    header('location:gindex.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Acorp &mdash; Cylone Antiques</title>
    <!-- <meta charset="utf-8">
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
    <?php include 'connection.php' ?>
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
    <!-- ***** Top Search Area Start ***** -->

        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn btn-danger btn-s" data-dismiss="modal" style="margin-left: 97%;margin-top: -3vw;"><span class="icon-close"></span></button>
                        <!-- Form -->
                        <form method="POST" action="asearch.php">
                            <input type="text" name="insearch" class="form-control" placeholder="Search and hit enter..." >
                              <br>
                            <button type="submit" class="btn btn-primary btn-md" style="margin-left:40%" name="setsearch">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- ***** Top Search Area End ***** -->
        <!-- ***** Admin Model ***** -->  
        <div class="modal fade" id="AdminModal" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 2000">
            <div class="modal-dialog modal-dialog-centered" role="document" >
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn btn-danger btn-s" data-dismiss="modal" style="margin-left: 97%;margin-top: -3vw;"><span class="icon-close"></span></button>
                        <!-- Table -->
                        <div>
                            <h2 style="color: green">Admin <span class="icon-supervisor_account"></span></h2>
                            <table cellspacing="0" style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th id="t">Account</th>
                                        <th id="t">Security</th>
                                        <th id="t">System Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="t">Admin</td>

                                        <td id="t">High</td>

                                        <td id="t">Full</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="logout.php" class="btn btn-danger btn-md" style="margin-left: 75%">LogOut</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- ***** End of the AdminModal ***** -->
    <header class="site-navbar py-4" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="aabout.php" class="text-black h2 mb-0">About</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li ><a href="iandex.php">Home</a></li>
                <li class="has-children">
                  <a href="aCategories.php">Categories</a>
                  <ul class="dropdown">
                    <li><a href="aWooden.php">Wooden</a></li>
                    <li><a href="aMetalic.php">Metalic</a></li>
                    <li><a href="aCerimic.php">Cerimic</a></li>
                    <li><a href="aJewells.php">Jewells</a></li>
                  </ul>
                </li>
                <li class="active"><a href="aabout.php">About</a></li>
                <li><a href="Messages.php">Messages <span class="icon-message"></span></a></li>
                <li><a href="cartlist.php">Cart List <span class="icon-cart-arrow-down"></span></a></li>
                <li><a href="#" data-toggle="modal" data-target="#AdminModal">Admin <span class="icon-supervisor_account"></span></a></li>
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
      <!-- ***** Breadcrumb Area Start ***** -->
      <div class="breadcrumb-area">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="aindex.php"><span class="icon-home"></span> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
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
             <a href="aindex.php"><img src="images/logo.png" height="180" width="300" style="position: absolute;z-index: 2004;margin-top: -1vw;margin-left: -40vw"></a>           
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>About Us</h1>
                <p class="lead mb-5" style="color: gold">We Got the history</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  


    
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          
          <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
            <img src="images/d1img.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-6 order-md-1" data-aos="fade">

            <div class="row">

              <div class="col-12 mb-4">
                <div class="text-left pb-1 border-primary mb-4">
                  <h2 class="text-primary">Our Specialties</h2>
                </div>
              </div>
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mr-4 mb-3"><span class="icon-pageview"></span></div>
                  <div>
                    <h3>Find &amp; Care Specialties</h3>
                    <p>We are the best fin & care specialities on the country. We work with several Labs to care these ancient items. To find them we travel across the country and observe them with care and take them,clean them and offer them to you.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                <div class="unit-4">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-secondary icon-extension"></span></div>
                  <div>
                    <h3>Story Finders</h3>
                    <p>Each antiques has there story so find is not enough,We got to know the sory before we offer them to you. We good at that too. We find the exact story related to item then offer the items to you. so with these stories our items will be not only ancient but also valuble.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  
    
    <div class="site-section border-bottom">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary" data-aos="fade">Our Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="person">
              <img src="images/fred1.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>Fred Morgen</h3>
              <p class="position text-muted">Co-Founder, President</p>
              <p class="mb-4">He is the President and one of the Co-Founders of Acorp. He is a Specialist at all areas of Antiques.</p>
              <ul class="ul-social-circle">
                <li><a href="https://www.facebook.com/fredmorgen"><span class="icon-facebook"></span></a></li>
                <li><a href="https://www.twitter.com/fredmorgen"><span class="icon-twitter"></span></a></li>
                <li><a href="https://www.linkedin.com/fredmorgen"><span class="icon-linkedin"></span></a></li>
                <li><a href="https://www.instagram.com/fredmorgen"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="person">
              <img src="images/warn.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>Warn Morgen</h3>
              <p class="position text-muted">Co-Founder, CEO</p>
              <p class="mb-4">He is the CEO and also one of the Co-Founders of Acorp. He is a Specialist at Relics area of antiques.</p>
              <ul class="ul-social-circle">
                <li><a href="https://www.facebook.com/warnmorgen"><span class="icon-facebook"></span></a></li>
                <li><a href="https://www.twitter.com/warnmorgen"><span class="icon-twitter"></span></a></li>
                <li><a href="https://www.linkedin.com/warnmorgen"><span class="icon-linkedin"></span></a></li>
                <li><a href="https://www.instagram.com/warnmorgen"><span class="icon-instagram"></span></a></li>              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="person">
              <img src="images/alen.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>Alen Morgen</h3>
              <p class="position text-muted">Marketing Director</p>
              <p class="mb-4">He is the Marketing Director so he is the one who handle all the of business part.</p>
              <ul class="ul-social-circle">
                <li><a href="https://www.facebook.com/alenmorgen"><span class="icon-facebook"></span></a></li>
                <li><a href="https://www.twitter.com/alenmorgen"><span class="icon-twitter"></span></a></li>
                <li><a href="https://www.linkedin.com/alenmorgen"><span class="icon-linkedin"></span></a></li>
                <li><a href="https://www.instagram.com/alenmorgen"><span class="icon-instagram"></span></a></li>              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    


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
                  <li><a href="Messages.php">Messages</a></li>
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
    
  </body>
</html>