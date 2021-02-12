<?php
if (isset($_GET['file']) === true && $_GET['file'] !== '') {
    $file = '/var/www/html' . $_GET['file'];
    if (file_exists($file) === true) {
        readfile($file);
    }
}