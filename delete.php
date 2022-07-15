<?php include 'connection.php' ?>
<?php
if(isset($_POST['delete']))
{
  $pro_id=$_POST['pro_id'];
  $query1="DELETE FROM userpro WHERE pro_id='$pro_id'";
   $sql1=mysqli_query($con,$query1);
   if ($sql1) 
   {
    header('location:cart.php');
   }
   else
   {
     echo "<script type=\"text/javascript\"> alert(\"error please try again shortly!\")</script>";
   }
}?> 
<?php
if(isset($_POST['delete1']))
{
  $pro_id=$_POST['pro_id'];
  $query1="DELETE FROM userpro WHERE pro_id='$pro_id'";
   $sql1=mysqli_query($con,$query1);
   if ($sql1) 
   {
    header('location:cartlist.php');
   }
   else
   {
     echo "<script type=\"text/javascript\"> alert(\"error please try again shortly!\")</script>";
   }
}?> 
<?php
session_start();
  $username=$_SESSION['username'];
if(isset($_POST['accountdelete']))
{
  $query1="DELETE FROM customers WHERE username='$username'";
  $query2="DELETE FROM userpro WHERE user_name='$username'";
  $query3="DELETE FROM contactpro WHERE uname='$username'";
   $sql1=mysqli_query($con,$query1);
   $sql2=mysqli_query($con,$query2);
   $sql3=mysqli_query($con,$query3);
   if ($sql1&&$sql2&&$sql3) 
   {
    echo "<script type=\"text/javascript\"> alert(\"Deleted\")</script>";
    header('location:gindex.php');
   }
   else
   {
     echo "<script type=\"text/javascript\"> alert(\"error please try again shortly!\")</script>";
   }
}?> 
<?php
if(isset($_POST['deleteum']))
{
  $uid=$_POST['uid'];
  $query1="DELETE FROM contactpro WHERE id='$uid'";
   $sql1=mysqli_query($con,$query1);
   if ($sql1) 
   {
    echo "<script type=\"text/javascript\"> alert(\"User Message Deleted..!\")</script>";
    header('location:Messages.php');
   }
   else
   {
     echo "<script type=\"text/javascript\"> alert(\"error please try again shortly!\")</script>";
   }
}?> 
<?php
if(isset($_POST['deletevmes']))
{
  $vid=$_POST['vid'];
  $query1="DELETE FROM contact WHERE id='$vid'";
   $sql1=mysqli_query($con,$query1);
   if ($sql1) 
   {
    echo "<script type=\"text/javascript\"> alert(\"Visitor Message Deleted..!\")</script>";
    header('location:Messages.php');
   }
   else
   {
     echo "<script type=\"text/javascript\"> alert(\"error please try again shortly!\")</script>";
   }
}?> 