
<html>
<head>
	<title>Display Registration</title>
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

		.add, .remove 
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


$query= "SELECT * FROM users";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data); 




//echo $total;

if($total != 0)
{
	?>

	<h3 align="center"><a href='register_form.php'><input type='submit' value='Register' class='add'></a></h3><br>
	<center><table border="3" cellspacing="7" width="80%">
		<tr><th width="10%" height="40px">Registration Details</th></tr>

		<table class="table" border="3" cellspacing="7" width="80%">
		<tr>
		<th width="10%">Date/Time</th>
		<th width="20%">Name</th>
		<th width="20%">Email</th>
		<th width="10%">User_type</th>
		<th width="10%">Operations</th>
		</tr>
		

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
	echo "<tr>
	<td>".$result['date']."</td>
		      <td>".$result['name']."</td>
		      <td>".$result['email']."</td>
		      <td>".$result['user_type']."</td>

		      <td><a href='deleteregister.php?id=$result[id]'><input type='submit' value='Remove' class='remove' onclick='return checkremove()'></a></td>   
		</tr>
		";  
    }
}else
{
	?>

	<h3 align="center"><a href='register_form.php'><input type='submit' value='Add' class='add'></a></h3><br>
	<center><table border="3" cellspacing="7" width="80%">
		<tr><th width="10%" height="40px">Registration Details</th></tr>

		<table class="table" border="3" cellspacing="7" width="80%">
		<tr>
			<th width="10%">Date/Time</th>
		<th width="20%">Name</th>
		<th width="20%">Email</th>
		<th width="10%">User_type</th>
		<th width="20%">Operations</th>
		</tr>
		
</table>

		<?php
	echo "<table style='width:80%';>";
	echo "<tr>";
		       echo"<th style='width:10%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:20%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:20%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";

		      echo"<th style='width:20%';>";echo"<a href='displayregister.php'>";echo"<input type='submit' value='Remove' class='remove' onclick='return checkdata()'>";echo"</a>";echo"</th>";   
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
