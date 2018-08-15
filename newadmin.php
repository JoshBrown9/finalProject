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
  #main{padding-top:100px; margin-right: 20px; margin-left:20px;height:800px;color:darkslategray; background-color:lightskyblue;}
  #block{padding-top:50px; background-color:lightgoldenrodyellow; height: 400px;}
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
                          <li><a href="man_admin.php">Home</a></li>
                          <li><a href="checkin.php">Check-in Guest</a></li>
                          <li><a href="searchroom.php">Search Rooms</a></li>
                          <li><a href="discount.php">Discounts/Charges</a></li>
                          <li><a href="bill.php">Final Bill</a></li>
                          <li><a href="newadmin.php">Add Employee</a></li> <!-- check reservation will redirect to another page-->
                          </ul>
                       </div>
                    </div>
                </div>
            </div>
        </nav>
    <form class="form-inline" action="checkin.php" method="post">
          <div class="form-group">
            <h3>Username</h3>
            <input type="text" class="form-control" id="username" placeholder="Username">
          </div>
          <div class="form-group">
            <h3>Password</h3>
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <div class="form-group">
            <h3>Confirm Password</h3>
            <input type="password" class="form-control" id="repassword" placeholder="Confirm Password">
          </div>
          <div class="form-group">
            <h3>Admin Type</h3>
            <select class="form-control" name="admintype">
                <option value="Employee">Employee</option>
                <option value="Manager">Manager</option>
              </select>
          <input type="submit" class="btn btn-default" value="Submit">
          </div>
  
         
        </form>
    </body>
</html>

<?php
//newadmin.php
//queies will be added later.
?>