

<!DOCTYPE html>
<html>
<head>
	<title>Exam Routine</title>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
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
			Exam-Routine
		</div>

	<div class="form2">
		<div class="input_field"> 
		 <label>Date</label>
		 <input type="date" class="input" name="date" id="demo" required>
	</div>

	<div class="input_field"> 
		 <label>Subject</label>
		<div class="custom_box"> 
			<select name="subject" required>
		 	<option value="" >Select Subject</option>
		 	<?php while($row=mysqli_fetch_array($sql)){?>
		 	<option><?php echo $row['subject'];?></option>
		 	<?php }?>
		 	 </select>
	</div></div>

<div class="input_field"> 
		 <label>Time</label>
		<div class="custom_box"> 
			<select name="time" required>
		 	<option value="" >Select Time</option>
		 	<option value="7:00 am -- 10:00 am">7:00 am -- 10:00 am</option>
		 	<option value="10:00 am -- 1:00 pm">10:00 am -- 1:00 pm</option>
		 	<option value="11:00 am -- 2:00 pm">11:00 am -- 2:00 pm</option>
		 	<option value="12:00 pm -- 3:00 pm">12:00 pm -- 3:00 pm</option>
		 	<option value="1:00 pm -- 4:00 pm">1:00 pm -- 4:00 pm</option>
		 </select>
	</div></div>

		<div class="input_field"> 
		 <label>Room.No</label>
		<div class="custom_box"> 
			<select name="room" required>
		 	<option value="" >Select Room</option>
		 	<option value="301">301</option>
		 	<option value="302">302</option>
		 	<option value="303">303</option>
		 	<option value="401">401</option>
		 	<option value="402">402</option>
		 	<option value="403">403</option>
		 	<option value="501">501</option>
		 	<option value="502">502</option>
		 	<option value="503">503</option>
		 </select>
	</div></div>

	<div class="input_field">
		<input type="submit" value="Add Routine" class="btn" name="exam">	
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

	$check_book = mysqli_query($conn, "SELECT *FROM exam where date = '$date'");	

if(mysqli_num_rows($check_book) > 0)
{
    echo"<script>alert('Sorry! Exam Subject is Already Exist in this Date')</script>";
}
else
{

$query = mysqli_query($conn,"INSERT INTO exam (date,subject,time,room) VALUES('$date','$subject', '$time', '$room')");

    ?>
<meta http-equiv="refresh" content="0; url = http://localhost/raj/examdisplay.php">
		<?php
}
}
?>



