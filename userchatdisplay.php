<html>
<head>
	<title>chats Display</title>
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

		
	table,tr ,th,td
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

		.delete ,.chat
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

		.delete
		{
			background-color: red;
		}

		.delete:hover
		{
			background-color: #e74b4b;
		}


		.chat 
		{
			background-color: #0d7f8f;
		}

		.chat:hover 
		{
			background-color: #7ed6d6;
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
// print_r($_SESSION);

session_start();
print_r($_SESSION);

// if(!isset($_SESSION['user_name']))

// {
	
// }

print_r($_POST);
print_r($_SESSION['user_name']);

$userId = $_SESSION['user_id'];
echo $userId;

$query= "SELECT * FROM chat WHERE user_id = '$userId'";
// echo $query;
// die;
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data); 




//echo $total;

if($total != 0)
{
	?>

	<h3 align="center"><a href='userchat.php'><input type='submit' value='Add Chat' class='chat'></a></h3><br>
	<center><table border="3" cellspacing="7" width="60%">
		<tr><th width="10%" height="40px">Conversation</th></tr>

		<table class="table" border="3" cellspacing="7" width="60%">
		<tr>
		<th width="10%">Date/Time</th>
		<th width="10%">Username</th>
		<th width="20%">Message</th>
		</tr>
		

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		$qry= "SELECT * FROM users WHERE id = '".$result['admin_id']."'";
		
		$dt = mysqli_query($conn,$qry);
		$res = mysqli_fetch_assoc($dt);
		print_r($res);
		die;
	echo "<tr>
		      <td>".$result['date']."</td>
		      <td>".$res['name']."</td>
		      <td>".$result['message']."</td>      
		</tr>
		";  
    }
}else
{
	?>
	<h3 align="center"><a href='userchat.php'><input type='submit' value='Add Chat' class='chat'></a></h3><br>
	<center><table border="3" cellspacing="7" width="60%">
		<tr><th width="10%" height="40px">Conversation</th></tr>

		<table class="table" border="3" cellspacing="7" width="60%">
	<tr>
		<th width="10%">Date/Time</th>
		<th width="10%">Username</th>
		<th width="20%">Message</th>
		
		</tr>
</table>

		<?php
	echo "<table style='width:60%';>";
	echo "<tr>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:20%';>";echo "empty"; echo"</th>";   
		echo"</tr>";
      echo "</table>";
		

}

?>

</table>
</center>

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