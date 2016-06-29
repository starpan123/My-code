<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/16 0016
 * Time: 16:25
 */

namespace Admin\Controller;
use Think\Controller;
class NewsController extends BaseController {
    public function index()
    {
        $this->display();
    }
    public function doNews(){
        $news=M('News');
        $news->create();
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
        $news->filename=$file['savename'];
        $news->picture=$file['savename'];
        $count=$news->add();
        if ($count){
            $this->success('新闻发布成功');
        }else{
            $this->error('新闻发布失败');
        }

    }
}