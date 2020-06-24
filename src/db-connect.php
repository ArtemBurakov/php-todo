<?php
$servername = "localhost";
$username = "artem";
$password = "1111";
$database = "todo";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>
