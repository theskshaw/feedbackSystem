

<?php

	session_start();
	$_SESSION['sem']=$_POST['sem'];
	$_SESSION['stored']=array();
	$_SESSION['index']=0;
	header('Location: table.php');

?>
