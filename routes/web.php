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
Route::bind('product',function($slug){
    return App\Producto::where('slug',$slug)->first();
});

//Route::resource('movie','movieController');
Route::get('/',[
    'as'=>'home2',
    'uses'=>'Application@index'
]);

Route::get('producto/{slug}',[
    'as'=>'producto-detalhe',
    'uses'=>'Application@show'
]);


/* Carrito............*/

Route::get('cart/show',[
    'as'=>'cart-show',
    'uses'=>'CartController@show'
]);

Route::get('cart/add/{product}',[
    'as'=>'cart-add',
    'uses'=>'CartController@add'
]);

Route::get('cart/delete/{product}',[
    'as'=>'cart-delete',
    'uses'=>'CartController@delete'
]);

Route::get('cart/trash',[
    'as'=>'cart-trash',
    'uses'=>'CartController@trash'
]);

Route::get('cart/update/{product}/{cantidad}',[
    'as'=>'cart-update',
    'uses'=>'CartController@update'
]);



Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');



