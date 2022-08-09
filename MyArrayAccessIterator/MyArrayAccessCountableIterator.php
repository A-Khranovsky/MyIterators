<?php

namespace MyArrayAccessIterator;

use MyArrayAccessIterator\MyArrayAccessIterator;

class MyArrayAccessCountableIterator extends MyArrayAccessIterator implements \Countable
{
    public function __construct($collection)
    {
        parent::__construct($collection);
    }

    public function count()
    {
        return count($this->collection);
    }
}
