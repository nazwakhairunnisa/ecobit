<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Impact;

class ImpactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $impacts = [
            ['name' => 'Good Impact'],
            ['name' => 'Decent Impact'],
            ['name' => 'Minimal Impact'],
        ];
        foreach ($impacts as $impact) {
            Impact::updateOrCreate(['name' => $impact['name']], $impact);
        }
    }
}
