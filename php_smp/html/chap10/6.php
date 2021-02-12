<?php
foreach ($_GET as $key => $value) {
    $$key = $value;
}

echo 'あなたのIPアドレスは"' . $_SERVER['REMOTE_ADDR'] . '"です';