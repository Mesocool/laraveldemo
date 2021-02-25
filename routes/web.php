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
//    return redirect()->route('blog.home');
});

// 前台博客
Route::group(['prefix' => '/blog'], function () {
    Route::get('/home', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.home');
    Route::get('/{slug}', [App\Http\Controllers\BlogController::class, 'showPost'])->name('blog.detail');
});

//Route::middleware(config('admin.route.middleware'))->namespace('Admin')->group(function () {
//    Route::resource('admin/post', 'PostController');
//    Route::resource('adminpost', 'PostController');
//    Route::resource('admin/tag', 'TagController');
//    Route::get('admin/upload', 'UploadController@index');
//});
//
//// 登录退出
//Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('/login', 'Auth\LoginController@login');
//Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
