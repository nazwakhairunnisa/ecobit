<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
use App\Models\Impact;
use App\Models\PlanImpact;

class PlanImpactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plan = Plan::find(1);
        $plan->impacts()->sync(1);
        
        $plan = Plan::find(2);
        $plan->impacts()->sync(2);
        
        $plan = Plan::find(3);
        $plan->impacts()->sync(1);
        
        $plan = Plan::find(4);
        $plan->impacts()->sync(1);
        
        $plan = Plan::find(5);
        $plan->impacts()->sync(2);
        
        $plan = Plan::find(6);
        $plan->impacts()->sync(1);
        
        $plan = Plan::find(7);
        $plan->impacts()->sync(1);
        
        $plan = Plan::find(8);
        $plan->impacts()->sync(2);
        
        $plan = Plan::find(9);
        $plan->impacts()->sync(1);
        
        $plan = Plan::find(10);
        $plan->impacts()->sync(1);
        
        $plan = Plan::find(11);
        $plan->impacts()->sync(1);
        
        $plan = Plan::find(12);
        $plan->impacts()->sync(2);
        
        $plan = Plan::find(13);
        $plan->impacts()->sync(1);
        
        $plan = Plan::find(14);
        $plan->impacts()->sync(1);
        
        $plan = Plan::find(15);
        $plan->impacts()->sync(2);
    }
}
