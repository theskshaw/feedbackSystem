<?php

	session_start();
	$_SESSION['dept']=$_POST['dept'];
	header('Location: sem.html');

?>