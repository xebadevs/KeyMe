<?php

    require_once('session.php');

    $reference = '';
    $user = '';
    $password = '';
    $error = NULL;
    $email = $_SESSION['email'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $reference = $_POST['reference'];
        $user = $_POST['user'];
        $password = $_POST['password'];

        if(empty($reference) and empty($user) and empty($password)){
            $error = true;
        }
    }

    if($error === NULL){
        $connection = mysqli_connect('localhost', 'root', '', 'keyme');

        $query_ref = "SELECT user_id FROM db_users WHERE user_email = '$email' LIMIT 1";
        $resp_ref = mysqli_query($connection, $query_ref);
        $data_ref = mysqli_fetch_row($resp_ref);
        $id = $data_ref[0];

        $query = "UPDATE db_passwords SET pass_reference = '$reference',pass_username = '$user',pass_password = '$password' WHERE fk_user_id = $id";
        $response = mysqli_query($connection, $query);

    }else{
        header('location:./error-log.php');
    }