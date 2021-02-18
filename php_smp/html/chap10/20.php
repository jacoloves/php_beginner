<?php
if (strpos($_GET['degine'], "\0") !== false) {
    exit();
}

$allow_files = array('red', 'blue');
if (in_array($_GET['degin'], $allow_files, true) === false) {
    exit();
}

include '/var/www/html/design/' . $_GET['design'] . '.html';
