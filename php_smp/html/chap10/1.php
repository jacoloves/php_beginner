<?php
$url = 'http://example.com/';
if (isset($_GET['page']) === true && $_GET['page'] !== '') {
    $url .= $_GET['page'];
    header('Location: ' . $url);
    exit();
} else {
    echo 'ページ指定がありません';
}