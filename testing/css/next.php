<?php
	
	$dept=$_GET['dept'];
	session_start();
	$_SESSION['dept']=$dept;

	header("sem.html");
?>