<?PHP
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{

    protected $_validate=array(
       
        array('username','require','必须填写用户名',3),
        array('username','/^[\d\w\x{4e00}-\x{9fa5}]{1,30}$/u','用户名称格式不正确！（位数大于0，小于30）不能包含特殊字符',3),
        array('username','','该用户已经存在！',0,'unique',3),
        array('password','require','必须填写用户名密码！',3),
        array('repassword','require','必须填写确认密码',3),
        array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
        array('password','/^[1-9a-zA-Z_.]{6,30}$/','密码至少6位！',3),
   
    );
    protected $tableName = 'blog_admin';
    protected $_auto=array(

        array('password','md5',3,'function') ,

    );
}
