<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.serialnumberinput.js"></script>
  <script type="text/javascript">

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
        <li><a href="#">Register</a></li>
        <li ><a href="locn.php">Locations</a></li>
        <li><a href="Restaurants.php">Restaurants</a></li>
        <li><a href="Ratings.php">Ratings</a></li>
        <li class="active"><a href="Feedback.php">Rate</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="check_acc.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
      </ul>
    </div>
  </div>
</nav>


<div>

</div>

<div id = "container2">
    <h2 id ="Sign">Give your Feedback</h2>
    <form action="add_feedphp.php" method="POST">
      <div id = "upper">
        <label class="f" for="ln">R_id:</label>
        <input class="f2" type="number" name="R_id" size="44"><br>
        <label class="f" for="ln">Rating(out of 5):</label>
        <input class="f2" type="number" step="0.01" name="Rating" size="24"  min = "1" max = "5"><br>
      </div>
      <div id="lower">
        <input type="submit" value="Rate">
      </div>
    </form>
  </div>
<footer class="container-fluid text-center">
    <button type="button" class="btn btn-danger">Online Copyright</button>
</footer>


</body>
</html>