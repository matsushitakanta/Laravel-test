<?php

use Illuminate\Http\Request;
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

Route::get('/', function(){return redirect('/myusers');});
Route::get('/myusers', 'MyUserController@index')->name('index');
Route::get('/test', 'MyUserController@test')->name('testname');;
Route::post('/myusers', 'MyUserController@store');
Route::delete('/myusers/{idid}', 'MyUserController@destroy');
