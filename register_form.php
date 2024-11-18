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
<?php 
      require_once "./includes/adminheader.php";
   ?>

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
         <option value="Co-Admin">Admin</option>
         <option value="Co-Admin">Co-Admin</option>
      </select>


      <input type="submit" name="submit" value="register" class="form-btn">
   </form>

</div>

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


