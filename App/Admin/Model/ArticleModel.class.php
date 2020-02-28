<?PHP
namespace Admin\Model;
use Think\Model;

class ArticleModel extends Model{

    protected $_validate=array(
       
        array('title','require','必须填写文章标题',3),
		array('desc','require','必须填写文章描述',3),
		array('content','require','必须填写文章内容',3),
		array('cataid','require','必须填写文章类别',3),
        array('author','require','必须填写作者',3),
        array('pic','require','必须填写作者',3),
		
		// array('title','','文章标题名称已经存在！',0,'unique',1),
		
         array('title','/([0-9a-zA-Z\x{4e00}-\x{9fa5}]+)/u','文章标题不能超过40！',3),
         array('desc','/([0-9a-zA-Z\x{4e00}-\x{9fa5}\s.]+)/u','文章描述不能超过200！',3),
		 
   
    );


    protected $tableName = 'blog_article';
     protected $_auto = array ( 
         array('addtime','time',3,'function') ,

     );
    
}
