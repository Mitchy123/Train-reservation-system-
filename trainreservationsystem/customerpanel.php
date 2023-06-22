<?Php
session_start();
require 'navbar.php';
?>
<html>
  <head>
    
    <style>
      h1{
        color:Yellow;
      }
      body{
        background-image:url("/trainreservationsystem/images/customerpanel.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
      table {
        border-collapse: collapse;
        width: 50%;
      }
      td {
        text-align: center;
      }
      th {
        background-color: blue;
        color: white;
      }
      tr:nth-child(even) {
        background-color: green;
      }
      #btn{
        color:white;
        background:blue;
        padding: 5px;
        margin-left:1%;
      }
    </style>
  </head>
  <body>
    <div class="topnav">
    <a style="color:red; font-size:20px;" href="logout.php" >Logout</a>
    </div>
    <h1>Welcome<br><?php  echo $_SESSION['email']; ?></h1>
    <br><hr>
    


<?php
$con=mysqli_connect('localhost','root','','test');
if ($con) {
 echo "<p>"; 
}else
{
  echo "Connection unsuccessfull"; 
}

?>


<br><table border="1" cellpadding='0' bgcolor="white">
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
    <th><b></b></th>
  </tr>

<?php

$db = mysqli_connect("localhost","root","","test");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$records = mysqli_query($db,"select * from schedules where train_name='A'"); 
if($data = mysqli_fetch_array($records))
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
    <td><a href="payment1.php">Proceed</a></td>
  </tr> 
  
  
<?php
}
$records = mysqli_query($db,"select * from schedules where train_name='B'"); 
if($data = mysqli_fetch_array($records))
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
    <td><a href="payment2.php">Proceed</a></td>
  </tr> 
  <?php
  }
  $records = mysqli_query($db,"select * from schedules where train_name='C'"); 
if($data = mysqli_fetch_array($records))
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
    <td><a href="payment3.php">Proceed</a></td>
  </tr>
<?php
}
$records = mysqli_query($db,"select * from schedules where train_name='D'"); 
if($data = mysqli_fetch_array($records))
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
    <td><a href="payment4.php">Proceed</a></td>
  </tr>
<?php
}
?>
</table>

<br><table border="1" cellpadding='0' bgcolor="white">
  <tr>
    <th colspan ='8'>Booked Tickets</th>
  </tr>
  <tr>
    <th>Email</th>
    <th>Train Name</th>
    <th>Time</th>
    <th>From</th>
    <th>To</th>
    <th>Date</th>
    <th>Fee</th>
  </tr>
<?php
  $email = $_SESSION['email'];

  $db = mysqli_connect("localhost","root","","test");
  if(!$db){
  die("Connection Failed:" . mysqli_connect_error());
  }

  $records = mysqli_query($db,"select * from booked where email ='$email' ");
  while($data=mysqli_fetch_array($records)){
  ?>
  <tr>
    <td><?php echo $data['email'] ?></td>
    <td><?php echo $data['train_name'] ?></td>
    <td><?php echo $data['timesl'] ?></td>
    <td><?php echo $data['fromlocation'] ?></td>
    <td><?php echo $data['tolocation'] ?></td>
    <td><?php echo $data['dates'] ?></td>
    <td><?php echo $data['fee'] ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br><a id = "btn" href="cancel.php">Cancel Ticket</a>
  </body>