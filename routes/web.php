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
// Route::get('/{name?}',function($name=null){
//     $data=compact('name');
//     return view('home')->with($data);
// });

//Route::get('/', [App\Http\Controllers\HomeController::class, 'edit']);
Route::get('/customers-create', [App\Http\Controllers\HomeController::class, 'create']);
Route::get('/customers/{id}', [App\Http\Controllers\HomeController::class, 'show']);
Route::get('/customers-edit/{id}', [App\Http\Controllers\HomeController::class, 'edit']);
Route::get('/customers-delete/{id}', [App\Http\Controllers\HomeController::class, 'delete']);
//Route::get('/customers',function(){
    //$customers= Customer::all();
    //echo "<pre>";
    //print_r($customers->toArray());
//});