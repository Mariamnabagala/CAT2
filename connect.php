<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CAT2";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$connect = mysqli_connect('localhost', 'root', '', 'CAT2');
	if (!$connect) {
		die(mysqli_connect_error());
	}

?>