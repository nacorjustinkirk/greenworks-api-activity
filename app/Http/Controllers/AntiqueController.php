<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Antique;
use Illuminate\Http\Request;    

class AntiqueController extends Controller
{
    public function index()
    {
        $antiques = Antique::all();
        return response()->json($antiques);
    }

    public function store(Request $request)
    {
        //validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'imageUrl' => 'required',
        ]);


        //import to database
        $antique = Antique::create([
            'name' => $request->name,
            'price' => $request->price,
            'imageUrl' => $request->imageUrl,
            'description' => $request->description,
        ]);

        //return response
        return response()->json($antique);
    }

    public function update(Request $request, Antique $antique)
    {
        //validation
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'imageUrl' => 'required'
        ]);

        //import to database
        $antique->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'imageUrl' => $request->imageUrl
        ]);

        //return response
        return response()->json($antique);
    }

    public function destroy(Antique $antique)
    {
        $antique->delete();
        return response()->json($antique);
    }
}
