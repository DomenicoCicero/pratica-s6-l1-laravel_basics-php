<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'allActivity'])->name('allActivity');
Route::get('/', [HomeController::class, 'createNewActivity'])->name('createNewActivity');
Route::get('/', [HomeController::class, 'singleActivity'])->name('singleActivity');
Route::get('/', [HomeController::class, 'updateActivity'])->name('updateActivity');
