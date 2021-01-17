<?php

$hour = date('G');

switch ($hour) {
    case '6':
        echo "6時", PHP_EOL;
        break;
    case '12':
        echo "12時", PHP_EOL;
        break;
    case '15':
        echo "15時", PHP_EOL;
        break;
    default:
        echo "other", PHP_EOL;
        break;
}