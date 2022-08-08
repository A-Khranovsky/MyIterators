<?php

namespace LimitMyIterator;

use MyIterator\MyIterator;

class LimitMyIterator implements \IteratorAggregate
{
    private $collection;
    private $limit;

    public function __construct($collection, $limit = 3)
    {
        $this->collection = $collection;
        $this->limit = $limit;
    }

    public function getIterator()
    {
        $limited = array_slice($this->collection, 0, $this->limit);
        return new MyIterator($limited);
    }
}
