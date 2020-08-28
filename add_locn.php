<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.serialnumberinput.js"></script>
  <script type="text/javascript">
    // If you want a separate configuration for each input box, you can replace the general selector input[type='serialnumber'] with specific IDs, Classes, etc.
    $("output[type='serialnumber']").serialnumberinput(
    {
        /*
         The following configuration would allow a serial number of the format 000\00\A
         */
        "separator": "\\",
        "pieces":
        [
            {
                "length": 3,
                "pattern": "[0-9]",
            },
            {
                "type": "separator",
            },
            {
                "length": 2,
                "pattern": "[0-9]",
            },
            {
                "type": "separator",
            },
            {
                "length": 1,
                "pattern": "[a-zA-Z]",
            },
        ],
    });
</script> 
  <link rel="stylesheet" type="text/css" href="style2.css">
  <title>Restro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      height: 300px;
      background: url("jay-wennington-N_Y88TWmGwA-unsplash.jpg") no-repeat ;
      background-position: 90% 61%;
      background-size: 110%;
      margin-bottom: 0;
      position: all;
  }
  /*
    .jumbotron img{
      top : 100%;
    }*/
    
     .jumbotron #vi1{
        width: 250px;
        height: 250px;
        position:absolute;
        top: 3%;
        left: 0%;
    }
  /*  .jumbotron #vi1{
      top : 10%;
    }*1
    #vi2{
      color: #e4f705;
    }
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">     
    <img id="vi1" src="logo.png">
    
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="homepage2.php">Restro</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="#">Register</a></li>
        <li class = "active"><a href="locn.php">Locations</a></li>
        <li><a href="Restaurants.php">Restaurants</a></li>
        <li><a href="Ratings.php">Ratings</a></li>
        <li><a href="Feedback.php">Rate</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="homepage.html"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
      </ul>
    </div>
  </div>
</nav>


<div>

</div>

<div id = "container2">
    <h2 id ="Sign">Add new Location</h2>
    <form action="add_locnphp.php" method="POST">
      <div id = "upper">
        <output class="f2" type="serialnumber" name="lid" size = "3" required><br>
        <label class="f" for="ln">Location Name:</label>
        <input class="f2" type="text" name="Name" size="44"><br>
        <label class="f" for="ln">City Name:</label>
        <input class="f2" type="text" name="city" size="24"><br>
      </div>
      <div id="lower">
        <input type="submit" value="Sign up">
      </div>
    </form>
  </div>

<footer class="container-fluid text-center">
    <button type="button" class="btn btn-danger">Online Copyright</button>
</footer>

</body>
</html>