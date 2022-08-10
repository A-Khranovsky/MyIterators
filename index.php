<?php

spl_autoload_register();

use MyArrayAccessIterator\MyArrayAccessCountableIterator;
use MyArrayAccessIterator\MyArrayAccessSerialzableIterator;
use MyIterator\MyIterator;
use LimitMyIterator\LimitMyIterator;
use MyArrayAccessIterator\MyArrayAccessIterator;
use MyExtensionFilterIterator\MyExtensionFilterIterator;

$array = [
    'first',
    'second',
    'third',
    'fourth',
    'fifth'
];

$a = new MyIterator($array);
echo '<strong>Usage of implementation of the Itarator</strong><br/>';
foreach ($a as $item) {
    echo $item . '<br />';
}

echo '<br />';

$b = new LimitMyIterator($array, 4);
echo '<strong>Usage of implementation of the ItaratorAggregate</strong><br/>';
foreach ($b as $item) {
    echo $item . '<br />';
}

echo '<br />';

$c = new MyArrayAccessIterator($array);
echo '<strong>Usage of implementation of the ArrayAccess:</strong><br/>';
echo $c[3] . '<br /><br />';

$d = new ArrayObject($array);
echo '<strong>Usage of ArrayObject</strong><br/>';
echo $d[3] . ' (through ArrayObject) <br /><br />';
foreach ($d as $item) {
    echo  $item . ' (through ArrayObject with foreach) <br />';
}

$e = new ArrayObject(
    new class {
        private $zero = 0;
        public $first = 1;
        public $second = 2;
        public $third = 3;
        protected $fifth = 5;

        public function __construct()
        {
            $this->fourth = 4;
        }
    }
);
echo '<br /><strong>Iteration the public properties of the object thorugh ArrayObject:</strong><br />';
foreach ($e as $key => $value) {
    echo $key . '=>' . $value . '<br />';
}

echo '<strong><br />Usage of DirectoryIterator:<br /></strong>';
$dir = new DirectoryIterator('.');
echo $dir->current()->getType() . ' ' . $dir->current()->getPath() . ' (current dir)<br />';
foreach ($dir as $file) {
    switch ($file) {
        case $file->isDir():
            echo 'dir ' . $file . '<br />';
            break;
        case $file->isFile():
            echo 'file ' . $file . ' ' . $file->getSize() . ' Bytes <br />';
            break;
        default:
            break;
    }
}

echo '<br /><strong>Usage of FilterIterator. Outputting directories, files, avoiding php-files:</strong><br />';
$filter = new MyExtensionFilterIterator(new DirectoryIterator('.'), 'php');
foreach ($filter as $file) {
    echo $file . '<br />';
}

echo '<br /><strong>Usage of LimitItarator (5 items):</strong><br />';
$f = new LimitIterator(
    new MyExtensionFilterIterator(new DirectoryIterator('.'), 'php'),
    0,
    5
);
foreach ($f as $file) {
    echo $file . '<br />';
}

echo '<br /><strong>Usage of RecurciveItarator:</strong><br />';
$dir = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator('.'),
    true
);
foreach ($dir as $file) {
    echo str_repeat('-', $dir->getDepth()) . "$file<br/>";
}

echo '<br /><strong>Usage of extended from MyAccessIterator class MyArrayAccessContableIterator
    with Countable interface implementation:</strong><br />';
$g = new MyArrayAccessCountableIterator($array);
echo 'MyArrayAcccessCountableIterator has ' . $g->count() . ' items';

echo '<br /><br /><strong>Usage of extended from MyAccessIterator class MyArrayAccessSerializableIterator
    with serializeable interface implementation:</strong><br />';
$array1 = ['first' => 1, 'second' => 2];
echo 'Array is given as parameter to MyArrayAccessSerialzableIterator:',
    '<pre>', print_r($array1, true), '</pre>';
$h = new MyArrayAccessSerialzableIterator($array1);
$result = $h->serialize();
echo 'Values of array was given (reached by foreach):<br />';
$h = $h->unserialize($result);
foreach ($h as $item){
    echo $item . '<br />';
}
echo '<br />Result of the serialized object:<pre>';
var_dump($result);
echo '</pre>';

echo '<strong>Scan the root dir without iterators:</strong><br />';
$dir = __DIR__;
function ReadInDir($dir)
{
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if(is_dir($file)) {
                    if (($file != '.') && ($file != '..')){
                        echo "dir: $file <br />";
                        chdir($file);
                        ReadInDir(getcwd());
                        //echo getcwd();
                    }
                } else {
                    echo "file: $file <br />";
                }
            }
            chdir('..');
            closedir($dh);
        }
    }
}
ReadInDir($dir);