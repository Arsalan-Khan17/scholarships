<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'index'])->name('home');

Route::post('/save_scholarship',[MainController::class,'save_scholarship'])->name('save_scholarship');
Route::get('/clear_cache',[MainController::class,'clear_cache'])->name('clear_cache');
Route::get('/run_migrations',[MainController::class,'run_migrations'])->name('run_migrations');
