
<html>
<head>
	<title>chats Display</title>
<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">

	<style type="text/css">
		

		
	</style>
</head>
<body>
<div class="wrapper">
	<?php 
      require_once "./includes/adminheader.php";
   ?>

	<section>
		<div class="admin-img">
			<br><br><br>
			

			



<?php
include("config.php");
error_reporting(0);

session_start();

if(!isset($_SESSION['admin_name']))

{
	
}


$query= "SELECT * FROM chat";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data); 




//echo $total;

if($total != 0)
{
	?>

	<h3 align="center"><a href='chat.php'><input type='submit' value='Add Chat' class='chat'></a></h3><br>
	<center><table border="3" cellspacing="7" width="60%">
		<tr><th width="10%" height="40px">Conversation</th></tr>

		<table class="table" border="3" cellspacing="7" width="60%">
		<tr>
		<th width="10%">Date/Time</th>
		<th width="10%">Username</th>
		<th width="20%">Message</th>
		<th width="5%">Operations</th>
		</tr>
		

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
	echo "<tr>
		      <td>".$result['date']."</td>
		      <td>".$result['username']."</td>
		      <td>".$result['message']."</td>
		      <td>
		      <a href='chatdelete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>   
		</tr>
		";  
    }
}else
{
	?>
	<h3 align="center"><a href='chat.php'><input type='submit' value='Add Chat' class='chat'></a></h3><br>
	<center><table border="3" cellspacing="7" width="60%">
		<tr><th width="10%" height="40px">Conversation</th></tr>

		<table class="table" border="3" cellspacing="7" width="60%">
	<tr>
		<th width="10%">Date/Time</th>
		<th width="10%">Username</th>
		<th width="20%">Message</th>
		<th width="5%">Operations</th>
		</tr>
</table>

		<?php
	echo "<table style='width:60%';>";
	echo "<tr>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:20%';>";echo "empty"; echo"</th>";
		      

		      echo"<th style='width:5%';>";
		      

		      echo"<a href='chatdisplay.php'>";echo"<input type='submit' value='Delete' class='delete' onclick='return checkdata()'>";echo"</a>";echo"</th>";   
		echo"</tr>";
      echo "</table>";
		

}

?>

</table>
</center>

<script type="text/javascript">
	function checkdelete()
	{
		return confirm('Are you sure you want to delete message');
	}
</script>

<script type="text/javascript">

	function checkdata()
	{
		return confirm('Sorry! Cannot Delete ');
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
