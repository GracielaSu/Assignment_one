<?php

use App\Http\Controllers\weddingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Route::get("/get_wedding",[weddingController::class,'get_wedding']); 

// Route::post("/create_wedding",[weddingController::class,'create_wedding']); 

// Route::post("/update_wedding",[weddingController::class,'update_wedding']); 

// Route::post("/delete_wedding",[weddingController::class,'delete_wedding']); 

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/me', [AuthController::class, 'me']);
    Route::get("/get_wedding",[weddingController::class,'get_wedding']);
    Route::post("/create_wedding",[weddingController::class,'create_wedding']);
    Route::post("/update_wedding",[weddingController::class,'update_wedding']);
    Route::post("/delete_wedding",[weddingController::class,'delete_wedding']);
});

Route::group([

    'middleware' => ['api','auth:api'],
    'prefix' => 'auth'

], function ($router) {
    Route::get("/get_wedding",[weddingController::class,'get_wedding']);
    Route::post("/create_wedding",[weddingController::class,'create_wedding']);
    Route::post("/update_wedding",[weddingController::class,'update_wedding']);
    Route::post("/delete_wedding",[weddingController::class,'delete_wedding']);
});