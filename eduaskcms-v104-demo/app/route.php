<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//允许可以省略默认模块名  /User/login  =>/home/User/login
$pathInfo = explode('/',isset($_SERVER['PATH_INFO']) ? ((substr($_SERVER['PATH_INFO'],0,1) != '/') ? $_SERVER['PATH_INFO'] :substr($_SERVER['PATH_INFO'],1)) :'');
if(!in_array(strtolower($pathInfo[0]),config('allow_module_list')) &&  strtolower($pathInfo[0]) != config('default_module'))  think\Route::bind(config('default_module'));




think\Route::alias('/','Index/index');##首页别名
think\Route::alias('sitemap','home/Index/sitemap');##网站地图别名


//如果有引导页 ,并注释 20行 / 的别名
//think\Route::alias('','home/Index/guide');##首页别名
//think\Route::alias('index','home/Index/index');##首页别名


//think\Route::domain('run.domain.com','run');##后台单独二级域名 

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ]
];
