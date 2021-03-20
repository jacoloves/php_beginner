<?php
[$X] = fscanf(STDIN, str_repeat("%s", 1));

if (strpos($X, '.')) {
    $num = strlen($X);
    $str_arry = str_split($X);
    $ans_str = '';
    for ($i=0; $i<$num; $i++) {
        if ($str_arry[$i] === '.') {
            break;
        } else {
            $ans_str .= $str_arry[$i];
        }
    }

    echo $ans_str . PHP_EOL;
} else {
    echo $X . PHP_EOL;
}
