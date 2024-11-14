
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
			Exam-Routine
		</div>

	<div class="form2">
		<div class="input_field"> 
		 <label>Date</label>
		 <input type="date" class="input" name="date" required>
	</div>

	<div class="input_field"> 
		 <label>Subject</label>
		 <input type="text" class="input" name="subject" required>
	</div>

	<div class="input_field"> 
		 <label>Code</label>
		 <input type="number" class="input" name="code" required>
	</div>

	<div class="input_field"> 
		 <label>Semester</label>
		<div class="custom_box" > 
			<select name="gender" required>
		 	<option value="">Select</option>
		 	<option value="first">1st</option>
		 	<option value="second">2nd</option>
		 	<option value="third">3rd</option>
		 	<option value="fouth">4th</option>
		 	<option value="fifth">5th</option>
		 	<option value="sixth">6th</option>
		 	<option value="seventh">7th</option>
		 	<option value="eighth">8th</option>
		 </select>
	</div></div>

	<div class="input_field"> 
		 <label>Time</label>
		 <input type="time" class="input" name="time" required>
	</div>

		<div class="input_field"> 
		 <label>Address</label>
		 <textarea class="area"name="address" required></textarea>
	</div>

	<div class="input_field">
		<input type="submit" value="Exam-Routine" class="btn" name="exam">	
	</div>
</form>
</div>
</div>



</body>
</html>


<?php
include("config.php");

if(isset($_POST['exam'])) 
{
	$date = $_POST['date'];
	$subject = $_POST['subject'];
	$code = $_POST['code'];
	$semester = $_POST['semester'];
	$time = $_POST['time'];
	$address = $_POST['address'];

	$query = "INSERT INTO exam (date,subject,code,semester,time,address) VALUES('$date','$subject', '$code', '$semester', '$time', '$address')";

	$data = mysqli_query($conn,$query);

	if($data)
	{
		echo "<script>alert('routine create')</script>";
				?>
<meta http-equiv="refresh" content="0; url = http://localhost/raj/inform/schedule/exam/examdisplay.php">
		<?php
	}
	else 
	{
	echo "<script>alert('Failed to Inserted')</script>";
				
	}
}
?>


