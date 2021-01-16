<?php

class SomeClass
{
}

$a = new SomeClass();

if ($a instanceof SomeClass) {
    echo '$a は SomeClass のインスタンスです', PHP_EOL;
}