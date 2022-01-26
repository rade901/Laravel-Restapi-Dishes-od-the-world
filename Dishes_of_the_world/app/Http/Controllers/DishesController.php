<?php

namespace App\Http\Controllers;

use App\Models\dish;
use App\Models\category;
use App\Http\Requests\StoredishRequest;
use App\Http\Requests\UpdatedishRequest;
use App\Http\Resources\DishesResource;
use App\Http\Resources\CategoriesResource;


class DishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $dish = DishesResource::collection(dish::all());
        $category = CategoriesResource::collection(category::all());
        return view('dishes', compact('dish','category'));
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
     * @param  \App\Http\Requests\StoredishRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredishRequest   $request )
  
    {
      
        dish::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'category_id'=> $request->category,
        ]);
        return redirect('/dishes');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(dish $dish)
    {
        return new DishesResource($dish);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(dish $dish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedishRequest  $request
     * @param  \App\Models\dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedishRequest $request, dish $dish)
    {
        $dish->update([
           'category_id' => $request->input('category_id'),
           'title'=>$request->input('title'),
           'description'=>$request->input('description')
        ]);
        return new DishesResource($dish);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(dish $dish,$id)
    {
       $dish = dish::find($id);
         $dish->delete();
            return redirect('/dishes');
        
        
    }
    public function softDeleted()
    {
        $restoreDish = dish::onlyTrashed()->get();

        $response = $this->successfulMessage(200, 'Successfully', true, $restoreDish->count(), $restoreDish);
        return response($response);
    }
    
    
}
