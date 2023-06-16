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
// 

Route::get('/registration-create', [App\Http\Controllers\HomeController::class, 'create']);
Route::get('/registration/{id}', [App\Http\Controllers\HomeController::class, 'show']);
Route::get('/registration-edit/{id}', [App\Http\Controllers\HomeController::class, 'edit']);
Route::get('/registration-delete/{id}', [App\Http\Controllers\HomeController::class, 'delete']);
