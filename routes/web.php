<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('next', [TaskController::class, 'index'])->name('tasks.index');