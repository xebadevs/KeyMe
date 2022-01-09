<?php

$email = '';
$password = '';
$repassword = '';
$error = NULL;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if(empty($password) || empty($repassword)){
        $error = true;
    }elseif($password !== $repassword){
        $error = true;
    }elseif(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        $error = true;
    }

//        header('location:./register.php');

    if($error === NULL) {
        $connection = mysqli_connect('localhost', 'root', '', 'keyme');
        $query = "INSERT INTO db_users (user_email, user_password) VALUES ('$email', '$password')";
        $response = mysqli_query($connection, $query);
        
    }else{
        header('location:./error-log.php');
    }
}