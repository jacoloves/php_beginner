<?php

class Foo
{
    public $bar;

    public  function __clone()
    {
        // TODO: Implement __clone() method.
        $this->bar = clone $this->bar;
    }
}

class Bar
{
    public $value;
}

$foo = new Foo();
$foo->bar = new Bar();
$foo->bar->value = 'bar';

$foo2 = clone $foo;
$foo2->bar->value = 'baz';

var_dump($foo->bar->value);
var_dump($foo2->bar->value);