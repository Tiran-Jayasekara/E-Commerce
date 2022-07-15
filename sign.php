<?php include 'connection.php'; ?>
<?php if(isset($_POST['SignUp']))
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $address=$_POST['address'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $country=$_POST['billing_country'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];
            $direct=$_POST['Credit/Debit_Card_Code'];
            $paypal=$_POST['paypal_code'];
            $coupon=$_POST['coupon_code'];
            $method;
            $code;
            if ($fname==""||$lname==""||$address==""||$email==""||$phone==""||$country=="n"||$username==""||$direct==""&&$paypal==""&&$coupon=="") 
            {
                
                    echo "<script type=\"text/javascript\"> alert(\"Please fillup field corectly..!\")</script>";
            }
            elseif($password==$cpassword)
            {
                $query="SELECT * from customers where username='$username'";

                $sql=mysqli_query($con,$query);

                if(mysqli_num_rows($sql)>0)
                {
                    echo "<script type=\"text/javascript\"> alert(\"Username already exsisted..!\")</script>";
                }

                else
                {
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

                    $query1="INSERT INTO customers  values('$fname','$lname','$address','$email','$phone','$country','$username','".md5('$password')."','$method','$code')";

                
                    $sql1=mysqli_query($con,$query1);

                    if($sql1)
                    {
                        echo "<script type=\"text/javascript\"> alert(\"Succesfully Registered..!\")</script>";
                            header('location:gindex.php');
                    }
                    else
                    {
                         echo "Somthing is wrong please contact us via phone...";
                    }
                }

            }
            else
            {
                echo "<center>passwords are not matched</center>";
            }

        }?>

<?php
    session_start();
    if(isset($_POST['SignIn']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $admin="admin";

        if ($username=="admin"&&$password=="1234") 
        {

            $_SESSION['admin']=$admin;
            header('location:aindex.php');
        }
        else 
        {
            $query="SELECT username,password from customers where username='$username' AND password='".md5('$password')."'";

            $sql=mysqli_query($con,$query);

            if(mysqli_num_rows($sql)>0)
            {
                $_SESSION['username']=$username;
                header('location:index.php');
            }
            else
            {
                echo "<script type=\"text/javascript\"> alert(\"Username and Password are wrong\")</script>";
                header('location:gindex.php');
            }

        }
    }

?>
<?php
    
    if(isset($_POST['SignInj']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $admin="admin";

        if ($username=="admin"&&$password=="1234") 
        {

            $_SESSION['admin']=$admin;
            header('location:aJewells.php');
        }
        else 
        {
            $query="SELECT username,password from customers where username='$username' AND password='".md5('$password')."'";

            $sql=mysqli_query($con,$query);

            if(mysqli_num_rows($sql)>0)
            {
                $_SESSION['username']=$username;
                header('location:Jewells.php');
            }
            else
            {
                echo "<script type=\"text/javascript\"> alert(\"Username and Password are wrong\")</script>";
                header('location:gJewells.php');
            }

        }
    }

?>
<?php
    
    if(isset($_POST['SignInc']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $admin="admin";

        if ($username=="admin"&&$password=="1234") 
        {

            $_SESSION['admin']=$admin;
            header('location:aCategories.php');
        }
        else 
        {
            $query="SELECT username,password from customers where username='$username' AND password='".md5('$password')."'";

            $sql=mysqli_query($con,$query);

            if(mysqli_num_rows($sql)>0)
            {
                $_SESSION['username']=$username;
                header('location:Categories.php');
            }
            else
            {
                echo "<script type=\"text/javascript\"> alert(\"Username and Password are wrong\")</script>";
                header('location:gCategories.php');
            }

        }
    }

?>
<?php
    
    if(isset($_POST['SignInce']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $admin="admin";

        if ($username=="admin"&&$password=="1234") 
        {

            $_SESSION['admin']=$admin;
            header('location:aCerimic.php');
        }
        else 
        {
            $query="SELECT username,password from customers where username='$username' AND password='".md5('$password')."'";

            $sql=mysqli_query($con,$query);

            if(mysqli_num_rows($sql)>0)
            {
                $_SESSION['username']=$username;
                header('location:Cerimic.php');
            }
            else
            {
                echo "<script type=\"text/javascript\"> alert(\"Username and Password are wrong\")</script>";
                header('location:gCerimic.php');
            }

        }
    }

?>
<?php
    
    if(isset($_POST['SignInco']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $admin="admin";

        if ($username=="admin"&&$password=="1234") 
        {

            $_SESSION['admin']=$admin;
            header('location:Messages.php');
        }
        else 
        {
            $query="SELECT username,password from customers where username='$username' AND password='".md5('$password')."'";

            $sql=mysqli_query($con,$query);

            if(mysqli_num_rows($sql)>0)
            {
                $_SESSION['username']=$username;
                header('location:contact.php');
            }
            else
            {
                echo "<script type=\"text/javascript\"> alert(\"Username and Password are wrong\")</script>";
                header('location:gcontact.php');
            }

        }
    }

?>
<?php
    
    if(isset($_POST['SignIna']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $admin="admin";

        if ($username=="admin"&&$password=="1234") 
        {

            $_SESSION['admin']=$admin;
            header('location:aabout.php');
        }
        else 
        {
            $query="SELECT username,password from customers where username='$username' AND password='".md5('$password')."'";

            $sql=mysqli_query($con,$query);

            if(mysqli_num_rows($sql)>0)
            {
                $_SESSION['username']=$username;
                header('location:about.php');
            }
            else
            {
                echo "<script type=\"text/javascript\"> alert(\"Username and Password are wrong\")</script>";
                header('location:gabout.php');
            }

        }
    }

?>
<?php
    
    if(isset($_POST['SignInm']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $admin="admin";

        if ($username=="admin"&&$password=="1234") 
        {

            $_SESSION['admin']=$admin;
            header('location:aMetalic.php');
        }
        else 
        {
            $query="SELECT username,password from customers where username='$username' AND password='".md5('$password')."'";

            $sql=mysqli_query($con,$query);

            if(mysqli_num_rows($sql)>0)
            {
                $_SESSION['username']=$username;
                header('location:Metalic.php');
            }
            else
            {
                echo "<script type=\"text/javascript\"> alert(\"Username and Password are wrong\")</script>";
                header('location:gMetalic.php');
            }

        }
    }

?>
<?php
    
    if(isset($_POST['SignInw']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $admin="admin";

        if ($username=="admin"&&$password=="1234") 
        {

            $_SESSION['admin']=$admin;
            header('location:aWooden.php');
        }
        else 
        {
            $query="SELECT username,password from customers where username='$username' AND password='".md5('$password')."'";

            $sql=mysqli_query($con,$query);

            if(mysqli_num_rows($sql)>0)
            {
                $_SESSION['username']=$username;
                header('location:Wooden.php');
            }
            else
            {
                echo "<script type=\"text/javascript\"> alert(\"Username and Password are wrong\")</script>";
                header('location:gWooden.php');
            }

        }
    }

?>