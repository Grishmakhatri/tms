<?php
include("config.php");
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM chat WHERE teacher_id = '$user_id'";
$data = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Teacher Chat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="wrapper">
    <?php require_once "./includes/userheader.php"; ?>

    <section>
        <div class="user-img">
            <h3>Your Messages</h3>
            <table border="3" cellspacing="7" width="60%">
                <tr>
                    <th>Date/Time</th>
                    <th>Admin</th>
                    <th>Message</th>
                </tr>
                <?php
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "<tr>
                              <td>{$result['date']}</td>
                              <td>{$result['username']}</td>
                              <td>{$result['message']}</td>
                          </tr>";
                }
                ?>
            </table>
        </div>
    </section>

    <?php require_once "./includes/userfooter.php"; ?>
</div>
</body>
</html>
