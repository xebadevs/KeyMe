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
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
</head>

<body>
    <div class="empty"></div>
    <div class="ui grid xd-mt">
        <div class="x-cont-header">
            <h1 class="ui center aligned header xd xd-title">KeyMe</h1>
            <h3 class="xd-title">A place to keep your passwords safe</h3>
        </div>
    </div>
    <div class="empty"></div>

    <div class="x-cont-login">
        <div class="ui column grid">
            <div class="column">
                <form action="./form-register.php" method="post">
                    <div class="ui form">
                        <div class="field">
                            <label>Email</label>
                            <div class="ui left icon input">
                                <input type="text" placeholder="Username" name="email" required autofocus>
                                <i class="user icon"></i>
                            </div>
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <div class="ui left icon input">
                                <input type="password" placeholder="Create your Master Password" name="password" maxlength="40" required>
                                <i class="lock icon"></i>
                            </div>
                        </div>
                        <div class="field">
                            <label>Re Password</label>
                            <div class="ui left icon input">
                                <input type="password" placeholder="Repeat your Master Password" name="repassword" maxlength="40" required>
                                <i class="lock icon"></i>
                            </div>
                        </div>
                        <div class="xd-df">
                            <button class="ui inverted primary submit button">
                                <p>REGISTER</p>
                            </button>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="empty"></div>

    <div>
        <?php require_once('../files/footer.php'); ?>
    </div>