<?php
namespace app\run\controller;

class Index extends Run
{
    public function index()
    {                     
        $this->assign->addCss('admin/index.css');
        $this->assign->addJs('admin/jquery.nicescroll.min');        
        
        //环境
        $this->assign->dev['php_version'] = PHP_VERSION;        
        if (@ini_get('file_uploads')) {
            $this->assign->dev['upload_max_filesize'] = ini_get('upload_max_filesize');
        } else {
            $this->assign->dev['upload_max_filesize'] = '禁止上传';
        }        
        $this->assign->dev['php_os'] = PHP_OS;
        $softArr = explode('/',$_SERVER["SERVER_SOFTWARE"]) ;
        $this->assign->dev['server_software'] = array_shift($softArr);
        $this->assign->dev['server_name'] = gethostbyname($_SERVER['SERVER_NAME']);
        $rslt = db()->query('SELECT VERSION() AS `version`');
        $this->assign->dev['mysql_version'] = $rslt[0]['version'];
        if (extension_loaded('curl')) {
            $this->assign->dev['curl_extension'] = 'YES';
        } else {
            $this->assign->dev['curl_extension'] = 'NO';
        }
        $this->assign->dev['max_execution_time'] = ini_get('max_execution_time') . 'S';
        
        //统计
        $count['article'] = db('Article')->count();
        $count['product'] = db('Product')->count();
        $count['user'] = db('User')->count();
        $count['album'] = db('Album')->count();
        
        $count['feedback'] = db('Feedback')->where(['is_finish' => 0])->count();        
        $this->assign->count = $count ;
        
        cookie(['prefix' => 'think_', 'expire' => 3600]);
        $this->assign->is_lock_screen = cookie('?is_lock_screen') ? true : false;
        $this->assign->default_skin = cookie('?skin_name') ? cookie('skin_name') : '';
        
        $this->fetch = 'index';
    }
    
    public function redirect_message()
    {
		$this->setTitle('系统消息','operation');        
        $this->assign->data=session('messageinfo');        
        $this->fetch = '/message';
    }
    
    
}
