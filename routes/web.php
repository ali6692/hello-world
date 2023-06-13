<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::get('/', function (){
    return view('welcome');
});
Route::get('/demo/{name}/{id?}', function ($name,$id = null){
    $data= compact('name','id');
    print_r($data);
});
Route::any('/test',function (){
    echo "Testing the route";
});
//Route::put('/users/{id}',function($id){
//});
//Route::patch();
//Route::delete('/users/{id}',function($id){
//});

