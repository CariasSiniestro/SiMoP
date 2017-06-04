<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::auth();


Route::get('/success',function(){
	return view('success');
});

Route::get('/', 'HomeController@index');
Route::get('/showcategorias', 'CategoriasController@ShowSelect');
//Route::get('/main', 'HomeController@GetMain');



Route::group(['middleware' => 'auth'],function(){
//ver los departamentos
Route::get('/departamentos','DepartamentosController@index');
//editar y actualizar un departamento
Route::get('/departamento/{id}/edit','DepartamentosController@editar');
Route::post('/departamento/{id}/edit','DepartamentosController@actualizar');
//nuevo departamento
Route::get('/departamento','DepartamentosController@crear');
Route::post('/departamento','DepartamentosController@guardar');
});




//mostras las categorias
Route::get('/categorias','CategoriasController@index');
//editar y actualizar una categoria
Route::get('/categoria/{id}/edit','CategoriasController@editar');
Route::post('/categoria/{id}/edit','CategoriasController@actualizar');
//nueva categoria
Route::get('/categoria','CategoriasController@crear');
Route::post('/categoria','CategoriasController@guardar');


//mostrar unidades de medida de productos
Route::get('/medidas','MedidasController@index'); 
//editar y actualizar una unidad de medida
Route::get('/medida/{id}/edit','MedidasController@editar');
Route::post('/medida/{id}/edit','MedidasController@actualizar');
//nueva unidad
Route::get('/medida','MedidasController@crear');
Route::post('/medida','MedidasController@guardar');


//mostrar productos
Route::get('/productos','ProductosController@index');
Route::get('/producto/{id}','ProductosController@show');
//nuevo producto
Route::get('/producto','ProductosController@crear');
Route::post('/producto','ProductosController@guardar');
//editar y actualizar una unidad de medida
Route::get('/producto/{id}/edit','ProductosController@editar');
Route::post('/producto/{id}/edit','ProductosController@actualizar');

Route::get('/precios','PreciosController@getView');
