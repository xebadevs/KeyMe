<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);



        if (!empty($email) and !empty($password) and filter_var($email, FILTER_VALIDATE_EMAIL)){
            $connection = mysqli_connect('localhost', 'root', '', 'keyme');

            $query_hash = "SELECT user_password FROM db_users WHERE user_email = '$email'";
            $response_hash = mysqli_query($connection, $query_hash);
            $hash_row = mysqli_fetch_row($response_hash);
            $hash = $hash_row[0];

            if(password_verify($password, $hash)){
                $query = "SELECT * FROM db_users where user_email='$email' and user_password='$hash'";
                $response = mysqli_query($connection, $query);

                $data = mysqli_num_rows($response);

                if ($data > 0) {
                    header('location:./main.php');
                    session_start();
                    $_SESSION['email'] = $email;
                }
            }else {
            mysqli_close($connection);
            header('location:./error.php');
            }
        mysqli_free_result($response);
        mysqli_close($connection);
        }else{
            header('location:./error.php');
        }
    }