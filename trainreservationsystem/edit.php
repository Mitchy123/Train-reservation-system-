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
        </style>
    </head>
    <body>
        <div id="frm">
            <form action="edit.php" method="post">
            Select Train Name: 
            <select name="train" id="train" required>
                <option value="" selected>Select...</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
            <br>Select date<input type="date" id="date" name="date" required>
            <br>Select time :
            <select name="time" id="time" required>
                <option value="" selected>Select...</option>
                <option value="10pm">10pm</option>
                <option value="4pm">4pm</option>
            </select>
           <br>Input From location :
           <select name="from" id="from" required>
                <option value="" selected>Select...</option>
                <option value="Mombasa">Mombasa</option>
                <option value="Nairobi">Nairobi</option>
            </select>
            <br>Input To location :
            <select name="to" id="to" required>
                <option value="" selected>Select...</option>
                <option value="Mombasa">Mombasa</option>
                <option value="Nairobi">Nairobi</option>
            </select>
            <br>Input Fee<input type="number" id="num" name="num" required>
            <p><input type="submit" value="Set Values"></p>
           </form>   
        </div>

        <script>
      var date = new Date();
      var tdate = date.getDate();
      var month = date.getMonth() +1;
      
      if(tdate < 10){
        tdate = '0' + tdate;
      }
      if(month < 10){
        month = '0' + month;
      }
      
      var year = date.getUTCFullYear();
      var minDate = year + '-' + month + '-' +tdate;
      document.getElementById("date").setAttribute('min',minDate)
  
    </script> 
<?php
$conn = mysqli_connect("localhost","root","","test");
if(isset($_POST['date']) && isset($_POST['train']) && isset($_POST['time']) && isset($_POST['from'])  && isset($_POST['to'])

&& isset($_POST['num'])){ 
    $train_name=$_POST['train'];
    $time=$_POST['time'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $fee=$_POST['fee'];
    $date=$_POST['date'];
    $query = "UPDATE schedules SET dates='$_POST[date]' , timesl='$_POST[time]', from_Station='$_POST[from]', to_station='$_POST[to]', fee='$_POST[num]' where train_name='$_POST[train]' ";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        header('location:admin.php');
    }
    else{
        echo "not updated";
    }
}
?>