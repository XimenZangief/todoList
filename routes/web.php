<?php

use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[TodoListController::class,'index'])->name('index');
Route::post('/',[TodoListController::class,'store'])->name('store');
Route::delete('/{todoList:id}',[TodoListController::class,'destroy'])->name('destroy');

Route::get('/shop',App\Http\Livewire\ShopPage::class);
