<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
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

Route::resource('users', UserController::class)->except('create','store','edit');
Route::resource('orders', OrderController::class)->except('create','store','edit');
Route::group(['prefix'=>'manage'],function (){
   Route::resource('products', ProductController::class); #todo:show method write later
   Route::resource('categories', CategoryController::class)->except('show');
   Route::resource('comments', CommentController::class)->only('index','destroy');
   Route::get('comments.status',[CommentController::class,'status'])->name('comments.status');
});
