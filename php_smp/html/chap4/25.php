<?php

$array = array(
    '"ダブルクォート"',
    '<tag>',
    '\'シングルクォート\'',
);

$escaped = array_map(function($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}, $array);

var_dump($escaped);