<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPlanStep extends Model
{
    protected $fillable = ['user_id', 'plan_step_id', 'is_completed'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function planStep()
    {
        return $this->belongsTo(PlanStep::class);
    }
}
