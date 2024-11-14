<?php
include("config.php");

$id = $_GET['id'];

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
                    <a href="http://localhost/raj/displaycourse.php">Course</a>
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
$query="SELECT *FROM course";
$sql=mysqli_query($conn,$query);
?>


		<div class="title">
			Edit Exam Routine
		</div>

	<div class="form2">
		<div class="input_field"> 
		 <label>Date</label>
		 <input id="demo" type="date" value="<?php echo $result['date'];?>"class="input" name="date" required>
	</div>

	<div class="input_field"> 
		 <label>Subject</label>
		<div class="custom_box"> 

			<select name="subject" required>
		 	<option value="">Select</option>


		 	<?php while($row=mysqli_fetch_array($sql)){?>
		 	<option><?php echo $row['subject'];?></option>
		 	<?php }?>
		 	 </select>
	</div></div>

	<div class="input_field"> 
		 <label>Time</label>
		<div class="custom_box"> 

			<select name="time" required>
		 	<option value="">Select</option>


		 	<option value="7:00 am -- 10:00 am"
		 	<?php
		 		if($result['time'] == '7:00 am -- 10:00 am')
		 		{
		 			echo "selected";
		 		}
		 		?> 
		 	>7:00 am -- 10:00 am</option>
		 	
		 	<option value="10:00 am -- 1:00 pm"
		 	<?php
		 		if($result['time'] == '10:00 am -- 1:00 pm')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>10:00 am -- 1:00 pm</option>

		 		<option value="11:00 am -- 2:00 pm"
		 	<?php
		 		if($result['time'] == '11:00 am -- 2:00 pm')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>11:00 am -- 2:00 pm</option>

		 		<option value="12:00 pm -- 3:00 pm"
		 	<?php
		 		if($result['time'] == '12:00 pm -- 3:00 pm')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>12:00 pm -- 3:00 pm</option>

		 		<option value="1:00 pm -- 4:00 pm"
		 	<?php
		 		if($result['time'] == '1:00 pm -- 4:00 pm')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>1:00 pm -- 4:00 pm</option>
		 </select>
	</div></div>

		<div class="input_field"> 
		 <label>Room.No</label>
		<div class="custom_box"> 

			<select name="room" required>
		 	<option value="">Select</option>


		 		<option value="301"
		 	<?php
		 		if($result['room'] == '301')
		 		{
		 			echo "selected";
		 		}
		 		?> 
		 	>301</option>
		 	
		 	<option value="302"
		 	<?php
		 		if($result['room'] == '302')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>302</option>

		 			<option value="303"
		 	<?php
		 		if($result['room'] == '303')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>303</option>

		 		<option value="401"
		 	<?php
		 		if($result['room'] == '401')
		 		{
		 			echo "selected";
		 		}
		 		?> 
		 	>401</option>
		 	
		 	<option value="402"
		 	<?php
		 		if($result['room'] == '402')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>402</option>

		 			<option value="403"
		 	<?php
		 		if($result['room'] == '403')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>403</option>

		 		<option value="501"
		 	<?php
		 		if($result['room'] == '501')
		 		{
		 			echo "selected";
		 		}
		 		?> 
		 	>501</option>
		 	
		 	<option value="502"
		 	<?php
		 		if($result['room'] == '502')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>502</option>

		 			<option value="503"
		 	<?php
		 		if($result['room'] == '503')
		 		{
		 			echo "selected";
		 		}
		 		?>
		 		>503</option>

		 </select>
	</div></div>

	<div class="input_field">
		<input type="submit" value="Edit-Routine" class="btn" name="exam">	
	</div>
</form>
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

	<script>
function myFunction() 
{
    document.getElementById("myDropdown").classList.toggle("show");
}
</script>

<script type="text/javascript">
	var date = new Date();
	var tdate = date.getDate()+2;
	var month = date.getMonth()+1;

    if(tdate < 10)
    {
    	tdate = '0' + tdate;
    }
	if (month < 10)
	{
		month = '0' + month; 
	}

	var year = date.getUTCFullYear();
	var minDate = year + "-" + month + "-" + tdate;

	document.getElementById("demo").setAttribute('min', minDate)
	console.log(minDate);

</script>
</body>
</html>


<?php
include("config.php");

if(isset($_POST['exam'])) 
{
	$date = $_POST['date'];
	$subject = $_POST['subject'];
	$time = $_POST['time'];
	$room = $_POST['room'];	

	$query = "UPDATE exam set date ='$date',subject='$subject',time='$time',room='$room' WHERE id='$id'";

	$data = mysqli_query($conn,$query);

	if($data)
	{
		
				?>
<meta http-equiv="refresh" content="0; url = http://localhost/raj/examdisplay.php">
		<?php
	}
	else 
	{
	echo "<script>alert('Failed to Edit')</script>";
				
	}
}
