<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\IngredientsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::apiResource('/dishes', DishesController::class);
Route::apiResource('/category', CategoriesController::class);
Route::apiResource('/tags', TagController::class);
Route::apiResource('/ingredient', IngredientsController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
