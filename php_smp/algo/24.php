<?php

[$S] = fscanf(STDIN, str_repeat("%s", 1));

$arr_str = str_split($S);

$true_flg = true;
for ($i=0; $i<count($arr_str); $i++) {
    if (($i+1) % 2 !== 0) {
        if (!(ctype_lower($arr_str[$i]))) {
            $true_flg = false;
            break;
        }
    } else if (($i+1) % 2 === 0) {
        if (!(ctype_upper($arr_str[$i]))) {
            $true_flg = false;
            break;
        }
    }
}

if ($true_flg) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}