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
                        <form action="asearch.php" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                              <br>
                            <button type="submit" class="btn btn-primary btn-md" style="margin-left:40%">Search</button>
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

    <!-- ***** Permission Model ***** -->  
<!--         <div class="modal fade" id="permission" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 2000">
            <div class="modal-dialog modal-dialog-centered" role="document" >
                <div class="modal-content">
                    <div class="modal-body"> -->
                        <!-- Close Button -->
                       <!--  <button type="button" class="btn btn-danger btn-s" data-dismiss="modal" style="margin-left: 97%;margin-top: -3vw;"><span class="icon-close"></span></button> -->
                        <!-- Table -->
                        <!-- <div>
                            <h2 style="color: green">Permission ?</h2>
                            <button onclick="btnallow();" data-dismiss="modal" class="btn-primary">Allow</button><button onclick="btnnotallow();" data-dismiss="modal" class="btn-danger">NotAllow</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 -->
    <!-- ***** End of the Permission Model ***** -->

    <header class="site-navbar py-4" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-3">
            <h1 class="mb-0 site-logo"><a href="cartlist.php" class="text-black h2 mb-0">Cart List</a></h1>
          </div>
          <div class="col-12 col-md-9 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="aindex.php">Home</a></li>
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
                <li><a href="Messages.php">Messages <span class="icon-message"></a></li>
                <li class="active"><a href="cartlist.php">Cart List <span class="icon-cart-arrow-down"></a></li>
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
                                <li class="breadcrumb-item active" aria-current="page">Cart List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    <!-- ***** Breadcrumb Area End ***** -->
    </header>
<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-9">
<?php

      $userpro=mysqli_query($con,"SElECT * FROM userpro") or mysqli_error("server error");
        echo "
            
          
              <table cellspacing='4' style='text-align: center;border:2px solid blue;'>
                <thead style='background-color:darkblue;color:orange'>
                  <tr>
                    <th id='t'>Username</th>
                    <th id='t'>Email</th>
                    <th id='t'>ProId</th>
                    <th id='t'>Product Pic</th>
                    <th id='t'>Product</th>
                    <th id='t'>Price</th>
                    <th id='t'>Quantity</th>
                    <th id='t'>Final Price</th>
                    <th id='t'>Permission</th>
                  </tr>
                </thead>
                <tbody>";
      while ($row=mysqli_fetch_array($userpro))
      {
        echo"<tr>
            <td id='t'>".$row['user_name']."</td>";

            $user=mysqli_query($con,"SElECT * FROM customers WHERE username='".$row['user_name']."'") or mysqli_error("server error");


            while ($row1=mysqli_fetch_array($user)) 
            {
              echo "<td id='t'>".$row1['email']."</td>";
      
            }
       
            $items=mysqli_query($con,"SElECT * FROM items WHERE id='".$row['pro_id']."'") or mysqli_error("server error");


            while ($row=mysqli_fetch_array($items)) 
            {
              echo "
                  <td id='t'>".$row['id']."</td>
                  <td id='t'><img src='".$row['pic']."' height='60px' width='80px'></td>
                  <td id='t'>".$row['product']."</td>
                  <td id='t'>".$row['price']."</td>
                  <td id='t'>".$row['quantity']."</td>
                  <td id='t'>".$row['fprice']."</td>
                  <td><h7 style='color:blue'>A</h7><input type='radio' value='1' name='s'> <h7 style='color:red'>NA</h7><input type='radio' value='2' name='s'></td>

              </tr>";
 
              $sum=$sum+$row['fprice'];
      
            }      
      }
      echo "
                  </tbody>
              </table>";
?>
<!-- <script type="text/javascript">
function btnallow() 
{
  var x = document.getElementById('set').innerHTML="Allow";
}
function btnnotallow() 
{
  var x = document.getElementById('set').innerHTML="NotAllow";
}
</script> -->
</div>
<div class="cold-md-3">
  <h3 style="color: red;">Total Income</h3>
  <h4>Rs.<?php echo "".$sum.""; ?></h4>
  <br>
          <form method='POST' action="delete.php">
                <label title="Plese enter item id and hit remove button" style="color: red;">Want to remove a item?</label>              
            <div class='row form-group'>
              <div class='col-md-3 '>
                <label>ProductID:</label><input type='text' name='pro_id' class='form-control' style="margin-left:6vw;margin-top: -3vw"><button type='submit' class='btn btn-danger text-white' name='delete1' style="margin-left:10vw;margin-top: -5vw"><span class='icon-remove'></span></button>
              </div>
            </div>
          </form>
          <br>
          <h3>All Set?</h3><button class="btn btn-primary" style="margin-left: 8vw;margin-top: -5.5vw" onclick="con();">Configure</button>
          <script type="text/javascript">
            function con()
            {
              alert('All Order details Configured..!');
            }
          </script>           
</div>
</div>
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

  <script src="js/main.js"></script>
    
  </body>
</html>