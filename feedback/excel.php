<?php
/* File name : download_data_in_excel.php */
include('dbconnect.php'); // include database connection file
$filename ="generated_login.xls";
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment;filename='.$filename);
	
//Suppose you have stored data in a table called "users", where the 5 fields are user_id, first_name, last_name, age and email.
$sql = "SELECT * FROM `code`";
$conn = db_connect();
if($conn){
	$result = $conn->query($sql);
	echo "code\n"; // prints header line with field names
	if ($result->num_rows > 0) {// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row['code']."\n"; // prints each record with five fields in a row
	    		}
		} 
	}
?>