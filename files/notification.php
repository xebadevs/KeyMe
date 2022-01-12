<?php

    require_once('header.php');

    $tit = '';
    $not = '';
    $href = '';
    $btn = '';

    function makeNotification($title, $notice, $link, $button){
        global $tit, $not, $href, $btn;
        $tit = $title;
        $not = $notice;
        $href = $link;
        $btn = $button;
    }

    makeNotification('Notification', 'This is a text for example nothing else', './main.php', 'Go Back');
?>

<div class="notif">
    <h1 class=""> <?= $tit ?> </h1>
</div>

<div class="notif content">
    <h3> <?= $not ?> </h3>
</div>

<div class="x-margin">
    <a href=" <?= $href ?> " class="ui red button"> <?= $btn ?> </a>
</div>
