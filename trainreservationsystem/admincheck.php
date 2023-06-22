<?php
session_start();

$con = mysqli_connect('localhost','root','','test');

mysqli_select_db($con,'test');


$email=$_POST['email'];
$password=$_POST['password'];


$s="select * from admin where email='$email' && password='$password'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num==1){
  $_SESSION['email']= $email;
  header('location:admin.php'); 
}  else{
    header("location:adminlogin.php");
}
?>