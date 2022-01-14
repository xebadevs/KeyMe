<?php

    require_once('session.php');

    $email = $_SESSION['email'];
    $error = NULL;

// VALIDATIONS

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = trim($_POST['user']);
        $password = trim($_POST['password']);
    }

    if(empty($user) or empty($password) or filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error = true;
    header('location:./error-reg-alt.php');
    }

    $encrypt_password = password_hash($password, PASSWORD_BCRYPT);

    $connection = mysqli_connect('localhost', 'root', '', 'keyme');
    $query = "UPDATE db_users SET user_email = '$user', user_password = '$encrypt_password' WHERE user_email = '$email'";
    $response = mysqli_query($connection, $query);

    mysqli_close($connection);
    header('location:./main.php'); // FOR CHECK