<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Course</title>
</head>

<style type="text/css">
/* Dropdown and Button Styling */
.dropdown {
  position: relative;
  display: inline-block;
  border: 2px solid #ff7f2a6e;
  border-radius: 5px;
  transition: .5s;
  line-height: 20px;
}

.dropbtn {
  font-family: Times New Roman;
  color: black;
  text-decoration: none;
  font-size: 17px;
  background-color: #ff7f2a6e;
}

.dropbtn:hover {
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
            <br>
            <div class="container2">
                <form action="#" method="POST">
                    <?php 
                    include('config.php');
                    $query = "SELECT * FROM inform";
                    $sql = mysqli_query($conn, $query);
                    ?>

                    <div class="title">
                        Course
                    </div>

                    <div class="form2">
                        <div class="input_field"> 
                            <label>Day</label>
                            <div class="custom_box"> 
                                <select name="day" required>
                                    <option value="">Select Day</option>
                                    <option value="Sunday">Sunday</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                </select>
                            </div>
                        </div>

                        <div class="input_field"> 
                            <label>Time</label>
                            <div class="custom_box"> 
                                <select name="time" required>
                                    <option value="">Select Time</option>
                                    <option value="6:30 am -- 7:30 am">6:30 am -- 7:30 am</option>
                                    <option value="7:30 am -- 8:30 am">7:30 am -- 8:30 am</option>
                                    <option value="9:00 am -- 9:30 am">9:00 am -- 9:30 am</option>
                                    <option value="9:30 am -- 10:30 am">9:30 am -- 10:30 am</option>
                                    <option value="10:30 am -- 11:30 am">10:30 am -- 11:30 am</option>
                                </select>
                            </div>
                        </div>

                        <div class="input_field"> 
                            <label>Faculties</label>
                            <div class="custom_box"> 
                                <select name="teacher" required>
                                    <option value="">Select Teacher</option>
                                    <?php while($row = mysqli_fetch_array($sql)) { ?>
                                        <option><?php echo $row['fname'].' '.$row['lname']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="input_field"> 
                            <label>Faculty</label>
                            <div class="custom_box">
                                <select name="faculty" required>
                                    <option value="">Select Faculty</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BBA">BBA</option>
                                    <option value="BBS">BBS</option>
                                    <option value="MBA">MBA</option>
                                    <option value="MBS">MBS</option>
                                    <option value="MA Sociology">MA Sociology</option>
                                </select>
                            </div>
                        </div>

                        <div class="input_field"> 
                            <label>Subject</label>
                            <input type="text" class="input" name="subject" required placeholder="Enter Subject">
                        </div>

                        <div class="input_field">
                            <input type="submit" value="Register" class="btn" name="information">    
                        </div>
                    </form>
                </div>
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

<?php
include("config.php");

if (isset($_POST['information'])) {
    $day = $_POST['day'];
    $time = $_POST['time'];
    $subject = ucfirst($_POST['subject']);
    $faculties = $_POST['teacher'];
    $faculty = $_POST['faculty'];

    // Query to check for conflicting classes
    $check_book = mysqli_query($conn, "
        SELECT * 
        FROM course 
        WHERE day = '$day' 
        AND time = '$time' 
        AND (faculties = '$faculties' OR faculty = '$faculty')
    ");

    if (mysqli_num_rows($check_book) > 0) {
        // Conflict: Same teacher at the same time OR same faculty at the same time
        echo "<script>alert('Sorry! Either the selected teacher is already assigned a class during this time, or another teacher is teaching a class for the same faculty at the same time.')</script>";
    } else {
        // Insert the new course into the database
        $query = mysqli_query($conn, "
            INSERT INTO course (day, time, subject, faculties, faculty) 
            VALUES('$day', '$time', '$subject', '$faculties', '$faculty')
        ");

        if ($query) {
            echo "<script>alert('Course successfully registered!');</script>";
            ?>
            <meta http-equiv="refresh" content="0; url=http://localhost/tms/displaycourse.php">
            <?php
        } else {
            echo "<script>alert('Error while registering the course. Please try again.')</script>";
        }
    }
}
?>
