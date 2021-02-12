<?php
if (isset($_GET['file']) === true && $_GET['file'] !== '') {
    if (strpos($_GET['file'], '..') !== false) {
        exit();
    }

    $file = '/var/www/html/' . $_GET['file'];
    if (file_exists($file) === true) {
        readfile($file);
    }
}