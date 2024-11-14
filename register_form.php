<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = ucfirst (mysqli_real_escape_string($conn, $_POST['name']));
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   $confirm = md5($_POST['confirm']);
   $user_type = $_POST['user_type'];

   date_default_timezone_set('Asia/Kathmandu');
   $date = date('Y-m-d h:iA');

   $select_users = " SELECT * FROM users WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select_users);

   if(mysqli_num_rows($result) > 0){

      $message[] = 'user already exist!';

   }else{

      if($password != $confirm){
         $message[] = 'password not matched!';
      }else{

         $insert = "INSERT INTO users(date,name, email, password, user_type) VALUES('$date','$name','$email','$password','$user_type')";
         mysqli_query($conn, $insert);
         header('location:displayregister.php');
      }
   }
};
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

                    
                    <li><a href='http://localhost/raj/recorddisplay.php'><b>INFORMATION</b></a></li>
                    <li><a href='http://localhost/raj/chatdisplay.php'><b>MESSAGE</b></a></li>
                    <li><a href='http://localhost/raj/notifydisplay.php'><b>NOTIFICATION</b></a></li>
                    <li><a class="active" href='http://localhost/raj/displayregister.php'><b>REGISTER</b></a></li>
                    <li><a href='http://localhost/raj/logoutbox.php'><b>LOGOUT</b></a></li> 
                </ul>
        </nav>
   </header>

   <section>
      <div class="admin-img">
         <br><br><br><br><br><br>


   <div class="form-container1">

   <form action="" method="post">
      <h3>register</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<span class="error-msg">'.$message.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">

      <input type="email" name="email" pattern="([a-zA-Z0-9-])+@gmail+(.com)" required placeholder="enter your email">

      <input type="password" name="password" required placeholder="enter your password">

      <input type="password" name="confirm" required placeholder="confirm your password">

      <select name="user_type">
         <option value="User">User</option>
         <option value="Co-Admin">Co-Admin</option>
      </select>


      <input type="submit" name="submit" value="register" class="form-btn">
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


