<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FocusArea;

class FocusAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $focusAreas = [
            ['name' => 'Hemat Energi'],
            ['name' => 'Transportasi Ramah Lingkungan'],
            ['name' => 'Kurangi Sampah Plastik'],
            ['name' => 'Pohon dan Alam'],
            ['name' => 'Pengelolaan Air'],
        ];
        foreach ($focusAreas as $focus) {
            FocusArea::updateOrCreate(['name' => $focus['name']], $focus);
        }
    }
}
