<html>
    <head>
        <style>
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
            .button{
                background-color: green;
                border: none;
                color: white;
                padding: 5px 10px;
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
          <form action="" method="post">
              Enter Reference Number:<input type="number" name="reference" >
              <br><input class="button" type="submit">
          </form>
          <?php
          if(isset($_POST['reference'])){
          $reference = $_POST['reference'];
          if(empty($reference)){
            echo '<script>alert("Please Enter a reference number")</script>';
          }
          else{
            header('location:booked.php');
          }
        }
          ?>
        </div>
        </body>
        </html>