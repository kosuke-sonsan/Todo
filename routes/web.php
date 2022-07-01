<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'index']);
Route::post('/todo/create', [TodoController::class, 'create']);
Route::post('/todo/update', [TodoController::class, 'update'])->name('todo.update');
Route::get('/todo/delete', [TodoController::class, 'delete'])->name('todo.delete');
Route::post('/todo/delete', [TodoController::class, 'remove']);

Route::post('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
})->middleware(['auth'])->name('dashboard');

Route::get('/sayhi', function(){
  return spirintf('<h1>Hi, %s</h1>', auth()->user()->name);
})->middleware(['auth'])->name('sayhi');

require __DIR__.'/auth.php';
