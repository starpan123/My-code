<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/30 0030
 * Time: 17:51
 */

namespace Home\Controller;

use Think\Controller;
class AboutController extends BaseController
{
      public function index(){
          $this->display();
      }
      public function  contacts(){
          $this->display();
      }
      public function join(){
         $this->display();
     }
      public function reports(){
          $this->display();
      }
}