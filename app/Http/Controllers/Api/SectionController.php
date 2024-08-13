<?php

namespace App\Http\Controllers\Api;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SectionResource;

class SectionController extends Controller
{
    public function index(){
        $sections = Section::get();
        if($sections->count() > 0){
            return SectionResource::collection($sections);
        } else {
            return response()->json(['message'=>'pas de section disponible'],200);
        }
    }
    public function show(Section $section){
        return new SectionResource($section);
    }

}
