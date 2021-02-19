<?php

$a = ints();

$min_a = min($a);

echo $min_a . PHP_EOL;


function ints() {
    return array_map('intval', explode(' ', trim(fgets(STDIN))));
}

function std_string() {
    return array_map(null, explode(' ', trim(fgets(STDIN))));
}