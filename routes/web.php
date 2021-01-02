<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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
    return view('admin/posts/index');
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'store']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function(){
    
    Route::get('/posts/novo', [PostController::class, 'create']);
    Route::get('/posts/editar/{id}', [PostController::class, 'edit']);
    Route::resource('posts', PostController::class);
    
    Route::get('/usuarios/novo', [UserController::class, 'create']);
    Route::get('/usuarios/editar/{id}', [UserController::class, 'edit']);
    Route::resource('usuarios', UserController::class);
});
