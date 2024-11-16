
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Notification</title>
</head>

<style type="text/css">
	
.dropdown {
  position: relative;
  display: inline-block;
  border: 2px solid #ff7f2a6e;
  border-radius: 5px;
  transition: .5s;
  line-height: 20px;
}

.dropbtn
{
  font-family: new times romans;
  color: black;
  text-decoration: none;
  font-size: 17px;
  cursor: pointer;
  background-color: #ff7f2a6e;
}

.dropbtn:hover 
{
  color: #AF7AC5;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #F7B9C4;;
  min-width: 20px;
  overflow: auto;
  border: 0px solid #F7B9C4;;
  z-index: 1;
  border-radius: 5px;
}

.dropdown-content a {
  color: black;
  padding: 10px 10px;
  text-decoration: none;
  display: block;
  border-radius: 5px;
  transition: .5s;
  font-size: 18px;
}

.show {
  display: block;
}

</style>

<body>

<div class="wrapper">
	<?php 
      require_once "./includes/adminheader.php";
   ?>
	<section>
		<div class="admin-img">
			<br>


	<div class="container2">
		<form action="#" method="POST">
		<div class="title">
			Notification
		</div>

	<div class="form2">
	<div class="input_field"> 
		 <label>Notify</label>
		<div class="custom_box"> 
			<select name="notification" required>
				<option value="">Select</option>
		 	<option value="Please Check Message">Message</option>
		 	<option value="Please Check Course Schedule">Course</option>
		 	<option value="Please Check Exam Schedule">Exam</option>
		 </select>
	</div></div>

	<div class="input_field">
		<input type="submit" value="Notify" class="btn" name="notify">	
	</div>
	</div>
</form>

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

</script>
</body>
</html>


<?php
include("config.php");

// session_start();

if(isset($_POST['notify'])) 
{
	date_default_timezone_set('Asia/Kathmandu');
   $date = date('Y-m-d h:iA');
	$notification = $_POST['notification'];
	
$check = mysqli_query($conn, "SELECT *FROM notify where date = '$date' && notification = '$notification'");

if(mysqli_num_rows($check) > 0)
{
    echo"<script>alert( 'Notifiactions is Already Exists')</script>";
}
else
{

	$query = mysqli_query($conn,"INSERT INTO notify ( date, notification) VALUES('$date','$notification')");

    ?>
<meta http-equiv="refresh" content="0; url = http://localhost/tms/notifydisplay.php">
		<?php
}
}
?>
