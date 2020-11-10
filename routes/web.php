<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskCreateController;
use App\Http\Controllers\CalendarController;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/next', [TaskController::class, '']);
/**
 * form遷移処理
 */
Route::get('/next/create', [TaskCreateController::class, 'showCreateForm']);
Route::post('/next/create', [TaskCreateController::class, 'store'])->name("store_task");

Route::get('/next/tasks/{id}/edit', [TaskController::class, 'edit']);

Route::get('/calendar', [CalendarController::class, 'show']);