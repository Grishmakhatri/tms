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
    user DashBoard
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

<div class="wrapper">
  <header>
    <div class="icon">
    <a href='http://localhost/tms/userhome.php'>
        <img src="img/userdash.png" height="80px" width="80px"></a></div>
    <div class="tms">
    <a href='http://localhost/tms/userhome.php'style="text-decoration: none"><p style="color:black; font-size: 20px;">User DashBoards</p></a>
      </div>

    <nav>
                <ul id='MenuItems'>
                    <li><a href='http://localhost/tms/userhome.php'><b>HOME</a></li>
                   

                    <li><div class="dropdown" >
            <button onclick="myFunction()" class="dropbtn"><b style="background-color:#ff7f2a";><a >SCHEDULE</a></b></button>
                   
                   <div id="myDropdown" class="dropdown-content">
                    <a href="http://localhost/tms/userexam.php">Exam</a>
                    <a href="http://localhost/tms/usercourse.php">Course</a>
                    </div>
                    </div></li>

                    <li><a href='http://localhost/tms/userrecord.php'><b>INFORMATION</b></a></li>
                    <li><a href='http://localhost/tms/userchatdisplay.php'><b>MESSAGE</b></a></li>
                    <li><a href='http://localhost/tms/usernotify.php'><b>NOTIFICATION</b></a></li>
                    <li><a class="active" href='http://localhost/tms/userlogout.php'><b>LOGOUT</b></a></li> 
                </ul>
        </nav>
  </header>

  <section>
    <div class="user-img">
      
      <br>



      <div class="box5">
        <br><br>
        <h1 style="text-align: center; font-size:25px">Username:&ensp;   <span><?php echo ucfirst($_SESSION['user_name'])?></span></h1><br>
        <h1 style="text-align: center; font-size: 25px">Logout:&ensp; <a href='logout.php'><span><input type='submit' value='Logout' class='Logout' onclick='return checklogout()'></span></a></h1>

      </div>
    </div>
    </section>


    <footer><br>
      <p style="color:black; text-align: center; font-style: new time romans"><br>
        Email: &nbsp tms24@gmail.com &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        Contact: &nbsp +977 9863857456 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; copyright ©2024
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