<?php
session_start();
$db = mysqli_connect("localhost","root","","test");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
$records = mysqli_query($db,"select * from schedules where train_name='B'"); 
if($data = mysqli_fetch_array($records))
{
    $name = $data['train_name'];
    $time = $data['timesl'];
    $from = $data['from_station'];
    $to = $data['to_station'];
    $date = $data['dates'];
    $fee = $data['fee'];
    $_SESSION['name']=$name;
}
?>
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
            #btn{
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
            body{
              background-image: url("/trainreservationsystem/images/signin.jpg");
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
            }
        </style>
    </head>
    <body>
        <div id="frm">
            Train Name: <?php echo $name ?>
            <p>From: <?php echo $from ?>
            <p>To: <?php echo $to ?>
            <p>Date: <?php echo $date ?>
            <p>Time: <?php echo $time ?>
            <p>Fee: <?php echo $fee ?>
            <h2>Pay Now</h2>
            <p>Paybill Number:
            <a href="/trainreservationsystem/reference.php"><button id="btn">7134532</button></a>
        </div>