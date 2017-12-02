<?php
/**
 * Created by PhpStorm.
 * User: hay
 * Date: 2017/11/22
 * Time: 9:27
 */
Route::group(['prefix'=>'','namespace'=>'Home'],function(){
    //    展示前台首页
    Route::get('','IndexController@index');
    //    展示前台案例
    Route::get('/case','IndexController@casemodel');
    //    展示前台服务
    Route::get('/service','IndexController@service');
    //    展示前台关于元度
    Route::get('/about','IndexController@about');
    //    展示前台元度动态
    Route::get('/dynamic','IndexController@dynamic');
    //    展示前台加入元度
    Route::get('/join','IndexController@join');
    //    展示前台联系我们
    Route::get('/contact','IndexController@contact');
    //    展示前台联系我们
    Route::post('/info','IndexController@info');
});