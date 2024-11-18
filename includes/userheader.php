
<style type="text/css">
.dropdown {
  position: relative;
  display: inline-block;
  border: 2px solid #F7B9C4;
  border-radius: 5px;
  transition: .5s;
  line-height: 20px;
}

.dropbtn
{
  font-family: new times romans;
  color: #4A3267;
  text-decoration: none;
  font-size: 17px;
  cursor: pointer;
  background-color: #F7B9C4;
}


.dropbtn:hover 
{
  color: #AF7AC5;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #F7B9C4;
  min-width: 20px;
  overflow: auto;
  /* border: 0px solid #ff7f2a6e; */
  z-index: 1;
  border-radius: 5px;
}

.dropdown-content a {
/*  color: black;*/
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
			height: 40px; 
			padding-top: 5px;
			border: 3px solid #f7b9c4;
            background-color:#eee;
  }

		th
		{
			height: 40px;
			padding-top: 10px;
			background-color: #eee;
			

		}

		td:hover 
		{
			background-color: #f7b9c4;
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

<header class="for_header">
        <div class="icon">
        <a href='http://localhost/tms/userhome.php'>
        <img src="img/admindash.jpg" height="70px" width="70px"></a></div>
        <div class="tms">
        <a href='http://localhost/tms/userhome.php'style="text-decoration: none"><p style="color:#4A3267; font-size: 20px;">user DashBoards</p></a>
        </div>

        <nav>
                <ul id='MenuItems'>
                    <li><a class="active" href='http://localhost/tms/userhome.php'><b>HOME</a></li>

                    <li><div class="dropdown" >
                            <button onclick="myFunction()" class="dropbtn"><b>SCHEDULE</b></button>
                   
                    <div id="myDropdown" class="dropdown-content">
                    <a href="http://localhost/tms/userexam.php">Exam</a>
                    <a href="http://localhost/tms/usercourse.php">Course</a>
                    </div>
                    </div></li>



                    <li><a href='http://localhost/tms/userrecord.php'><b>INFORMATION</b></a></li>
                    <li><a href='http://localhost/tms/userchatdisplay.php'><b>MESSAGE</b></a></li>
                    <li><a href='http://localhost/tms/usernotify.php'><b>NOTIFICATION</b></a></li>
                    <li><a href='http://localhost/tms/userlogout.php'><b>LOGOUT</b></a></li> 
                </ul>
        </nav>
    </header>