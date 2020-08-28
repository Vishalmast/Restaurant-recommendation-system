<?php 
include 'db_con.php';
$fname = $_POST['fname'];
$lname = $_POST['Lname'];
$location = $_POST['Location'];
$email = $_POST['Email_id2'];
$password = $_POST['password2'];

if(!empty($fname)||!empty($lname)||!empty($location)||!empty($email)||!empty($password)){


	if (mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
	}
	else{
		$sql = "INSERT into user VALUES('$fname', '$lname', '$location', '$email', '$password')";
		if (mysqli_query($conn, $sql)){
			echo "<b> Data inserted successfully</b>";
			header("location:homepage.html");
		}
		else{
			echo "<Span style= 'color:blue'><b>error:Some error in data insertion</b></span>";
		}
	}


}
else{
	echo "All fields are required";
	die();
}
mysqli_close($conn);
 ?>
