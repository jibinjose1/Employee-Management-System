<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "company";

$conn = mysqli_connect($localhost,$username,$password,$database);
		
		if($conn === false)
    {
			die("ERROR: Could not connect. ". mysqli_connect_error());
		}
?>