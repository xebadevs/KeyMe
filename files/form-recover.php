<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $email = trim($_POST['email']);

    if($_SERVER['REQUEST_METHOD'] == 'POST' and filter_var($email, FILTER_VALIDATE_EMAIL)){
        $connection = mysqli_connect('localhost', 'root', '', 'keyme');
        $query = "SELECT user_password FROM db_users WHERE user_email = '$email' LIMIT 1";
        $response = mysqli_query($connection, $query);
        mysqli_close($connection);

        $row = mysqli_fetch_row($response);
        $password = $row[0];


        if ($password == NULL) {
            header('location:./error-user.php'); // USER DIDN'T EXISTS IN DDBB
        } else {

            // HASH GENERATION AND UPDATE OF NEW RANDOM PASSWORD IN DDBB
            $values = 'zxcvbnmasdfghjklqewrtyuiop0123456789';
            $random_password = substr(str_shuffle($values), 0, 15);
            $random_hash = password_hash($random_password, PASSWORD_BCRYPT);

            $connection = mysqli_connect('localhost', 'root', '', 'keyme');
            $query_hash = "UPDATE db_users SET user_password = '$random_hash' WHERE user_email = '$email'";
            $res_hash = mysqli_query($connection, $query_hash);

            // PHPMAILER
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 2;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'agitelfo@gmail.com';
                $mail->Password = 'SurrenderToW4t3r';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port = 465;

                //Recipients
                $mail->setFrom('agitelfo@gmail.com', 'KeyMe: Recovering Mail');
                $mail->addAddress($email, 'KeyMe');

                //Content
                $mail->isHTML(true);
                $mail->Subject = 'Test message';
                $mail->Body = "<p>You have required your <b>Master Password</b>, wich is:</p> <h3 style='color:red;'>$random_password</style></h3><p>Please save it in a highly secure place. Now you can access from:</p><p>http://localhost/projects/portfolio/keyme/KeyMe/index.php</p>";
                 $mail->AltBody = "You have required your Master Password, wich is: [$random_password]. Please save it in a highly secure place. Now you can access from: http://localhost/projects/portfolio/keyme/KeyMe/index.php";

                $mail->send();
                echo 'Message has been sent';
                header('location:./main.php');
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }else{
        header('location:./error-mail.php'); // INVALID E-MAIL
}