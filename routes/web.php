<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

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
Route::get('/asa', function(){
    return view('home');
});
Route::get('/a', function () {
    return view('link');
    
});
Route::get('/rumah', function () {
    return view ('rumah');
});
Route::get('/navv',function (){
    return view ('navv');
});
