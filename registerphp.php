<?php 
	include 'db_con.php';
	if (mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
	}
	else{
		// $rid = $_POST['rid'];
		$rid = 0;
		$name = $_POST['Name'];
		$phone = $_POST["Phone"];
		$location_id = $_POST["Location_id"];
		$type = $_POST["type"];
		$url = $_POST["url"];
		$a = 0;
		$b = 0;
		$sql = "INSERT INTO restaurant Values('$rid','$name','$phone','$location_id','$type', '$url')";
		$sql4 = "SELECT * FROM location where Location_id = '$location_id' ";
		$result4 = mysqli_query($conn, $sql4);
		if (mysqli_num_rows($result4)>0){
		if (mysqli_query($conn, $sql)){
			$sql3 = "SELECT Rid from restaurant where Name = '$name' and Phone = '$phone' and Location_id = '$location_id'";
			$result = mysqli_query($conn, $sql3);
			$row = mysqli_fetch_array($result);
			$rid = $row['Rid'];
			echo '$rid';
			echo $row['Rid'];
			$sql2 = "INSERT INTO ratings Values('$rid', '$a', '$b')";
			if(mysqli_query($conn, $sql2)){
				echo "success";
			}
			echo "<b> Data inserted successfully</b>";
			header("location:reg_success.php");
		}
		else{
			echo "<Span style= 'color:blue'><b>error:Some error in data insertion</b></span>";
		}
	}
	else{
		echo' <script type="text/javascript"> alert("No Location registered with this id!! Please register the location first.");
 			window.location="add_locn.php" </script>';
	}
	}
 ?>