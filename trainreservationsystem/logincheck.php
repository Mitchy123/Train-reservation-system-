<?php
session_start();

$con = mysqli_connect('localhost','root','','test');

mysqli_select_db($con,'test');

$fName=$_POST['fname'];
$lName=$_POST['lname'];
$email=$_POST['email'];
$id=$_POST['id'];
$password=$_POST['password'];
$password2=$_POST['password2'];

$s="select * from registration where email='$email' && password='$password'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num==1){
  $_SESSION['email']= $email;
  header('location:customerpanel.php'); 
}else{
  header('location:login.php');
}
?>