<?php
[$N] = fscanf(STDIN, str_repeat("%s", 1));

$str = str_split($N);

while (true) {
    if ($str[0] == "0") {
        array_shift($str);
    } elseif ($str[count($str)-1] == "0") {
        array_pop($str);
    } else {
        break;
    }
}

$str_flg = 1;
$num = count($str) / 2;
for ($i=0; $i<$num; $i++) {
    if ($str[$i] != $str[count($str) - 1 - $i]) {
        $str_flg = 0;
        break;
    }
}


if ($str_flg) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}