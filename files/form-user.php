<?php

require_once('session.php');
$s_chars = '/[!#$%^&*()\-=+{};:,<>]/';

$email = $_SESSION['email'];
$error = NULL;

// VALIDATIONS
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = trim($_POST['password']);
}

$password_schar = preg_match_all($s_chars, $password);

if (empty($password)) {
    header('location:./error-edituser.php');
} else {
    $encrypt_password = password_hash($password, PASSWORD_BCRYPT);

    require_once('connection.php');
    global $connection;
    $query = "UPDATE db_users SET user_password = '$encrypt_password' WHERE user_email = '$email'";
    $response = mysqli_query($connection, $query);

    mysqli_close($connection);
    header('location:./succ-newdata.php'); // FOR CHECK
}
