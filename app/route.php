<?php
use think\Route;

/* 学习测试Route,可删除  */

Route::get('/', 'Index/index');

/* 公网无需认证即可获取的API */

Route::resource('/articles', 'Article');


