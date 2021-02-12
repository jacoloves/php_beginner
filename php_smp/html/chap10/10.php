<?php
function delete_null_byte($value)
{
    if (is_string($value) === true) {
        $value = str_replace("\0", "", $value);
    } elseif (is_array($value) === true) {
        $value = array_map('delete_null_byte', $value);
    }
    return $value;
}

$_GET = delete_null_byte($_GET);
$_POST = delete_null_byte($_POST);
$_COOKIE = delete_null_byte($_COOKIE);
$_REQUEST = delete_null_byte($_REQUEST);

if (isset($_GET['file']) === true && $_GET['file'] !== '') {
    if (file_exists($_GET['file']) === true && substr($_GET['file'], -4) === '.txt')
    {
        readfile($_GET['file']);
    }
}