<?php
namespace Pondit\SEIP\Batch2\OOP\Shapes;

use Pondit\SEIP\Batch2\OOP\Shapes\Shape;
 class Rectangle extends Shape{
    // $l r $w ke parent er kace pathacchi 
    public function __construct($length,$width)
    {
    $this ->length =$length;
    $this ->width =$width;
    }

    public function area(){
        return $this -> length * $this -> width;
    }
}