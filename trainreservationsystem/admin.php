<?php
session_start();
require 'navbar.php';
?>
<html>
    <head>
        <style>
            body{
              background-image: url("/trainreservationsystem/images/admin.jpg");
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
            }
            table {
              border-collapse: collapse;
              width: 100%;
              height: 90%;
            }
            td {
              text-align: center;
            }
            th {
              background-color: green;
              color: white;
            }
            tr:nth-child(even) {
              background-color: white;
            }
            
        </style>
        </head>
        <body>
 
<h1 style="text-align:center">Welcome Admin</h1>
<hr>

<div class="topnav">
  <a class="active" href="admin.php">Admin</a>
  <a href="logout.php">Logout</a>
</div>

<ul>
  <li><a href="#train">Train</a></li>
  <li><a href="#users">Users</a></li>
  <li><a href="#routes">Routes</a></li>
  <li><a href="#schedules">Schedules</a></li>
  <li><a href="#booked">Booked</a></li>
</ul>

<?php
$db=mysqli_connect('localhost','root','','test');
if ($db) {
  echo '<p>'; 
}else
{
  echo "Connection unsuccessfull"; 
}

?>



<div class="rightpane" id="train">
<table border='1' cellpadding='0'>
<tr>
  <th colspan='5'><h3> Trains </h3></th>
</tr>
<tr>
  <th><b>Name</b></th>
  <th><b>Seats</b></th>
</tr>

<?php

$db = mysqli_connect("localhost","root","","test");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
$records = mysqli_query($db,"select * from train"); 
while($data = mysqli_fetch_array($records))
{
?>
<tr>
  <td><?php echo $data['name'] ?></td>
  <td><?php echo $data['firstseat'] ?></td>
</tr>
<?php
}
?>
</table>
</div>


<?php
if ($db) {
 echo ""; 
}else
{
  echo "Connection unsuccessfull"; 
}

?>

<div class="rightpane" id="users">
<br><table border="1" cellpadding='0'>
<tr>
  <th colspan='4' ><h3> Users </h3></th>
</tr>
<tr>
    <th><b>Name</b></th>
    <th><b>id</b></th>
    <th><b>Email</b></th>
    <th><b>Delete</b></th>
  </tr>

<?php

if(!$db)
{
  die("Connection failed: " . mysqli_connect_error());
}

$records = mysqli_query($db,"select * from registration"); 
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['fName']; ?></td>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['email']; ?></td>    
    <td><a href="deleteuser.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?> 
</table>
</div>



<?php
if ($db) {
 echo ""; 
}else
{
  echo "Connection unsuccessfull"; 
}

?>

<div id="routes" class="rightpane">
<br><table border="1" cellpadding='0'>
<tr>
  <th colspan='4' ><h3> Routes </h3></th>
</tr>
<tr>
    <th><b>Start</b></th>
    <th><b>Stop</b></th>
  </tr>

<?php

if(!$db)
{
  die("Connection failed: " . mysqli_connect_error());
}
$records = mysqli_query($db,"select * from routes"); 
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['start']; ?></td>
    <td><?php echo $data['stop']; ?></td>    
  </tr>	
<?php
}
?>
</table>
</div>



<?php
if ($db) {
 echo ""; 
}else
{
  echo "Connection unsuccessfull"; 
}

?>

<div id="schedules" class="rightpane">
<br><table border="1" cellpadding='0'>
<tr>
  <th colspan='9' ><h3> Schedules </h3></th>
</tr>
<tr>
    <th><b>Train Name</b></th>
    <th><b>Time</b></th>
    <th><b>From</b></th>
    <th><b>To</b></th>
    <th><b>Date</b></th>
    <th><b>fee</b></th>
    <th><b>Seats Remaining</b></th>
    <th><b>Edit</b></th>
    
  </tr>

<?php
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$records = mysqli_query($db,"select * from schedules"); 
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['train_name']; ?></td>  
    <td><?php echo $data['timesl']; ?></td>
    <td><?php echo $data['from_station']; ?></td>
    <td><?php echo $data['to_station']; ?></td> 
    <td><?php echo $data['dates']; ?></td>
    <td><?php echo $data['fee']; ?></td>
    <td><?php echo $data['seats_remain']; ?></td>
    <td><a href="edit.php"?>Edit</a></td>
  
  </tr> 	
<?php
}
?>
</table>
</div>


<div class="rightpane" id="booked">
<table border='1' cellpadding='0'>
<tr>
  <th colspan='8'><h3> Booked </h3></th>
</tr>
<tr>
  <th><b>Email</b></th>
  <th><b>Train Name</b></th>
  <th><b>Time</b></th>
  <th><b>From</b></th>
  <th><b>To</b></th>
  <th><b>Date</b></th>
  <th><b>Fee</b></th>
  <th><b>Delete</b></th>
</tr>

<?php

$db = mysqli_connect("localhost","root","","test");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
$records = mysqli_query($db,"select * from booked"); 
while($data = mysqli_fetch_array($records))
{
?>
<tr>
  <td><?php echo $data['email'] ?></td>
  <td><?php echo $data['train_name'] ?></td>
  <td><?php echo $data['timesl'] ?></td>
  <td><?php echo $data['fromlocation'] ?></td>
  <td><?php echo $data['tolocation'] ?></td>
  <td><?php echo $data['dates'] ?></td>
  <td><?php echo $data['fee'] ?></td>
  <td><a href="deletebooked.php?id=<?php echo $data['id']; ?>">Delete</a></td>
</tr>
<?php
$_SESSION['train_name'] = $data['train_name'];
}
?>
</table>
</div>