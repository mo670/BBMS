<?php
namespace Pondit\SEIP\Batch2\OOP\Shapes;

abstract class Shape{
    public $length=0;
    public $width=0;
    public $radius=0;
   

 abstract public function area();

}