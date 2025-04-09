<?php

namespace App\Http\Controllers\Api;

use App\Models\Food_ingredients;
use App\Http\Controllers\Controller;
use Database\Seeders\Food_ingredientsSeeder;
use Illuminate\Http\Request;

class ApiFood_ingredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $food_ingredients = Food_ingredients::all();
        return response()->json($food_ingredients);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $food_ingredients = Food_ingredients::create($request->all());
        return response()->json($food_ingredients, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $food_ingredients = Food_ingredients::where('food_id', $id)->firstOrFail();
        return response()->json($food_ingredients);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $food_ingredients = Food_ingredients::where('food_id', $id)->firstOrFail();
        $food_ingredients->update($request->all());
        return response()->json($food_ingredients);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $food_ingredients = Food_ingredients::findOrFail($id);
        $food_ingredients->delete();
        return response()->json(null, 204);
    }
}
