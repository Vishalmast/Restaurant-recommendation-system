<!DOCTYPE html>
<html lang="en">
<head>
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
    .add{
      margin:50px;
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
      <a class=" active navbar-brand" href="homepage2.php">Restro</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="register.php">Register</a></li>
        <li><a href="locn.php">Locations</a></li>
        <li ><a href="Restaurants.php">Restaurants</a></li>
        <li><a href="Ratings.php">Ratings</a></li>
        <li class="active"><a href="Feedback.php">Rate</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="check_acc.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
      </ul>
    </div>
  </div>
</nav>


<?php 
  include 'db_con.php';
  session_start();
  if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !==true)
  {
    echo "Please login to see your records!!";
}
  else{
    
      $e = $_SESSION["mail"];
  if (mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
  }
  else{
      $sql = "SELECT * FROM Feedback where User_Email= '$e' ";
      if ($result = mysqli_query($conn, $sql)){
        if (mysqli_num_rows($result) >0){
        echo "<table class=table table-dark width=100%> ";
          echo "<tr>";
            echo "<th>User_Email</th>";
            echo "<th>R_id</th>";
            echo "<th>Restaurant Name</th>";
            echo "<th>Rating</th>";
          echo "</tr>";
          while($row = mysqli_fetch_array($result)){
          echo "<tr>";
            echo "<td>" .$row['User_Email'] . "</td>";
            echo "<td>" .$row['R_id'] . "</td>";
            $sql2 = "SELECT Name from restaurant where Rid = '$row[R_id]'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($result2); 
            echo "<td>" .$row2['Name'] . "</td>";
            echo "<td>" .$row['Rating'] . "</td>";
          echo "</tr>";
        }
      echo "</table>";
      mysqli_free_result($result);
      }
      else{
      echo "No records found.";
    }
    }
  }
  }
 ?>
<div class = "add">
  <a href="add_feed.php">Click here to rate a restaurant</a>
</div>

<footer class="container-fluid text-center">
    <button type="button" class="btn btn-danger">Online Copyright</button>
</footer>

</body>
</html>
