<?php

@include 'config.php';

session_start();

if(isset($_POST['submit']))
{

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);

   // echo $password;
   // die;
 

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0)
   {

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'Admin' || $row['user_type'] == 'Co-Admin')

      {
         $_SESSION['admin_name'] = $row['name'];
         header('location:adminhome.php');
      }

      elseif($row['user_type'] == 'User')

      {
         $_SESSION['user_name'] = $row['name'];
         header('location:userhome.php');
      }
     
   }
   else{
      $message[] = 'incorrect email or password!';
   }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   <div class="wrapper">
   <header>
      <div class="icon">
      <a href='http://localhotms/index.php'>
        <img src="img/tmsicon.jpg" height="80px" width="80px"></a></div>
      <div class="tms">
      <a href='http://localhost/tms/index.php'style="text-decoration: none"><p style="color:black; font-size: 20px;" >Time Management System</p></a>
       </div>

      <nav>
                <ul id='MenuItems'>
                  <li><a href='http://localhost/tms/home.php'><b>HOME</a></li>
                    <li><a href='http://localhost/tms/about.php'><b>ABOUT</b></a></li>
                    <li><a href='http://localhost/tms/contact.php'><b>CONTACT</b></a></li>
                     <li><a class="active" href='http://localhost/tms/login_form.php'><b>LOGIN</b></a></li>
                </ul>
        </nav>
   </header>

   <section>
      <div class="img">
         <br><br><br><br><br>

   
<div class="form-container1">

   <form action="" method="post">
      <h3>login</h3>
      <?php
      if(isset($message))
      {
         foreach($message as $message)
         {
            echo '<span class="error-msg">'.$message.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" id="myInput" required placeholder="enter your password">
      <input type="submit" name="submit" value="login" class="form-btn">
      <p>don't have an account? <a href="javascript:alert ('Sorry!! please inform your admin to register')">register</a></p>
   </form>


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
</body>
</html>
