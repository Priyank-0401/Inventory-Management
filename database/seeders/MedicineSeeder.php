<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medicine;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear the table first to avoid duplicates if run multiple times
        DB::table('medicines')->delete();

        Medicine::create([
            'name' => 'Tyrosinase Inhibitor (NTBC)',
            'price' => 3125.00,
            'stock' => 15,
            'disease_type' => 'Tyrosinemia Type 1',
            'barcode' => '8846455',
            'image' => '/images/product/p-1.png',
        ]);

        Medicine::create([
            'name' => 'Eliglustat (Cerdelga)',
            'price' => 5625.00,
            'stock' => 12,
            'disease_type' => 'Gaucher\'s Disease',
            'barcode' => '4564646',
            'image' => '/images/product/p-2.png',
        ]);

        Medicine::create([
            'name' => 'Trientine (Syprine)',
            'price' => 2750.00,
            'stock' => 18,
            'disease_type' => 'Wilson\'s Disease',
            'barcode' => '5646466',
            'image' => '/images/product/p-3.png',
        ]);

        Medicine::create([
            'name' => 'Cannabidiol Oral Solution',
            'price' => 1875.00,
            'stock' => 24,
            'disease_type' => 'Dravet and Lennox-Gastaut Syndromes',
            'barcode' => '46546546',
            'image' => '/images/product/p-4.png',
        ]);

        Medicine::create([
            'name' => 'Eculizumab (Soliris)',
            'price' => 250000.00,
            'stock' => 3,
            'disease_type' => 'Paroxysmal Nocturnal Hemoglobinuria (PNH)',
            'barcode' => '4645645',
            'image' => '/images/product/p-5.png',
        ]);

        Medicine::create([
            'name' => 'Ravulizumab (Ultomiris)',
            'price' => 288750.00,
            'stock' => 2,
            'disease_type' => 'Paroxysmal Nocturnal Hemoglobinuria (PNH)',
            'barcode' => '4646545',
            'image' => '/images/product/p-6.png',
        ]);

        Medicine::create([
            'name' => 'Alglucosidase Alfa (Myozyme/Lumizyme)',
            'price' => 111250.00,
            'stock' => 7,
            'disease_type' => 'Pompe Disease',
            'barcode' => '464564879',
            'image' => '/images/product/p-7.png',
        ]);

        Medicine::create([
            'name' => 'Laronidase (Aldurazyme)',
            'price' => 165000.00,
            'stock' => 5,
            'disease_type' => 'Mucopolysaccharidosis I (MPS I)',
            'barcode' => '5464654',
            'image' => '/images/product/p-8.png',
        ]);

        Medicine::create([
            'name' => 'Idursulfase (Elaprase)',
            'price' => 96250.00,
            'stock' => 8,
            'disease_type' => 'Mucopolysaccharidosis II (MPS II)',
            'barcode' => '8797966',
            'image' => '/images/product/p-9.png',
        ]);

        Medicine::create([
            'name' => 'Galsulfase (Naglazyme)',
            'price' => 137500.00,
            'stock' => 6,
            'disease_type' => 'Maroteaux-Lamy Syndrome (MPS VI)',
            'barcode' => '87897687',
            'image' => '/images/product/p-10.png',
        ]);
    }
}
