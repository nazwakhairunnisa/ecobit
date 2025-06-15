<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['focus_area_id', 'title', 'plan_details', 'image', 'video_url', 'trivia',];

    public function focusArea()
    {
        return $this->belongsTo(FocusArea::class);
    }

    public function steps()
    {
        return $this->hasMany(PlanStep::class)->orderBy('id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_plans');
    }

    public function impacts() {
        return $this->belongsToMany(Impact::class, 'plan_impact');
    }

    public function functions() {
        return $this->belongsToMany(FunctionCategory::class, 'plan_function');
    }
}
