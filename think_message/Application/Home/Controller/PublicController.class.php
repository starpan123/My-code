<?php
namespace Home\Controller;
use Think\Controller;
use Think\Image;

class PublicController extends Controller{
    public function code(){
        $config =    array(
            'fontSize'    =>    15,    // 验证码字体大小
            'length'      =>    3,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
        );
        $Verify =     new \Think\Verify( $config);
// 设置验证码字符为纯数字
        $Verify->codeSet = '0123456789';
        $Verify->entry();
    }
}
?>