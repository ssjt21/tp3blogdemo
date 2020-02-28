<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    public function index(){
        $mode=D('blog_article');

        if(IS_GET)
        {
            $where=array('id'=>I('id'));
            // dump(I('id'));
            $artOne=$mode->where($where)->select();
        // dump($artOne[0]);
             $this->assign('articleOne',$artOne[0]);

            $this->display();
        }

       
    }

 
}