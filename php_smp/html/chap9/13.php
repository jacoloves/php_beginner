<?php
if (isset($_SESSION['count']) !== true) {
    $_SESSION['count'] = 0;
}

if (isset($_GET['keyword']) === true && $_GET['keyword'] !== '') {
    $_SESSION['count']++;
    $message = 'あなたが入力したキーワードは[' . $_GET['keyword'] . ']です。<br />';
} else {
    $message = 'キーワードは入力されていません。<br />';
}

$message .= 'あなたがキーワードを入力したのは' .$_SESSION['count'] . '回目です。';

echo <<<EOF
<html>
    <head>
        <title>キーワード表示画面</title>
    </head>
    <body>
        {$message}<br />
        <form action="">
            <input type="text" name="keyword" value="" />
            <input type="submit" value="投稿" />
        </form>
    </body>
</html>
EOF;
