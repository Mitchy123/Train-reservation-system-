<html>
    <head>
        <style>
        body{
          background-image:url("/trainreservationsystem/images/customerpanel.jpg");
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
    <br><table border="1" cellpadding='0' bgcolor="white">
            <tr>
                <th>Booked tickets for <?php echo $date?></th>
                <th>Train Name</td>
                <th>Email</th>
                <th>Time</td>
                <th>From</td>
                <th>To</td>
                <th>Dates</td>
                <th>Fee</td>
            </tr>
        <?php
        $date = $_POST['date'];

        $db = mysqli_connect("localhost","root","","test");
        if(!$db){
            die("Connection Failed:" . mysqli_connect_error());
        }
        $records = mysqli_query($db,"select * from booked where dates ='$date' ");

        while($data=mysqli_fetch_array($records)){
        ?>
        <tr>
          <td><?php echo $data['train_name'] ?></td>
          <td><?php echo $data['email'] ?></td>
          <td><?php echo $data['timesl'] ?></td>
          <td><?php echo $data['fromlocation'] ?></td>
          <td><?php echo $data['tolocation'] ?></td>
          <td><?php echo $data['dates'] ?></td>
          <td><?php echo $data['fee'] ?></td>
          <td><a href="canceltkt.php">Cancel</a></td>
        </tr>
        <?php
        }
    
        ?>
        <a href="/trainreservationsystem/customerpanel.php">Dashboard</a>
    </body>



        