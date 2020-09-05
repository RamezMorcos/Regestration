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

Route::get('/regestration', 'Admin@get_regestration_form');

Route::post('/welcome', 'Admin@stored');

Route::get('admin/dashboard','Admin@index');
Route::get('admin/login','Admin@login');
Route::get('admin/Home','Admin@Home');


Route::post('admin/successfully','Admin@logged');

Route::get('admin/users','Admin@getusers');