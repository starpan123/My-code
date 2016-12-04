<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/23
 * Time: 21:48
 */

namespace Home\Controller;

use Think\Controller;
class BoardController extends Controller
{
    /*public function xinadd(){
        $m=M("board");
        $data=array();
        $data[]=array('name'=>'PHP');
        $data[]=array('name'=>'Java');
        $data[]=array('name'=>'Python');
        $data[]=array('name'=>'HTML');
        $data[]=array('name'=>'C');
        $data[]=array('name'=>'C++');
        $data[]=array('name'=>'Perl');
        $data[]=array('name'=>'Ruby');
        $m->addAll($data);
        echo "导入完毕";
    }*/
    public function index(){
        $m=M("board");
        $msg=$m->where()->select();
        $this->assign('board',$msg);
        $this->display();
    }

   /* public function xinpost(){
        $m=M("post");
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！','author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！','author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！','author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！','author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！','author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！','author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！','author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！','author'=>'xin@163.com');
        $data[]=array('board'=>1,'text'=>'今天是国庆节，大家都放假在家！','author'=>'xin@163.com');
        $m->addAll($data);
        echo "导入完毕";
    }
   */

   public function detail($id){
       $m=M("board");
       $id=intval($id);
       $board=$m->where("id=$id")->select();
       $this->assign('board',$board[0]);
       $n=M("post");
       $count=$n->where("board=$id")->count();
       $page=new\Think\Page($count,8);
       $show=$page->show();
       $post=$n->where("board=$id")->limit($page->firstRow.','.$page->listRows)->select();
       $this->assign('post',$post);
       $this->assign('page',$show);
       $this->display();
   }
}