<?php
include("config.php");

$id = $_GET['id'];

$query= "DELETE FROM inform where id='$id'";
$data = mysqli_query($conn,$query);

if($data)
{
	echo "<script>alert('Record is deleted')</script>";
		?>
<meta http-equiv="refresh" content="0; url = http://localhost/raj/inform/display.php">
		<?php
}
else
{
	echo "Record cannot be delete";
}

?>   