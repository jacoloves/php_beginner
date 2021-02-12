<?php
if (isset($_GET['file']) === true && $_GET['file'] !== '') {
    if (! in_array($_GET['file'], array('file1', 'file2'))) {
        exit();
    }

    $file = '/var/www/html/' . $_GET['file'];
    if (file_exists($file) === true) {
        readfile($file);
    }
}