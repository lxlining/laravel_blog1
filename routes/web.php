<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home/login', 'Home\UserController@index');
Route::get('home/', 'Home\UserController@index1');
Route::post('home/login/login', 'Home\UserController@login');
//注册
Route::get('home/register', 'Home\UserController@register');
Route::post('home/register', 'Home\UserController@register1');
//注销
Route::get('home/logout', 'Home\UserController@logout');

//Route::get('home/sort', 'Home\UserController@load_sort');
//文章
Route::get('home/article', 'Home\ArticleController@index');
Route::post('home/article/index1', 'Home\ArticleController@index1');

//分页
Route::get('home/paginate','Home\ArticleController@page');

Route::get('home/self','Home\UserController@self');

Route::get('home/self/user','Home\UserController@user');

Route::get('home/self/update','Home\UserController@update');

Route::post('home/self/update2','Home\UserController@update1');

Route::get('/home/self/article','Home\ArticleController@serch');
Route::get('/home/self/article1/{id}','Home\ArticleController@del');

Route::post('/home/self/find','Home\ArticleController@find');