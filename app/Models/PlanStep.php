<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanStep extends Model
{
    protected $fillable = ['plan_id', 'title', 'description'];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function userPlanSteps()
    {
        return $this->hasMany(UserPlanStep::class);
    }
}
