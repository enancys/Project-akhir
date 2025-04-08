<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Panganan;

class ApiPangananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $panganan = Panganan::all();
        return response()->json($panganan);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'ingredients' => 'required|array', 
            'category' => 'required|string|max:100',
            'image_url' => 'nullable|url|max:255',
        ]);
    
        $panganan = new Panganan();
        $panganan->name = $request->name;
        $panganan->description = $request->description;
        $panganan->category = $request->category;
        $panganan->image_url = $request->image_url;
    
        // normalize ingredients ke bentuk json
        $ingredients = $request->input('ingredients');
        if (is_array($ingredients)) {
            $panganan->ingredients = json_encode($ingredients);
        } else {
            $panganan->ingredients = json_encode(json_decode($ingredients));
        }
    
        $panganan->save();
    
        return response()->json([
            'message' => 'Data Panganan Created Successfully',
            'data' => $panganan
        ], 201);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $panganan = Panganan::findOrFail($id);

        if($panganan) {
            return response()->json($panganan);
        }

        return response()->json(['message' => 'Data panganan not found'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $panganan = Panganan::findOrFail($id);
        $panganan->name = $request->input('name');
        $panganan->description = $request->input('description');
        $panganan->ingredients = $request->input('ingredients');
        $panganan->category = $request->input('category');
        $panganan->image_url = $request->input('image_url');
        $panganan->save();


        return response()->json( [
            'message' => 'Data Panganan Updataed Succesfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $panganan = Panganan::findOrFail($id);
        $panganan->delete();

        return response()->json( [
            'message' => 'Data Panganan Deleted Succesfully'
        ], 200);
    }
}
