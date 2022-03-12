<?php

use App\Http\Controllers\PizzaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [PizzaController::class,'index'])->name('pizzas.index')->middleware('auth');

Route::get('/pizzas/create', [PizzaController::class,'create'])->name('pizzas.create');

Route::get('/pizzas/{id}', [PizzaController::class,'show'])->name('pizzas.show')->middleware('auth');

Route::delete('/pizzas/{id}', [PizzaController::class,'destroy'])->middleware('auth')->name('pizzas.destroy');

Route::post('/pizzas', [PizzaController::class,'store'])->name('pizzas.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
