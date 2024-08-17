<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Resources\CategorieResource;

class CategorieController extends Controller
{

    public function index(Request $request){
        $id_sec = $request->input('id_sec');    
        $categorie = Categorie::where('section_id', $id_sec)->get();
        
        if($categorie->count() > 0){
            return CategorieResource::collection($categorie);
        } else {
            return response()->json(['message'=>'pas de categorie disponible'],200);
        }
    }
    
    public function show(Categorie $categorie){
        return new CategorieResource($categorie);
    }
}
