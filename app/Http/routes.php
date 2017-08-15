<?php

Route::resource('/', 'FrontController@index');


Route::resource('admin', 'FrontController@admin');

//Ruta para login
Route::resource('log','LogController');
Route::get('logout','LogController@logout');
Route::get('login', [ 
	'as' => 'login',
	'uses' => 'LogController@login']);

Route::resource('user', 'UserController');

Route::resource('category', 'CategoryController');
Route::get('categorys', 'CategoryController@listing');

Route::resource('events', 'EventController');


//Slug de eventos para ver detalle y su posterior compra
Route::bind('event', function($slug){
	return Deportes\Models\Event::where('slug', $slug)->first();
});

Route::get('event/{slug}', [ 
	'as' => 'event-detail',
	'uses' => 'StoreController@show']);

//Routes de tienda

Route::resource('store', 'StoreController');
Route::post('store/register/{event}',[
       'as'=> 'register-competitor',
       'uses'=>'StoreController@register'
    ]);

Route::get('store/order', [
	'as' => 'order-detail',
	'uses' => 'StoreController@detail']);

Route::get('store/add/{event}', [
    'as' => 'add-event',
    'uses' => 'StoreController@add']);

Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',
	));

Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
	));


Route::resource('settings','CostSettingsController');