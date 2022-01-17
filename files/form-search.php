<?php
    require_once('session.php');
    require_once('header.php');
    require_once ('search.php');

    $connection = mysqli_connect('localhost', 'root', '', 'keyme');

    $email = $_SESSION['email'];
    $query_email = "SELECT user_id FROM db_users WHERE user_email = '$email' LIMIT 1";
    $resp_email = mysqli_query($connection, $query_email);
    $data_id = mysqli_fetch_row($resp_email);
    $id = $data_id[0];

    $search = $_POST['search'];

    $query = "SELECT * FROM db_passwords WHERE fk_user_id = '$id' AND pass_reference LIKE '%$search%'";
    $response = mysqli_query($connection, $query);
    mysqli_close($connection);

    $ciphering = 'AES-128-CTR';
    $decryption_key = 'closting';
    $options = 0;
    $decryption_iv = '1234567891011121';
?>

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