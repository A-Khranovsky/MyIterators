<?php

namespace MyArrayAccessIterator;

class MyArrayAccessIterator implements \Iterator, \ArrayAccess
{
    protected $index;
    protected $collection;

    public function __construct($collection)
    {
        $this->collection = $collection;
        $this->rewind();
    }

    public function current()
    {
        return $this->collection[$this->key()];
    }

    public function next()
    {
        ++$this->index;
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return isset($this->collection[$this->index]);
    }

    public function rewind()
    {
        $this->index = 0;
    }

    public function offsetSet($index, $value)
    {
        if (is_null($index)) {
            $this->collection[] = $value;
        } else {
            $this->collection[$index] = $value;
        }
    }

    public function offsetGet($index)
    {
        if ($this->offsetExists($index)) {
            return $this->collection[$index];
        } else {
            return null;
        }
    }

    public function offsetExists($index)
    {
        return isset($this->collection[$index]);
    }

    public function offsetUnset($index)
    {
        unset($this->collection[$index]);
    }
}
