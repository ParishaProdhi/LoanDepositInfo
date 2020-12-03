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

Route::get('/', 'App\Http\Controllers\applicationController@read');
Route::post('/post', 'App\Http\Controllers\applicationController@create');
Route::get('/show', 'App\Http\Controllers\applicationController@show');
Route::get('/sendSMS/{number}', 'App\Http\Controllers\applicationController@sendSMS');
Route::get('/branches/all', 'App\Http\Controllers\branchController@read');
//Route::get('/branches/all/{division}/{district}/{upazilla}/{union}', 'App\Http\Controllers\branchController@getEmailAddress');


//Route::get('/type/all', 'officeController@all');
//Route::get('/type', 'officeController@show_types');
//Route::get('/type/{type_id}', 'officeController@show_list');
//Route::get('/search/{search_string}', 'officeController@search');
//Route::get('/test', 'officeController@test');
