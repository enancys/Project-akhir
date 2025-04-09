<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Foods;

class ApiFoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Foods::all();
        return response()->json($foods);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $foods = Foods::create($request->all());
        return response()->json($foods, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $foods = Foods::findOrFail($id);
        return response()->json($foods);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $foods = Foods::findOrFail($id);
        $foods->update($request->all());
        return response()->json($foods);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $foods = Foods::findOrFail($id);
        $foods->delete();
        return response()->json(null, 204);
    }
}
