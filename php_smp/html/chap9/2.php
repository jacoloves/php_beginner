<?php

function get_post_data($id = 0) {
    $post_data = array (
        1 => '1件目の投稿です。特に問題ありません。',
        2 => '2件目のデータです。<script>alert("攻撃を受けました");</script>',
    );
    if (isset($post_data[$id]) === true) {
        return $post_data[$id];
    }
    return '投稿データがありません。';
}


if (isset($_GET['id']) === true) {
    $id = intval($_GET['id']);
} else {
    $id = 1;
}
$post_data = htmlspecialchars(get_post_data($id), ENT_QUOTES, 'UTF-8');

echo <<<EOF
<html>
    <head>
        <title>投稿データ表示画面</title>
    </head>
    <body>
        <fieldset>
            <legend>{$id}件目の投稿データ</legend>
            $post_data
        </fieldset>
    </body>
</html>
EOF;
