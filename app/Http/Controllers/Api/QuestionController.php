<?php

namespace App\Http\Controllers\Api;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use Illuminate\Support\Facades\DB; // Assurez-vous que cette ligne est présente


class QuestionController extends Controller
{
    public function index(Request $request){
        // Récupérer les paramètres de requête
        $category = $request->input('category');
        $section = $request->input('section');

        $results = DB::table('questions')
            ->join('cours', 'questions.cour_id', '=', 'cours.id')
            ->join('categories', 'cours.categorie_id', '=', 'categories.id')
            ->join('categorie_section', 'categories.id', '=', 'categorie_section.categorie_id')
            ->join('sections', 'categorie_section.section_id', '=', 'sections.id')
            ->select('questions.*')
            ->where('cours.categorie_id', $category)
            ->where('sections.id', $section)
            ->get();
            

            
        if ($results->count() > 0) {
            // dd($results);
            return QuestionResource::collection($results);
        } else {
            return response()->json(['message' => 'Pas de question disponible'], 404);
        }
    }
    
    public function show(Question $question){
        return new QuestionResource($question);
    }
}
