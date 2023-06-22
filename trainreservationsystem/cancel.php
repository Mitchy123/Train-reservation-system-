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
      <div id="frm">
       
        <form action="userbooked.php" method="post">
            Please put date of Travel<input type="date" name="date" id="date" required>
            <input type="submit">
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
    </body>