<?php
include("config.php");

$id = $_GET['id'];

$query= "SELECT * FROM course where id='$id'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data); 

?>    


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Update Course</title>
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
	<header>
		<div class="icon">
		<a href='http://localhost/raj/adminhome.php'>
        <img src="img/admindash.jpg" height="70px" width="70px"></a></div>
		<div class="tms">
		<a href='http://localhost/raj/adminhome.php'style="text-decoration: none"><p style="color:black; font-size: 20px;">Admin DashBoards</p></a>
	    </div>

		<nav>
                <ul id='MenuItems'>
                    <li><a href='http://localhost/raj/adminhome.php'><b>HOME</a></li>
                    

                     <li><div class="dropdown" >
 				    <button onclick="myFunction()" class="dropbtn"><b style="background-color:#ff7f2a";><a class="active">SCHEDULE</a></b></button>
                   
                    <div id="myDropdown" class="dropdown-content">
                    <a href="http://localhost/raj/examdisplay.php">Exam</a>
                    <a href="http://localhost/raj/displaycourse.php" class="active">Course</a>
                    </div>
                    </div></li>

                    <li><a href='http://localhost/raj/recorddisplay.php'><b>INFORMATION</b></a></li>
                    <li><a href='http://localhost/raj/chatdisplay.php'><b>MESSAGE</b></a></li>
                    <li><a href='http://localhost/raj/notifydisplay.php'><b>NOTIFICATION</b></a></li>
                    <li><a href='http://localhost/raj/displayregister.php'><b>REGISTER</b></a></li>
                    <li><a href='http://localhost/raj/logoutbox.php'><b>LOGOUT</b></a></li> 
                </ul>
        </nav>
	</header>



	<section>
		<div class="admin-img">
			<br>

	<div class="container2">
		<form action="#" method="POST">

<?php 
include('config.php');
$query="SELECT *FROM inform";
$sql=mysqli_query($conn,$query);
?>


		<div class="title">
			Update Course
		</div>

	<div class="form2">

	<div class="input_field"> 
		 <label>Day</label>
		<div class="custom_box"> 

			<select name="day" required>
		 	<option value="">Select Day</option>


		 	<option value="Sunday"
		 	<?php
		 		if($result['day'] == 'Sunday')
		 		{
		 			echo "selected";
		 		}
		 		?> 
		 	>Sunday</option>
		 	
		 	<option value="Monday"
		 	<?php
		 		if($result['day'] == 'Monday')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>Monday</option>

		 		<option value="Tuesday"
		 	<?php
		 		if($result['day'] == 'Tuesday')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>Tuesday</option>

		 		<option value="Wednesday"
		 	<?php
		 		if($result['day'] == 'Wednesday')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>Wednesday</option>

		 		<option value="Thursday"
		 	<?php
		 		if($result['day'] == 'Thursday')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>Thursday</option>
		 		<option value="Friday"
		 	<?php
		 		if($result['day'] == 'Friday')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>Friday</option>
		 </select>
	</div></div>


	<div class="input_field"> 
		 <label>Time</label>
		<div class="custom_box"> 

			<select name="time" required>
		 	<option value="">Select Time</option>


		 	<option value="6:30 am -- 7:30 am"
		 	<?php
		 		if($result['time'] == '6:30 am -- 7:30 am')
		 		{
		 			echo "selected";
		 		}
		 		?> 
		 	>6:30 am -- 7:30 am</option>
		 	
		 	<option value="7:30 am -- 8:30 am"
		 	<?php
		 		if($result['time'] == '7:30 am -- 8:30 am')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>7:30 am -- 8:30 am</option>

		 		<option value="9:00 am -- 9:30 am"
		 	<?php
		 		if($result['time'] == '9:00 am -- 9:30 am')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>9:00 am -- 9:30 am</option>

		 		<option value="9:30 am -- 10:30 am"
		 	<?php
		 		if($result['time'] == '9:30 am -- 10:30 am')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>9:30 am -- 10:30 am</option>

		 		<option value="10:30 am -- 11:30 am"
		 	<?php
		 		if($result['time'] == '10:30 am -- 11:30 am')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>10:30 am -- 11:30 am</option>
		 </select>
	</div></div>

<div class="input_field"> 
		 <label>Teacher</label>
		 <div class="custom_box"> 
			<select name="teacher" required>
		 	<option value="" >Select Teacher</option>
		 	<?php while($row=mysqli_fetch_array($sql)){?>
		 	<option><?php echo $row['fname'].'  '.$row['lname'];?></option>
		 	<?php }?>
		 	 </select>
	</div></div>


	<div class="input_field"> 
		 <label>Subject</label>
		 <input type="text" value="<?php echo $result['subject'];?>" class="input" name="subject" required>
	</div>

	<div class="input_field">
		<input type="submit" value="Update" class="btn" name="update">	
	</div>
</form>
</div>
</div>



</div>
		</section>


		<footer><br>
			<p style="color:black; text-align: center; font-style: new time romans"><br>
				Email: &nbsp tms24@gmail.com &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				Contact: &nbsp +977 9823267337 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; copyright ©2022
			</p>			
		</footer>
	</div>
	<script type="text/javascript">
	function myFunction() 
{
    document.getElementById("myDropdown").classList.toggle("show");
}
</script>
</body>
</html>





<?php 
include("config.php");

if(isset($_POST['update'])) 
{
	$day= $_POST['day'];
	$time = $_POST['time'];
	$subject = ucfirst($_POST['subject']);
	$teacher = $_POST['teacher'];
	

	$query = "UPDATE course set day='$day',time='$time', subject='$subject', teacher='$teacher' WHERE id='$id' ";

	$data = mysqli_query($conn,$query);

	if($data)
	{
	
		?>
<meta http-equiv="refresh" content="0; url = http://localhost/raj/displaycourse.php">
		<?php
	}
	else 
	{
		echo"Failed to update";
	}
}
?>
 
