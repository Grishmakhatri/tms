<?php
include("config.php");

$id = $_GET['id'];

$query= "DELETE FROM inform where id='$id'";
$data = mysqli_query($conn,$query);

		?>
<meta http-equiv="refresh" content="0; url = http://localhost/raj/recorddisplay.php">
		 