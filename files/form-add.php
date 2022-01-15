<?php
    require_once('session.php');

    function removeSpecialChar($str){
        $res = str_ireplace( array( '\'' , '"' , ',' , ';' , '<' , '>' ), ' ', $str);
        return $res;
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $reference = trim($_POST['reference']);
            $user = trim($_POST['user']);
            $password = trim($_POST['password']);

        if(($reference !== '' and strlen($reference) < 41) and
            ($user !== '' and strlen($user) < 41) and
            ($password !== '' and strlen($password) < 41)){
                $connection = mysqli_connect('localhost', 'root', '', 'keyme');
            // REFERENCE INCLUDES ' AND "
            $real_reference = removeSpecialChar($reference);
            $email = $_SESSION['email'];
            $query = "SELECT user_id FROM db_users WHERE user_email = '$email' LIMIT 1";
            $response = mysqli_query($connection, $query);

            $row = mysqli_fetch_row($response);
            $user_id = $row[0];

            // OPENSSL FOR PASSWORD
            $ciphering = "AES-128-CTR";
            $iv_length = openssl_cipher_iv_length($ciphering);
            $options = 0;
            $encryption_iv = '1234567891011121';
            $encryption_key = 'closting';
            $pass_encrypt = openssl_encrypt($password, $ciphering, $encryption_key, $options, $encryption_iv);

            $query_add = "INSERT INTO db_passwords (fk_user_id, pass_reference, pass_username, pass_password) VALUES ('$user_id', '$real_reference', '$user', '$pass_encrypt')";
            $response_add = mysqli_query($connection, $query_add);
            mysqli_close($connection);
            header('location:./form-viewall.php');
        }else{
            header('location:./error-add.php'); // INCOMPLETE QUERY
        }
    }else{
        header('location:./add.php'); // INCOMPLETE QUERY
    }