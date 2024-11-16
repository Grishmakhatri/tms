<!DOCTYPE html>
<html>
<head>
		<title>User Display</title>
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

$sort = "";
if(isset($_GET['sort_alphabet']))
{
 if($_GET['sort_alphabet'] == "a-z")
   {
      $sort = "ASC";
   }
     elseif($_GET['sort_alphabet'] == "z-a")
      {
         $sort = "DESC";
    }
}
                                        
                                       

$query= "SELECT * FROM inform ORDER BY fname $sort";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data); 




//echo $total;

if($total != 0)
{
	?>
	<center><table border="3" cellspacing="7" width="93%">
		<th width="10%" height="40px" style="text-align:center"> Teachers Information</th></tr>
			<!-- table topic banaulai xai table collabration gare -->
		<table border="3" cellspacing="7" width="93%">
		<tr>
		
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
		      
		      <td>".$result['fname']."</td>
		      <td>".$result['lname']."</td>
		      <td>".$result['gender']."</td>
		      <td>".$result['email']."</td>
		      <td>".$result['mobile']."</td>
		      <td>".$result['address']."</td>

		</tr>";  
    }
}else
{
	?>
	<center><table border="3" cellspacing="7" width="93%">
		<tr><th width="10%" height="40px" style="text-align:center">Teachers Information</th></tr>

		<table border="3" cellspacing="7" width="93%">
		<tr>
		
		<th width="8%">First Name</th>
		<th width="8%">Last Name</th>
		<th width="10%">Gender</th>
		<th width="15%">Email</th>
		<th width="10%">Mobile</th>
		<th width="24%">Address</th>
		</tr>

<?php
echo "<table style='width:93%';>";
	echo "<tr>";
		      
		      echo"<th style='width:8%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:8%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:15%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:24%';>";echo "empty"; echo"</th>";  
		echo"</tr>";
      echo "</table>";

}

?>
</table>
</center>


			
		</div>
		</section>

	
			
		</div>
		</section>
<script>
function myFunction() 
{
    document.getElementById("myDropdown").classList.toggle("show");
}
</script>
		<?php 
      require_once "./includes/userfooter.php";
   ?>
	</div>
	
</body>
</html>

