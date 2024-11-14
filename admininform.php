
<!DOCTYPE html>
<html>
<head>
	<title>User Information</title>
	<meta charset="utf-8">
	<meta namue="viewpoint" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
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


                    <li><a class="active" href='http://localhost/raj/recorddisplay.php'><b>INFORMATION</b></a></li>
                    <li><a href='http://localhost/raj/chatdisplay.php'><b>MESSAGE</b></a></li>
                    <li><a href='http://localhost/raj/notifydisplay.php'><b>NOTIFICATION</b></a></li>
                    <li><a href='http://localhost/raj/displayregister.php'><b>REGISTER</b></a></li>
                    <li><a href='http://localhost/raj/logoutbox.php'><b>LOGOUT</b></a></li> 
                </ul>
        </nav>
	</header>

	<section>
		<div class="admin-img">
			<br>


			<div class="container2">
		<form action="#" method="POST">
		<div class="title">
			Teacher-Information
		</div>

	<div class="form2">
		<div class="input_field"> 
		 <label>First Name</label>
		 <input type="text" class="input" name="fname" required placeholder="Enter your first name">
	</div>

	<div class="input_field"> 
		 <label>Last Name</label>
		 <input type="text" class="input" name="lname" required placeholder="Enter your last name">
	</div>

	<div class="input_field"> 
		 <label>Gender</label>
		<div class="custom_box"> 
			<select name="gender" required>
		 	<option value="">Select</option>
		 	<option value="Male">Male</option>
		 	<option value="Female">Female</option>
		 </select>
	</div></div>

		<div class="input_field"> 
		 <label>Email ID</label>
		 <input type="email" class="input" name="email" pattern="([a-zA-Z0-9-])+@gmail+(.com)" required placeholder="E.g: username@gmail.com">
	</div>

		<div class="input_field"> 
		 <label for="mobile">Mobile</label>
		 <input type="text" class="input" name="mobile" pattern="[0-9]{10}" required placeholder="Enter your number">
	</div>

		<div class="input_field"> 
		 <label>Address</label>
		 <textarea class="area"name="address" required></textarea>
	</div>
	
	<div class="input_field">
		<input type="submit" value="Add Information" class="btn" name="information">	
	</div>
	</div>
</form>

</div>

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

<?php
include("config.php");

if(isset($_POST['information'])) 
{
	$fname = ucfirst ($_POST['fname']);
	$lname = ucfirst ($_POST['lname']);
	$gender = $_POST['gender'];
	$email  = $_POST['email'];
	$mobile  = $_POST['mobile'];
	$address = ucfirst ($_POST['address']);

$check_book = mysqli_query($conn, "SELECT *FROM inform where email = '$email' || mobile = '$mobile' ");

if(mysqli_num_rows($check_book) > 0)
{
    echo"<script>alert('Teacher you enter is already exists')</script>";
}
else
{
   $query = mysqli_query($conn,"INSERT INTO inform (fname,lname,gender, email,mobile,address) VALUES('$fname','$lname', '$gender', '$email', '$mobile', '$address')");

    ?>
<meta http-equiv="refresh" content="0; url = http://localhost/raj/recorddisplay.php">
		<?php
}
}
?>