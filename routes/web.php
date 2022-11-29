<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoListController;

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

Route::get('/', [todoListController::class, "index"]);
Route::post('/save-todo', [todoListController::class, 'saveTodo'])->name("saveTodo");
Route::get("/delete/{id}", [todoListController::class, 'deleteItem']);
Route::get("/edit/{id}", [todoListController::class, 'EditItem']);
Route::post("/edit/{id}", [todoListController::class, 'updateItem']);