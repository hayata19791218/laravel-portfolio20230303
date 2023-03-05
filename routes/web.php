<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//管理画面
// Route::get('/admin','AdminController@admin')->name('admin.admin');

// //Workの新規作成
// Route::get('/workCreate','AdminController@workCreate')->name('admin.workCreate');

// //Workの保存
// Route::post('/workStore','AdminController@workStore')->name('admin.workStore');

// //summernoteでの画像の保存
// Route::post('/imageUpload','AdminController@uploadImage')->name('admin.uploadImage');

// //Workの編集
// Route::get('/workEdit/{id}','AdminController@workEdit')->name('admin.workEdit');

// //Workの中身のページの表示
// Route::get('/workShow/{id}','AdminController@workShow')->name('admin.workShow');

// //Workの削除
// Route::delete('/workDelete/{id}','AdminController@workDelete')->name('admin.workDelete');

// //Workの更新
// Route::put('/workUpdate/{id}','AdminController@workUpdate')->name('admin.workUpdate');

//投稿記事一覧の表示
Route::get('/index','AdminController@index')->name('admin.index');

// //my productの新規作成
// Route::get('/productCreate','AdminController@productCreate')->name('admin.productCreate');

// //my productの保存
// Route::post('/productStore','AdminController@productStore')->name('admin.productStore');

// //my productの画像保存
// // Route::post('/productImage','AdminController@productImage')->name('admin.productImage');

// //productの編集
// Route::get('/productEdit/{id}','AdminController@productEdit')->name('admin.productEdit');

// //productの中身のページの表示
// Route::get('/productShow/{id}','AdminController@productShow')->name('admin.productShow');

// //productの削除
// Route::delete('/productDelete/{id}','AdminController@productDelete')->name('admin.productDelete');

// //productの更新
// Route::put('/productUpdate/{id}','AdminController@productUpdate')->name('admin.productUpdate');