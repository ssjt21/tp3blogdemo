<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {

    public function __construct()
    {
        parent::__construct();
        if(session('?id')&&session('?username'))
        {
           
            

        }
        else{
            $this->error("请登录！......",U('Login/index'));
        }
    }
    


}

