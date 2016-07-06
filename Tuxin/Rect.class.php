<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/6 0006
 * Time: 15:24
 */
class Rect extends Shape
{
     private $width=0;
     private $height=0;

     function __construct()
     {
         $this->shapeName="矩形";
         if($this->validate($_POST["width"],'矩形的宽度') & $this->validate($_POST["height"],'矩形的高度'))
         {
             $this->width = $_POST["width"];
             $this->height = $_POST["height"];
         }else{
                  exit;
     }
     }

    function area()
     {
         // TODO: Implement area() method.
         return $this->width*$this->height;
     }
    function perimeter()
    {
        // TODO: Implement perimeter() method.
        return 2*($this->width + $this->height);
    }
}