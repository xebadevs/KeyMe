<?php
    include_once('session.php');

    $ref = $_GET['ref'];

    $connection = mysqli_connect('localhost', 'root', '', 'keyme');

    $query = "SELECT * FROM db_passwords WHERE pass_reference = '$ref'";
    $response = mysqli_query($connection, $query);
    mysqli_close($connection);

    $row = mysqli_fetch_row($response);
    $pass_id = $row[1];
    $user = $row[3];
    $password = $row[4];
?>

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
    <link rel="stylesheet" href="../css/addedit.css">
</head>

<body>
<div class="empty"></div>
<div class="ui grid xd-mt">
    <div class="x-cont-header">
        <h1 class="ui center aligned header xd">
            <a href="main.php">KeyMe</a>
        </h1>
    </div>
</div>
<div class="empty"></div>

<div class="x-cont-add">
    <div class="ui column grid">
        <div class="column">
            <form action="./form-edit.php" method="post">
                <div class="ui form">
                    <div class="field">
                        <label>Reference</label>
                        <div class="ui left icon input">
                            <input type="hidden" name="edit_id" value="<?= $pass_id ?>">
                            <input type="text" placeholder="Insert the reference" name="reference" value=" <?= $ref ?> " required>
                            <i class="thumbtack icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <label>User</label>
                        <div class="ui left icon input">
                            <input type="text" placeholder="Insert the user" name="user" value=" <?= $user ?> ">
                            <i class="user icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <div class="ui left icon input">
                            <input type="text" placeholder="Insert the password" name="password" value=" <?= $password ?> ">
                            <i class="lock icon"></i>
                        </div>
                    </div>
                    <div class="cont-span">
                        <span> Click to... </span>
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

</body>
</html>