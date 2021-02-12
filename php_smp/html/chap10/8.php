<?php
$white_list = array('foo', 'bar');

foreach ($_GET as $key => $value) {
    if (in_array($key, $white_list) === false) {
        exit();
    }
    $$key = $value;
}

echo 'あなたのIPアドレスは"' . $_SERVER['REMOTE_ADDR'] . '"です';