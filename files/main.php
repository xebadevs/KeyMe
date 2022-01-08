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
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<div class="empty"></div>
<div class="ui grid xd-mt">
    <div class="x-cont-header">
        <h1 class="ui center aligned header xd">KeyMe</h1>
    </div>
</div>
<div class="empty"></div>

<div>
    <?php require_once('search.php'); ?>
</div>

<div class="empty"></div>

<div class="options">
    <button class="ui inverted primary button view-all">View All</button>
    <button class="ui inverted primary button add">Add</button>
    <button class="ui inverted primary button logout">Logout</button>
</div>


<!--<div>-->
<!--    --><?php //require_once('../files/footer.php'); ?>
<!--</div>-->



</body>
</html>