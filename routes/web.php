<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserController::class,'index'])->name('home');

Route::get('/add',[UserController::class,'create'])->name('create.user');

Route::post('/add',[UserController::class,'store'])->name('store.user');

Route::get('/{user}/edit',[UserController::class,'edit'])->name('edit.user');

Route::put('/{user}',[UserController::class,'update'])->name('update.user');

Route::delete('/delete/{user}',[UserController::class,'destroy'])->name('destroy.user');
