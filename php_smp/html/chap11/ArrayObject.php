<?php

$array = new ArrayObject(array('foo', 'bar'));

$array[] = 'baz';

foreach ($array as $key => $value) {
    echo "{$key}: {$value}\n";
}

var_dump(count($array));

var_dump($array->getArrayCopy());