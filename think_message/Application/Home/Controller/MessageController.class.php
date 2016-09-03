<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/26 0026
 * Time: 10:07
 */

namespace Home\Controller;

use Think\Controller;
class MessageController extends Controller
{
    public function doMess(){
        $message=M('Message');
        $message->create();
        $upload = new \Think\Upload();// 实例化上传类
        $upload->rootPath  =     './Public/'; // 设置附件上传根目录
        $upload->savePath  =     './Uploads/'; // 设置附件上传（子）目录
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            foreach($info as $file){
                echo $file['savepath'].$file['savename'];
            }
        }
        $message->filename=$file['savename'];
        $message->time=time();
        $message->uid=$_SESSION['id'];
        $lastid=$message->add();
        if ($lastid){
            $this->success('新闻发布成功');
        }else{
            $this->error('新闻发布失败');
        }
    }

}