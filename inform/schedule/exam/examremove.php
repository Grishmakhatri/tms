<?php
include("config.php");

$id = $_GET['id'];

$query= "DELETE FROM exam where id='$id'";

$data = mysqli_query($conn,$query);

if($data)
{
	echo "<script>alert('Routine is remove')</script>";
		?>
<meta http-equiv="refresh" content="0; url =  http://localhost/raj/inform/schedule/exam/examdisplay.php">
		<?php
}
else
{
	echo "Routine cannot be remove";
}

?>   