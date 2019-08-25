<?php
session_start();

$username=$_POST['username'];
$password=md5($_POST['password']);
$con = mysqli_connect("localhost","root","","feedback");
if($con)
{
	$sql="SELECT * FROM `teainfo` where `uname`='$username' and `pass`='$password'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);
	$status=$row['hod'];
	if($count>0 and $status==2)
	{	//if there is a data forward it to the dashboard after creating a session
		$_SESSION['uname']=$username;
		$_SESSION['status']=2;
		header('Location: admin_dash');
	}
	if($count>0 and $status==1)
	{	//if there is a data forward it to the dashboard after creating a session
		$_SESSION['uname']=$username;
		$_SESSION['fname']=$row['fname'];
		$_SESSION['lname']=$row['lname'];
		$_SESSION['dept']=$row['dept'];
		$_SESSION['email']=$row['email'];
		$_SESSION['status']=1;
		$_SESSION['profcode']=$row['profcode'];
		
		header('Location: prof-dash');
	}
	if($count>0 and $status==0)
	{	//if there is a data forward it to the dashboard after creating a session
		$_SESSION['uname']=$username;
		$_SESSION['fname']=$row['fname'];
		$_SESSION['lname']=$row['lname'];
		$_SESSION['dept']=$row['dept'];
		$_SESSION['email']=$row['email'];
		$_SESSION['profcode']=$row['profcode'];
		$_SESSION['status']=0;

		
		header('Location: tea_dash');
	}
	else
	{
		header('Location: login');
	}
}
?>