
<!DOCTYPE html>
<html>
<head>
	<title>User Information</title>
	<meta charset="utf-8">
	<meta namue="viewpoint" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>



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
			Teacher-Information
		</div>

	<div class="form2">
		<div class="input_field"> 
		 <label>First Name</label>
		 <input type="text" class="input" name="fname" required placeholder="Enter your first name">
	</div>

	<div class="input_field"> 
		 <label>Last Name</label>
		 <input type="text" class="input" name="lname" required placeholder="Enter your last name">
	</div>

	<div class="input_field"> 
		 <label>Gender</label>
		<div class="custom_box"> 
			<select name="gender" required>
		 	<option value="">Select</option>
		 	<option value="Male">Male</option>
		 	<option value="Female">Female</option>
		 </select>
	</div></div>

		<div class="input_field"> 
		 <label>Email ID</label>
		 <input type="email" class="input" name="email" pattern="([a-zA-Z0-9-])+@gmail+(.com)" required placeholder="E.g: username@gmail.com">
	</div>

		<div class="input_field"> 
		 <label for="mobile">Mobile</label>
		 <input type="text" class="input" name="mobile" pattern="[0-9]{10}" required placeholder="Enter your number">
	</div>

		<div class="input_field"> 
		 <label>Address</label>
		 <textarea class="area"name="address" required></textarea>
	</div>
	
	<div class="input_field">
		<input type="submit" value="Add Information" class="btn" name="information">	
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
</body>
</html>

<?php
include("config.php");

if(isset($_POST['information'])) 
{
	$fname = ucfirst ($_POST['fname']);
	$lname = ucfirst ($_POST['lname']);
	$gender = $_POST['gender'];
	$email  = $_POST['email'];
	$mobile  = $_POST['mobile'];
	$address = ucfirst ($_POST['address']);

$check_book = mysqli_query($conn, "SELECT *FROM inform where email = '$email' || mobile = '$mobile' ");

if(mysqli_num_rows($check_book) > 0)
{
    echo"<script>alert('Teacher you enter is already exists')</script>";
}
else
{
   $query = mysqli_query($conn,"INSERT INTO inform (fname,lname,gender, email,mobile,address) VALUES('$fname','$lname', '$gender', '$email', '$mobile', '$address')");

    ?>
<meta http-equiv="refresh" content="0; url = http://localhost/raj/recorddisplay.php">
		<?php
}
}
?>