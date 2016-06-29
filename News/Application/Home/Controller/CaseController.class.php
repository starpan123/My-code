<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/30 0030
 * Time: 17:48
 */

namespace Home\Controller;

use Think\Controller;
class CaseController extends BaseController
{
    public function index()
    {
        $castinfo=M('cast')->select();
        $this->assign('castinfo',$castinfo);
        $this->display();
    }
}