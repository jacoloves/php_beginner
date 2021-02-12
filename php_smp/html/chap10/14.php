<?php
if (isset($_GET['file']) === true && $_GET['file'] !== '') {
    $file = str_replace("\0", "", $_GET['file']);
    $file = '/var/www/html' . basename($file);

    if (file_exists($file) === true) {
        readfile($file);
    }
}