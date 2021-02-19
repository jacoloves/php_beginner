<?php

$a = ints();
$b = ints();


$ans = $a[0] * $b[1] - $a[1] * $b[0];

echo $ans . PHP_EOL;

function ints() {
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}