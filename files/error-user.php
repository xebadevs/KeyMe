<?php

require_once('header.php');

$title = 'NOTIFICATION';
$not = "This user does not exist in our Data Base";
$btn = 'Go Back';
$href = './recover.php';

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