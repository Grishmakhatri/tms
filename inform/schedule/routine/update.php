<?php
include("config.php");

$id = $_GET['id'];

$query= "SELECT * FROM inform where id='$id'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data); 

?>    


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>User Information</title>
</head>

<body>
	<div class="container2">
		<form action="#" method="POST">
		<div class="title">
			Update Users Details
		</div>

	<div class="form2">
		<div class="input_field"> 
		 <label>First Name</label>
		 <input type="text" value="<?php echo $result['fname'];?>" class="input" name="fname" required>
	</div>

	<div class="input_field"> 
		 <label>Last Name</label>
		 <input type="text" value="<?php echo $result['lname'];?>" class="input" name="lname" required>
	</div>

	<div class="input_field"> 
		 <label>Password</label>
		 <input type="Password" value="<?php echo $result['password'];?>" class="input" name="password" required>
	</div>

	<div class="input_field"> 
		 <label>Confirm</label>
		 <input type="Password" value="<?php echo $result['confirm'];?>" class="input" name="confirm" required>
	</div>

	<div class="input_field"> 
		 <label>Gender</label>
		<div class="custom_box"> 

			<select name="gender" required>
		 	<option value="">Select</option>


		 	<option value="Male"
		 	<?php
		 		if($result['gender'] == 'Male')
		 		{
		 			echo "selected";
		 		}
		 		?> 
		 	>Male</option>
		 	<option value="Female"
		 	<?php
		 		if($result['gender'] == 'Female')
		 		{
		 			echo "selected";
		 		}
		 		?> 
		 		>Female</option>
		 </select>
	</div></div>

		<div class="input_field"> 
		 <label>Email ID</label>
		 <input type="text" value="<?php echo $result['email'];?>" class="input" name="email" required>
	</div>

		<div class="input_field"> 
		 <label>Mobile</label>
		 <input type="text" value="<?php echo $result['mobile'];?>" class="input" name="mobile" required>
	</div>

		<div class="input_field"> 
		 <label>Address</label>
		 <textarea  class="area" name="address" required><?php echo $result['address'];?>
		 	</textarea>
	</div>

	<div class="input_field terms"> 
		 <label class="check">
		 <input type="checkbox">
		 <span class="checkmark"></span>
		 </label>
		 <p>Agree to terms and conditions</p>
	</div>

	<div class="input_field">
		<input type="submit" value="Update" class="btn" name="update">	
	</div>
</form>
</div>
</div>
</body>
</html>





<?php 
include("config.php");

if(isset($_POST['update'])) 
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
	$gender = $_POST['gender'];
	$email  = $_POST['email'];
	$mobile  = $_POST['mobile'];
	$address = $_POST['address'];

	$query = "UPDATE inform set fname='$fname',lname='$lname',password='$password',confirm='$confirm', gender='$gender', email='$email', mobile='$mobile', address='$address'WHERE id='$id' ";

	$data = mysqli_query($conn,$query);

	if($data)
	{
		echo "<script>alert('Data Updated')</script>";
		?>
<meta http-equiv="refresh" content="0; url = http://localhost/raj/inform/display.php">
		<?php
	}
	else 
	{
		echo"Failed to update";
	}
}
 
