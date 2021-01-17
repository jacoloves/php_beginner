<?php
$a = 10;
$c = 20;
$ref =& $a;
$ref =& $c;
$ref = 30;
echo $a, PHP_EOL;
echo $c, PHP_EOL;
