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
        <li class="active"><a href="Ratings.php">Ratings</a></li>
        <li><a href="Feedback.php">Rate</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="check_acc.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
      </ul>
    </div>
  </div>
</nav>


<?php 
  include 'db_con.php';
  if (mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
  }
  else{
      $sql = "SELECT * FROM ratings";
      if ($result = mysqli_query($conn, $sql)){
        if (mysqli_num_rows($result) >0){
        echo "<table class=table table-dark width=100%> ";
          echo "<tr>";
            echo "<th>Restaurant Id</th>";
            echo "<th>Restaurant Name</th>";
            echo "<th>Rating</th>";
            echo "<th>Votes</th>";
          echo "</tr>";
          while($row = mysqli_fetch_array($result)){
          echo "<tr>";
            echo "<td>" .$row['R_id'] . "</td>";
            $sql2 = "SELECT Name from restaurant where Rid = '$row[R_id]'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_array($result2); 
            echo "<td>" .$row2['Name'] . "</td>";
            echo "<td>" .$row['Rating'] . "</td>";
            echo "<td>" .$row['Votes'] . "</td>";
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
 ?>


<footer class="container-fluid text-center">
    <button type="button" class="btn btn-danger">Online Copyright</button>
</footer>

</body>
</html>
