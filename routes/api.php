<?php

use App\Http\Controllers\ProductPropertyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('property',[ProductPropertyController::class,'getPropertiesByCategory']);
Route::get('categories',[ProductPropertyController::class,'getAllCategories']);
Route::get('values', [ProductPropertyController::class,'getValuesByPropertyCategory']);
