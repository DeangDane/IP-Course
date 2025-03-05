<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(CategoryController::class)->prefix('categories')->group(function(){
    Route::get('/', 'getCategories');
    Route::post('/', 'createCategory');
    Route::get('/{categoryId}', 'getCategory');
    Route::patch('/{categoryId}', 'updateCategory');
    Route::delete('/{categoryId}', 'deleteCategory');

    // Route::get('/categories', [CategoryController::class, 'index']);
    // Route::post('/categories', [CategoryController::class, 'store']);
    // Route::get('/categories/{categoryId}', [CategoryController::class, 'show']);    
    // Route::patch('/categories/{categoryId}', [CategoryController::class, 'update']);
    // Route::delete('/categories/{categoryId}', [CategoryController::class, 'destroy']);  

});
