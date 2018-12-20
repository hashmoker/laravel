<?php


Auth::routes();

Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
Route::resource('/admin/products', 'ProductController');
Route::resource('/shop', 'ShopController');
Route::resource('/admin/users', 'UserController');
Route::get('/feedback', function (){
return view ('form');

});
Route::post('send-mail', 'MailSetting@send_form');
