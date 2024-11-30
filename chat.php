<?php
@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    // Redirect to login or show access denied
    header('Location: login.php');
    exit();
}

if (isset($_POST['sent'])) {
    date_default_timezone_set('Asia/Kathmandu');
    $date = date('Y-m-d h:iA');
    $admin_name = ucfirst($_SESSION['admin_name']);
    $message = $_POST['message'];
    $teacher_id = $_POST['teacher_id']; // ID of the teacher to send the message to

    // Insert the message into the database with the target teacher's ID
    $query = "INSERT INTO chat (date, username, message, recipient_id) VALUES ('$date', '$admin_name', '$message', '$teacher_id')";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Message sent successfully');</script>";
        echo '<meta http-equiv="refresh" content="0; url=chatdisplay.php">';
    } else {
        echo "<script>alert('Failed to send message');</script>";
    }
}

// Fetch all teachers to populate the dropdown
$teachers_query = "SELECT id, name FROM user WHERE role = 'teacher'";
$teachers_result = mysqli_query($conn, $teachers_query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chats</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="wrapper">
    <?php require_once "./includes/adminheader.php"; ?>

    <section>
        <div class="chat-popup" id="myForm">
            <form action="#" class="form-container" method="POST">
                <h1>Send Message</h1>

                <label for="teacher_id"><b>Select Teacher</b></label>
                <select name="teacher_id" required>
                    <option value="">--Select Teacher--</option>
                    <?php while ($teacher = mysqli_fetch_assoc($teachers_result)) { ?>
                        <option value="<?= $teacher['id'] ?>"><?= $teacher['name'] ?></option>
                    <?php } ?>
                </select>

                <label for="message"><b>Message</b></label>
                <textarea placeholder="Type your message..." name="message" required></textarea>

                <button type="submit" class="btn" name="sent">Send</button>
            </form>
        </div>
    </section>

    <?php require_once "./includes/adminfooter.php"; ?>
</div>
</body>
</html>
