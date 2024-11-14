
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
			border: 3px solid #ffa50059;
            background-color:#ffa50059;
  }

		th
		{
			height: 40px;
			padding-top: 10px;
			background-color: #e3ac48;
			

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
	<header>
		<div class="icon">
		<a href='http://localhost/raj/userhome.php'>
        <img src="img/userdash.png" height="80px" width="80px"></a></div>
		<div class="tms">
		<a href='http://localhost/raj/userhome.php'style="text-decoration: none"><p style="color:black; font-size: 20px;">User DashBoards</p></a>
	    </div>

		<nav>
                <ul id='MenuItems'>
                    <li><a href='http://localhost/raj/userhome.php'><b>HOME</a></li>
                   

                    <li><div class="dropdown" >
 				    <button onclick="myFunction()" class="dropbtn"><b style="background-color:#ff7f2a";>SCHEDULE</b></button>
                   
                   <div id="myDropdown" class="dropdown-content">
                    <a href="http://localhost/raj/userexam.php">Exam</a>
                    <a href="http://localhost/raj/usercourse.php">Course</a>
                    </div>
                    </div></li>


                    <li><a href='http://localhost/raj/userrecord.php'><b>INFORMATION</b></a></li>
                    <li><a href='http://localhost/raj/userchatdisplay.php'><b>MESSAGE</b></a></li>
                    <li><a class="active" href='http://localhost/raj/usernotify.php'><b>NOTIFICATION</b></a></li>
                    <li><a href='http://localhost/raj/userlogout.php'><b>LOGOUT</b></a></li> 
                </ul>
        </nav>
	</header>

	<section>
		<div class="user-img">
			<br><br>
			<br>
			



<?php
include("config.php");
error_reporting(0);


$query= "SELECT * FROM notify";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data); 




//echo $total;

if($total != 0)
{
	?>

	
	<center><table border="3" cellspacing="7" width="50%">
		<tr><th width="10%" height="40px">Notification</th></tr>

		<table class="table" border="3" cellspacing="7" width="50%">
		<tr>
		<th width="10%">Date/Time</th>
		<th width="10%">Notification</th>
		
		</tr>
		

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
	echo "<tr>
		      <td>".$result['date']."</td>
		      <td>".$result['notification']."</td>   
		</tr>
		";  
    }
}else
{
	?>
	
	<center><table border="3" cellspacing="7" width="50%">
		<tr><th width="10%" height="40px">Notification</th></tr>

		<table class="table" border="3" cellspacing="7" width="50%">
	<tr>
		<th width="10%">Date/Time</th>
		<th width="10%">Notification</th>
		
		</tr>
</table>

		<?php
	echo "<table style='width:50%';>";
	echo "<tr>";
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";
		      
		      echo"<th style='width:10%';>";echo "empty"; echo"</th>";
		      

		      
		        
		echo"</tr>";
      echo "</table>";
		

}

?>

</table>
</center>


</div>
		</section>


		<footer><br>
			<p style="color:black; text-align: center; font-style: new time romans"><br>
				Email: &nbsp tms24@gmail.com &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				Contact: &nbsp +977 9823267337 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; copyright ©2022
			</p>			
		</footer>
	</div>
	<script>
function myFunction() 
{
    document.getElementById("myDropdown").classList.toggle("show");
}
</script>
</body>
</html>
