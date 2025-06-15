<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FocusArea extends Model
{
    protected $fillable = ['name'];
    public function users ()
    {
        return $this->belongsToMany(User::class, 'user_focus_areas');
    }
    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
