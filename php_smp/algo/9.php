<?php

$nx = ints();

[$a] = std_string();

$arr = str_split($a);

$ans = $nx[1];

for ($i = 0; $i < $nx[0]; $i++) {
    if ($arr[$i] === 'o') $ans += 1;
    elseif ($arr[$i] === 'x' && $ans > 0) $ans += -1;
}

echo $ans . PHP_EOL;


function ints() {
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

function std_string() {
    return array_map(null, explode(' ', trim(fgets(STDIN))));
}