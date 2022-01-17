<?php
    include_once('session.php');
    include('connection.php');
    global $connection;

    $ref = $_GET['ref'];

    $query = "DELETE FROM db_passwords WHERE pass_reference = '$ref'";
    $response = mysqli_query($connection, $query);

    header('location:form-viewall.php');