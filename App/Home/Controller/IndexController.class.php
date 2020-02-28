<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){

        $mode=D('blog_article');
        $artlist=$mode->order('addtime desc')->select();
        $this->assign('artlist',$artlist);
        $this->display();
    }

 
}