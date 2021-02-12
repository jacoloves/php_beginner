<?php
if (isset($_GET['file']) === true && $_GET['file'] !== '') {
    if (file_exists($_GET['file']) === true && substr($_GET['file'], -4) === '.txt')
    {
        readfile($_GET['file']);
    }
}