<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\ForgotController;
use App\Http\Controllers\auth\RegisterController;

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

Route::get('/', [HomeController::class, 'showHome'])->name('home');
Route::get('/auth/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/auth/login', [LoginController::class, 'login'])->name('login.send');
Route::get('/auth/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/auth/login/forgot', [ForgotController::class, 'showForgot'])->name('forgot');
Route::post('/auth/login/forgot', [ForgotController::class, 'forgot'])->name('forgot.send');
Route::get('/auth/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/auth/register', [RegisterController::class, 'register'])->name('register.send');
Route::get('/post/view/{post_id}', [PostController::class, 'showPost'])->name('post.show');

Route::group(['middleware' => 'checkUserLevel:2'], function () {
    Route::get('/post/create', [PostController::class, 'showCreate'])->name('createPost.show');
    Route::post('/post/create', [PostController::class, 'createPost'])->name('createPost.send');
});



Route::view('/notfound', 'notfound')->name('notfound');