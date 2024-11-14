
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
		<a href='http://localhost/raj/adminhome.php'>
        <img src="img/admindash.jpg" height="70px" width="70px"></a></div>
		<div class="tms">
		<a href='http://localhost/raj/adminhome.php'style="text-decoration: none"><p style="color:black; font-size: 20px;">Admin DashBoards</p></a>
	    </div>

		<nav>
                <ul id='MenuItems'>
                    <li><a href='http://localhost/raj/adminhome.php'><b>HOME</a></li>
                    
                    <li><div class="dropdown" >
 				    <button onclick="myFunction()" class="dropbtn"><b style="background-color:#ff7f2a";>SCHEDULE</b></button>
                   
                    <div id="myDropdown" class="dropdown-content">
                    <a href="http://localhost/raj/examdisplay.php">Exam</a>
                    <a href="http://localhost/raj/displaycourse.php">Course</a>
                    </div>
                    </div></li>



                    <li><a href='http://localhost/raj/recorddisplay.php'><b>INFORMATION</b></a></li>
                    <li><a a class="active" href='http://localhost/raj/chatdisplay.php'><b>MESSAGE</b></a></li>
                    <li><a href='http://localhost/raj/notifydisplay.php'><b>NOTIFICATION</b></a></li>
                    <li><a href='http://localhost/raj/displayregister.php'><b>REGISTER</b></a></li>
                    <li><a href='http://localhost/raj/logoutbox.php'><b>LOGOUT</b></a></li> 
                </ul>
        </nav>
	</header>

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
