<?php

$upload_dir = '/var/www/html/uploads/';
if (empty($_FILES) === false && empty($_FILES['upfile']) === false) {
    if (is_uploaded_file($_FILES['upfile']['tmp_name']) === true) {
        move_uploaded_file(
            $_FILES['upfile']['tmp_name'],
            $upload_dir . date('YmdHis') . '_'
            . md5(microtime() . $_FILES['upfile']['tmp_name'])
        );
        echo <<<EOF
<html>
    <head>
        <title>アップロード成功</title>
        <meta http-equiv="refresh" content="3; url=./18.php" />
    </head>
    <body>
        ファイルアップロードに成功しました
    </body>
</html>
EOF;
    } else {
        echo 'ファイルアップロード攻撃を受けた可能性があります。';
        echo 'ファイル名:'
            . htmlspecialchars($_FILES['upfile']['name'], ENT_QUOTES, 'UTF-8')
            . '/';
    }
}

echo <<<EOF
<html>
    <hrad>
        <title>ファイルアップロード</title>
    </hrad>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="10483576" />
            <input type="file" name="upfile"/>
            <input type="submit" value="アップロード"/>
        </form>
    </body>
</html>
EOF;

