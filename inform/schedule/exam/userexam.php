
<html>
<head>
	<title>Exam Routine Display</title>
	<style type="text/css">
		body
		{
		
	height: 670px;
    margin-top: 0px;
    background-image: url("tms11.jpg");;
		}
		table
		{
			background-color: white;
			border-radius: 5px;
		}
	</style>
</head>
</html>




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

		<h2 align="center"><mark>Exam Routine Display</mark></h2>
	<center><table border="3" cellspacing="7" width="100%">
		<tr>
		<th width="5%">Date</th>
		<th width="8%">Subject</th>
		<th width="8%">Code</th>
		<th width="10%">Semester</th>
		<th width="20%">Time</th>
		<th width="10%">Address</th>
		</tr>

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
	echo "<tr>
		      <td>".$result[date]."</td>
		      <td>".$result[subject]."</td>
		      <td>".$result[code]."</td>
		      <td>".$result[semester]."</td>
		      <td>".$result[time]."</td>
		      <td>".$result[address]."</td>   
		</tr>";  
    }
}else
{
	echo "No records found";
}

?>
</table>
</center>



