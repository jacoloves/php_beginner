<?php
$url = 'http://example.com/';
if (isset($_GET['page']) === true && $_GET['page'] !== '') {
    if (strpos($_GET['page'], "\r") !== false || strpos($_GET['page'], '\n') !== false) {
        echo '不正なリクエストを検出しました';
    } else {
        $url .= $_GET['page'];
        header('Location: ' . $url);
        exit();
    }
} else {
    echo 'ページ指定がありません';
}