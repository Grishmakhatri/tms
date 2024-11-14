<?php
@include 'config.php';

session_start();


if (!isset($_SESSION['email']))

if(!isset($_SESSION['admin_name']))

{
  header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>
    Admin DashBoard
  </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewpoint" content="width=device-width, initial-scale=1">
</head>
<style type="text/css">

.box5 {
    height: 150px;
    width: 400px;
    background-color: #ff7f2aa8;
    margin-top: px;
    /* opacity: .8; */
    color: #1c45b9;
    border-radius: 20px;
    margin-left: 940px;
}
  
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


.Logout
    {
      background-color: green;
      color: white;
      border: 0;
      outline: none;
      border-radius: 5px;
      height: 30px;
      width: 90px;
      font-weight: bold;
      cursor: pointer;
      text-align: center;
      margin-bottom: 5px;
    }

    .Logout:hover
    {
      background-color: #64d064;
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



                    <li><a href='http://localhost/raj/recorddisplay.php'><b>INFORMATION</b></a></li>
                    <li><a href='http://localhost/raj/chatdisplay.php'><b>MESSAGE</b></a></li>
                    <li><a href='http://localhost/raj/notifydisplay.php'><b>NOTIFICATION</b></a></li>
                    <li><a href='http://localhost/raj/displayregister.php'><b>REGISTER</b></a></li>
                    <li><a class="active" href='http://localhost/raj/logoutbox.php'><b>LOGOUT</b></a></li> 
                </ul>
        </nav>
  </header>

  <section>
    <div class="admin-img">
      <br>

      <div class="box5">
        <br><br>
        <h1 style="text-align: center; font-size:25px">Username:&ensp;   <span><?php echo ucfirst($_SESSION['admin_name'])?></span></h1><br>
        <h1 style="text-align: center; font-size: 25px">Logout:&ensp; <a href='logout.php'><span><input type='submit' value='Logout' class='Logout' onclick='return checklogout()'></span></a></h1>

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
<script type="text/javascript">
  function checklogout()
  {
    return confirm('Are you sure you want to Logout?');
  }
</script>