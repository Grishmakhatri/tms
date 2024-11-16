<!DOCTYPE html>
<html>
<head>
	<title>
		Display Record
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">

	
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
<?php //if ?>

<input type="text" id="searchInput" placeholder="Search by Firstname or Lastname" style="margin-bottom: 20px;">
<button onclick="performBinarySearch()">Search</button>



	<h3 align="center"><a href='admininform.php'><input type='submit' value='Add Record' class='add'></a></h3><br>
	<center><table border="3" cellspacing="7" width="93%">
		<tr><th width="10%" height="40px" style="text-align:center">Teachers Information</th></tr>
	<!-- table topic banaulai xai table collabration gare -->
		<table border="3" cellspacing="7" width="93%">
		<tr>
		
		<th width="8%">First Name</th>
		<th width="8%">Last Name</th>
		<th width="10%">Gender</th>
		<th width="15%">Email</th>
		<th width="10%">Mobile</th>
		<th width="10%">Address</th>
		<th width="10%">Operations</th>
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

		     <td><a href='updaterecord.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>

		      <a href='recorddelete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>   
			</tr>";  
    }
} 
else
{
	?>


	<h3 align="center"><a href='admininform.php'><input type='submit' value='Add Record' class='add'></a></h3><br>
	<center><table border="3" cellspacing="7" width="93%">
		<tr><th width="10%" height="40px" style="text-align:center">Teachers Information</th></tr>

		<table border="3" cellspacing="7" width="93%">
		<tr>
		
		<th width="8%">First Name</th>
		<th width="8%">Last Name</th>
		<th width="10%">Gender</th>
		<th width="15%">Email</th>
		<th width="10%">Mobile</th>
		<th width="10%">Address</th>
		<th width="10%">Operations</th>
		</tr>

<?php
echo "<table style='width:93%';>";
	echo "<tr>";
		      
		      echo"<th style='width:8%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:8%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:15%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";

		      echo"<th style='width:10%';>"; echo"<a href='recorddisplay.php'>";echo"<input type='submit' value='Update' class='update' onclick='return checkdata()'>";echo"</a>";

		      echo "   ";

		      echo"<a href='recorddisplay.php'>";echo"<input type='submit' value='Delete' class='delete' onclick='return checkdata()'>";echo"</a>";echo"</th>";   
		echo"</tr>";
      echo "</table>";

}

?>

</table>
</table>
</center>

<script type="text/javascript">
	function checkdelete()
	{
		return confirm('Are you sure you want to delete');
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






		






