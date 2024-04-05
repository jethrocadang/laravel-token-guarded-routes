<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Aliased isTokenValid from middleware EnsureToken is Valid
// You can customized functions using controller
Route::middleware('isTokenValid')->group(function(){
    Route::GET('/test', function() {
        return 'HTTP Request: Get';
    });
    Route::POST('/test', function(){
        return 'HTTP Request: Post';
    });
    Route::PUT('/test', function(){
        return 'HTTP Request: Put';
    });
    Route::PATCH('/test', function(){
        return 'HTTP Request: Patch';
    });
    Route::DELETE('/test', function(){
        return 'HTTP Request: Delete';
    });

});

Route::apiResource('products', ProductController::class);

