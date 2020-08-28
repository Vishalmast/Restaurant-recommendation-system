<?php 
	include 'db_con.php';
	if (mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
	}
	else{
		session_start();
		if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !==true)
		{
    		echo' <script type="text/javascript"> alert("Please Login first!!");
 			window.location="feedback.php" </script>';
		}
		else{
		$rid = $_POST['R_id'];
		$rating = $_POST['Rating'];
		$User_Email = $_SESSION["mail"];
		$sql4 = "SELECT * from restaurant where Rid = '$rid' ";
		$result4 = mysqli_query($conn, $sql4);
		if (mysqli_num_rows($result4) > 0){
		$sql = "INSERT INTO feedback Values('$User_Email','$rid','$rating')";
		$sql2 = "SELECT Rating, Votes from ratings where R_id='$rid'";

		if (mysqli_query($conn, $sql)){
			$result = mysqli_query($conn, $sql2);
		
		if (mysqli_num_rows($result) >0){
			$row = mysqli_fetch_array($result);
			$new_votes = $row['Votes'];
			$new_rating = ($row['Rating']*$new_votes) + $rating;
			$new_votes = $row['Votes'] +1;
			$new_rating = $new_rating/$new_votes;

		}
		$sql3 = "UPDATE ratings SET Rating = $new_rating, Votes= $new_votes WHERE R_id = '$rid'";
		mysqli_query($conn, $sql3);
			echo "<b> Data inserted successfully</b>";
			header("location:feed_success.php");
		}
		else{
			echo' <script type="text/javascript"> alert("You have already inserted the feedback for this restaurant!!");
 			window.location="feedback.php" </script>';
		}
	}
		else{
			echo' <script type="text/javascript"> alert("No restaurant registered with this id!!");
 			window.location="feedback.php" </script>';
		}
	}
	}
 ?>