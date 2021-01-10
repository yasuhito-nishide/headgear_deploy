<?php
// bradeとControllerを参照
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
// 初期画面
Route::get('/', function () {
    return view('headgear');
});

//topページからmanページへ画面遷移
Route::get('/man','IndexController@man');

//topページからwomanページへ画面遷移
Route::get('/woman','indexController@woman');

//topぺーじからbrandページへ画面遷移
Route::get('/brand','indexController@brand');

// topページからcontactページへ画面遷移
Route::get('/contact','indexController@contact');

//  topページから新規画面ページへ画面遷移
Route::get('/register','indexController@register');

// registerページからregisterokぺーじへ画面遷移
Route::post('/registerok','Register1Controller@registerFunc');