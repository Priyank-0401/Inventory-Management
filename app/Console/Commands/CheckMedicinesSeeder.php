<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Medicine;
use Illuminate\Support\Facades\Artisan;

class CheckMedicinesSeeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'medicines:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check and reseed medicines if needed';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Checking medicines in database...');
        
        $count = Medicine::count();
        $this->info("Found {$count} medicines in database.");
        
        if ($count == 0) {
            $this->warn('No medicines found. Running MedicineSeeder...');
            Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\MedicineSeeder']);
            $this->info('Medicines have been seeded!');
        } else {
            // List some medicines for verification
            $medicines = Medicine::take(5)->get();
            $this->info('Sample medicines in database:');
            foreach ($medicines as $medicine) {
                $this->line("ID: {$medicine->id}, Name: {$medicine->name}, Barcode: {$medicine->barcode}");
            }
            
            // Check specific barcode
            $barcode = '4564646';
            $medicine = Medicine::where('barcode', $barcode)->first();
            
            if ($medicine) {
                $this->info("Medicine with barcode {$barcode} found: {$medicine->name}");
            } else {
                $this->error("Medicine with barcode {$barcode} NOT found!");
                
                if ($this->confirm('Do you want to rerun the seeder to fix this?', true)) {
                    Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\MedicineSeeder']);
                    $this->info('Medicines have been reseeded!');
                }
            }
        }
        
        return Command::SUCCESS;
    }
} 