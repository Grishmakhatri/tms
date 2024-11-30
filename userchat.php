<?php
@include 'config.php';

session_start();

if (!isset($_SESSION['user_name']) || $_SESSION['user_role'] !== 'teacher') {
    // Redirect to login or show access denied
    header('Location: login.php');
    exit();
}

// Get logged-in teacher's ID
$teacher_id = $_SESSION['user_id'];

// Fetch messages for the logged-in teacher
$query = "SELECT * FROM chat WHERE recipient_id = '$teacher_id' ORDER BY date DESC";
$messages = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chats</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="wrapper">
    <?php require_once "./includes/userheader.php"; ?>

    <section>
        <h1>Your Messages</h1>
        <div class="chat-messages">
            <?php while ($row = mysqli_fetch_assoc($messages)) { ?>
                <div class="message">
                    <p><b><?= $row['username'] ?>:</b> <?= $row['message'] ?></p>
                    <small><?= $row['date'] ?></small>
                </div>
            <?php } ?>
        </div>
    </section>

    <?php require_once "./includes/userfooter.php"; ?>
</div>
</body>
</html>
