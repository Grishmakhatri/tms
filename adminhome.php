<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name']))

{
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Admin DashBoard
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="wrapper">

	<?php 
      require_once "./includes/adminheader.php";
   ?>

	<section>
		<div class="admin-img">
			<br><br><br><br><br><br>

			<div class="box1">
				<br><br><br><br><br><br>
				<h1 style="text-align: center; font-size:40px">Hi!&ensp;   <span><?php echo ucfirst($_SESSION['admin_name'])?></span></h1><br>
				<h2 style="text-align: justify; font-size:40px; margin-top:40px ; padding-left: 30px; padding-right: 30px;" >&nbsp &emsp; Welcome To the Admin Page </h2>

			</div>
		</div>
		</section>


		<?php 
      require_once "./includes/adminfooter.php";
   ?>
	</div>

	<script>
function myFunction() 
{
    document.getElementById("myDropdown").classList.toggle("show");
}
</script>



</body>



</html>