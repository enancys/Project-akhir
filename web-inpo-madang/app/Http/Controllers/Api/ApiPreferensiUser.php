<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PreferensiUser;

class ApiPreferensiUser extends Controller
{
    public function index() {
        $preferensi_user = PreferensiUser::all();
        return response()->json($preferensi_user);
    }

    public function show($id) {
        $preferensi_user = PreferensiUser::findOrFail($id);
        return response()->json($preferensi_user);
    }

    public function store(Request $request) {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'favorite_categories' => 'nullable|json',
            'disliked_ingredients' => 'nullable|json',
            'dietary_restrictions' => 'nullable|json',
            'favorite_cuisines' => 'nullable|json',
        ]);

        $preferensi_user = new PreferensiUser();
        $preferensi_user->user_id = $request->user_id;
        $preferensi_user->favorite_categories = $request->favorite_categories;
        $preferensi_user->disliked_ingredients = $request->disliked_ingredients;
        $preferensi_user->dietary_restrictions = $request->dietary_restrictions;
        $preferensi_user->favorite_cuisines = $request->favorite_cuisines;
        $preferensi_user->save();

        return response()->json([
            'message' => 'Data Preferensi User Created Successfully',
            'data' => $preferensi_user
        ], 201);

    }

    public function update(Request $request, $id) {
            $preferensi_user = PreferensiUser::findOrFail($id);
            $preferensi_user->user_id = $request->input('user_id');
            $preferensi_user->favorite_categories = $request->input('favorite_categories');
            $preferensi_user->disliked_ingredients = $request->input('disliked_ingredients');
            $preferensi_user->dietary_restrictions = $request->input('dietary_restrictions');
            $preferensi_user->favorite_cuisines = $request->input('favorite_cuisines');
            $preferensi_user->save();

            return response()->json( [
                'message' => 'Data Preferensi User Updataed Succesfully'
            ], 200);
    }

    public function destroy(Request $request, $id) {
        $preferensi_user = PreferensiUser::findOrFail($id);
        $preferensi_user->delete();

        return response()->json( [
            'message' => 'Data Preferensi User Deleted Succesfully'
        ], 200);
    }


}
