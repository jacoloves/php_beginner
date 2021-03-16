<?php
[$a, $b] = fscanf(STDIN, str_repeat("%d", 2));

$multi = $a*$b;

if ($multi % 2 == 0) {
    echo "Even" . PHP_EOL;
} else {
    echo "Odd" . PHP_EOL;
}