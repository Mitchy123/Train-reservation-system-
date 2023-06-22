<?php
 require 'navbar.php';
 ?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            h3{
                color:yellow;
            }
            body{
                background-image: url("/trainreservationsystem/images/train.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
        }
            #button{
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
            #socialmedia{
            position: absolute; bottom: 5px;
          }
          #social-icon{
           color:red;
           transition:color 0.2s;
          }
          #social-icon:hover{
            color:black;
          }
          
        </style>
    </head>
<body>

 <div class="topnav">
   <a class="active" href="/trainreservationsystem/index.php">Home</a>
   <a href="/trainreservationsystem/signin.php">Signup</a>
   <a href="/trainreservationsystem/login.php">Login</a>
   <a href="/trainreservationsystem/adminlogin.php">Admin</a>
 </div>


    <h1>SGR ONLINE TRAIN RESERVATION SYSTEM</H1>
    <hr>
    <br>
    <p><h2>Welcome to The Standard Gauge Railway Line Online Ticket Booking System</h2>
    
    <p style="background-color:grey; color:black; font-size:20px;">The SGR Railway Corporation is 6 years old and it runs a
    unilaterally designed track system of 1067mm cape gauge. Only 30km of its track
    distribution is in double track and that is within Mtito Andei area.
    The SGR railway narrow gauge network is approximately 3,800 km long.</p>
 
    <div id="socialmedia">
    <h3><u><i>Contact us</h3></u></i>
    <a id="social-icon"  href="https://www.instagram.com/accounts/login/" target="_blank">
    <ion-icon name="logo-instagram"></ion-icon></a>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
     <b style="background-color:grey; color:black; font-size:20px;">@mitchykim1</b>
    </div>
   
    
</body>

</html>