<?php

$error = NULL;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if(empty($password) and empty($repassword)){
        $error = true;
    }elseif($password !== $repassword){
        $error = true;
    }elseif(empty($email) and filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        $error = true;
    }

    if($error === NULL) {
        $connection = mysqli_connect('localhost', 'root', '', 'keyme');

        $email_exist = "SELECT user_email FROM db_users WHERE user_email='$email'";
        $resp = mysqli_query($connection, $email_exist);

        $closting = mysqli_num_rows($resp);

        if($closting > 0){
            mysqli_close($connection);
            header('location:./error-reg.php'); // EXISTING USER!!
        }else{
            $query = "INSERT INTO db_users (user_email, user_password) VALUES ('$email', '$password')";
            $response = mysqli_query($connection, $query);
            mysqli_close($connection);
            header('location:../index.php'); // SUCCESSFUL REGISTRATION!!
        }
    }else{
        header('location:./error-reg-alt.php');
    }
}