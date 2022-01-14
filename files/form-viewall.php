<?php
    require_once('header.php');
    include_once('session.php');

    $user_id = '';

    $connection = mysqli_connect('localhost', 'root', '', 'keyme');

    $email = $_SESSION['email'];
    $query_id = "SELECT user_id FROM db_users WHERE user_email = '$email' LIMIT 1";
    $response_id = mysqli_query($connection, $query_id);

    $row = mysqli_fetch_row($response_id);
    $user_id = $row[0];

    $query = "SELECT * FROM db_passwords WHERE fk_user_id = '$user_id'";
    $response = mysqli_query($connection, $query);
    mysqli_close($connection);

?>

<div>
    <?php require_once('search.php'); ?>
</div>

<div class="empty"></div>

<div class="cont-table">
    <table class="ui very basic collapsing celled table">
        <thead>
        <tr>
            <th>Reference</th>
            <th>User & Pass</th>
            <th>Edit | Delete</th>
        </tr>
        </thead>
        <tbody>
            <?php
                while($res=mysqli_fetch_assoc($response)){ ?>
                <tr>
                    <td>
                        <p> <?= $res['pass_reference'] ?> </p>
                    </td>
                    <td>
                        <div class="content">
                            <p class="username"> <?= $res['pass_username'] ?> </p>
                            <div class="sub header">
                                <p> <?= $res['pass_password'] ?> </p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="./edit.php?ref=<?= $res['pass_reference']?>"><i class="edit outline icon"></i></a>
                        <a href="./delete.php?ref=<?= $res['pass_reference']?>"><i class="trash alternate icon"></i></a>
                </tr>
            </td> <?php } ?>
        </tbody>
    </table>
</div>

<div class="empty"></div>

<div class="options">
    <a href="./form-viewall.php" class="ui inverted primary button">
        View All
    </a>
    <a href="./add.php" class="ui inverted primary button">
        Add
    </a>
    <a href="./logout.php" class="ui inverted primary button">
        Logout
    </a>
</div>
</body>
</html>