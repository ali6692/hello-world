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

// Route::get('/', [App\Http\Controllers\HomeController::class, 'edit']);
Route::get('/result-create', [App\Http\Controllers\HomeController::class, 'create']);
Route::get('/result/{id}', [App\Http\Controllers\HomeController::class, 'show']);
Route::get('/result-edit/{id}', [App\Http\Controllers\HomeController::class, 'edit']);
Route::get('/result-delete/{id}', [App\Http\Controllers\HomeController::class, 'delete']);