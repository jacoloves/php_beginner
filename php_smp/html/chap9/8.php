<?php

function check_user($conn, $name, $pass) {
    $query = "SELECT * FROM users WHERE name = '$name' AND pass = '$pass'";
    $result = pg_query($conn, $query);
    if ($result !== false) {
        $rows = pg_num_rows($result);
        if ($rows >= 1) {
            return true;
        }
    }
    return false;
}

if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    $conn = pg_connect('host=localhost dbname=perfect user=user password=password');
    $result = check_user($conn, $_POST['name'], $_POST['pass']);
    if ($result === true) {
        echo '<span style="color: #0000ff">ログインに成功しました</span>';
    } else {
        echo '<span style="color: #ff0000">ログインに失敗しました</span>';
    }
    mysqli_close($conn);
    exit();
}

header('Content-type: text/html; charset0utf-8');
echo <<<EOF
<html>
    <head>
        <title>ログイン画面</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <fieldset>
            <legend>ログインフォーム</legend>
            <form action="" method="post">
                ユーザ名<input type="text" name="name" value="" /><br>
                パスワード<input type="text" name="pass" value="" /><br>
                <input type="submit" value="ログインする" />
            </form>
        </fieldset>
    </body>
</html>
EOF;
