<?php
// CRUD
// メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）
Route::post('messages', 'MessagesController@store')->name('messages.store');;
// メッセージの更新処理（編集画面を表示するためのものではありません）
Route::put('messages/{id}', 'MessagesController@update')->name('messages.update');;
// メッセージを削除
Route::delete('messages/{id}', 'MessagesController@destroy')->name('messages.destroy');;

// index: showの補助ページ
Route::get('/', 'MessagesController@index')->name('messages.index');
// create: 新規作成用のフォームページ
Route::get('messages/create', 'MessagesController@create')->name('messages.create');
// メッセージの個別詳細ページ表示
Route::get('messages/{id}', 'MessagesController@show')->name('messages.show');;
// edit: 更新用のフォームページ
Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');


// CRUD省略形
// Route::get('/', 'MessagesController@index');
// Route::resource('messages', 'MessagesController');