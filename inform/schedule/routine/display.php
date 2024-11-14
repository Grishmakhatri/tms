
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
		.update ,.delete ,.add
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
		}

		.delete
		{
			background-color: red;
		}

		.add
		{
			background-color: #0d7f8f;
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

	<h2 align="center"><mark>Displaying All Records</mark></h2>
	<h3 align="center"><a href='userinfo.php'><input type='submit' value='Add Record' class='add'></a></h3>
	<center><table border="3" cellspacing="7" width="100%">
		<tr>
		<th width="5%">ID</th>
		<th width="8%">First Name</th>
		<th width="8%">Last Name</th>
		<th width="10%">Gender</th>
		<th width="20%">Email</th>
		<th width="10%">Mobile</th>
		<th width="24%">Address</th>
		<th width="14%">Operations</th>
		<tr>
		</tr>
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

		      <td><a href='update.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>


		      <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete'></a></td>   
		</tr>
		";  
    }
}else
{
	echo "No records found";
}

?>
</table>
</center>

