<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Auth\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'index']);

// let's chain the method name using ->name()
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/category1', [PagesController::class, 'category1'])->name('category1');
Route::get('/category2', [PagesController::class, 'category2'])->name('category2');
Route::get('/category3', [PagesController::class, 'category3'])->name('category3');
Route::get('/category4', [PagesController::class, 'category4'])->name('category4');

Route::post('/Login', [AuthController::class, 'Login'])->name('Auth.login');
Route::post('/Register', [AuthController::class, 'Register'])->name('Auth.Register');

// Auth route
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
