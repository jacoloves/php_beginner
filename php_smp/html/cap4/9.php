<?php

$dice = range(1, 6);
shuffle($dice);
foreach ($dice as $value) {
    echo $value, PHP_EOL;
    if ($value === 6) {
        break;
    }
}