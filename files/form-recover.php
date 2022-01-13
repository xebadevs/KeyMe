<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $email = '';
    $error = NULL;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = trim($_POST['email']);

        if(empty($email) and filter_var($email, FILTER_VALIDATE_EMAIL) == false){
            $error = true;
        }
    }

    if($error === NULL){
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'agitelfo@gmail.com';
            $mail->Password   = 'SurrenderToW4t3r';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            //Recipients
            $mail->setFrom('agitelfo@gmail.com', 'KeyMe: Recovering Mail');
            $mail->addAddress($email, 'KeyMe');

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Test message';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b><br>Click here to confirm your register: <a href="https://es.wikipedia.org/wiki/Yasunori_Mitsuda"> CONFIRMATION LINK</a>';
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }