<?php

use Illuminate\Support\Facades\Route;
use App\Models\tudo_list;
use App\Http\Controllers\TudoListController;

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

Route::get('/', 'App\Http\Controllers\TudoListController@index' );

Route::get('create', 'App\Http\Controllers\TudoListController@create' );

Route::get('save_new_list', 'App\Http\Controllers\TudoListController@store' );

Route::get('delete/{id}', 'App\Http\Controllers\TudoListController@destroy' );

Route::get('edit/{id}', 'App\Http\Controllers\TudoListController@edit' );

Route::get('update_list/{id}', 'App\Http\Controllers\TudoListController@update' );