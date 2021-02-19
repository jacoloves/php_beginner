<?php

class MyIterator implements Iterator
{
    private $values = array();

    public function __construct(array $values)
    {
        $this->values = $values;
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
        reset($this->values);
    }

    public function current()
    {
        // TODO: Implement current() method.
        return current($this->values);
    }

    public function key() {
        return key($this->values);
    }

    public function next()
    {
        // TODO: Implement next() method.
        return next($this->values);
    }

    public function valid()
    {
        // TODO: Implement valid() method.
        return ($this->current() !== false);
    }
}

$values = array(1, 2, 3);
$iterator = new MyIterator($values);

foreach ($iterator as $key => $value) {
    echo "{$key}: {$value}\n";
}