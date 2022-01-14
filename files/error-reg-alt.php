    <head>
        <link rel="stylesheet" href="../css/semantic.min.css">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/index.css">
        <style>
            body {
                background: url("../img/bgindex.jpg") no-repeat;
                background-size: auto;
            }
        </style>
    </head>

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
                    <div class="ui form">
                            <h3 class="error">ERROR</h3>
                            <h5>Your email is correct?</h5>
                            <h5>Do not exist already?</h5>
                            <h5>Do your passwords match?</h5>
                        <div class="xd-df">
                            <a href="./register.php" class="ui inverted primary submit button">
                                TRY AGAIN
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="empty"></div>

    <div>
        <?php require_once('../files/footer.php'); ?>
    </div>

</body>
</html>