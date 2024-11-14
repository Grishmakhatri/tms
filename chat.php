<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name']))

{
  
}
?>

<html>
<head>
  <title>chats </title>
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

* {
  box-sizing: border-box;
  border-radius: 10px;
}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color:#ff7f2a;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  /*position: fixed;*/
  /*bottom: 0;*/
  right: 15px;
  border: 3px solid #ff7f2a00;
  z-index: 9;
  border-radius: 15px;
  margin-right: 400px;
}

/* Add styles to the form container */
.form-container {
  max-width: 600px;
    padding: 10px;
        margin-left: 500px;
    background-color: #ff7f2a;
    height: 250px;
    width: 390px;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 100px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #0658ad;
  color: white;
  padding: 8px 20px;;
  border: none;
  cursor: pointer;
  width: %;
  margin-bottom:1px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
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
      <br>

<div class="chat-popup" id="myForm">
  <br><br>
  <form action="#" class="form-container" method="POST">
    <center><h1>Chat</h1></center>
<br>

    <label for="msg"><b>&nbsp;Message</b></label>
   <br><br>
    <textarea placeholder="  Type message.." name="message" required></textarea>

    <button type="submit" class="btn" name="sent">Send</button>
   
  </form>
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


if(isset($_POST['sent'])) 
{
  
   date_default_timezone_set('Asia/Kathmandu');
   $date = date('Y-m-d h:iA');

  $username = ucfirst ($_SESSION['admin_name']);

  $message = $_POST['message'];

 
  

  $query = "INSERT INTO chat (date, username, message) VALUES('$date','$username', '$message')";

  $data = mysqli_query($conn,$query);

  if($data)
  {
        ?>
<meta http-equiv="refresh" content="0; url = http://localhost/raj/chatdisplay.php">
    <?php
  }
  else 
  {

  echo "<script>alert('Failed to Sent message')</script>";
        
  }
}
?>
