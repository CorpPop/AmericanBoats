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
Route::get('/','MainController@home');
Route::get('/carrito','ShoppingCartsController@index');
Auth::routes();

Route::resource('products','ProductsController');
Route::resource('in_shopping_carts','InShoppingCartsController',['only' => ['store','destroy']]);
// Route::resource('create','ProductsController@create');
/*
	GET /products => index
	POST /products => store
	GET /products/create => Formulario para creae

	GET /products/:id => Mostrar un producto con ID
	GET /products/:id/edit
	PUT/PATCH /products/:id
	DELETE /products/:id
*/

Route::get('home', 'HomeController@index')->name('home');
Route::get('products/images/{filename}',function($filename){
	$path = storage_path("app/images/$filename");
	if (!\File::exists($path))  abort(404);

		$file = \File::get($path);
		$type = \File::mimeType($path);
		$response = Response::make($file,200);
		$response->header("Content-Type",$type);
		return $response;
	
});