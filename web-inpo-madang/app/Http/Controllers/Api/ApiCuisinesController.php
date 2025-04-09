<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuisines;

class ApiCuisinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cuisines = Cuisines::all();
        return response()->json($cuisines);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cuisines = Cuisines::create($request->all());
        return response()->json($cuisines, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cuisines = Cuisines::findOrFail($id);
        return response()->json($cuisines);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cuisines = Cuisines::findOrFail($id);
        $cuisines->update($request->all());
        return response()->json($cuisines);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cuisines = Cuisines::findOrFail($id);
        $cuisines->delete();
        return response()->json(null, 204);
    }
}
