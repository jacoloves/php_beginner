<?php
function check_auth() {
    return true;
}

session_start();
header('Content-type: text/html; charset=utf-8');

if (isset($_SESSION['user_id'])) {
    echo 'ログインユーザ専用ページです<br />';
    echo 'あなたのセッションIDは' . session_id() . 'です';
} elseif (strtolower($_SERVER['REQUEST_METHOD']) === 'post'
    && isset($_POST['op']) === true
    && $_POST['op'] === 'login'
    && check_auth() === true) {
    $_SESSION['user_id'] = 1;
    $script = basename($_SERVER['SCRIPT_FILENAME']);
    echo <<<EOF
<html>
    <head>
        <title>ログイン</title>
        <meta http-equiv="refresh" content="3; url=./{$script}" />
    </head>
    <body>
        ログインに成功しました
    </body>
</html>
EOF;
} else {
    echo <<<EOF
<form action="" method="post">
    <input type="hidden" name="op" value="login" />
    <input type="submit" name="login_button" value="ログイン" />
</form>
EOF;
}

