<?php

    require_once('session.php');

    $reference = '';
    $user = '';
    $password = '';
    $error = NULL;

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

        $query = "UPDATE db_passwords SET pass_reference = '$reference', pass_user = '$user', pass_password = '$password' WHERE .....................................";
    }