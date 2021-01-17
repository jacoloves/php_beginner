<?php

function &add_one(&$value)
{
    $value += 1;
    return $value;
}

$a = 10;
$b =& add_one($a);
$b += 1;

echo $a, PHP_EOL;