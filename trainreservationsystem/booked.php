<html>
<head>
  <style>
    #frm{
    border: solid gray 1px;
    width: 20%;
    border-radius: 5px;
    margin: 150px auto;
    background: white;
    padding:100px;
    }
    body{
    background-image: url("/trainreservationsystem/images/signin.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    }
    .button{
      background-color: green;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;  
    }
  </style>
</head>
<body>
<div id="frm">
<?php
session_start();

$db = mysqli_connect("localhost","root","","test");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}


if($_SESSION['name']=='A'){
  $records = mysqli_query($db,"select * from schedules where train_name='A'"); 
  if($data = mysqli_fetch_array($records))
  {
   $email=$_SESSION['email'];
   $name = $_SESSION['name']; 
   $time = $data['timesl']; 
   $from = $data['from_station']; 
   $to = $data['to_station']; 
   $date = $data['dates']; 
   $fee = $data['fee']; 
  }


  $sql = "INSERT INTO booked (email,train_name, timesl, fromlocation,tolocation,dates,fee)
  VALUES ('$email', '$name', '$time', '$from', '$to', '$date', '$fee')";

  if ($db->query($sql) === TRUE) {
    echo "Booking Successfull for $email";
    echo "<br> Trip Details ";
    echo "<hr> ";
    echo "<br> Train name: $name ";
    echo "<br> Time: $time ";
    echo "<br> From: $from ";
    echo "<br> To: $to ";
    echo "<br> Date: $date ";
    echo "<br> Amount paid: $fee ";
  }else {
   echo "Error: " . $sql . "<br>" . $db->error;
  }

 $sql = "SELECT count(id) AS seatsbooked FROM booked where train_name = 'A' ";
 $result = mysqli_query($db,$sql);
 $values = mysqli_fetch_assoc($result);
 $seats_A_booked = $values['seatsbooked'];
 $seats_A_remaining = 50 - $seats_A_booked;

 $query = "UPDATE schedules SET seats_remain ='$seats_A_remaining' where train_name='A' ";
 $query_run = mysqli_query($db,$query);
}



if($_SESSION['name']=='B'){
  $records = mysqli_query($db,"select * from schedules where train_name='B'"); 
  if($data = mysqli_fetch_array($records))
  {
    $email=$_SESSION['email'];
    $name = $_SESSION['name']; 
    $time = $data['timesl']; 
    $from = $data['from_station']; 
    $to = $data['to_station']; 
    $date = $data['dates']; 
    $fee = $data['fee']; 
  }
    
    
  $sql = "INSERT INTO booked (email,train_name, timesl, fromlocation,tolocation,dates,fee)
  VALUES ('$email', '$name', '$time', '$from', '$to', '$date', '$fee')";
    
  if ($db->query($sql) === TRUE) {
    echo "Booking Successfull for $email";
    echo "<br> Trip Details ";
    echo "<hr> ";
    echo "<br> Train name: $name ";
    echo "<br> Time: $time ";
    echo "<br> From: $from ";
    echo "<br> To: $to ";
    echo "<br> Date: $date ";
    echo "<br> Amount paid: $fee ";
  }else {
   echo "Error: ";
  }
  
  $sql = "SELECT count(id) AS seatsbooked FROM booked where train_name = 'B' ";
  $result = mysqli_query($db,$sql);
  $values = mysqli_fetch_assoc($result);
  $seats_B_booked = $values['seatsbooked'];
  $seats_B_remaining = 50 - $seats_B_booked;

  $query = "UPDATE schedules SET seats_remain ='$seats_B_remaining' where train_name='B' ";
  $query_run = mysqli_query($db,$query);
}


if($_SESSION['name']=='C'){
  $records = mysqli_query($db,"select * from schedules where train_name='C'"); 
  if($data = mysqli_fetch_array($records))
  {
    $email=$_SESSION['email'];
    $name = $_SESSION['name']; 
    $time = $data['timesl']; 
    $from = $data['from_station']; 
    $to = $data['to_station']; 
    $date = $data['dates']; 
    $fee = $data['fee']; 
  }
        
        
  $sql = "INSERT INTO booked (email,train_name, timesl, fromlocation,tolocation,dates,fee)
  VALUES ('$email', '$name', '$time', '$from', '$to', '$date', '$fee')";
        
  if ($db->query($sql) === TRUE) {
    echo "Booking Successfull for $email";
    echo "<br> Trip Details ";
    echo "<hr> ";
    echo "<br> Train name: $name ";
    echo "<br> Time: $time ";
    echo "<br> From: $from ";
    echo "<br> To: $to ";
    echo "<br> Date: $date ";
    echo "<br> Amount paid: $fee ";
  }else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }

  $sql = "SELECT count(id) AS seatsbooked FROM booked where train_name = 'C' ";
  $result = mysqli_query($db,$sql);
  $values = mysqli_fetch_assoc($result);
  $seats_C_booked = $values['seatsbooked'];
  $seats_C_remaining = 50 - $seats_C_booked;

  $query = "UPDATE schedules SET seats_remain ='$seats_C_remaining' where train_name='C' ";
  $query_run = mysqli_query($db,$query);
}



if($_SESSION['name']=='D'){
  $records = mysqli_query($db,"select * from schedules where train_name='D'"); 
  if($data = mysqli_fetch_array($records))
  {
    $email=$_SESSION['email'];
    $name = $_SESSION['name']; 
    $time = $data['timesl']; 
    $from = $data['from_station']; 
    $to = $data['to_station']; 
    $date = $data['dates']; 
    $fee = $data['fee']; 
  }
            
            
  $sql = "INSERT INTO booked (email,train_name, timesl, fromlocation,tolocation,dates,fee)
  VALUES ('$email', '$name', '$time', '$from', '$to', '$date', '$fee')";
            
  if ($db->query($sql) === TRUE) {
    echo "Booking Successfull for $email";
    echo "<br> Trip Details ";
    echo "<hr> ";
    echo "<br> Train name: $name ";
    echo "<br> Time: $time ";
    echo "<br> From: $from ";
    echo "<br> To: $to ";
    echo "<br> Date: $date ";
    echo "<br> Amount paid: $fee ";
  }else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }

  $sql = "SELECT count(id) AS seatsbooked FROM booked where train_name = 'D' ";
  $result = mysqli_query($db,$sql);
  $values = mysqli_fetch_assoc($result);
  $seats_D_booked = $values['seatsbooked'];
  $seats_D_remaining = 50 - $seats_D_booked;

  $query = "UPDATE schedules SET seats_remain ='$seats_D_remaining' where train_name='D' ";
  $query_run = mysqli_query($db,$query);
}
             
$db->close();
?>
<a href="/trainreservationsystem/customerpanel.php"><button class="button">Done</button></a>
</div>
</body>
</html>