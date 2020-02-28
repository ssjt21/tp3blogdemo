<?PHP
namespace Admin\Model;
use Think\Model;

class LoginModel extends Model{

    protected $_validate=array(
       
        array('username','require','必须填写用户名称',4),
        array('username','/^[\x{4e00}-\x{9fa5}\w\d]{1,30}$/u','用户名称格式不正确！（位数大于0，小于30）不能包含特殊字符',4),
        array('password','require','必须填写密码！',4),
         array('checkcode','require','必须填写验证码！！',4),
         array('checkcode',"check_verify","验证码错误！",4,"callback"),
   
    );
    protected $tableName = 'blog_admin';
    public function login()
    {
        
        $pass=md5($this->password);
      
        $info=$this->where(array('username'=>$this->username))->find();
       
        if($info)
        {
            
           if($pass==$info['password']) 
           {
               session('id',$info['id']);
               session('username',$info['username']);
               return true;
           }
           else
           {
               return false;
           }
        }
        return false;

    }

    public function check_verify($code,$id="")
    {
        $Verify =     new \Think\Verify();

          return $Verify->check($code, $id);
    }
}
