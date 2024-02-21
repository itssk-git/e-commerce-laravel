<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;

Route::get('/',[AppController::class,'index'])->name('app.index');



Route::middleware('auth')->group(function(){
    Route::get('/my-account',[UserController::class,'index'])->name('user.index');
});
Route::middleware('auth','auth.admin')->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
});
Route::auth();