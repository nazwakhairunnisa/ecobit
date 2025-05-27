<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FunctionCategory extends Model
{
    protected $fillable = ['name'];

    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'plan_function');
    }
}
