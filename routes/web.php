<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get
// Route::group(['middleware' => 'auth'], function () {
Route::get('/todo', [TodoController::class, 'main'])->name('todo.main');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create')->middleware('auth'); // harus login dulu
Route::post('/todo/store', [TodoController::class, 'store'])->name('todo.store')->middleware('auth'); // harus login dulu
Route::get('/todo/show/{id}', [TodoController::class, 'show'])->name('todo.show');
Route::put('/todo/update/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todo/delete', [TodoController::class, 'delete'])->name('todo.delete');
// });

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user', [UserController::class, 'main'])->name('user.main');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show');
    Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/delete', [UserController::class, 'delete'])->name('user.delete');
});


Auth::routes();

Route::get('/home', [TodoController::class, 'main'])->name('home');
