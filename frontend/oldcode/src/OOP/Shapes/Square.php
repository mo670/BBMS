<?php
namespace Pondit\SEIP\Batch2\OOP\Shapes;

use Pondit\SEIP\Batch2\OOP\Shapes\Shape;
 class Square extends Shape{
    // $l r $w ke parent er kace pathacchi 
    public function __construct($length)
    {
    $this ->length =$length;
    
    }

    public function area(){
        return $this -> length * $this -> length;
    }
}