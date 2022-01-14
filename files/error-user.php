<?php

require_once('header.php');

$title = 'NOTIFICATION';
$not = "Possible errors <br><li>The user field requires an e-mail format</li><li>Password field does not allow special characters</li>" ;
$btn = 'Try again';
$href = './register.php';

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