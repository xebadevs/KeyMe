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
                    <th>Edit</th>
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
                <td><a href="#"><i class="edit outline icon"></i></a></td>
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
                <td><a href="#"><i class="edit outline icon"></i></a></td>
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
                <td><a href="#"><i class="edit outline icon"></i></a></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="empty"></div>

    <div class="options">
        <form action="">
            <button class="ui inverted primary button view-all">View All</button>
        </form>
        <form action="">
            <button class="ui inverted primary button add">Add</button>
        </form>
        <form action="">
            <button class="ui inverted primary button logout">Logout</button>
        </form>
    </div>
</body>
</html>