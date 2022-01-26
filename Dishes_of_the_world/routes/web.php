<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishesController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\CategoriesController;



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
Route::get('/dishes',[DishesController::class,'index']);
Route::post('/ingredient',[IngredientsController::class,'store']);
Route::post('/dishes',[DishesController::class,'store']);
Route::post('/categories',[CategoriesController::class,'store']);
Route::post('/dishes/{id}',[DishesController::class,'destroy']);
/*Route::get('/profile/{dish}',[DishesController::class,'show'])->name('dishes.show');
Route::get('/profile', [DishesController::class, 'index'])->name('profile.index');*/