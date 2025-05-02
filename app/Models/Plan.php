<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['focus_area_id', 'title', 'description', 'plan_details'];

    public function focusArea()
    {
        return $this->belongsTo(FocusArea::class);
    }

    public function steps()
    {
        return $this->hasMany(PlanStep::class)->orderBy('urutan');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_plans');
    }
}
