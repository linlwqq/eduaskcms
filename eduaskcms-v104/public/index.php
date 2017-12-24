<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('DS', DIRECTORY_SEPARATOR) ;
##web根目录，非应用根目录，一般为应用目录的父级目录，如：WWW
define('ROOT', dirname(dirname(dirname(__FILE__))) . DS);
##应用可访问根目录（就是入口index.php所在文件夹，默认public）
define('WWW_ROOT', dirname(__FILE__) . DS);
##THINKPHP核心目录所在目录
define('THINK_CORE_PATH', ROOT .'libs' . DS . 'thinkphp' . DS . 'thinkphp_5.0.11' . DS);
##THINKPHP核心目录
define('THINK_PATH', THINK_CORE_PATH . 'thinkphp' . DS);
##vendor目录
define('VENDOR_PATH', THINK_CORE_PATH . 'vendor' . DS);
##Smarty核心目录
define('SMARTY_PATH', ROOT . 'libs' . DS . 'smarty' .  DS . 'smarty-3.1.27' . DS . 'libs' . DS );
##自己的vendor libs文件下面的Verdors
define('LIBS_VENDOR_PATH', ROOT .'libs' . DS . 'Vendors' . DS);
##应用所在目录
define('APP_PATH', dirname(dirname(__FILE__)) . DS .'app' . DS);
##加载框架引导文件
require THINK_PATH . 'start.php';