<?php

    $s_chars='/[!#$%^&*()\-=+{};:,<>]/';
    $error = NULL;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $repassword = trim($_POST['repassword']);

        if(empty($password) and empty($repassword)){
            $error = true;
        }elseif($password !== $repassword) {
            $error = true;
        }elseif(strlen($password) < 6){
            $error = true;
        }elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
            $error = true;
        }else{
        header('location:./error-reg-alt.php');
    }

        $email_schar = preg_match_all($s_chars, $email);
        $password_schar = preg_match_all($s_chars, $password);

        if($email_schar > 0 or $password_schar > 0){
            $error = true;
        }

        if($error === NULL) {
            require_once('connection.php');
            global $connection;

            $email_exist = "SELECT user_email FROM db_users WHERE user_email='$email'";
            $resp = mysqli_query($connection, $email_exist);

            $closting = mysqli_num_rows($resp);

            if($closting > 0){
                mysqli_close($connection);
                header('location:./error-reg.php'); // EXISTING USER!!
            }else{
                $encrypt_password = password_hash($password, PASSWORD_BCRYPT);

                $query = "INSERT INTO db_users (user_email, user_password) VALUES ('$email', '$encrypt_password')";
                $response = mysqli_query($connection, $query);
                mysqli_close($connection);
                header('location:../files/succ-reg.php'); // SUCCESSFUL REGISTRATION!!
            }
        }else{
            header('location:./error-reg-alt.php');
        }
    }