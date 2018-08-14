<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
      body {
          position: relative; 
      }
  #confirm{padding-top:100px; margin-right: 20px; margin-left:20px;height:1000px;color:darkslategray; background-color:lightskyblue;}
  #bookform{padding-top:50px; background-color:lightgoldenrodyellow; height: 800px;}
     </style> 
    </head>

    <body data-target=".navbar" data-offset="50">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
                        <span class="icon-bar"></span>   
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span>
                    </button>
                        <a class="navbar-brand" href="#">South West Hotel</a>
                    </div>
                    <div>
                      <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <!--Please note that the names and hrefs need to be changed -->
                          <li><a href="home.html">Find a Room</a></li>
                          <li><a href="home.html">Rates</a></li>
                          <li><a href="home.html">Local Attractions</a></li>
                          <li><a href="home.html">Contact Us</a></li>
                          <li><a href="checkres.php">Check My Reservation</a></li> <!-- check reservation will redirect to another page-->
                          </ul>
                           <ul class="nav navbar-nav navbar-right">
                               <li><a href="test.html"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
                          </ul>
                       </div>
                    </div>
                </div>
            </div>
        </nav>
        <div id="confirm" class="container-fluid">
            <div class="container">
                <div class="col-sm-12">
                     <div class ="form-group" id="bookform">
                         <h3>Confirm Your Info</h3>
                            
                         
                            <form action="finalize.php" method="post">
                                <div class="form-group">
                                     <h4>Check-in Date</h4>
                                    <input type="date" name="cinDate">
                                 </div>

                                <div class="form-group">
                                     <h4>Check-out Date</h4>
                                     <input type="date" name="coutDate" >
                                </div>

                                <div class ="form-group">
                                        <h4>First Name</h4>
                                            <input type="text" class="form-control" name="fname" >
                                 </div>

                                <div class="form-group">
                                        <h4>Last Name</h4>
                                            <input type="text" class="form-control" name="lname">
                                 </div>

                                 <div class="form-group">
                                     <h4>Credit Card Number</h4>
                                        <input type="number" class="form-control" name="ccNum" > 
                                 </div> 
                                 <!--
                                 <div class="form-group">
                                     <h4>Room Number</h4>
                                     <input type="number" class="form-control" name="roomNum">
                                 </div>
                                  -->
                                 <div classs="form-group">
                                    <h4>Room Type</h4>    
                                    <input type="text" class="form-control" name="roomtype" >
                                </div>

                                <div class="form-group">
                                    <h4>Adults</h4>    
                                    <input type="number" class="form-control" name="adults" >
                                </div>

                                <div class="form-group">
                                    <h4>Children</h4>
                                    <input type="number" class="form-control" name="children" >
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="form-control" value="confirm">
                                </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>                
    </body>
    
<?php
  require 'login.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);

    echo"this is before the if statement";
    
     if (isset($_POST['cinDate'])   &&
        isset($_POST['coutDate']) &&
        isset($_POST['roomtype']) &&
          isset($_POST['adults']) &&
          isset($_POST['children']) &&
          isset($_POST['ccNum']) &&
          isset($_POST['fname']) &&
         isset($_POST['lname']))
     {
         echo "We are in the if statement";
          $cinDate   = get_post($conn, 'cinDate');
          $coutDate = get_post($conn, 'coutDate');
          $roomtype= get_post($conn, 'roomtype');
          $adults = get_post($conn, 'adults');
          $children= get_post($conn, 'children');
          $fname = get_post($conn, 'fname');
          $lname = get_post($conn, 'lname');
          $ccNum = get_post($conn, 'ccNum');
          $isAvailable = 1;

          $query    = "INSERT INTO customer VALUES" ."('$ccNum', '$fname', '$lname', '$adults', '$children')";
          $result   = $conn->query($query);
          if (!$result) echo "INSERT failed: $query<br>" .$conn->error . "<br><br>";

          $query = "INSERT INTO rent(cinDate, coutDate, isAvailable, roomtype) VALUES" ."( '$cinDate', '$coutDate', '$isAvailable', '$roomtype' )";
           $result= $conn->query($query);
     	   if (!$result) echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";

        $query = "INSERT INTO booking (cinDate, coutDate, ccNum) VALUES". "('$cinDate', '$coutDate', '$ccNum')";
        $result= $conn->query($query);
        if (!$result) echo "INSERT failed: $query<br>" .$conn->error . "<br><br>";



        $query = "SELECT roomNum FROM rooms WHERE roomtype= '$roomtype' AND isReserved = 0";
        $result=$conn->query($query);
        if (!$result) die ("Database access failed: " . $conn->error);
         $result->data_seek(0);
         $row = $result->fetch_array(MYSQLI_NUM);
         $roomNum = $row[0];

          echo"The room Number is: ".$roomNum;

          $query= "INSERT INTO bill (ccNum, total, roomNum) VALUES". "('$ccNum', 110,'$roomNum')";
          $result = $conn->query($query);
          if (!$result) echo "INSERT failed: $query<br>" .$conn->error . "<br><br>";

         
     }   
         

    function get_post($conn, $var)
      {
        return $conn->real_escape_string($_POST[$var]);
      }    
    
?>
</html>
        
  