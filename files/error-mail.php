<?php

require_once('header.php');

$title = 'NOTIFICATION';
$not = "This is not a valid email";
$btn = 'Go Back';
$href = './recover.php';

?>

<head>
    <style>
        body {
            background: url("../img/bgindex.jpg") no-repeat;
        }
    </style>
</head>

<div class="notif">
    <h2 class=""> <?= $title ?> </h2>
</div>

<div class="notif not-content">
    <h3> <?= $not ?> </h3>
</div>

<div class="x-margin">
    <a href=" <?= $href ?> " class="ui red button"> <?= $btn ?> </a>
</div>