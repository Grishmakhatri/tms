<?php
include("config.php");

$code = $_GET['id'];

$query= "SELECT * FROM exam where id='$id'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data); 

?>    


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Exam Routine Edit</title>
</head>

<body>
	<div class="container2">
		<form action="#" method="POST">
		<div class="title">
			Edit Exam Routine
		</div>

	<div class="form2">
		<div class="input_field"> 
		 <label>Date</label>
		 <input type="date" value="<?php echo $result['date'];?>"class="input" name="date" required>
	</div>

	<div class="input_field"> 
		 <label>Subject</label>
		 <input type="text" value="<?php echo $result['subject'];?>" class="input" name="subject" required>
	</div>

	<div class="input_field"> 
		 <label>Code</label>
		 <input type="number" value="<?php echo $result['code'];?>" class="input" name="code" required>
	</div>

	<div class="input_field"> 
		 <label> Semester</label>
		<div class="custom_box"> 
			<select name="semester" required>
		 	<option value="">Select</option>
		 	<option value="first" <?php
		 		if($result['semester'] == 'first')
		 		{
		 			echo "selected";
		 		}
		 		?> >1st Semester</option>
		 	<option value="second" <?php
		 		if($result['semester'] == 'second')
		 		{
		 			echo "selected";
		 		}
		 		?> >2nd Semester</option>
		 	<option value="third" <?php
		 		if($result['semester'] == 'third')
		 		{
		 			echo "selected";
		 		}
		 		?> >3rd Semester</option>
		 	<option value="fouth" <?php
		 		if($result['semester'] == 'fouth')
		 		{
		 			echo "selected";
		 		}
		 		?> >4th Semester</option>
		 	<option value="fifth" <?php
		 		if($result['semester'] == 'fifth')
		 		{
		 			echo "selected";
		 		}
		 		?> >5th Semester</option>
		 	<option value="sixth" <?php
		 		if($result['semester'] == 'sixth')
		 		{
		 			echo "selected";
		 		}
		 		?> >6th Semester</option>
		 	<option value="seventh" <?php
		 		if($result['semester'] == 'seventh')
		 		{
		 			echo "selected";
		 		}
		 		?> >7th Semester</option>
		 	<option value="eighth" <?php
		 		if($result['semester'] == 'eighth')
		 		{
		 			echo "selected";
		 		}
		 		?> >8th Semester</option>
		 </select>
	</div></div>

	<div class="input_field"> 
		 <label>Time</label>
		 <input type="time" value="<?php echo $result['time'];?>" class="input" name="time" required>
	</div>

		<div class="input_field"> 
		 <label>Address</label>
		 <textarea class="area"name="address" required><?php echo $result['address'];?></textarea>
	</div>

	<div class="input_field">
		<input type="submit" value="Edit-Routine" class="btn" name="edit">	
	</div>
</form>
</div>
</div>
</body>
</html>


<?php
include("config.php");

if(isset($_POST['edit'])) 
{
	$date = $_POST['date'];
	$subject = $_POST['subject'];
	$code = $_POST['code'];
	$semester = $_POST['semester'];
	$time = $_POST['time'];
	$address = $_POST['address'];

	$query = "UPDATE exam set (date ='$date',subject='$subject',code='$code',semester='$semester',time='$time',address='$address') WHERE id='$id'";

	$data = mysqli_query($conn,$query);

	if($data)
	{
		echo "<script>alert('routine is updated')</script>";
				?>
<meta http-equiv="refresh" content="0; url = http://localhost/raj/inform/schedule/exam/examdisplay.php">
		<?php
	}
	else 
	{
	echo "<script>alert('Failed to Edit')</script>";
				
	}
}
