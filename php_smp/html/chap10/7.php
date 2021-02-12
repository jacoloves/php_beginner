<?php
$black_list = array('GLOBALS', '_SERVER', '_GET', '_POST', '_FIES',
                    '_COOKIE', '_REQUEST', '_SESSION', '_ENV');

foreach (array($_GET, $_POST, $_COOKIE) as $request) {
    foreach ($black_list as $super_global) {
        if (isset($request[$super_global]) === true) {
            exit();
        }
    }
}

foreach ($_GET as $key => $value) {
    $$key = $value;
}

echo 'あなたのIPアドレスは"' . $_SERVER['REMOTE_ADDR'] . '"です';