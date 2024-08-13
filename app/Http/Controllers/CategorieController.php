<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategorieResource;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(){
        $categorie = Categorie::get();
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
