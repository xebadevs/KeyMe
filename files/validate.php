<?php

$connection = mysqli_connect('localhost', 'root', '', 'keyme');
$email = '';
$password = '';
$error_message = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
}

session_start();
$_SESSION['email'] = $email;
$query = "SELECT * FROM db_users where user_email='$email' and user_password='$password'";
$response = mysqli_query($connection, $query);

$data = mysqli_num_rows($response);

if($data > 0){
    header('location:./main.php');
}else{
    header('location:./error-log.php');
}

mysqli_free_result($response);
mysqli_close($connection);