<?php

    require_once('session.php');
    $connection = mysqli_connect('localhost', 'root', '', 'keyme');

    $ref = trim($_POST['reference']);
    $user = trim($_POST['user']);
    $pass = trim($_POST['password']);
    $pass_id = $_POST['edit_id'];

    $sql_a = "SELECT * FROM db_passwords WHERE pass_reference = '$ref'";
    $resp_a = mysqli_query($connection, $sql_a);

    $sql = "UPDATE db_passwords SET pass_reference = '$ref', pass_username = '$user', pass_password = '$pass' WHERE pass_id = $pass_id";
    $query = mysqli_query($connection, $sql);

    header('location:./form-viewall.php');