<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = ['BMW', 'FERRARI', 'AUDI', 'MAZDA', 'SEAT', 'FIAT', 'HONDA'];

        foreach ($brands as $brand) {
            \DB::table('brands')->insert(['name' => $brand, 'created_at' => now(), 'updated_at' => now()]);
        }
    }
}
