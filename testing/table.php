<?php
	
	session_start();
	$dept=$_SESSION['dept'];
	$sem=$_SESSION['sem'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HETC | Feedback System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="table/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/css/util.css">
	<link rel="stylesheet" type="text/css" href="table/css/main.css">


	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-overlay.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
<!--===============================================================================================-->
<script type="text/javascript">
	
</script>
<style type="text/css">
	body{
		overflow: hidden;
	}
</style>
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: white;
  color:black;
  text-align: center;
}

#disp{
	background: #2575fc;
  background: -webkit-linear-gradient(left, #6a11cb, #2575fc);
  background: -o-linear-gradient(left, #6a11cb, #2575fc);
  background: -moz-linear-gradient(left, #6a11cb, #2575fc);
  background: linear-gradient(left, #6a11cb, #2575fc);
}
</style>
</head>
<body id="disp">
	<?php

		$con=mysqli_connect('localhost','root','','feedback');
		if($con)
		{
			$sql="SELECT * FROM `SUB` WHERE `sem`=$sem and `dept`='$dept' and `status`=1";
			$result=mysqli_query($con,$sql);
			$count=mysqli_num_rows($result);


		}
		date_default_timezone_set("Asia/Calcutta");
		//echo date("y/m/d");

	?>
	<div class="limiter" style="background-color: grey">
		<div class="container-table100">
			<div class="wrap-table100">
				
				<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Prof Name</th>
									<th class="cell100 column2">Prof Code</th>
									<th class="cell100 column3">Sub Name</th>
									<th class="cell100 column4">Sub Code</th>
									<th class="cell100 column5">Action</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<?php

								while($row = mysqli_fetch_assoc($result)){

								?>
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo $row['fname'].' '.$row['lname']; ?></td>
									<td class="cell100 column2"><?php echo $row['teacode']; ?></td>
									<td class="cell100 column3"><?php

										$subcode=$row['subcode'];
										$s="SELECT `subname` from `subjects` where `subcode`='$subcode'";
										$r=mysqli_query($con,$s);
										if(mysqli_num_rows($r)>0)
										{
											$rr= mysqli_fetch_assoc($r);
											echo $rr['subname'];
										}

										else
										{
											echo "Null";
										}


									?></td>
									<td class="cell100 column4"><?php echo $row['subcode']; ?></td>
									<td class="cell100 column5">
										<form action="feed.php" target="blank" method="post">
										<input type="hidden" name="subcode" value=<?php echo $row['subcode']; ?>>
										<input type="hidden" name="teacode" value=<?php echo $row['teacode']; ?>>
										<input type="hidden" name="name" value=<?php echo $row['fname'].' '.$row['lname']; ?>>
										<input type="submit" name="submit" value="Submit Feedback" 

										
										<?php
												
												date_default_timezone_set('Asia/Kolkata');
												$date=date("Y-m-d");
												$username=$_SESSION['username'];
												$teacode=$row['teacode'];
												$subcode=$row['subcode'];
												$s="SELECT * FROM `feed` where `subcode`='$subcode' and `date`='$date' and `teacode`='$teacode' and
												`uname`='$username'";
												$r=mysqli_query($con,$s);

												if(mysqli_num_rows($r)>0)
												{
													echo 'disabled=""';
												}

											/*$i=sizeof($_SESSION['stored']);
											if($i>0)
											{
												while($i>0)
												{	
													$i--;
													if($_SESSION['stored'][$i][$i]==$row['subcode'])
													{
														echo 'disabled=""';
													}
													
												}
											}*/

										?>



										>
										</form>
							</td>
								</tr>
								<?php 
										}
									 ?>
							</tbody>
						</table>
					
				</div>


				</div>
<div id="btn" align="center">
  			<a href="clear.php"><input type="submit" name="submit" class="button" align="center" value="Exit"></a>
  			</div>
				
				</div>
				<div class="footer">
  <p>Copyright &copy 2019. All rights reserved. Developed by <a href="https://www.theskshaw.in" style="color: blue"><b><i>theskshaw</i></b></a></p>
</div>
			</div>




		</div>
	
		
<!--===============================================================================================-->	
	<script src="table/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="table/vendor/bootstrap/js/popper.js"></script>
	<script src="table/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="table/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="table/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="table/js/main.js"></script>

</body>
</html>