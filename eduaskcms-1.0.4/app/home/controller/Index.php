<?php
namespace app\home\controller;

class Index extends Home
{
    public function _initialize()
    {        
        call_user_func(array('parent',__FUNCTION__)); 
        $this->assign->top_id = 0;
    }
    //首页
    public function index()
    { 
        $this->fetch = true;
    }
    
    //引导页，需要在app/route中配置
    public function guide()
    {
        $this->fetch = true;
    }
    
    //网站地图
    public function sitemap()
    {  
        $this->fetch = true;
    }
    
    /*
    //忘记密码可以访问该方法来获取加密字符串 domain/index/getpwd/pwd/需加密的字符串
    public function getpwd()
    {
        echo $this->Auth->password($this->args['pwd']);
    }
    */
}
