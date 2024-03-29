<?php
require_once('header.php');
include_once('session.php');

require_once('connection.php');
global $connection;

$email = $_SESSION['email'];
$query_id = "SELECT user_id FROM db_users WHERE user_email = '$email' LIMIT 1";
$response_id = mysqli_query($connection, $query_id);

$row = mysqli_fetch_row($response_id);
$user_id = $row[0];

$query = "SELECT * FROM db_passwords WHERE fk_user_id = '$user_id'";
$response = mysqli_query($connection, $query);
mysqli_close($connection);

$ciphering = 'AES-128-CTR';
$decryption_key = 'closting';
$options = 0;
$decryption_iv = '1234567891011121';
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
            while ($res = mysqli_fetch_assoc($response)) { ?>
                <tr>
                    <td>
                        <p> <?= $res['pass_reference'] ?> </p>
                    </td>
                    <td>
                        <div class="content">
                            <p class="username"> <?= $res['pass_username'] ?> </p>
                            <div class="sub header">
                                <p>
                                    <?php
                                    $pass_decrypt = openssl_decrypt($res['pass_password'], $ciphering, $decryption_key, $options, $decryption_iv);
                                    echo $pass_decrypt;
                                    ?>
                                </p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="./edit.php?ref=<?= $res['pass_reference'] ?>"><i class="edit outline icon"></i></a>
                        <a href="./delete.php?ref=<?= $res['pass_reference'] ?>"><i class="trash alternate icon"></i></a>
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
    <a href="./logout.php" class="ui inverted primary button logout">
        Logout
    </a>
</div>