<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use Illuminate\Http\Request;
use App\Http\Resources\CoursResource;

class CoursController extends Controller
{
    public function index(){
        $cours = Cour::get();
        if($cours->count() > 0){
            return CoursResource::collection($cours);
        } else {
            return response()->json(['message'=>'pas de cours disponible'],200);
        }
    }
    public function show(Cour $cour){
        return new CoursResource($cour);
    }
}
