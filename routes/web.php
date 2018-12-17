<?php


Auth::routes();

Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
Route::resource('/admin/products', 'ProductController');
Route::resource('/admin/users', 'UserController');
Route::get('/', function (){
return view ('form');

});
Route::post('send-mail', 'MailSetting@send_form');
