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
    return view('welcome1');
});

Route::get('/index', function () {
    return view('homepagecoba');
});

Auth::routes();

Route::prefix('admin')->group(function(){
  //Login
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

  //Register
	Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
	Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

  //Dashboard
  Route::get('', 'AdminController@index')->name('admin.dashboard');
  Route::get('/verify', 'AdminController@verify')->name('update.status');
});

Route::prefix('homepage')->group(function(){
  Route::get('/', 'HomeController@index')->name('home');
  Route::get('single/{id_sayur}', 'HomeController@getSingle')->name('get.single');
  Route::post('single/{id_sayur}/add', 'SingleController@addCart')->name('add.cart'); 
  Route::get('/', 'HomeController@getProducts')->name('get.products');
  Route::post('/categories_detail', 'HomeController@getCategory')->name('get.categories');
});

Route::prefix('shopcart')->group(function(){
  Route::get('deleteitem/{id_sayur}', 'CartController@deleteItem')->name('delete.item');
  Route::post('updateqty', 'CartController@updateQty')->name('update.qty');
  Route::get('', 'CartController@index')->name('get.detail.keranjang');
});

Route::prefix('checkout')->group(function(){
  Route::get('', 'CheckoutController@index')->name('get.checkout');
  Route::post('/transaction', 'CheckoutController@createTransaction')->name('create.transaction');
});

Route::prefix('transaction')->group(function(){
  Route::get('', 'TransactionController@index')->name('get.transaction');
});

Route::prefix('produk')->group(function(){
  Route::get('', 'ProdukController@index')->name('get.produk');
});

Route::prefix('payment')->group(function(){
  Route::get('', 'PaymentController@index')->name('get.payment');
  Route::post('/upload', 'PaymentController@uploadFile')->name('file.upload');
});

Route::prefix('toko')->group(function(){
  Route::get('', 'TokoController@index')->name('toko.dashboard');
  Route::post('/regis', 'TokoController@registerToko');
  Route::post('/update', 'TokoController@updateToko')->name('update.toko');
  Route::post('/create', 'TokoController@createProduct')->name('create.sayur');
});