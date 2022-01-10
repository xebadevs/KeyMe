<?php
    include('session.php');

    $reference = '';
    $user = '';
    $password = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $reference = $_POST['reference'];
            $user = $_POST['user'];
            $password = $_POST['password'];

        if($reference !== '' and $user !== '' and $password !== ''){
            $connection = mysqli_connect('localhost', 'root', '', 'keyme');
            $email = $_SESSION['email'];
            $query = "SELECT user_id FROM db_users WHERE user_email = '$email' limit 1";
            $response = mysqli_query($connection, $query);

            $row = mysqli_fetch_row($response);
            $user_id = $row[0];

            // echo $user_id;

            $query_add = "INSERT INTO db_passwords (fk_user_id, pass_reference, pass_username, pass_password) VALUES ('$user_id', '$reference', '$user', '$password')";
            $response_add = mysqli_query($connection, $query_add);
            mysqli_close($connection);
            header('location:./main.php');
            }
    }else{
        header('location:./error-log.php'); // INCOMPLETE QUERY
    }