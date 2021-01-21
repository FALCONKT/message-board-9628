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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/','MessagesController@index');

// // CRUD  省略記述版
// これだけでCRUDから　全部　指定　show　store　update　destroy
Route::resource('messages', 'MessagesController');



// // CRUD  詳細記述版

// // Message個別詳細Page表示
// Route::get('messages/{id}', 'MessagesController@show');

// // Message新規登録処理
// Route::post('messages', 'MessagesController@store');

// // Message の更新処理
// Route::put('messages/{id}', 'MessagesController@update');

// // Message の削除
// Route::delete('messages/{id}', 'MessagesController@destroy');

// // index:showの補助Page Resauseの一覧Pageへ
// Route::get('messages', 'MessagesController@index')->name('messages.index');

// // store 新規作成(create)用 FormPage作成
// Route::get('messages/create', 'MessagesController@create')->name('messages.create');

// // edit 更新(updata)用　FormPage作成
// Route::put('messages/{id}', 'MessagesController@update')->name('messages.edit');
