<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display('login');

    }

    public function login(){
        if(IS_POST)
        {
            if(session("?id")&&session("?username")&&I('post.name')==$Think.session.username&&I('post.id')==$Think.session.id)
            {
                exit($this->error("你已经登录！",U("Index/index")));
            }else{
                $mode=D('Login');
                // dump($mode);
                if($mode->create(I('post.'),4)){
                    // dump(I('post.'));
                    if($mode->login())
                    {
                        $this->success("登录成功！",U('Index/index'));
                    }else
                    {
                    $this->error("登录失败！........"); 
                    }

                }else
                {
                $this->error($mode->getError());
                }
            }
        }

        return ;
    }

    public function verify()
    {
        $Verify =     new \Think\Verify();
        $Verify->fontSize = 20;
        $Verify->length   = 5;
        // $Verify->useImgBg = true;
        $Verify->useNoise =false;
        $Verify->entry();
    }
      public function logout()
   {
       session(null); 
       $this->success('退出成功！',U('Login/index'));
   }
}

