<?php

class Foo
{
    public function bar()
    {
        var_dump(__METHOD__);
    }
}

$delegator = new Delegator(new Foo());
$delegator->bar();
$delegator->unknown();