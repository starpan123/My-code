<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/28
 * Time: 17:15
 */

namespace Home\Controller;

use Think\Controller;
class PostController extends Controller
{
   /* public function addpost($id){
        $m=M("post");
        $data=array();
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！',
            'own'=>$id,'author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！',
            'own'=>$id,'author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！',
            'own'=>$id,'author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！',
            'own'=>$id,'author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！',
            'own'=>$id,'author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！',
            'own'=>$id,'author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！',
            'own'=>$id,'author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！',
            'own'=>$id,'author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！',
            'own'=>$id,'author'=>'xin@163.com');
        $m->addAll($data);
        echo "导入完毕";
    }
   */

     public function index($id){
            $m=M("post");
            $owner=$m->where("own=0 and id=$id")->find();
            $this->assign('owner',$owner);
            $count=$m->where("own=$id")->count();
            $page=new\Think\Page($count,8);
            $show=$page->show();
            $post=$m->where("own=$id")->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('post',$post);
            $this->assign('page',$show);
            $this->display();
     }

     public function add(){
         $m=M("post");
         $data=array();
         $data['own']=isset($_POST['alone'])?0:$_POST['own'];
         $data['board']=$_POST['board'];
         $data['text']=$_POST['text'];
         if(cookie('username')){
             $data['author']=cookie('username');
         }else{
             $data['author']='匿名';
         }
         $m->create($data);
         $re=$m->add();
         if($re){
             $this->success("发表成功");
         }else{
             $this->error("发表失败，出现错误");
         }
     }
}