<?php 
/* File name : db_connection.php */
 
function db_connect(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "feedback";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	}
 return $conn;
}
?>