<?php

require_once('session.php');

// VALIDATIONS




$connection = mysqli_connect('localhost', 'root', '', 'keyme');

$email = $_SERVER['REQUEST_METHOD'];
$user = trim($_POST['user']);
$password = trim($_POST['password']);
$encrypt_password = password_hash($password, PASSWORD_BCRYPT);

$sql_a = "SELECT * FROM db_users WHERE pass_reference = '$email'";
$resp_a = mysqli_query($connection, $sql_a);

$sql = "UPDATE db_users SET user_email = '$user', user_password = '$encrypt_password' WHERE user_email = '$email'";
$query = mysqli_query($connection, $sql);

header('location:./main.php'); // FOR CHECK