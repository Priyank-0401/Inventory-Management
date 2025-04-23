<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Add direct barcode lookup route as a public web route (without any auth middleware)
// This must be BEFORE the auth routes to ensure it's publicly accessible
Route::get('/api-barcode/lookup/{barcode}', function($barcode) {
    try {
        // Trim the barcode
        $barcode = trim($barcode);
        
        // Log the lookup attempt
        \Illuminate\Support\Facades\Log::info('Barcode lookup: ' . $barcode);
        
        // Try exact match first
        $medicine = \App\Models\Medicine::where('barcode', $barcode)->first();
        
        // If no match, try a more flexible search
        if (!$medicine) {
            \Illuminate\Support\Facades\Log::info('No exact match, trying flexible search');
            $medicine = \App\Models\Medicine::where('barcode', 'LIKE', '%' . $barcode . '%')->first();
        }
        
        if (!$medicine) {
            // Log all barcodes for debugging
            $allBarcodes = \App\Models\Medicine::pluck('barcode')->toArray();
            \Illuminate\Support\Facades\Log::info('All barcodes in DB: ' . implode(', ', $allBarcodes));
            
            \Illuminate\Support\Facades\Log::info('No medicine found with barcode: ' . $barcode);
            return response()->json(['message' => 'Medicine not found', 'barcode' => $barcode], 404);
        }
        
        \Illuminate\Support\Facades\Log::info('Found medicine: ' . $medicine->name);
        return response()->json($medicine);
    } catch (\Exception $e) {
        \Illuminate\Support\Facades\Log::error('Error in barcode lookup: ' . $e->getMessage());
        return response()->json(['error' => $e->getMessage()], 500);
    }
});

require __DIR__ . '/auth.php';

Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
    Route::get('/general/category/category-a', 'CategoryController@categoryA')->name('third.general.category.category-a');
    Route::get('/general/category/category-b', 'CategoryController@categoryB')->name('third.general.category.category-b');
    Route::get('/general/category/category-c', 'CategoryController@categoryC')->name('third.general.category.category-c');
});

