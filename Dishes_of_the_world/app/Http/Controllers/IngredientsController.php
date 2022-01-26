<?php

namespace App\Http\Controllers;

use App\Models\Ingredients;
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
        $ingredient = IngredientResource::collection(Ingredients::all());
        return view('dishes', compact('ingredient'));
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
    public function store(StoreingredientsRequest $request)
    {
        Ingredients::create([
            'title'=> $request->title,
            'slug'=> $request->slug,
        ]);
        return redirect('/dishes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredients $ingredient)
    {
        return new IngredientResource($ingredient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredients $ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateingredientsRequest  $request
     * @param  \App\Models\Ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateingredientsRequest $request, Ingredients $ingredient)
    {
        $ingredient->update([
            'title'=>$request->input('title'),
            'slug'=>$request->input('slug')
         ]);
         return new IngredientResource($ingredient);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredients $ingredient)
    {
        $ingredient->delete();
        return response()->json(null, 204);
    }
}
