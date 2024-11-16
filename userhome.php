<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['user_name']))

{
	header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		User DashBoard
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
</head>


<body>
<div class="wrapper">
	<?php 
      require_once "./includes/userheader.php";
   ?>


	<section>
		<div class="user-img">
			<br><br><br><br><br><br>

	<div class="box1">
				<br><br><br><br><br><br>
				<h1 style="text-align: center; font-size:40px">Hi!&ensp;  <span><?php echo ucfirst($_SESSION['user_name'])?></span></h1><br>
				<h2 style="text-align: justify; font-size:40px; margin-top:40px ; padding-left: 30px; padding-right: 30px;" >&nbsp &emsp; Welcome To the User Page </h2>
			</div>
		</div>
		</section>

	
			
		</div>
		</section>
    <script>
function myFunction() 
{
    document.getElementById("myDropdown").classList.toggle("show");
}
</script>

			<?php 
      require_once "./includes/userfooter.php";
   ?>
	</div>


</body>
</html>