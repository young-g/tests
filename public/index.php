<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
namespace think;

// 加载基础文件
require __DIR__ . '/../thinkphp/base.php';

// 支持事先使用静态方法设置Request对象和Config对象

// 执行应用并响应
//Container::get('app')->run()->send();


switch ($_SERVER['HTTP_HOST']) {
    case 'wx.dentist.com':
Container::get('app')->bind('index')->run()->send();
        break;
    case 'admin.dentist.com':
Container::get('app')->bind('manage')->run()->send();
        break;
}


// \think\Route::bind($model);// 绑定当前入口文件到模块
// \think\App::route($route);// 路由
// \think\App::run()->send();// 执行应用