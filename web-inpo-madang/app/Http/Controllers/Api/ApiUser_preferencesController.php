<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_preferences;

class ApiUser_preferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_preferences = User_preferences::all();
        return response()->json($user_preferences);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_preferences = User_preferences::create($request->all());
        return response()->json($user_preferences);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user_preferences = User_preferences::findOrFail($id);
        return response()->json($user_preferences);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user_preferences = User_preferences::findOrFail($id);
        $user_preferences->update($request->all());
        return response()->json($user_preferences);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user_preferences = User_preferences::findOrFail($id);
        $user_preferences->delete();
        return response()->json(null, 204);
    }
}
