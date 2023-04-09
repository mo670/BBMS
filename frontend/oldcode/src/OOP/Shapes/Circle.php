<?php
namespace Pondit\SEIP\Batch2\OOP\Shapes;

use Pondit\SEIP\Batch2\OOP\Shapes\Shape;
 class Circle extends Shape{

    const PI='3.1416';
    // $l r $w ke parent er kace pathacchi 
    public function __construct($radius)
    {
    $this ->radius =$radius;
    
    }

    public function area(){

        return self::PI* $this -> radius * $this -> radius;
    }
}