
<html>
<head>
	<title>Display</title>
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


$query= "SELECT * FROM inform";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data); 




//echo $total;

if($total != 0)
{
	?>

	<h2 align="center">Displaying All Records</h2>
	<center><table border="3" cellspacing="7" width="86%">
		<tr>
		<th width="5%">ID</th>
		<th width="8%">First Name</th>
		<th width="8%">Last Name</th>
		<th width="10%">Gender</th>
		<th width="20%">Email</th>
		<th width="10%">Mobile</th>
		<th width="24%">Address</th>
		</tr>

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
	echo "<tr>
		      <td>".$result[id]."</td>
		      <td>".$result[fname]."</td>
		      <td>".$result[lname]."</td>
		      <td>".$result[gender]."</td>
		      <td>".$result[email]."</td>
		      <td>".$result[mobile]."</td>
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

