

<?php
//getting data from the previous page
$name=$_POST['name'];
$teacode=$_POST['teacode'];
$subcode=$_POST['subcode'];


?>


<script type="text/javascript">
  $(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});

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
<style type="text/css">
	<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: grey;
  color: white;
  text-align: center;
}
</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="rating.css">
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-overlay.css" />
</head>
<body>
	<h1 align="center"><span style="color: blue">TELL US WHAT YOU </span><span style="color: green">THINK!</span></h1>
	<div id="hold" align="center">
		<h3>Your feedback is important to us.<span id="span-head"> Help us to IMPROVE!</span></h3>
		<form action="save.php" method="post">
		<div>
			
				<label>Type 1<br></label>
				<div class="rating" >

				  <label>
				    <input type="radio" name="opt1" value="1" />
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt1" value="2" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt1" value="3" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>   
				  </label>
				  <label>
				    <input type="radio" name="opt1" value="4" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt1" value="5" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
				</div>
		</div>


		<div>
			<label>Type 2<br></label>
				<div class="rating" >

				  <label>
				    <input type="radio" name="opt2" value="1" />
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt2" value="2" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt2" value="3" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>   
				  </label>
				  <label>
				    <input type="radio" name="opt2" value="4" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt2" value="5" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
		</div>	

		<div>
			<label>Type 3<br></label>
				<div class="rating" >

				  <label>
				    <input type="radio" name="opt3" value="1" />
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt3" value="2" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt3" value="3" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>   
				  </label>
				  <label>
				    <input type="radio" name="opt3" value="4" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt3" value="5" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
		</div>	

		<div>
			<label>Type 4<br></label>
				<div class="rating" >

				  <label>
				    <input type="radio" name="opt4" value="1" />
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt4" value="2" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt4" value="3" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>   
				  </label>
				  <label>
				    <input type="radio" name="opt4" value="4" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt4" value="5" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
		</div>	

		<div>
			<label>Type 5<br></label>
				<div class="rating" >

				  <label>
				    <input type="radio" name="opt5" value="1"/>
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt5" value="2" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt5" value="3" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>   
				  </label>
				  <label>
				    <input type="radio" name="opt5" value="4" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
				  <label>
				    <input type="radio" name="opt5" value="5" />
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				    <span class="icon">★</span>
				  </label>
		</div>
		<br><br>
		<input type="hidden" name="teacode" value=<?php echo $teacode ?>>
		<input type="hidden" name="subcode" value=<?php echo $subcode ?>>
		<input type="hidden" name="name" value=<?php echo $name ?>>
		<div>
			<input type="submit" name="submit" value="Rate" class="button">
		</div>	

		
	</form>

	</div>


<div class="footer">
  <p>Copyright &copy 2019. All rights reserved. Developed by <a href="https://www.theskshaw.in" style="color: blue"><b><i>theskshaw</i></b></a></p>
</div>

</body>
</html>