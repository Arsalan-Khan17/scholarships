<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'index'])->name('home');

Route::post('/save_scholarship',[MainController::class,'save_scholarship'])->name('save_scholarship');
