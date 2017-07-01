<?php

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://topthink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// 应用入口文件
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 网站文件入口位置
define('WEB_ROOT', dirname(__FILE__) . '/');

// 绑定Home模块到当前入口文件
define('BIND_MODULE', 'Home');
// 绑定访问Index控制器
//define('BIND_CONTROLLER','Index');
// 绑定访问test操作
//define('BIND_ACTION','index');
//define('BUILD_CONTROLLER_LIST','Goods,User,GoodsCat,GoodsType');
// 定义应用目录

define('APP_PATH', 'Application/');
define('THINK_PATH', realpath('./ThinkPHP') . '/');

// 运行缓存目录
define('RUNTIME_PATH', WEB_ROOT . 'Cache/Home/');

// 定义模板主题
define("DEFAULT_THEME","default");

// 定义模板文件默认目录
define("TMPL_PATH","./".APP_PATH."View/".DEFAULT_THEME."/");
// 开启调试
define('APP_DEBUG', true);

// 引入ThinkPHP入口文件
require THINK_PATH . 'ThinkPHP.php';
?>