<?php

spl_autoload_register();

use MyIterator\MyIterator;
use LimitMyIterator\LimitMyIterator;
use MyArrayAccessIterator\MyArrayAccessIterator;

$array = [
    'first',
    'second',
    'third',
    'fourth',
    'fifth'
];

$a = new MyIterator($array);
foreach ($a as $item){
    echo $item . '<br />';
}

echo '<br />';

$b = new LimitMyIterator($array, 4);
foreach ($b as $item){
    echo $item . '<br />';
}

echo '<br />';

$c = new MyArrayAccessIterator($array);
echo $c[3] . '<br />';