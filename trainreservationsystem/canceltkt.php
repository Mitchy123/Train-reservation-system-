<?php

$db = mysqli_connect("localhost","root","","test");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id']; 


$del = mysqli_query($db,"delete from booked where id = '$id'"); 

if($del)
{
 mysqli_close($db); 
 header("location:userbooked.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}

?>