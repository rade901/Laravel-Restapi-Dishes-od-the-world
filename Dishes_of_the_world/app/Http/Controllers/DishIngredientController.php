<?php

namespace App\Http\Controllers;

use App\Models\dish_ingredient;
use App\Http\Requests\Storedish_ingredientRequest;
use App\Http\Requests\Updatedish_ingredientRequest;

class DishIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storedish_ingredientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedish_ingredientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dish_ingredient  $dish_ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(dish_ingredient $dish_ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dish_ingredient  $dish_ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(dish_ingredient $dish_ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedish_ingredientRequest  $request
     * @param  \App\Models\dish_ingredient  $dish_ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedish_ingredientRequest $request, dish_ingredient $dish_ingredient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dish_ingredient  $dish_ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(dish_ingredient $dish_ingredient)
    {
        //
    }
}
