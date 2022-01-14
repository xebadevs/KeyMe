<?php

require_once('session.php');

// VALIDATIONS





$email = $_SESSION['email'];
$user = trim($_POST['user']);
$password = trim($_POST['password']);
$encrypt_password = password_hash($password, PASSWORD_BCRYPT);

$connection = mysqli_connect('localhost', 'root', '', 'keyme');
$query = "UPDATE db_users SET user_email = '$user', user_password = '$encrypt_password' WHERE user_email = '$email'";
$response = mysqli_query($connection, $query);

mysqli_close($connection);
header('location:./main.php'); // FOR CHECK