<?php
session_start();
$conn = new mysqli('localhost','root','','test');
$fName=$_POST['fname'];
$lName=$_POST['lname'];
$email=$_POST['email'];
$id=$_POST['id'];
$password=$_POST['password'];
$password2=$_POST['password2'];

$s="select * from registration where email = '$email'";

$result = mysqli_query($conn,$s);

$num=mysqli_num_rows($result);
if($num==1){
  echo '<script>alert("Username already taken")</script>';
}else{
    $stmt = $conn->prepare("insert into registration(fname,lname,email,id,password,password2)
      values(?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssiss",$fName,$lName,$email,$id,$password,$password2);
      $stmt->execute();
      $_SESSION['email']= $email;
       header('location:customerpanel.php');
      $stmt->close();
      $conn->close();
    }
?>

