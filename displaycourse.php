
<html>
<head>
	<title>Display</title>
<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">

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



		body
		{
		
	height: 670px;
    margin-top: 0px;
		}
	table, tr ,td,th
		{
			text-align: center;
			height: 30px; 
			padding-top: 5px;
			border: 3px solid #ffa50059;
            background-color:#ffa50059;
		}

		th
		{
			height: 40px;
			padding-top: 10px;
			background-color: #e3ac48;

		}

		td:hover 
		{
			background-color: #FEB51C;
		}

		.update ,.delete ,.add, .course, .exam
		{
			background-color: green;
			color: white;
			border: 0;
			outline: none;
			border-radius: 5px;
			height: 22px;
			width: 80px;
			font-weight: bold;
			cursor: pointer;
			text-align: center;
			margin-bottom: 5px;
		}

		.exam:hover 
		{
			background-color: #64d064;
		}

		.course:hover 
		{
			background-color: #64d064;
		}

		.delete
		{
			background-color: red;
		}

		.delete:hover
		{
			background-color: #e74b4b;
		}

		.update:hover 
		{
			background-color: #64d064;
		}

		.add 
		{
			background-color: #0d7f8f;
		}

		.add:hover 
		{
			background-color: #7ed6d6;
		}
		
	</style>
</head>
<body>
<div class="wrapper">
	<header>
		<div class="icon">
		<a href='http://localhotms/adminhome.php'>
        <img src="img/admindash.jpg" height="70px" width="70px"></a></div>
		<div class="tms">
		<a href='http://localhost/tms/adminhome.php'style="text-decoration: none"><p style="color:black; font-size: 20px;">Admin DashBoards</p></a>
	    </div>

		<nav>
                <ul id='MenuItems'>
                    <li><a href='http://localhost/tms/adminhome.php'><b>HOME</a></li>
                    
                    <li><div class="dropdown" >
 				    <button onclick="myFunction()" class="dropbtn"><b style="background-color:#ff7f2a";><a class="active">SCHEDULE</a></b></button>
                   
                    <div id="myDropdown" class="dropdown-content">
                    <a href="http://localhost/tms/examdisplay.php">Exam</a>
                    <a href="http://localhost/tms/displaycourse.php" >Course</a>
                    </div>
                    </div></li>



                    <li><a href='http://localhost/tms/recorddisplay.php'><b>INFORMATION</b></a></li>
                    <li><a href='http://localhost/tms/chatdisplay.php'><b>MESSAGE</b></a></li>
                    <li><a href='http://localhost/tms/notifydisplay.php'><b>NOTIFICATION</b></a></li>
                    <li><a href='http://localhost/tms/displayregister.php'><b>REGISTER</b></a></li>
                    <li><a href='http://localhost/tms/logoutbox.php'><b>LOGOUT</b></a></li> 
                </ul>
        </nav>
	</header>

	<section>
		<div class="admin-img">
			<br><br>
			

	


<?php
include("config.php");
error_reporting(0);


$query= "SELECT * FROM course";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data); 




//echo $total;

if($total != 0)
{
	?>
<center><caption><font size="5px" color="#636261"><b>All the Teachers are hereby informed that the Course will be conducted as per the following schedule</b></font></caption></center><br><br>
	<h3 align="center"><a href='createcourse.php'><input type='submit' value='Add Course' class='add'></a></h3><br>
	<center><table border="3" cellspacing="7" width="93%">
		<tr><th width="10%" height="40px">Course Routine</th></tr>

		<table class="table" border="3" cellspacing="7" width="93%">
		<tr>
		<th width="10%">Day</th>
		<th width="10%">Time</th>
		<th width="20%">Subject</th>
		<th width="15%">Teacher</th>
		<th width="10%">Operations</th>
		</tr>
		

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
	echo "<tr>
		      <td>".$result['day']."</td>
		      <td>".$result['time']."</td>
		      <td>".$result['subject']."</td>
		      <td>".$result['teacher']."</td>

		      <td><a href='updatecourse.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>


		      <a href='deletecourse.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>   
		</tr>
		";  
    }
}else
{
	?><center><caption><font size="5px" color="#636261"><b>All the Teachers are hereby informed that the Course will be conducted as per the following schedule</b></font></caption></center><br><br>
	<h3 align="center"><a href='createcourse.php'><input type='submit' value='Add Course' class='add'></a></h3><br>
	<center><table border="3" cellspacing="7" width="93%">
		<tr><th width="10%" height="40px">Course Routine</th></tr>

		<table class="table" border="3" cellspacing="7" width="93%">
		<tr>
		<th width="10%">Date</th>
		<th width="10%">Time</th>
		<th width="20%">Subject</th>
		<th width="15%">Teacher</th>
		<th width="10%">Operations</th>
		</tr>
</table>

		<?php
	echo "<table style='width:93%';>";
	echo "<tr>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:20%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:15%';>";echo "empty"; echo"</th>";
		      
		      echo"<th style='width:10%';>";echo"<a href='displaycourse.php'>";echo"<input type='submit' value='Update' class='update' onclick='return checkdata()'>";echo"</a>";

		      echo "  ";

		      echo"<a href='displaycourse.php'>";echo"<input type='submit' value='Delete' class='delete' onclick='return checkdata()'>";echo"</a>";echo"</th>";   
		echo"</tr>";
      echo "</table>";
		

}

?>
</table>
</center>

<script type="text/javascript">
	function checkdelete()
	{
		return confirm('Are you sure you want to delete');
	}
</script>

<script type="text/javascript">

	function checkdata()
	{
		return confirm('Sorry! your data is empty');
	}
</script>

</div>
		</section>


		<footer><br>
			<p style="color:black; text-align: center; font-style: new time romans"><br>
				Email: &nbsp tms24@gmail.com &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				Contact: &nbsp +977 9863857456 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; copyright ©2024
			</p>			
		</footer>
	</div>
	<script>
function myFunction() 
{
    document.getElementById("myDropdown").classList.toggle("show");
}
</script>
</body>
</html>
