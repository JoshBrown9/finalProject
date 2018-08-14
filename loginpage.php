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
  #login{padding-top:100px; margin-right: 20px; margin-left:20px;height:800px;color:darkslategray; background-color:lightskyblue;}
  #bookform{padding-top:50px; background-color:lightgoldenrodyellow; height: 400px;}
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
        <div id="login" class="container-fluid">
            <div class="container">
                <div class="col-sm-12">
                    <div class ="form-group" id="bookform">
                        <h1>Admin Login</h1>
                        <form action="adminglogin.php" method="post"> <!-- acton may need to change depending on how we code this -->
                            <div class ="form-group">
                                    <h4>Username</h4>
                                        <input type="text" class="form-control" name="fname" placeholder="Username">
                             </div>
                             <div class="form-group">
                                    <h4>Password</h4>
                                        <input type="text" class="form-control" name="lname" placeholder="Password">
                            </div>
                             
                             <div classs="form-group">
                                    <input type="submit" class="form-control" value="Login">
                             </div>
                             
                        </form>
                    </div>
                </div>
            </div>
         </div>
         
    
    </body>
</html>