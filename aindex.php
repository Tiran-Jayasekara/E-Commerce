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
<!--     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

   <!--  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet"> -->
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
            <h1 class="mb-0 site-logo"><a href="aindex.php" class="text-black h2 mb-0">Home</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="aindex.php">Home</a></li>
                <li class="has-children">
                  <a href="aCategories.php">Categories</a>
                  <ul class="dropdown">
                    <li><a href="aWooden.php">Wooden</a></li>
                    <li><a href="aMetalic.php">Metalic</a></li>
                    <li><a href="aCerimic.php">Cerimic</a></li>
                    <li><a href="aJewells.php">Jewells</a></li>
                  </ul>
                </li>
                <li><a href="aabout.php">About</a></li>
                <li><a href="Messages.php">Messages <span class="icon-message"></span></a></li>
                <li><a href="cartlist.php">Cart List <span class="icon-cart-arrow-down"></span></a></li>
                <li><a href="#" data-toggle="modal" data-target="#AdminModal">Admin <span class="icon-supervisor_account"></span></a></li>
                <li>
                  <a href="#" data-toggle="modal" data-target="#searchModal">
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

  

    <div class="site-blocks-cover overlay" style="background-image: url(images/d1img.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
              <a href="gindex.php"><img src="images/logo.png" height="180" width="300" style="position: absolute;z-index: 2004;margin-top: -14vw;margin-left: -10vw"></a>
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>We have the best <span class="typed-words"></span></h1>
                <p class="lead mb-5" style="color: gold">We Got the history</p>
                <div><a href="aCategories.php" class="btn btn-primary btn-md">Buy</a></div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  


    <section class="section ft-feature-1">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-12 bg-black w-100 ft-feature-1-content">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <div class="h-100">
                  <div class="mb-5 d-flex align-items-center">
                    <!-- <div>
                      <a href="https://vimeo.com/317571768" class="popup-vimeo d-block play"><span class="icon-play"></span></a>
                    </div> -->
                    <h2>Welcome To the Past</h2>
                  </div>
                  <img src="images/Secret boxes.jpg" alt="Image" class="img-feature img-fluid">
                  <img src="images/Mask.jpg" alt="Image" class="img-feature img-fluid">
                </div>
              </div>
              <div class="col-lg-3 ml-auto">
                <div class="mb-5">
                  <h3 class="d-flex align-items-center"><span>Wooden</span></h3>
                  <p>The remarkble artifacts that made using wood..</p>
                  <p><a href="aWooden.php">Go there</a></p>
                </div>

                <div>
                  <h3 class="d-flex align-items-center"><span>Metalic</span></h3>
                  <p>Ancient metal based relics..</p>
                  <p><a href="aMetalic.php">Go there</a></p>
                </div>

              </div>
              <div class="col-lg-3">
                <div class="mb-5">
                  <h3 class="d-flex align-items-center"></span><span>Cerimic</span></h3>
                  <p>Hand made items that used real arts..</p>
                  <p><a href="aCerimic.php">Go there</a></p>
                </div>

                <div>
                  <h3 class="d-flex align-items-center"><span>Jewells</span></h3>
                  <p>Priceless items that made just for nobles..</p>
                  <p><a href="aJewells.php">Go there</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">01.</div>
              <h2>Our Vision</h2>
              <p>"Future ignited by keeping past's glory."</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">02.</div>
              <h2>Our Mission</h2>
              <p>"Offer the best antiques and More."</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">03.</div>
              <h2>Our Philosophy</h2>
              <p>"No man reach his best by forgetting the past."</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Some of Best from What we have</h2>
            <p class="lead">These are marked as the best relics in history so observe carefully. And if it worth it Buy it</p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a href="ahairclip.php" class="media-1">
              <img src="images/hair clip.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Hair Clip</h2>
                <span class="category">Jewells</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="aoctagontable.php" class="media-1">
              <img src="images/octagon table.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Octagon Table</h2>
                <span class="category">Wooden</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="aseththomasclock.php" class="media-1">
              <img src="images/seth thomas clock.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Seth Thomas Clock</h2>
                <span class="category">Wooden</span>
              </div>
            </a>
          </div>

          <div class="col-12 text-center mt-5">
            <a href="aCategories.php" class="btn btn-primary btn-md">Show All Categories</a>
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

    <a href="aCategories.php" class="bg-primary py-5 d-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10"><h2 class="text-white">Buy now &amp; Get 25% Discount..!</h2></div>
        </div>
      </div>  
    </a>
    
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
  <script src="js/Script.js"></script>

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Antiques"," Relics"," Artifacts"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
  </body>
</html>