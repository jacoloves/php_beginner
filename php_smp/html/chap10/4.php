<?php
mb_language('ja');
mb_internal_encoding('utf-8');

$message = '';

if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    $result = mb_send_mail(
        'admin@example.com',
        $_POST['subject'],
        $_POST['body'],
        'Form: ' . $_POST['form']
    );
    if ($result === true) {
        $message = 'メールを送信しました';
    } else {
        $message = 'メールの送信に失敗しました';
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
