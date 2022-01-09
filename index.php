<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KeyMe</title>
    <link rel="stylesheet" href="./css/semantic.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/index.css">
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
        <?php require_once('./files/login.php'); ?>
    </div>

    <div class="empty"></div>

    <div>
        <?php require_once('./files/footer.php'); ?>
    </div>
</body>
</html>