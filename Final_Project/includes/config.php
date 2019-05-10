<?php
	$host = "localhost";
	$user = "proy3";
	$pass = "proy3";
	$db = "proy3";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>
