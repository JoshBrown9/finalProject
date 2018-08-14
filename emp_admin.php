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
  #adminbutton{border-color:darkslategrey; height: 100px;}
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
                          <li><a href="bill.php">Final Bill</a></li>
                          </ul>
                       </div>
                    </div>
                </div>
                
            </div>
        </nav>
           <div id="main" lass="container-fluid">
            <div id="block" class="container">
                <h3>Employee Admin</h3>
                <p>Welcome to the employee admin interface. Please select an option below</p>
                <div class="btn-group btn-group-justified">
                   <div class="btn-group">
                    <button id="adminbutton" type="button" class="btn"><a href="checkin.php">Check in Guest</a></button>
                  </div>
                  <div class="btn-group">
                    <button id="adminbutton" type="button" class="btn"><a href="searchroom.php">Search Room Number</a></button>
                  </div>
                  <div class="btn-group">
                    <button id="adminbutton" type="button" class="btn"><a href="bill.php">Final Bill</a></button>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>


<?php

>