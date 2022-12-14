<?php

namespace MyIterator;

class MyIterator implements \Iterator
{
    private $index;
    private $collection;

    public function __construct($collection)
    {
        $this->collection = $collection;
    }

    public function rewind()
    {
        $this->index = 0;
    }

    public function key()
    {
        return $this->index;
    }

    public function current()
    {
        return $this->collection[$this->key()];
    }

    public function next()
    {
        ++$this->index;
    }

    public function valid()
    {
        return isset($this->collection[$this->index]);
    }
}
