<?php

use App\Http\Controllers\MainController;
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

Route::post('/addbook',[MainController::class,'addBook']);
Route::get('/getbook',[MainController::class,'getBook']);
Route::post('/updatebook',[MainController::class,'updateBook']);
Route::post('/deletebook',[MainController::class,'deleteBook']);
