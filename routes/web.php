<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [TodoController::class, 'index'])->middleware('auth');
Route::get('/', [TodoController::class, 'keyword'])->middleware('auth')->name('todo.keyword');
Route::post('/todo/create', [TodoController::class, 'create'])->middleware('auth');
Route::post('/todo/update', [TodoController::class, 'update'])->name('todo.update');
Route::get('/todo/delete', [TodoController::class, 'delete'])->name('todo.delete');
Route::post('/todo/delete', [TodoController::class, 'remove']);


// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::post('/login', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
