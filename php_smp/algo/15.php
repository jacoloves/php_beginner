<?php

[$a, $b] = fscanf(STDIN, str_repeat("%s", 2));

$ans1 = 0;
$ans2 = 0;
for ($i = 0; $i < strlen($a); $i++) {
    $ans1 += intval($a[$i]);
}

for ($i = 0; $i < strlen($b); $i++) {
    $ans2 += intval($b[$i]);
}

if ($ans1 >= $ans2) {
    echo $ans1 . PHP_EOL;
} else {
    echo $ans2 . PHP_EOL;
}


