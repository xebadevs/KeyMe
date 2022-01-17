<?php

    require_once('session.php');
    $s_chars='/[!#$%^&*()\-=+{};:,<>]/';

    $email = $_SESSION['email'];
    $error = NULL;

    // VALIDATIONS
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = trim($_POST['user']);
        $password = trim($_POST['password']);
    }

    $user_schar = preg_match_all($s_chars, $user);
    $password_schar = preg_match_all($s_chars, $password);

    if(empty($user) or empty($password) or !filter_var($user, FILTER_VALIDATE_EMAIL)){
        header('location:./error-edituser.php');
    }elseif($user_schar > 0 or $password_schar > 0){
        header('location:./error-edituser.php');
    }else {
        $encrypt_password = password_hash($password, PASSWORD_BCRYPT);

        require_once('connection.php');
        global $connection;
        $query = "UPDATE db_users SET user_email = '$user', user_password = '$encrypt_password' WHERE user_email = '$email'";
        $response = mysqli_query($connection, $query);

        mysqli_close($connection);
        header('location:./logout.php'); // FOR CHECK
    }