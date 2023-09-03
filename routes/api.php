<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CompanyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message'=> 'success']);
});

Route::apiResource('categories', CategoryController::class);
Route::apiResource('companies', CompanyController::class);
