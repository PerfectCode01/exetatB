<?php

namespace App\Http\Controllers;

use App\Http\Resources\AssertionResource;
use App\Models\Assertion;
use Illuminate\Http\Request;

class AssertionController extends Controller
{
    public function index(){
        $assertions = Assertion::get();
        if($assertions->count() > 0){
            return AssertionResource::collection($assertions);
        } else {
            return response()->json(['message'=>'pas des assertions disponible'],200);
        }
    } 
    public function show(Assertion $assertion){
        return new AssertionResource($assertion);
    }
}
