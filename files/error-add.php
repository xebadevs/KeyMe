<?php

require_once('header.php');

$title = 'NOTIFICATION';
$not = "Possible errors <br><li>Maximum of 40 characters in User and Password fields </li><li>Password field does not allow special characters</li>" ;
$btn = 'Try again';
$href = './add.php';

?>

<div class="notif">
    <h2 class=""> <?= $title ?> </h2>
</div>

<div class="notif not-content">
    <h3> <?= $not ?> </h3>
</div>

<div class="x-margin">
    <a href=" <?= $href ?> " class="ui red button"> <?= $btn ?> </a>
</div>