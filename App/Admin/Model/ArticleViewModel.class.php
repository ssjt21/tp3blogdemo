<?php


namespace Admin\Model;
use Think\Model\ViewModel;
class ArticleViewModel extends ViewModel {

 public $viewFields = array(    
     'blog_article'=>array('id','pic','title','content','adesc','author','addtime','_type'=>'LEFT'),
     'blog_cate'=>array('catename', '_on'=>'blog_article.cateid=blog_cate.id'),


     );


}