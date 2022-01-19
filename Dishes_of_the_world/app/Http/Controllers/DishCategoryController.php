<?php

namespace App\Http\Controllers;

use App\Models\dish_category;
use App\Http\Requests\Storedish_categoryRequest;
use App\Http\Requests\Updatedish_categoryRequest;

class DishCategoryController extends Controller
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
     * @param  \App\Http\Requests\Storedish_categoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedish_categoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dish_category  $dish_category
     * @return \Illuminate\Http\Response
     */
    public function show(dish_category $dish_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dish_category  $dish_category
     * @return \Illuminate\Http\Response
     */
    public function edit(dish_category $dish_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedish_categoryRequest  $request
     * @param  \App\Models\dish_category  $dish_category
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedish_categoryRequest $request, dish_category $dish_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dish_category  $dish_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(dish_category $dish_category)
    {
        //
    }
}
