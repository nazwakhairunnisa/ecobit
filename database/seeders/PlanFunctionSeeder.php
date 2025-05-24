<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
use App\Models\FunctionCategory;
use App\Models\PlanFunction;

class PlanFunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plan = Plan::find(1);
        $plan->functions()->sync([1, 7]);
        
        $plan = Plan::find(2);
        $plan->functions()->sync([7, 10]);
        
        $plan = Plan::find(3);
        $plan->functions()->sync([1, 6]);
        
        $plan = Plan::find(4);
        $plan->functions()->sync([2, 9]);
        
        $plan = Plan::find(5);
        $plan->functions()->sync([2, 6]);
        
        $plan = Plan::find(6);
        $plan->functions()->sync([2, 10]);
        
        $plan = Plan::find(7);
        $plan->functions()->sync([3, 7]);
        
        $plan = Plan::find(8);
        $plan->functions()->sync([6, 10]);
        
        $plan = Plan::find(9);
        $plan->functions()->sync([3, 7]);
        
        $plan = Plan::find(10);
        $plan->functions()->sync([2, 9]);
        
        $plan = Plan::find(11);
        $plan->functions()->sync([2, 9]);
        
        $plan = Plan::find(12);
        $plan->functions()->sync([2, 5]);
        
        $plan = Plan::find(13);
        $plan->functions()->sync([4, 7]);
        
        $plan = Plan::find(14);
        $plan->functions()->sync([3, 9]);
        
        $plan = Plan::find(15);
        $plan->functions()->sync([4, 8]);
        
    }
}
