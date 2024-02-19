<?php
require_once('session.php');

function removeSpecialChar($str)
{
    $res = str_ireplace(array('\'', '"', ',', ';', '<', '>'), ' ', $str);
    return $res;
}

require('connection.php');
global $connection;

$ref = removeSpecialChar($_POST['reference']);
$user = trim($_POST['user']);
$pass = trim($_POST['password']);
$pass_id = $_POST['edit_id'];

$sql_a = "SELECT * FROM db_passwords WHERE pass_reference = '$ref'";
$resp_a = mysqli_query($connection, $sql_a);

$email = $_SESSION['email'];
$query = "SELECT user_id FROM db_users WHERE user_email = '$email' LIMIT 1";
$response = mysqli_query($connection, $query);
$row = mysqli_fetch_row($response);
$user_id = $row[0];
$error = NULL;


// OPENSSL FOR PASSWORD
if ($error === NULL) {
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '1234567891011121';
    $encryption_key = 'closting';
    $pass_encrypt = openssl_encrypt($pass, $ciphering, $encryption_key, $options, $encryption_iv);

    $sql = "UPDATE db_passwords SET pass_reference = '$ref', pass_username = '$user', pass_password = '$pass_encrypt' WHERE pass_id = $pass_id";
    $query = mysqli_query($connection, $sql);
    mysqli_close($connection);

    header('location:./form-viewall.php');
} else {
    header('location:./error-edit.php');
}
