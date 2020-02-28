<?php
namespace Home\Controller;
use Think\Controller;
class CateController extends CommonController {
    public function index(){

        $mode=D('blog_article');
        $artlist=$mode->limit(10)->order('addtime desc')->select();
        if(IS_GET)
        {
            
            $where=array('cateid'=>I('id'));
        
             $page=new \Think\Page($mode->where($where)->count(),10);
             $artlist=$mode->limit($page->firstRow,$page->listRows)->where($where)->order('id desc')->select();
             $pageinfo=$page->show();

             $this->assign('pageinfo',$pageinfo);

        }

        $this->assign('artlist',$artlist);
        $this->display();
    }


}