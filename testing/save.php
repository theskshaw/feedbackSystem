<?php
	session_start();
	$i=sizeof($_SESSION['stored']);
	$sc=$_POST['subcode'];

	$_SESSION['stored'][$i][$i]=$sc;

?>
<script type="text/javascript">
	
 window.onload = function () {  
        document.onkeydown = function (e) {  
            return (e.which || e.keyCode) != 116;  
        };  
    }


	window.history.forward(1);
document.attachEvent("onkeydown", my_onkeydown_handler);
function my_onkeydown_handler() {
    switch (event.keyCode) {
        case 116 : // 'F5'
            event.returnValue = false;
            event.keyCode = 0;
            window.status = "We have disabled F5";
            break;
    }
}
my_onkeydown_handler():
</script>
<?php
	
	$type1=$_POST['opt1'];
	$type2=$_POST['opt2'];
	$type3=$_POST['opt3'];
	$type4=$_POST['opt4'];
	$type5=$_POST['opt5'];
	$name=$_POST['name'];
	$teacode=$_POST['teacode'];
	$subcode=$_POST['subcode'];
	
	date_default_timezone_set("Asia/Calcutta");
	$date=date("Y/m/d");
	$time=date("h:i:sa");

	$username=$_SESSION['username'];
	$con=mysqli_connect('localhost','root','','feedback');
	if($con){

		$sql="INSERT INTO `feed` VALUES('$username','$name','$teacode','$subcode',$type1,$type2,$type3,$type4,$type5,'$date','$time')";
		$result=mysqli_query($con,$sql);
		if($result){

			?>

			<script type="text/javascript">
				function RefreshParent() {

			            //if (window.opener != null && !window.opener.closed) {

			                window.opener.location.href = "table.php";

			                //self.close(); //code for page2.aspx close
			            //}
			        }
			        window.onbeforeunload = RefreshParent;
			        RefreshParent();
			        window.close();
			        alert("Thanks for your feedback!");
			</script>

			
			<?php


		}
		else
		{
			echo "result not";
		}
	}
	else
	{
		echo "conn not";
	}
?>