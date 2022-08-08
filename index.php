<?php

spl_autoload_register();

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

$d = new ArrayObject($array);
echo '<br />' . $d[3] . '(through ArrayObject) <br /><br />';
foreach ($d as $item){
    echo  $item . '(through ArrayObject with foreach) <br />';
}

$e = new ArrayObject(
  new class{
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
echo '<br />Iteration the public properties of the object thorugh ArrayObject:<br />';
foreach ($e as $key => $value) {
    echo $key . '=>' . $value . '<br />';
}

echo '<br />Usage of DirectoryIterator:<br />';
$dir = new DirectoryIterator('.');
echo $dir->current()->getType() . ' ' . $dir->current()->getPath(). ' (current dir)<br />';
foreach($dir as $file){
    switch($file){
        case $file->isDir() :
            echo 'dir '. $file . '<br />';
            break;
        case $file->isFile() :
            echo 'file ' . $file . ' '. $file->getSize() . ' Bytes <br />';
            break;
    }
}

echo '<br />Usage of FilterIterator. Outputting directories, files, avoiding php-files:<br />';
$filter = new MyExtensionFilterIterator(new DirectoryIterator('.'), 'php');
foreach ($filter as $file){
    echo $file. '<br />';
}