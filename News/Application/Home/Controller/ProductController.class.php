<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/30 0030
 * Time: 17:48
 */

namespace Home\Controller;

use Think\Controller;
class ProductController extends BaseController
{
    public function index()
    {
        $this->display();
    }
    public function pricing(){
        $this->display();
    }
}