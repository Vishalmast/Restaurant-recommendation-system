<?php 
include 'db_con.php';




if (mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{
	if(isset($_POST["Email_id"], $_POST["password"])) {     

        $email = $_POST["Email_id"]; 
        $password = $_POST["password"]; 
        // echo "$email";
        // echo "$password";
        // $sql = "SELECT Email, password FROM Users WHERE username = '".$name."' AND  password = '".$password."'";
        // $result1 = mysql_query($conn, $sql);
        $result = mysqli_query($conn,"SELECT Email, password FROM User WHERE email = '".$email."' AND  password = '".$password."'");
        if(mysqli_num_rows($result) > 0 )
        { 	session_start();
            $_SESSION["logged_in"] = true; 
            $_SESSION["mail"] = $email; 
            header("Location: welcome.php");
        }
        else
        {
            echo 'The username or password are incorrect!';
        }

	}
}




mysqli_close($conn);
 ?>
