<?php

[$str] = fscanf(STDIN, str_repeat("%s", 1));

$arr = str_split($str);

if (($arr[0] == $arr[1]) && ($arr[1] == $arr[2])) {
    echo "Won" . PHP_EOL;
} else {
    echo "Lost" . PHP_EOL;
}
