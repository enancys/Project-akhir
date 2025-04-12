<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurants;

class ApiRestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurants::all();
        return response()->json($restaurants);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $restaurants = Restaurants::create($request->all());
        return response()->json($restaurants);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $restaurants = Restaurants::findOrFail($id);
        return response()->json($restaurants);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $restaurants = Restaurants::findOrFail($id);
        $restaurants->update($request->all());
        return response()->json($restaurants);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $restaurants = Restaurants::findOrFail($id);
        $restaurants->delete();
        return response()->json($restaurants);
    }
}
