<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Impact extends Model
{
    protected $fillable = ['name'];

    public function plans()
    {
        return $this->belongsToMany(plan::class, 'plan_impact');
    }
}
