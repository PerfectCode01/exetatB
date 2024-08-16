<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EditionController;
use App\Http\Controllers\AssertionController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\QuestionController;

Route::apiResource('sections', SectionController::class);
Route::apiResource('questions', QuestionController::class);


Route::apiResource('editions', EditionController::class);
Route::apiResource('cours', CoursController::class);
Route::apiResource('categories', CategorieController::class);
Route::apiResource('assertions', AssertionController::class);

// login and register

Route::post("register", [AuthController::class, "register"]);
Route::post("login", [AuthController::class, "login"]);

// Route::apiResource("/login", AuthController::class, "login");

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
