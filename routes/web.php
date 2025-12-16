<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get
Route::group(['middleware' => 'auth'], function () {
    Route::get('/todo', [TodoController::class, 'main'])->name('todo.main');
    Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
    Route::post('/todo/store', [TodoController::class, 'store'])->name('todo.store');
    Route::get('/todo/show/{id}', [TodoController::class, 'show'])->name('todo.show');
    Route::put('/todo/update/{id}', [TodoController::class, 'update'])->name('todo.update');
    Route::delete('/todo/delete', [TodoController::class, 'delete'])->name('todo.delete');
});


Auth::routes();

Route::get('/home', [TodoController::class, 'main'])->name('home');
