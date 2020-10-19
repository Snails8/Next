<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/next', [TaskController::class, 'index'])->name('tasks.index');

Route::get('/next/create', [TaskController::class, 'create']);
Route::post('/next/create', [TaskController::class, 'create']);