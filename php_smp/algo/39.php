<?php
[$a, $b, $c] = fscanf(STDIN, str_repeat("%d", 3));

$wa = $a*$a;
$wb = $b*$b;
$wc = $c*$c;

if (($wa+$wb) < $wc) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}



