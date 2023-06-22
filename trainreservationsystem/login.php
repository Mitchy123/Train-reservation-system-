<html>
    <head>
        
        <title>
            Login Page
        </title>
        <style>
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
            body{
             background-image: url("/trainreservationsystem/images/signin.jpg");
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
            #btn{
                color:white;
                background:blue;
                padding: 5px;
                margin-left:1%;
            }
        </style>
    </head>
    <body>
        <div id="frm">
           <form action="logincheck.php" method="post">
                Email: <input type="text" name="email"><br>
                Password: <input type="password" name="password"><br>
                <input type="submit" id="btn" value="Login">
            </form>
            <a href="/trainreservationsystem/index.php"><button class="button">Home</button></a>
        </div>
    </body>
</html>