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

Route::resources([
    'tags' => 'TagsController',
    'products' => 'ProductController'
]);
Route::get('/get-rated-products', 'ProductController@getRatedProducts');
Route::get('/get-sale-products', 'ProductController@getSaleProducts');

Route::post('/send-user', 'SpaController@post');
Route::get('/users', 'SpaController@get');
Route::get('/users-delete', 'SpaController@deleteAll');
Route::get('/abc', 'SpaController@abc');

Route::get('/{any}', 'SpaController@index')->where('any', '.*');
