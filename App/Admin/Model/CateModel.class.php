<?PHP
namespace Admin\Model;
use Think\Model;

class CateModel extends Model{

    protected $_validate=array(
       
        array('catename','require','必须填写栏目名称',3),
        array('catename','/^([\x{4e00}-\x{9fa5}]\w{1,30})$/u','栏目名称格式不正确！（位数大于0，小于30）不能包含特殊字符',3),
        array('catename','','栏目名称已经存在！',0,'unique',3),
   
    );
    protected $tableName = 'blog_cate';
}
