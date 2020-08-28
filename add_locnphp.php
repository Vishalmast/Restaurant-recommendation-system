<?php 
	include 'db_con.php';
	if (mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
	}
	else{
		$rid = $_POST['lid'];
		$name = $_POST['Name'];
		$city = $_POST['city'];
		$sql = "INSERT INTO location Values('$lid','$name', '$city')";
		if (mysqli_query($conn, $sql)){
			echo "<b> Data inserted successfully</b>";
			header("location:locn_success.php");
		}
		else{
			echo "<Span style= 'color:blue'><b>error:Some error in data insertion</b></span>";
		}
	}
 ?>