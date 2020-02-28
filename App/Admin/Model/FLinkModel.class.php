<?PHP
namespace Admin\Model;
use Think\Model;

class FLinkModel extends Model{

    protected $_validate=array(
       
        array('url','require','必须填写URL地址名称',3),
        array('title','require','必须填写URL标题',3),
        array('desc','require','必须填写URL描述',3),
        
        array('url','/^(http:\/\/)|(https:\/\/)(\w.*?\.\w.*?)$/','URL格式不正确！',3),
        array('url','','URL已经存在！',0,'unique',3),
        array('title','','标题已经存在！',0,'unique',3),
        array('title','/([0-9a-zA-Z\x{4e00}-\x{9fa5}]+)/u','URL标题不能超过40！',3),
         array('desc','/([0-9a-zA-Z\x{4e00}-\x{9fa5}\s.]+)/u','URL描述不能超过200！',3),
        
   
    );
    protected $tableName = 'blog_flink';
}
