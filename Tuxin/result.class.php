<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/6 0006
 * Time: 15:03
 */
class Result
{
     private $shape;
    
    function __construct()
    {
        switch ($_POST['action']){
            case 'rect':
                $this->shape=new Rect();
                break;
            case 'triangle':
                $this->shape=new Triangle();
                break;
            case 'circle':
                $this->shape=new Circle();
                break;
            default:
                $this->shape=false;
        }
    }
    function __toString()
    {
        // TODO: Implement __toString() method.
        if ($this->shape){
            $result=$this->shape->shapeName.'的周长:'.$this->shape->perimeter().'<br>';
            $result.=$this->shape->shapeName.'的面积:'.$this->shape->area().'<br>';
            return $result;
        }else{
            return '没有这个形状';
        }
    }

}