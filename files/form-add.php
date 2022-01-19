<?php
    require_once('session.php');

    function removeSpecialChar($str){
        $res = str_ireplace( array( '\'' , '"' , ',' , ';' , '<' , '>' ), ' ', $str);
        return $res;
    }

    $error = NULL;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $reference = removeSpecialChar(trim($_POST['reference']));
            $user = removeSpecialChar(trim($_POST['user']));
            $password = removeSpecialChar(trim($_POST['password']));
    }else{
        header('location:./add.php'); // INCOMPLETE QUERY
    }

    if(($reference !== '' and strlen($reference) < 41) and
        ($user !== '' and strlen($user) < 41) and
        ($password !== '' and strlen($password) < 41)){
            require('connection.php');
            global $connection;
            $email = $_SESSION['email'];
            $query = "SELECT user_id FROM db_users WHERE user_email = '$email' LIMIT 1";
            $response = mysqli_query($connection, $query);
            $row = mysqli_fetch_row($response);
            $user_id = $row[0];

            $query_ref = "SELECT pass_reference FROM db_passwords WHERE fk_user_id = '$user_id'";
            $resp_ref = mysqli_query($connection, $query_ref);

            // CHECK THAT THE REFERENCE IS NOT REPEATED
            while($res=mysqli_fetch_assoc($resp_ref)){
                $v = $res['pass_reference'];
                if($v === $reference){
                    $error = true;
                }
            }
    }else{
        header('location:./error-add.php'); // INCOMPLETE QUERY
    }

    if($error === NULL){
        // OPENSSL FOR PASSWORD
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = '1234567891011121';
        $encryption_key = 'closting';
        $pass_encrypt = openssl_encrypt($password, $ciphering, $encryption_key, $options, $encryption_iv);

        $query_add = "INSERT INTO db_passwords (fk_user_id, pass_reference, pass_username, pass_password) VALUES ('$user_id', '$reference', '$user', '$pass_encrypt')";
        $response_add = mysqli_query($connection, $query_add);
        mysqli_close($connection);
        header('location:./form-viewall.php');
        echo 'Salchicha';
    }else{
    header('location:./error-add.php'); // INCOMPLETE QUERY
    }