<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ratings;

class ApiRatingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rating = Ratings::all();
        return response()->json($rating);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rating = Ratings::create($request->all());
        return response()->json($rating);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rating = Ratings::findOrFail($id);
        return response()->json($rating);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rating = Ratings::findOrFail($id);
        $rating->update($request->all());
        return response()->json($rating);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rating = Ratings::findOrFail($id);
        $rating->delete();
        return response()->json(null, 204);
    }
}
