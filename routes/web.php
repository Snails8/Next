<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CalendarController;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/next', [TaskController::class, '']);

Route::get('/next/create', [TaskController::class, 'showCreateForm']);
Route::post('/next/create', [TaskController::class, 'create']);

Route::get('/next/tasks/{id}/edit', [TaskController::class, 'edit']);

Route::get('/calendar', [CalendarController::class, 'show']);