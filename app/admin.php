<?php
use think\Route;

/* 后台的数据API,调用前需要身份认证 */
Route::get('/a', function ()
{
  retutn 'b';
});

Route::group('admin', function ()
{
  Route::resource('/users', 'User');
  Route::resource('/articles', 'Article');
  Route::resource('/categories', 'Category');
});