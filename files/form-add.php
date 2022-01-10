<?php
    include('session.php');

    $reference = '';
    $user = '';
    $password = '';

    echo 'Bienvenido al form-add';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $reference = $_POST['reference'];
        $user = $_POST['user'];
        $password = $_POST['password'];

    if(!empty($reference) || !empty($user) || !empty($password)){
        $connection = mysqli_connect('localhost', 'root', '', 'keyme');
        $email = $_SESSION['email'];
        $query = "SELECT user_id FROM db_users WHERE user_email = '$email' limit 1";
        $response = mysqli_query($connection, $query);

        $row = mysqli_fetch_row($response);
        $show_row = $row[0];
        echo $show_row;
        }
    }

echo '<br>';
    echo $reference;
echo '<br>';
    echo $user;
echo '<br>';
    echo $password;