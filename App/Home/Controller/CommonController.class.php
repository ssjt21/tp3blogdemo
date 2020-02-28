<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function __construct(){

        parent::__construct();
        $this->nav();
        $this->flink();
        $this->news();
    }

     public function nav(){


        $mode=D('Common');
        // dump($mode);
        $catelist=$mode->order('id asc')->select();
        $this->assign('catelist',$catelist);
        
    }
    public function flink()
    {
        $mode=D('blog_flink');
        // dump($mode);
        $flinklist=$mode->select();
        $this->assign('flinklist',$flinklist);
    }
    public function news()
    {
        $mode=D('blog_article');
        // dump($mode);
        $articlelist=$mode->order('addtime desc')->limit(6)->select();
        $this->assign('articlelist',$articlelist);
    }
}