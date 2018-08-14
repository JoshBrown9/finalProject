<html> <!-- Please note that there will be two seperate bookroom.phps. One for the checkroom file and one for the roomrates
            The info will be added via $_POST and the functions will automatically fill the data in the form
            This file will assume that info is coming from the checkroom form-->
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
      
  </style>
    
    </head>
     <body data-target=".navbar" data-offset="50">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <!-- Not entriely sure what button and span do, will figure out soon -->    
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
                       </div>
                    </div>
                </div>
            </div>
        </nav>
        <div id="booking" class="container-fluid">
            <div class="container">
                <div class="col-sm-12">
                    <div class ="form-group" id="bookform">
                        <h1>Book Your room Today!</h1>
                        <span class="roomChecked"> <?php echo "You will be staying in room :".$roomNum. "  in a " .$roomtype. " room";?></span> <!-- This span may be an issue -->
                         
                        <form action="finalize.php" method="post">
                            <div class ="form-group">
                                    <h4>First Name</h4>
                                        <input type="text" class="form-control" name="fname" placeholder="First Name">
                             </div>
                             <div class="form-group">
                                    <h4>Last Name</h4>
                                        <input type="text" class="form-control" name="lname" placeholder="Last Name">
                             </div>
                             <div class="form-group">
                                 <h4>Credit Card Number</h4>
                                    <input type="number" class="form-control" name="ccNum" placeholder= "Credit Card"> 
                             </div>  
                                 <input type="hidden" name="checkin" value="<?php echo $cinDate; ?>">
                                 <input type="hidden" name="checkout" value="<?php echo $coutDate; ?>">
                                 <input type="hidden" name="roomNum" value="<?php echo $roomNum; ?>">
                                 <input type="hidden" name="roomtype" value="<?php echo $roomtype; ?>">
                                 <input type="hidden" name="adults" value="<?php echo $adults; ?>">
                                 <input type="hidden" name="children" value="<?php echo $children; ?>">
                             
                             <div classs="form-group">
                                    <input type="submit" class="form-control" value="Book Room">
                             </div>
                             
                        </form>
                    </div>
                </div>
            </div>
         </div>
         
    
    </body>
</html>



<?php

  require 'login.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);



   if (isset($_POST['cinDate'])   &&
        isset($_POST['coutDate']) &&
        isset($_POST['roomtype']) &&
          isset($_POST['adults']) &&
          isset($_POST['children'])){
        
          $cinDate   = get_post($conn, 'cinDate');
          $coutDate = get_post($conn, 'coutDate');
          $roomtype= get_post($conn, 'roomtype');
          $adults = get_post($conn, 'adults');
          $children= get_post($conn, 'children');
     
        $query = "SELECT roomNum FROM rooms WHERE roomtype= '$roomtype' AND isAvailable = 0";
        $row = mysql_fetch_assoc($result);               
        $roomNum = $row['roomNum'];   
             
       }
    }
 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["fname"])) {
            $fnameErr = "first name is required";
          } else {
            $fname = get_post($conn, 'fname');
          }

          if (empty($_POST["lname"])) {
            $lnameErr = "last name is required";
          } else {
            $lname = get_post($conn, 'lname');
          }
            
         if (empty($_POST["ccNum"])) {
            $ccErr = "Credit Card Number is required";
          } else {
            $ccNum = get_post($conn, 'ccNum');
          }
    }
    
    $result->close();
    $conn->close();

    function get_post($conn, $var)
      {
        return $conn->real_escape_string($_POST[$var]);
      }



?>
