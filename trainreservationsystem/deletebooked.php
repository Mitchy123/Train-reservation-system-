<?php

$db = mysqli_connect("localhost","root","","test");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id']; 
$train_name = $_SESSION['train_name']; 

$del = mysqli_query($db,"delete from booked where id = '$id'"); 

if($del)
{
 mysqli_close($db); 
 header("location:admin.php#booked"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}

?>