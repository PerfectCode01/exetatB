<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Resources\CategorieResource;

class CategorieController extends Controller
{
    public function index(Request $request){
        $sectionId = $request->input('sectionId');
        $section = Section::find($sectionId);
        $categories = $section->categories;

        if($categories->count() > 0){
            return CategorieResource::collection($categories);
        } else {
            return response()->json(['message'=>'pas de categorie disponible'],200);
        }
    }

    public function show(Categorie $categorie){
        return new CategorieResource($categorie);
    }
}
