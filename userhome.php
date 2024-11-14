<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['user_name']))

{
	header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		User DashBoard
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
</head>
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

</style>

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
                    <li><a class="active" href='http://localhost/raj/userhome.php'><b>HOME</a></li>
                   



                    <li><div class="dropdown" >
 				    <button onclick="myFunction()" class="dropbtn"><b style="background-color:#ff7f2a";>SCHEDULE</b></button>
                   
                    <div id="myDropdown" class="dropdown-content">
                    <a href="http://localhost/raj/userexam.php">Exam</a>
                    <a href="http://localhost/raj/usercourse.php">Course
                    </div>
                    </div></li>

                    <li><a href='http://localhost/raj/userrecord.php'><b>INFORMATION</b></a></li>
                    <li><a href='http://localhost/raj/userchatdisplay.php'><b>MESSAGE</b></a></li>
                    <li><a href='http://localhost/raj/usernotify.php'><b>NOTIFICATION</b></a></li>
                    <li><a href='http://localhost/raj/userlogout.php'><b>LOGOUT</b></a></li> 
                </ul>
        </nav>
	</header>


	<section>
		<div class="user-img">
			<br><br><br><br><br><br>

	<div class="box1">
				<br><br><br><br><br><br>
				<h1 style="text-align: center; font-size:40px">Hi!&ensp;  <span><?php echo ucfirst($_SESSION['user_name'])?></span></h1><br>
				<h2 style="text-align: justify; font-size:40px; margin-top:40px ; padding-left: 30px; padding-right: 30px;" >&nbsp &emsp; Welcome To the User Page </h2>
			</div>
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

		<footer><br>
			<p style="color:black; text-align: center; font-style: new time romans"><br>
				Email: &nbsp tms24@gmail.com &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				Contact: &nbsp +977 9823267337 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; copyright ©2022
			</p>			
		</footer>
	</div>


</body>
</html>