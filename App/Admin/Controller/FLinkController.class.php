<?php
namespace Admin\Controller;
use Think\Controller;
class FLinkController extends CommonController  {
    public function index(){

        $where=array();
        $mode=D('FLink');
        
        if(I('post.keywords',''))
        {
            $keyword=I('post.keywords');
            $map['title']=array('like',"%{$keyword}%");
            $map['url']=array('like',"%{$keyword}%");
            $map['desc']=array('like',"%{$keyword}%");
            $map['_logic']='or';
            $where['_complex']=$map;
        }
        
        
        $page=new \Think\Page($mode->where($where)->count(),10);
        // dump($listcate);
        $lf=$mode->limit($page->firstRow,$page->listRows)->where($where)->order('id asc')->select();

       
        // echo $page->totalRows.'<br/>';
        // echo $page->firstRow.'<br/>';
        // echo $page->listRows.'<br/>';
        // echo $page->totalRows-$page->firstRow*$page->listRows.'<br/>';
        // echo $page->rollPage.'<br/>';
        $curpages=$page->totalRows-$page->firstRow*$page->listRows >10 ? 10 :$page->totalRows-$page->firstRow*$page->listRows;
        $show=$page->show();
        $this->assign('flinklist',$lf);
        $this->assign('curpages',$curpages);
        $this->assign('currentpage',$page->firstRow+1);
        $this->assign('pagenum',$page->totalPages);
        $this->assign('pageinfo',$show);
        $this->display();
            
        
        // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Admin模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    public function add(){

       
        $this->display();

    }

    public function insert(){

        if(IS_POST)
        {
            $mode=D('FLink');
            if(!$mode->create())
            {
               $this->error($mode->getError());
            }
            if($mode->add())
            {
                $this->success("URL添加成功！",U('index'));
            }else{
                $this->error("URL添加失败！".$mode->getError());
            }
            
        }
        
        

    }

     public function edit(){

         if(IS_GET)
        {
            $mode=D('FLink');
            // $mod->create();
            $id=I('id');
            $flink=$mode->find($id);
            // dump($cate);
            $this->assign('flink',$flink);
            $this->display(edit);
        
            
        }
        
    }
    public function update()
    {
        if(IS_POST)
        {
            $mode=D('FLink');
           if(!$mode->create())
           {
               $this->error($mode->getError());
           }
           if($mode->save())
            {
                $this->success("修改成功！",U('index'));

            }else{
                
                 $this->error('修改失败！');
            }
           
        }
    }

     public function del(){
        if(IS_GET)
        {
            $mode=D('FLink');
            // $mod->create();
            $id=I('id');
            if($mode->delete($id))
            {
                $this->success("URL删除成功！",U('index'));
            }else{
                $this->error("URL删除失败！");
            }
        }
        
        
    }
    // public function sort()
    // {
    //     if(IS_POST)
    //     {
    //         $mode=D('FLink');
    //         $mode->create();
    //         $ids=I('post.');
    //         unset($ids['id']);
    //         dump($ids);
    //         foreach(ids as $key=>$value ){
    //             $mode->where(array('id'=>$key))->setField('sortid',$value);

    //         }
    //         $this->success("排序成功！",U('index'),8);

    //     }

    // }
}

