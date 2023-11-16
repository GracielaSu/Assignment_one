<?php

use App\Http\Controllers\weddingController;
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

// Route::get("wedding", function() {
//     return response()->json([
//         'message'=> 'Cookies List API'
//     ]);
// });

Route::get("/get_wedding",[weddingController::class,'get_wedding']); 

Route::post("/create_wedding",[weddingController::class,'create_wedding']); 

Route::post("/update_wedding",[weddingController::class,'update_wedding']); 

Route::post("/delete_wedding",[weddingController::class,'delete_wedding']); 