<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    // CREATE - Crear gato
    public function store(Request $request)
    {
        $cat = Cat::create($request->all());
        return response()->json($cat, 201);
    }

    public function index(Request $request)
    {
        $limit = $request->query('limit');
        $cats = $limit ? Cat::limit($limit)->get() : Cat::all();
        return response()->json($cats);
    }

    public function show($id)
    {
        $cat = Cat::find($id);
        if (!$cat) {
            return response()->json(['error' => 'Gato no encontrado'], 404);
        }
        return response()->json($cat);
    }

    public function update(Request $request, $id)
    {
        $cat = Cat::find($id);
        if (!$cat) {
            return response()->json(['error' => 'Gato no encontrado'], 404);
        }
        $cat->update($request->all());
        return response()->json($cat);
    }

    public function destroy($id)
    {
        $cat = Cat::find($id);
        if (!$cat) {
            return response()->json(['error' => 'Gato no encontrado'], 404);
        }
        $cat->delete();
        return response()->json(['message' => 'Gato eliminado']);
    }
}