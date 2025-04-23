<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display the specified resource based on barcode.
     */
    public function showByBarcode(string $barcode)
    {
        $medicine = Medicine::where('barcode', $barcode)->first();

        if (!$medicine) {
            return response()->json(['message' => 'Medicine not found'], 404);
        }

        return response()->json($medicine);
    }
}
