<html>
    <head>
        <style>
            #btn{
                color:white;
                background:blue;
                padding: 5px;
                margin-left:1%;
            }
            body{
            background-image: url("/trainreservationsystem/images/adminlogin.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
            #frm{
                border: solid gray 1px;
                width: 20%;
                border-radius: 5px;
                margin: 150px auto;
                background: white;
                padding:100px;
            }
        </style>
    </head>
    <body>
    <div id="frm">
<form action="admincheck.php" method="post">
    Email<input type="text" name="email">
    <br>Password<input type="password" name="password">
    <input type="submit" id="btn" value="Login as admin">
</form>
<a href="index.php"><button id="btn">Home</button></a>
</div>