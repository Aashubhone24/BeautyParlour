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
    return view('welcome');
});

route::get('home','App\Http\Controllers\homecontroller@index');
route::get('about','App\Http\Controllers\aboutcontroller@about');

route::get('service','App\Http\Controllers\servicecontroller@service');

route::get('admin','App\Http\Controllers\admincontroller@admin'); 
route::get('contact','App\Http\Controllers\contactcontroller@contact');