<?php

use App\Http\Controllers\Api\MedicineController;
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

// Medicine barcode lookup route - ensure this is accessible without auth
Route::get('/medicines/barcode/{barcode}', [MedicineController::class, 'showByBarcode']);

// Simple test endpoint
Route::get('/test', function() {
    return response()->json(['status' => 'API working!']);
});
