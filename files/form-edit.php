<?php

    require_once('session.php');
    $connection = mysqli_connect('localhost', 'root', '', 'keyme');

    $ref = $_POST['reference'];
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $pass_id = $_POST['edit_id'];

    $sql_a = "SELECT * FROM db_passwords WHERE pass_reference = '$ref'";
    $resp_a = mysqli_query($connection, $sql_a);
//    $row = mysqli_fetch_row($resp_a);
//    $id_a = $row[1];


    $sql = "UPDATE db_passwords SET pass_reference = '$ref', pass_username = '$user', pass_password = '$pass' WHERE pass_id = $pass_id";
    $query = mysqli_query($connection, $sql);


    header('location:./form-viewall.php');
echo 'Reference: ' . $ref;
echo '<br>';
echo 'ID: ' . $pass_id;