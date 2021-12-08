<?php

use Illuminate\Support\Facades\Route;

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
    return view('register');
});
/*Route::get('post', function () {
    return view('customers');
});*/
//Route::get('post', [PostController::class, 'index'])->name('post.index');
/*Route::get('post','App\Http\Controllers\PostController@index');//mostrar todos los registros
Route::get('custo','App\Http\Controllers\PostController@custo');//mostrar todos los registros*/


