<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminAccess;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\countryController;
use App\Http\Controllers\HomeController;
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

Auth::routes();
//Auth::routes('auth.register',[countryController::class, 'show']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/show',[HomeController::class, 'show'])->middleware('auth');
Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->middleware('admin');
Route::get('/admin/users/{user}/show', [HomeController::class, 'show'])->middleware('admin');

Route::patch('/admin/users/{user}', [UserController::class, 'update'])->middleware('admin');

Route::get('/admin/users/{user}/edit-password', [ResetPasswordController::class, 'updateP'])->middleware('admin');
Route::patch('/admin/users/edit-password/{user}', [ResetPasswordController::class, 'updatePassword'])->middleware('admin');


Route::get('/auth.register',[countryController::class, 'showCountry']);
 

