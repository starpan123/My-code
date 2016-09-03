<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/26 0026
 * Time: 10:08
 */

namespace Home\Controller;

use Think\Controller;
class RegisterController extends Controller
{
     public function reg(){
         $this->display();
     }
    //检查用户是否注册过
    public function checkName(){
        $username=$_GET['username'];
        $user=M('User');
        $where['username']=$username;
        $count=$user->where($where)->count();
        if ($count){
            echo 不允许注册;
        }else{
            echo  允许注册;
        }
    }
    //注册
    public function doReg(){
        //$username=$_POST['username'];
        //$password=$_POST['password'];
        //$repassword=$_POST['repassword'];
        //$sex=$_POST['sex'];
        //$data['username']=$username;
        //$data['password']=$password;
        //$data['sex']=$sex;
        $user=D('User');
        if(!$user->create()){
            $this->error($user->getError());
        }
        $lastid=$user->add();
        if($lastid){
            $this->redirect('Index/index');
        }else{
            $this->error('用户注册失败');
        }
    }
}