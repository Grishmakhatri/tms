<!DOCTYPE html>
<html>
<head>
	<title>
		Exam Routine Display
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">

	<style type="text/css">
		
		
.dropdown {
  position: relative;
  display: inline-block;
  border: 2px solid #eee;
  border-radius: 5px;
  transition: .5s;
  line-height: 20px;
}

.dropbtn
{
  font-family: new times romans;
  color: #4A3267;
  text-decoration: none;
  font-size: 17px;
  cursor: pointer;
  background-color: #eee;
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
  color: #4A3267;
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

		.edit ,.remove ,.add, .course, .exam
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

		.edit:hover 
		{
			background-color: #64d064;
		}

		.remove
		{
			background-color: red;
		}

		.remove:hover
		{
			background-color: #e74b4b;
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
	<?php 
      require_once "./includes/adminheader.php";
   ?>

	<section>
		<div class="admin-img">
			<br><br>
		



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
	  
	 <center><caption><font size="5px" color="#4A3267"><b>All the Teachers are hereby informed that the exam will be conducted as per the following schedule</b></font></caption></center><br><br>
 
	<h3 align="center"><a href='createexam.php'><input type='submit' value='Add Exam' class='add'></a></h3><br>
	<center><table class="table" border="3" cellspacing="7" width="93%">
		<tr><th width="10%" height="40px">Exam Routine</th></tr>
<!-- table topic banaulai xai table collabration gare -->

		<table class="table" border="3" cellspacing="7" width="93%">
		<tr>
		<th width="10%">Date</th>
		<th width="20%">Subject</th>
		<th width="15%">Time</th>
		<th width="10%">Room.No</th>
		<th width="20%">Operations</th>
		</tr>

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
	echo "<tr>
		      
		      <td>".$result['date']."</td>
		      <td>".$result['subject']."</td>
		      <td>".$result['time']."</td>
		      <td>".$result['room']."</td>

		      <td><a href='editexam.php?id=$result[id]'><input type='submit' value='Edit' class='edit'></a>


		      <a href='examremove.php?id=$result[id]'><input type='submit' value='Remove' class='remove' onclick='return checkremove()'></a></td>   
		</tr>
		";  
    }
}else
{

	?>
<center><caption><font size="5px" color="#636261"><b>All the Teachers are hereby informed that the exam will be conducted as per the following schedule</b></font></caption></center><br><br>

	<h3 align="center"><a href='createexam.php'><input type='submit' value='Add Exam' class='add'></a></h3><br>

	<center><table class="table" border="3" cellspacing="7" width="93%">
		<tr><th width="10%" height="40px">Exam Routine</th></tr>
<!-- table topic banaulai xai table collabration gare -->

		<table class="table" border="3" cellspacing="7" width="93%">
		<tr>
		
		<th width="10%">Date</th>
		<th width="20%">Subject</th>
		<th width="15%">Time</th>
		<th width="10%">Room.No</th>
		<th width="20%">Operations</th>
		</tr>
</table>

		<?php
	echo "<table style='width:93%';>";
	echo "<tr>";
		     
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";  
		      echo"<th style='width:20%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:15%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";

		      echo"<th style='width:20%';>";echo"<a href='examdisplay.php'>";echo"<input type='submit' value='Edit' class='exam'onclick='return checkdata()'>";echo"</a>";

		      echo "   ";

		      echo"<a href='examdisplay.php'>";echo"<input type='submit' value='Remove' class='remove' onclick='return checkdata()'>";echo"</a>";echo"</th>";   
		echo"</tr>";
      echo "</table>";
}

?>
</table>
</center>

<script type="text/javascript">
	function checkremove()
	{
		return confirm('Are you sure you want to remove');
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






		






