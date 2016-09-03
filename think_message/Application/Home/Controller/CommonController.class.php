<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/26 0026
 * Time: 17:15
 */

namespace Home\Controller;

use Think\Controller;
class CommonController extends Controller
{
    Public function _initialize(){
        if (!isset($_SESSION['username'])||$_SESSION['username']==''){
            $this->redirect('Login/login');
        }
    }
}