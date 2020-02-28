<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController  {
    public function index(){

        $where=array();
        $mode=D('ArticleView');
        
        if(I('post.keywords',''))
        {
            $keyword=I('post.keywords');
            $map['title']=array('like',"%{$keyword}%");
            $map['adesc']=array('like',"%{$keyword}%");
            // $map['content']=array('like',"%{$keyword}%");
			$map['author']=array('like',"%{$keyword}%");
            $map['_logic']='or';
            $where['_complex']=$map;
        }
        
        
        $page=new \Think\Page($mode->where($where)->count(),10);
        // dump($listcate);
        $lf=$mode->limit($page->firstRow,$page->listRows)->where($where)->order('id asc')->select();
// dump($mode);
       
        // echo $page->totalRows.'<br/>';
        // echo $page->firstRow.'<br/>';
        // echo $page->listRows.'<br/>';
        // echo $page->totalRows-$page->firstRow*$page->listRows.'<br/>';
        // echo $page->rollPage.'<br/>';
        $curpages=$page->totalRows-$page->firstRow*$page->listRows >10 ? 10 :$page->totalRows-$page->firstRow*$page->listRows;
        $show=$page->show();
        $this->assign('articlelist',$lf);
        $this->assign('curpages',$curpages);
        $this->assign('currentpage',$page->firstRow+1);
        $this->assign('pagenum',$page->totalPages);
        $this->assign('pageinfo',$show);
        $this->display();
            
        
        // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Admin模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    public function add(){

       $mode=D('Cate');
       $catelist=$mode->select();
       $this->assign('catelist',$catelist);
        $this->display();

    }

    public function insert(){

        if(IS_POST)
        {
            $mode=D('Article');
            $data=$mode->create();
            
            if(!$data)
            {
                $this->error($mode->getError());
            }
            
            // dump($_FILES);
            if($_FILES['pic']['tmp_name']!='')
            {
                   $upload = new \Think\Upload();// 实例化上传类    
                   $upload->maxSize   =     3145728*3 ;// 设置附件上传大小  
                   $upload->saveName = 'time';  
                   $upload->autoSub = true;
                   $upload->subName = array('date','Ymd');
                   $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
                   $upload->rootPath='./Public';
                   $upload->savePath  =      'Uploads/'; // 设置附件上传目录    // 上传单个文件     
                   $info   =   $upload->uploadOne($_FILES['pic']);    
                   if(!$info) {// 上传错误提示错误信息        
                        $this->error($upload->getError());    
                    }else{// 上传成功 获取上传文件信息       
                       echo $data['pic']=$info['savepath'].$info['savename'];
                    }

            }
            if($mode->add($data))
            {
                $this->success("文章添加成功！",U('index'));
            }else{
                $this->error("文章添加失败！".$mode->getError());
            }
            
        }
        
        

    }

     public function edit(){

         if(IS_GET)
        {
            $mode=D('Article');
            // $mod->create();
            $cate=D('Cate');
            $catelist=$cate->select();
            $this->assign('catelist',$catelist);

            $id=I('id');
            $Article=$mode->find($id);
            // dump($cate);
            $this->assign('article',$Article);
            $this->display(edit);
        
            
        }
        
    }
    public function update()
    {
        if(IS_POST)
        {
            $mode=D('Article');
            $data=$mode->create();
           if(!$data)
           {
               $this->error($mode->getError());
           }
               if($_FILES['pic']['tmp_name']!='')
            {
                   $upload = new \Think\Upload();// 实例化上传类    
                   $upload->maxSize   =     3145728*3 ;// 设置附件上传大小  
                   $upload->saveName = 'time';  
                   $upload->autoSub = true;
                   $upload->subName = array('date','Ymd');
                   $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
                   $upload->rootPath='./Public';
                   $upload->savePath  =      './Uploads/'; // 设置附件上传目录    // 上传单个文件     
                   $info   =   $upload->uploadOne($_FILES['pic']);    
                   if(!$info) {// 上传错误提示错误信息        
                        $this->error($upload->getError());    
                    }else{// 上传成功 获取上传文件信息       
                    $data['pic']=$info['savepath'].$info['savename'];
                    }

            }
            // dump($data);
           if($mode->save($data))
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
            $mode=D('Article');
            // $mod->create();
            $id=I('id');
            if($mode->delete($id))
            {
                $this->success("文章删除成功！",U('index'));
            }else{
                $this->error("文章删除失败！");
            }
        }
        
        
    }
    // public function sort()
    // {
    //     if(IS_POST)
    //     {
    //         $mode=D('Article');
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

