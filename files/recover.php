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

<div class="x-cont-login">
    <div class="ui column grid">
        <div class="column">
            <form action="" method="post">
                <div class="ui form">
                    <div class="field">
                        <label>Email</label>
                        <div class="ui left icon input">
                            <input type="text" placeholder="Insert your email">
                            <i class="envelope open outline icon"></i>
                        </div>
                    </div>
                    <div class="xd-df">
                        <button class="ui inverted primary submit button">
                            <p>SEND NEW PASSWORD</p>
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


</body>
</html>