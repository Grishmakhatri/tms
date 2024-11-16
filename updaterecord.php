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
	<title>Update Information</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
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
  background-color: #ff7f2a6e;
}

.dropbtn:hover 
{
  color: #AF7AC5;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #ff7f2a6e;
  min-width: 20px;
  overflow: auto;
  border: 0px solid #ff7f2a6e;
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
		 <input type="email" value="<?php echo $result['email'];?>" class="input" name="email" pattern="([a-zA-Z0-9-])+@gmail+(.com)" required>
	</div>

		<div class="input_field"> 
		 <label>Mobile</label>
		 <input type="text" value="<?php echo $result['mobile'];?>" class="input" name="mobile" pattern="[0-9]{10}" required>
	</div>

		<div class="input_field"> 
		 <label>Address</label>
		 <textarea  class="area" name="address" required><?php echo $result['address'];?>
		 	</textarea>
	</div>

	
	<div class="input_field">
		<input type="submit" value="Update" class="btn" name="information">	
	</div>
</form>
</div>
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


if(isset($_POST['information'])) 
{
	$fname = ucfirst ($_POST['fname']);
	$lname = ucfirst ($_POST['lname']);
	$gender = $_POST['gender'];
	$email  = $_POST['email'];
	$mobile  = $_POST['mobile'];
	$address = ucfirst ($_POST['address']);

	$query = "UPDATE inform set fname='$fname',lname='$lname', gender='$gender', email='$email', mobile='$mobile', address='$address' WHERE id='$id' ";
$data = mysqli_query($conn,$query);

	if($data)
	{
		
		?>
<meta http-equiv="refresh" content="0; url = http://localhost/tms/recorddisplay.php">
		<?php
	}
	else 
	{
		echo"Failed to update";

}
}
?>