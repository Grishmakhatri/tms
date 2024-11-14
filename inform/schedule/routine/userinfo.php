
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Course Routine</title>
</head>

<body>
	<div class="container2">
		<form action="#" method="POST">
		<div class="title">
			Course-Routine
		</div>

	<div class="form2">
		<div class="input_field"> 
		 <label>Day</label>
		 <input type="day" class="input" name="day" required>
	</div>

	<div class="input_field"> 
		 <label>First Subject</label>
		 <input type="text" class="input" name="subject" required>
	</div>

	<div class="input_field"> 
		 <label>Second Subject</label>
		 <input type="text" class="input" name="subject" required>
	</div>

	<div class="input_field"> 
		 <label>Third Subject</label>
		 <input type="text" class="input" name="subject" required>
	</div>

	<div class="input_field"> 
		 <label>Fourth Subject</label>
		 <input type="text" class="input" name="subject" required>
	</div>

	<div class="input_field"> 
		 <label>Third Subject</label>
		 <input type="text" class="input" name="subject" required>
	</div>

		<div class="input_field"> 
		 <label>Teacher Name</label>
		 <input type="text" class="input" name="tname" required placeholder="Enter your Teacher name">
	</div>

	<div class="input_field"> 
		 <label>Time</label>
		 <input type="time" class="input" name="time" required>
	</div>

	<div class="input_field"> 
		 <label>Confirm</label>
		 <input type="Password" class="input" name="confirm" required>
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
		 <input type="text" class="input" name="email" required>
	</div>

		<div class="input_field"> 
		 <label>Mobile</label>
		 <input type="number" class="input" name="mobile" required>
	</div>

		<div class="input_field"> 
		 <label>Address</label>
		 <textarea class="area"name="address" required></textarea>
	</div>

	<div class="input_field terms"> 
		 <label class="check">
		 <input type="checkbox">
		 <span class="checkmark"></span>
		 </label>
		 <p>Agree to terms and conditions</p>
	</div>

	<div class="input_field">
		<input type="submit" value="Register" class="btn" name="information">	
	</div>
</form>
</div>
</div>
</body>
</html>


<?php
include("config.php");

if(isset($_POST['information'])) 
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
	$gender = $_POST['gender'];
	$email  = $_POST['email'];
	$mobile  = $_POST['mobile'];
	$address = $_POST['address'];

	$query = "INSERT INTO inform (fname,lname,password,confirm,gender, email,mobile,address) VALUES('$fname','$lname', '$password', '$confirm', '$gender', '$email', '$mobile', '$address')";

	$data = mysqli_query($conn,$query);

	if($data)
	{
		echo "<script>alert('Data Inserted')</script>";
		header('location:display.php');
				?>
<meta http-equiv="refresh" content="0; url = http://localhost/raj/inform/display.php">
		<?php
	}
	else 
	{
		echo"Failed to Inserted";
	}
}

