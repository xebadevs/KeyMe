<?php
require_once('header.php');
include_once('session.php');
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
                    <th>Edit / Delete</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <p>GitHub Repository</p>
                </td>
                <td>
                    <div class="content">
                        <p class="username">username</p>
                        <div class="sub header">
                            <p>secure-password</p>
                        </div>
                    </div>
                </td>
                <td>
                    <a href="./edit.php "><i class="edit outline icon"></i></a>
                    <a href="./delete.php "><i class="trash alternate icon"></i></a>
                </td>
            </tr>

            <tr>
                <td>
                    <p>GitHub Repository</p>
                </td>
                <td>
                    <div class="content">
                        <p class="username">username</p>
                        <div class="sub header">
                            <p>secure-password</p>
                        </div>
                    </div>
                </td>
                <td>
                    <a href="./edit.php "><i class="edit outline icon"></i></a>
                    <a href="./delete.php "><i class="trash alternate icon"></i></a>
                </td>
            </tr>

            <tr>
                <td>
                    <p>GitHub Repository</p>
                </td>
                <td>
                    <div class="content">
                        <p class="username">username</p>
                        <div class="sub header">
                            <p>secure-password</p>
                        </div>
                    </div>
                </td>
                <td>
                    <a href="./edit.php "><i class="edit outline icon"></i></a>
                    <a href="./delete.php "><i class="trash alternate icon"></i></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="empty"></div>

    <div class="options">
        <a href="./add.php" class="ui inverted primary button">
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