<!DOCTYPE html>
<html>
<head>
		<title>Exam Routine Display</title>
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
  background-color: #cccccc;
}

.dropbtn:hover 
{
  color: #AF7AC5;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #eee;
  min-width: 20px;
  overflow: auto;
  border: 0px solid #cccccc;
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
			border: 3px solid #cccccc;
            background-color:#eee;
		}
table
{
	border-radius: 5px;
}
		th
		{
			height: 40px;
			padding-top: 10px;
			background-color: #eee;
		}

		td:hover 
		{
			background-color: #FEB51C;
		}

		.course, .exam
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
	</style>
</head>
<body>
<div class="wrapper">
		<?php 
      require_once "./includes/userheader.php";
   ?>

	<section>
		<div class="user-img">
			<br><br>
			<br>
			
			
			





<?php
include("config.php");
error_reporting(0);


$query= "SELECT * FROM exam";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data); 




//echo $total;

if($total != 0)
{
	?>

<center><caption><font size="5px" color="#636261"><b>All the Teachers are hereby informed that the exam will be conducted as per the following schedule</b></font></caption></center><br><br>
	<center>

		<table border="3" cellspacing="7" width="93%">
		<tr>
		<th width="10%" height="40px" style="text-align:center"> Exam Routine</th></tr>
		
		<!-- table topic banaulai xai table collabration gare -->

		<table border="3" cellspacing="7" width="93%">
		<tr>
	 	<th width="10%">Date</th>
		<th width="20%">Subject</th>
		<th width="15%">Time</th>
		<th width="10%">Room.No</th>
		</tr>

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
	echo "<tr>
		    <td>".$result['date']."</td>
		      <td>".$result['subject']."</td>
		      <td>".$result['time']."</td>
		      <td>".$result['room']."</td>  
		</tr>";  
    }
}else
{
	?>
	<center><caption><font size="5px" color="#636261"><b>All the Teachers are hereby informed that the exam will be conducted as per the following schedule</b></font></caption></center><br><br>
	<center><table class="table" border="3" cellspacing="7" width="93%">
		<tr><th width="10%" height="40px">Exam Routine</th></tr>
<!-- table topic banaulai xai table collabration gare -->

		<table class="table" border="3" cellspacing="7" width="93%">
		<tr>
		<th width="10%">Date</th>
		<th width="20%">Subject</th>
		<th width="15%">Time</th>
		<th width="10%">Room.No</th>
		</tr>
</table>

		<?php
	echo "<table style='width:93%';>";
	echo "<tr>";
		     
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";  
		      echo"<th style='width:20%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:15%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";
  
		echo"</tr>";
      echo "</table>";
}

?>
</table>
</center>

			
		</div>
		</section>

	
			
		</div>
		</section>

			<?php 
      require_once "./includes/userfooter.php";
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

