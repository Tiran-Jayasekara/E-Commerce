<?php include 'connection.php'; ?>
<?php
          $username=$_SESSION['username'];
          if (isset($_POST['edit1'])) 
          {
            
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $address=$_POST['address'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $country=$_POST['billing_country']; 
          
            $query1="UPDATE customers SET fname='".$fname."', lname='".$lname."', address='".$address."', email='".$email."', phone='".$phone."', country='".$country."' WHERE username='".$username."'";
            
              

              $sql1=mysqli_query($con,$query1);
          

              if($sql1)
              {
                echo "<script type=\"text/javascript\"> alert(\"Edit Successful..\")</script>";
                header('location:changedetails.php');
              }
              else
              {
                echo "Somthing is wrong please contact us via phone...";
              }
              
          }
?>
<?php
          $username=$_SESSION['username'];
          if (isset($_POST['change'])) 
          { 
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];
            if ($password==$cpassword) 
            {
              
          
            $query1="UPDATE customers SET password='".md5('$password')."' WHERE username='".$username."'";
            
              

              $sql1=mysqli_query($con,$query1);
          

              if($sql1)
              {
                echo "<script type=\"text/javascript\"> alert(\"Changed..!\")</script>";
                header('location:changedetails.php');
              }
              else
              {
                echo "Somthing is wrong please contact us via phone...";
              }
              
            }
            else
            {
                echo "<script type=\"text/javascript\"> alert(\"password not matche..!\")</script>";

            }
          }
?>

<?php if(isset($_POST['renew']))
        {
            $direct=$_POST['Credit/Debit_Card_Code'];
            $paypal=$_POST['paypal_code'];
            $coupon=$_POST['coupon_code'];
            $method;
            $code;

                    if ($direct!="") 
                    {
                        $method="Direct"; 
                        $code=$direct; 
                    }
                    elseif ($paypal!="") 
                    {
                        $method="Paypal"; 
                        $code=$paypal; 
                    }
                    else
                    {
                        $method="Coupon"; 
                        $code=$coupon; 
                    }
                
                    $query1="UPDATE customers SET method='".$method."', code='".$code."' WHERE username='".$username."'";

                    $sql1=mysqli_query($con,$query1);

                    if($sql1)
                    {
                        echo "<script type=\"text/javascript\"> alert(\"Renewed..!\")</script>";
                        header('location:changedetails.php');
                    }
                    else
                    {
                         echo "Somthing is wrong please contact us via phone...";
                    }


        }?>