<?php

namespace MyArrayAccessIterator;

use MyArrayAccessIterator\MyArrayAccessIterator;

class MyArrayAccessSerialzableIterator extends MyArrayAccessIterator implements \Serializable
{
    public function serialize()
    {
       return json_encode($this->collection);
    }

    public function unserialize($data)
    {
        return json_decode($data);
    }
}
