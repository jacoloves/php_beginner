<?php
$fortune = array(
    0 => '大吉',
    1 => '中吉',
    2 => '小吉',
    3 => '末吉',
    4 => '凶',
    5 => '大凶',
);
$key = rand(0,5);
if (isset($_GET['username'])) {
    echo htmlspecialchars($_GET['username'], ENT_QUOTES, 'UTF-8') . "さんの運勢は" . $fortune[$key] . "です。";
}

// form
echo '<form action="">';
echo 'お名前<input type="text" name="username" />';
echo '<input type="submit" value="占ってみる" />';
echo '</form>';