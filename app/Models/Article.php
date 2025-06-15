<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['focus_area_id', 'title', 'slug', 'content', 'image', 'excerpt'];

    public function focusArea()
    {
        return $this->belongsTo(FocusArea::class);
    }
}
