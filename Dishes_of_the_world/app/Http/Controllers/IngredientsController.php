<?php

namespace App\Http\Controllers;

use App\Models\ingredient;
use App\Http\Requests\StoreingredientsRequest;
use App\Http\Requests\UpdateingredientsRequest;
use App\Http\Resources\IngredientResource;

class IngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return IngredientResource::collection(ingredient::all());
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
     * @param  \App\Http\Requests\StoreingredientsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $faker = \Faker\Factory::create(10);
        $ingredients = ingredient::create([
            'title'=> $faker->title,
            'slug'=> $faker->slug
        ]);
        return new IngredientResource($ingredients);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function show(ingredient $ingredients)
    {
        return new IngredientResource($ingredients);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function edit(ingredient $ingredients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateingredientsRequest  $request
     * @param  \App\Models\ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateingredientsRequest $request, ingredient $ingredients)
    {
        $ingredients->update([
            'title'=>$request->input('title'),
            'slug'=>$request->input('slug')
         ]);
         return new IngredientResource($ingredients);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingredient  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function destroy(ingredient $ingredients)
    {
        $ingredients->delete();
        return response()->json(null, 204);
    }
}
