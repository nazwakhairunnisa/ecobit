<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FunctionCategory;

class FunctionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $functionCategories = [
            ['name' => 'Save Energy'],
            ['name' => 'Reduce Carbon Emissions'],
            ['name' => 'Waste Reduction'],
            ['name' => 'Water Conservation'],
            ['name' => 'Biodiversity & Habitat Protection'],
            ['name' => 'Sustainable Consumption'],
            ['name' => 'Behavioral Change'],
            ['name' => 'Cost Saving'],
            ['name' => 'Health & Wellbeing'],
            ['name' => 'Technology & Innovation'],
        ];
        foreach($functionCategories as $function) {
            FunctionCategory::updateOrCreate(['name' => $function['name']], $function);
        }
    }
}
