<?php

namespace App\Http\Controllers\Api;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::get();
        if($questions->count() > 0){
            return QuestionResource::collection($questions);
        } else {
            return response()->json(['message'=>'Pas de question disponible'],200);
        }   
    }
    public function show(Question $question){
        return new QuestionResource($question);
    }
}
