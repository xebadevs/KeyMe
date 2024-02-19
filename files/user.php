<?php
require_once('session.php');

$email = $_SESSION['email'];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KeyMe</title>
    <link rel="icon" href="../img/key_icon.ico" sizes="32x32" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="../css/semantic.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/addedit.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap">
</head>

<body>
    <div class="empty"></div>
    <div class="ui grid xd-mt">
        <div class="x-cont-header">
            <h1 class="ui center aligned header xd xd-title">
                <a href="main.php">KeyMe</a>
            </h1>
        </div>
    </div>
    <div class="empty"></div>

    <div class="x-cont-add">
        <div class="ui column grid">
            <div class="column">
                <form action="./form-user.php" method="post">
                    <div class="ui form">
                        <div class="field">
                            <label>User</label>
                            <div class="ui left icon input">
                                <input type="text" placeholder="Insert the user" name="user" value=" <?= $email ?> " required disabled>
                                <i class="user icon"></i>
                            </div>
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <div class="ui left icon input">
                                <input type="text" placeholder="Insert the password" name="password" required autofocus>
                                <i class="lock icon"></i>
                            </div>
                        </div>
                        <div class="cont-span">
                            <span> Change my password </span>
                        </div>
                        <div class="xd-df">
                            <button class="ui inverted primary submit button">
                                Save
                            </button>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>