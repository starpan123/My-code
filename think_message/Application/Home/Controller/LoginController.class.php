<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/26 0026
 * Time: 10:05
 */

namespace Home\Controller;

use Think\Controller;
use Think\Verify;
class LoginController extends  Controller
{
  public function login(){
      $this->display();
  }
    public function doLogin(){
        //接收值
        //判断用户在数据库中是否存在
        //存在，允许登录
        //不存在，显示错误信息
        $username = $_POST['username'];
        $password = $_POST['password'];
        $code = $_POST['code'];
        if(!empty($_POST)){
            $Verify = new Verify();
            if(!$Verify->check($_POST['code'])){
                $this->error('验证码错误！');
            }
        }

        $m = M('User');
        $where['username'] = $username;
        $where['password'] = $password;
        $arr= $m->field('id')->where($where)->find();
        if ($arr) {
            $_SESSION['username']=$username;
            $_SESSION['id']=$arr['id'];
            $this->success('用户登录成功',U('Index/index'));
        } else {
            $this->error('该用户不存在');
        }
    }
    public function doLogout(){
        $_SESSION=array();
           if(isset($_COOKIE[session_name()])){
               setcookie(session_name(),'',time()-1,'/');
           }
        session_destroy();
        $this->redirect('Index/index');
    }
}
