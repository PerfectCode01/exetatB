<?php

namespace App\Http\Controllers;

use App\Http\Resources\EditionResource;
use App\Models\Edition;
use Illuminate\Http\Request;

class EditionController extends Controller
{
    public function index(){
        $editions = Edition::get();
        if($editions->count() > 0){
            return EditionResource::collection($editions);
        } else {
            return response()->json(['message'=>'pas de section disponible'],200);
        }
    }
    public function show(Edition $edition){
        return new EditionResource($edition);
    }
}
