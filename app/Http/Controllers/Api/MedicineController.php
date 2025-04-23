<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MedicineController extends Controller
{
    /**
     * Display the specified resource based on barcode.
     */
    public function showByBarcode(string $barcode)
    {
        // Trim the barcode to remove any whitespace
        $barcode = trim($barcode);
        
        // Log the barcode being searched for debugging
        Log::info('Searching for medicine with barcode: ' . $barcode);
        
        try {
            // Check if any medicines exist at all
            $allMedicines = Medicine::all();
            Log::info('Total medicines in database: ' . $allMedicines->count());
            
            if ($allMedicines->count() > 0) {
                Log::info('First medicine in DB: ' . json_encode($allMedicines->first()));
                
                // For debugging, log all barcodes in the system
                $barcodes = $allMedicines->pluck('barcode')->toArray();
                Log::info('All barcodes in system: ' . implode(', ', $barcodes));
            }
            
            // Try both exact and loose matching
            $medicine = Medicine::where('barcode', $barcode)->first();
            
            if (!$medicine) {
                Log::info('Medicine with barcode ' . $barcode . ' not found with exact match, trying LIKE');
                // Try a LIKE query as fallback
                $medicine = Medicine::where('barcode', 'LIKE', '%' . $barcode . '%')->first();
            }
    
            if (!$medicine) {
                Log::info('Medicine with barcode ' . $barcode . ' not found');
                return response()->json(['message' => 'Medicine not found', 'barcode' => $barcode], 404);
            }
    
            Log::info('Found medicine: ' . $medicine->name);
            return response()->json($medicine);
        } catch (\Exception $e) {
            Log::error('Error in medicine lookup: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
