<?php
use App\Models\Blog;
use App\Http\Controllers\BlogController;
use App\Models\Todo;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index']);

Route::get('/blogs/create', [BlogController::class, 'create']);

Route::post('/blogs/store', [BlogController::class, 'store']);

Route::get('/blogs/edit/{blog}', [BlogController::class, 'edit']);

Route::put('/blogs/update/{blog}', [BlogController::class, 'update']);

Route::delete('/blogs/delete/{blog}', [BlogController::class, 'destroy']);

Route::get('/blogs/{blog}', [BlogController::class, 'show']);

// Todo routes (simple, same style as Blog routes)
Route::get('/todos', [TodoController::class, 'index']);
Route::get('/todos/create', [TodoController::class, 'create']);
Route::post('/todos/store', [TodoController::class, 'store']);
Route::get('/todos/edit/{id}', [TodoController::class, 'edit']);
Route::put('/todos/update/{id}', [TodoController::class, 'update']);
Route::delete('/todos/delete/{id}', [TodoController::class, 'destroy']);
Route::get('/todos/{id}', [TodoController::class, 'show']);
