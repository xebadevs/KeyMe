<?php

    require_once('connect.php');

    $email = '';
    $password = '';
    $error_message = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $email = $_POST['email'];
      $password = $_POST['password'];
    }

    session_start();
    $_SESSION['email'] = $email;

    $query = "SELECT * FROM db_users where user_email='$email' and user_password='$password'";
    $response = mysqli_query($connection, $query);

    $data = mysqli_num_rows($response);

    if($data){
        header('location:files/main.php');
    }else{
        $error_message = 'ERROR. PLEASE TRY AGAIN';
    }

    mysqli_free_result($response);
    mysqli_close($connection);


?>

<div class="x-cont-login">
    <div class="ui column grid">
        <div class="column">
            <form action="" method="post">
                <div class="ui form">
                    <div class="field">
                        <label>Email</label>
                        <div class="ui left icon input">
                            <input type="text" name="email" placeholder="Insert your email">
                            <i class="user icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <div class="ui left icon input">
                            <input type="password" name="password" placeholder="Insert your Master Password">
                            <i class="lock icon"></i>
                        </div>
                    </div>

                    <div class="wrong-pass">
<!--                        <span> ERROR. PLEASE TRY AGAIN </span>-->
                        <span> <?= $error_message ?> </span>
                    </div>

                    <div class="xd-df">
                        <button class="ui inverted primary submit button">
                            <p>LOGIN</p>
                        </button>
                    </div>
                    <br>
                    <div class="xd-ma">
                        <p>
                            <a href="./files/register.php">Register</a>
                        </p>
                        <p>
                            <a href="./files/recover.php">I forgot my password</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>