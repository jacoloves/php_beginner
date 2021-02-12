<?php
mb_language('ja');
mb_internal_encoding('utf-8');

$message = '';

if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    $from = $_POST['from'];

    $is_newline = false;
    if (preg_match('/[\r\n]/', $subject) != false
    || preg_match('/[\r\n]/', $from) != false)
    {
        $is_newline = true;
    }
    if ($is_newline === false) {
        $result = mb_send_mail(
            'admin@example.com',
            $subject,
            $body,
            'From: ' . $from
        );
        if ($result === true) {
            $message = 'メールを送信しています';
        } else {
            $message = 'メールの送信に失敗しました';
        }
    } else {
        $message = 'メールの送信を中止しました';
    }
}

header('Content-type: text/html; charset=utf-8');
echo <<<EOF
<html>
    <head>
        <title>お問い合わせ</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>
    <body>
        $message<br />
        <fieldset>
            <legend>お問い合わせフォーム</legend>
            <form action="" method="post">
                件名<input type="text" name="subject" /><br />
                件名<input type="text" name="form" /><br />
                内容<textarea name="body"></textarea><br />
                <input type="submit" value="メール送信" />
            </form>
        </fieldset>
    </body>
</html>
EOF;
