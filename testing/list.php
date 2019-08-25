<?php

	session_start();
	$dept=$_SESSION['dept'];
	$sem=$_SESSION['sem'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="list/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="list/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="list/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="list/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="list/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="list/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="list/css/util.css">
	<link rel="stylesheet" type="text/css" href="list/css/main.css">
<!--===============================================================================================-->
</head>
<body bgcolor="white">
	
	

	<?php

		$con=mysqli_connect('localhost','root','','feedback');
		if($con)
		{
			$sql="SELECT * FROM `SUB` WHERE `sem`=$sem and `dept`='$dept'";
			$result=mysqli_query($con,$sql);
			$count=mysqli_num_rows($result);

		}



	?>
	<div class="limiter">
		
		<div class="container-table100">
				
			<div class="wrap-table100">

					<div class="table">

						<div class="row header">
							<div class="cell">
								Sub Name
							</div>
							<div class="cell">
								Sub Code
							</div>
							<div class="cell">
								Prof. Name
							</div>
							<div class="cell">
								Action
							</div>
						</div>
						<?php

						while($row = mysqli_fetch_assoc($result)){

						?>
						<div class="row">
							
							<div class="cell" data-title="Full Name">
								<?php echo 'Null' ?>
							</div>
							<div class="cell" data-title="Age">
								<?php echo $row['subcode']; ?>
							</div>
							<div class="cell" data-title="Job Title">
								<?php echo $row['fname'].' '.$row['lname']; ?>
							</div>
							<div class="cell" data-title="Location">
								<form action="index.html">
								<input type="submit" name="" value="Submit Feedback">
								</form>
							</div>

						</div>
						<?php 
							}
						 ?>
						

					</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="list/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="list/vendor/bootstrap/js/popper.js"></script>
	<script src="list/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="list/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="list/js/main.js"></script>

</body>
</html>