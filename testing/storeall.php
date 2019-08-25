<?php

session_start();
include('dbconnect.php');
?>


<?php
//here goes the main code
	$con=db_connect();

	$u=$_POST['username'];
	$_SESSION['username']=$u;
	$sql="SELECT * FROM `code` WHERE `code`='$u'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	if($count>0){
		$arr=explode("/",$u);
		$_SESSION['dept']=$arr[0];
		$_SESSION['sem']=$arr[1];
		$_SESSION['stored']=array();
		//echo "Dept -> ".$arr[0];
		//echo "Sem -> ".$arr[1];
		header('Location: table.php');
		}
	else
	{	

		?>	
			<div align="center">
			<b>Aha! We're smarter than you!</b><br><br>
			<i>Unauthorized Login attempt, You will be redirected to login page automatically.</i><br>
			If not redirected, <a href="index.html">click here.</a>
			</div>
		<?php
		//echo "Unauthorized Login attempt, You will be redirected to login page automatically.";
		header( "refresh:5;url=index.html" );
		//echo "<script>alert('Unauthorized login attempt, will be reported to admin.');</script>";
		//header('Location: index.html');
	}
?>
