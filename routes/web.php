<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;



Route::get('/register' , [RegisterController::class , 'index'])->name('register');
Route::get('/login' , [LoginController::class , 'index'])->name('login');
Route::post('/logout' , [LogoutController::class , 'store'])->name('logout');
Route::post('/login' , [LoginController::class , 'store']);
Route::get('/dashboard' , [DashboardController::class , 'index'])->name('dashboard')->middleware('auth');
Route::post('/register' , [RegisterController::class , 'store']);
Route::get('/posts' , [PostController::class , 'index'])->name('posts');
Route::post('/posts' , [PostController::class , 'store']);

Route::get('/home' , function () {
    return view('home');
})->name('home');
