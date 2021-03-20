<?php
[$N] = fscanf(STDIN, str_repeat("%s", 1));

$num = strlen($N) / 2;
$str_arr = str_split($N);

$initial = '';
$back = '';

for ($i=0; $i<$num; ++$i) {
    $initial .= $str_arr[$i];
}

for ($i=$num; $i<strlen($N); ++$i) {
    $back .= $str_arr[$i];
}


$initial_rep = $initial . $initial;

// 数値変換
$int_num = (int)$N;
$initial_rep_num = (int)$initial_rep;

if ($int_num >= $initial_rep_num) {
    echo $initial . PHP_EOL;
} elseif ($int_num < $initial_rep_num) {
    $initial_num = (int)$initial - 1;
    echo $initial_num . PHP_EOL;
}


