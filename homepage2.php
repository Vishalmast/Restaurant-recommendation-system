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
        <li><a href="Restaurants.php">Restaurants</a></li>
        <li><a href="Ratings.php">Ratings</a></li>
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
      $sql = "SELECT * FROM ratings order by Rating desc ";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      $rid = $row['R_id'];
      $rating = $row['Rating'];
      $rating = round($rating, 1);
      $sql2 = "SELECT * from restaurant where Rid = '$rid' ";
      // $result2 = mysqli_query($conn, $sql);
      // (mysqli_num_rows(result2) >0)
      if (mysqli_query($conn, $sql2)){
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_array($result2);
        $name = $row2['Name'];
        $url = $row2['img_url'];
        
      }
    }
?> 



<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">TOP SPOT</div>
        <div class="panel-body"><img src="<?php echo $url ?>" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><?php echo $name."<br>Rating:  ".$rating."/5"; ?></div>
      </div>
    </div>
    <?php  
    $row = mysqli_fetch_array($result);
      $rid = $row['R_id'];
      $rating = $row['Rating'];
      $rating = round($rating, 1);
      $sql2 = "SELECT * from restaurant where Rid = '$rid' ";
      // $result2 = mysqli_query($conn, $sql);
      // (mysqli_num_rows(result2) >0)
      if (mysqli_query($conn, $sql2)){
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_array($result2);
        $name = $row2['Name'];
        $url = $row2['img_url'];
      }
      ?>

    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">SECOND SPOT</div>
        <div class="panel-body"><img src="<?php echo $url ?>" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><?php echo $name."<br>Rating:  ".$rating."/5"; ?></div>
      </div>
    </div>
    <?php  
    $row = mysqli_fetch_array($result);
      $rid = $row['R_id'];
      $rating = $row['Rating'];
      $rating = round($rating, 1);
      $sql2 = "SELECT * from restaurant where Rid = '$rid' ";
      // $result2 = mysqli_query($conn, $sql);
      // (mysqli_num_rows(result2) >0)
      if (mysqli_query($conn, $sql2)){
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_array($result2);
        $name = $row2['Name'];
        $url = $row2['img_url'];
      }
      ?>

    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">THIRD SPOT</div>
        <div class="panel-body"><img src="<?php echo $url ?>" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><?php echo $name."<br>Rating:  ".$rating."/5"; ?></div>
      </div>
    </div>
  </div>
</div><br>
<?php  
    $row = mysqli_fetch_array($result);
      $rid = $row['R_id'];
      $rating = $row['Rating'];
      $rating = round($rating, 1);
      $sql2 = "SELECT * from restaurant where Rid = '$rid' ";
      // $result2 = mysqli_query($conn, $sql);
      // (mysqli_num_rows(result2) >0)
      if (mysqli_query($conn, $sql2)){
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_array($result2);
        $name = $row2['Name'];
        $url = $row2['img_url'];
      }
      ?>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">FOURTH RECOMMENDED</div>
        <div class="panel-body"><img src="<?php echo $url ?>" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><?php echo $name."<br>Rating:  ".$rating."/5"; ?></div>
      </div>
    </div>
    <?php  
    $row = mysqli_fetch_array($result);
      $rid = $row['R_id'];
      $rating = $row['Rating'];
      $rating = round($rating, 1);
      $sql2 = "SELECT * from restaurant where Rid = '$rid' ";
      // $result2 = mysqli_query($conn, $sql);
      // (mysqli_num_rows(result2) >0)
      if (mysqli_query($conn, $sql2)){
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_array($result2);
        $name = $row2['Name'];
        $url = $row2['img_url'];
      }
      ?>

    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">FIFTH RECOMMENDED</div>
        <div class="panel-body"><img src="<?php echo $url ?>" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><?php echo $name."<br>Rating:  ".$rating."/5"; ?></div>
      </div>
    </div>
    <?php  
    $row = mysqli_fetch_array($result);
      $rid = $row['R_id'];
      $rating = $row['Rating'];
      $rating = round($rating, 1);
      $sql2 = "SELECT * from restaurant where Rid = '$rid' ";
      // $result2 = mysqli_query($conn, $sql);
      // (mysqli_num_rows(result2) >0)
      if (mysqli_query($conn, $sql2)){
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_array($result2);
        $name = $row2['Name'];
        $url = $row2['img_url'];
      }
      ?>

    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">SIXTH RECOMMENDED</div>
        <div class="panel-body"><img src="<?php echo $url ?>" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><?php echo $name."<br>Rating:  ".$rating."/5"; ?></div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
    <button type="button" class="btn btn-danger">Online Copyright</button>
</footer>

</body>
</html>
