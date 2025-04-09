<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant_foods;
use App\Models\Restaurants;

class ApiRestaurant_foodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurant_foods = Restaurant_foods::all();
        return response()->json($restaurant_foods);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $restaurant_foods = Restaurant_foods::create($request->all());
        return response()->json($restaurant_foods);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $restaurant_foods = Restaurant_foods::where('restaurant_id', $id)->firstOrFail();
        return response()->json($restaurant_foods);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $restaurant_foods = Restaurant_foods::where('restaurant_id', $id);
        $restaurant_foods->update($request->all());
        return response()->json($restaurant_foods);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $restaurant_foods = Restaurant_foods::where('restaurant_id', $id);
        $restaurant_foods->delete();
        return response()->json(null, 204);
    }
}
