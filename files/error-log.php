<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KeyMe</title>
    <link rel="stylesheet" href="../css/semantic.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
<div class="empty"></div>
<div class="ui grid xd-mt">
    <div class="x-cont-header">
        <h1 class="ui center aligned header xd">KeyMe</h1>
        <h3>A place to keep your passwords safe</h3>
    </div>
</div>
<div class="empty"></div>

<div>
    <div class="x-cont-login">
        <div class="ui column grid">
            <div class="column">
                <form action="../files/validate.php" method="post">
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
                                <span> ERROR. PLEASE TRY AGAIN </span>
                        </div>

                        <div class="xd-df">
                            <button class="ui inverted primary submit button">
                                <p>LOGIN</p>
                            </button>
                        </div>
                        <br>
                        <div class="xd-ma">
                            <p>
                                <a href="./register.php">Register</a>
                            </p>
                            <p>
                                <a href="./recover.php">I forgot my password</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="empty"></div>

<div>
    <?php require_once('./footer.php'); ?>
</div>
</body>
</html>