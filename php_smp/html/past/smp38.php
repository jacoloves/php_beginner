<?php

interface FooInterFace
{

}

class ParentFoo
{

}

class Foo extends ParentFoo implements FooInterFace
{

}

class Bar
{

}

$a = new Foo();
var_dump($a instanceof Foo);
var_dump($a instanceof ParentFoo);
var_dump($a instanceof FooInterFace);
var_dump($a instanceof Bar);