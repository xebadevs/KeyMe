<?php
    require_once('session.php');

    $reference = '';
    $user = '';
    $password = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $reference = trim($_POST['reference']);
            $user = trim($_POST['user']);
            $password = trim($_POST['password']);

        if(($reference !== '' and strlen($reference) < 41) and
            ($user !== '' and strlen($user) < 41) and
            ($password !== '' and strlen($password) < 41)){
                $connection = mysqli_connect('localhost', 'root', '', 'keyme');
        $real_reference = mysqli_real_escape_string($connection, $reference);
                $email = $_SESSION['email'];
                $query = "SELECT user_id FROM db_users WHERE user_email = '$email' LIMIT 1";
                $response = mysqli_query($connection, $query);

                $row = mysqli_fetch_row($response);
                $user_id = $row[0];

                $query_add = "INSERT INTO db_passwords (fk_user_id, pass_reference, pass_username, pass_password) VALUES ('$user_id', '$real_reference', '$user', '$password')";
                $response_add = mysqli_query($connection, $query_add);
                mysqli_close($connection);
                header('location:./form-viewall.php');
        }else{
            header('location:./error-add.php'); // INCOMPLETE QUERY
        }
    }else{
        header('location:./add.php'); // INCOMPLETE QUERY
    }