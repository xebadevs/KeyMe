<?php

    require_once('session.php');

    function removeSpecialChar($str){
        $res = str_ireplace( array( '\'' , '"' , ',' , ';' , '<' , '>' ), ' ', $str);
        return $res;
    }

    $connection = mysqli_connect('localhost', 'root', '', 'keyme');

    $ref = removeSpecialChar($_POST['reference']);
    $user = trim($_POST['user']);
    $pass = trim($_POST['password']);
    $pass_id = $_POST['edit_id'];

    $sql_a = "SELECT * FROM db_passwords WHERE pass_reference = '$ref'";
    $resp_a = mysqli_query($connection, $sql_a);

    // OPENSSL FOR PASSWORD
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '1234567891011121';
    $encryption_key = 'closting';
    $pass_encrypt = openssl_encrypt($pass, $ciphering, $encryption_key, $options, $encryption_iv);

    $sql = "UPDATE db_passwords SET pass_reference = '$ref', pass_username = '$user', pass_password = '$pass_encrypt' WHERE pass_id = $pass_id";
    $query = mysqli_query($connection, $sql);

    header('location:./form-viewall.php');