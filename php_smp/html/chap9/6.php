<?php
function is_admin() {
    if (isset($_SESSION['is_admin']) === true
        && $_SESSION['is_admin'] === true)
    {
        $is_admin = true;
    } else {
        $is_admin = false;
    }
    return $is_admin;
}

function get_token($key = '') {
    $_SESSION['key'] = $key;
    $token = sha1($key);
    return $token;
}

function check_token($token = '') {
    return ($token === sha1($_SESSION['key']));
}

session_start();

if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    if (isset($_POST['op']) === true && $_POST['op'] === 'delete' && $is_admin() === true) {
        if (isset($_POST['token']) === false || check_token($_POST['token']) === false) {
            echo 'CSRF攻撃を受けた可能性があります';
        } else {
            echo '記事の削除を行いました';
        }
    } elseif (isset($_POST['op']) === true && $_POST['op'] === 'login') {
        $_SESSION['is_admin'] = true;
        echo "管理者としてログインしました";
    } else {
        echo '権限がありません';
    }
}

if (isset($_SESSION['key']) === true) {
    unset($_SESSION['key']);
}

$token = get_token(session_id() . '_' . microtime());

echo <<<EOF
<html>
<head>
    <title>記事削除画面</title>
</head>
<body>
    <fieldset>
        <legend>管理者ログインフォーム</legend>
        <form action="" method="post">
            <input type="hidden" name="op" value="login" />
            <input type="submit" value="管理者としてログインする" />
        </form>
    </fieldset>
    <fieldset>
        <legend>記事削除フォーム</legend>
        <form action="" method="post">
            <input type="hidden" name="op" value="delete" />
            <input type="submit" value="記事を削除" />
        </form>
    </fieldset>
</body>
</html>
EOF;
