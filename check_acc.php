<?php 
	include 'db_con.php';
	
	session_start();

	if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !==true)
	{
    	header("location: homepage.html");
	}
	else{
		header("Location: logged_in.php");
	}
 ?>