<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace'=>'Dashboard','middleware'=>'auth:admin'],function (){

    Route::get('/','DashboardController@index')->name('admin.dashboard');
});

Route::group(['namespace'=>'Dashboard','middleware'=>'guest:admin'],function (){
 Route::get('login','LoginAdmin@login')->name('admin.login');
 Route::post('login','LoginAdmin@postLogin')->name('admin.post.login');
});

