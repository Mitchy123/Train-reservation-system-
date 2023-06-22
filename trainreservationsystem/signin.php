<html>
    <head>
        <Title>
            Sign in Page
        </Title>
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
                width: 25%;
                border-radius: 5px;
                margin: 100px auto;
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
            <form name="signin" action="connect.php" method="POST">
                <h2>First Name: <input type="text" name="fname" required><br>
                Last Name: <input type="text" name="lname" required><br>
                Email: <input type="text" name="email" required><br>
                ID number: <input type="number" name="id" required><br>
                Password: <input type="password" name="password" required><br>
                Confirm password: <input type="password" name="password2" required></h2>
                <input type="submit" id="btn" value="Sign in">
            </form>
            <a href="/trainreservationsystem/index.php"><button class="button">Home</button></a>
        </div>
    </body>
</html>