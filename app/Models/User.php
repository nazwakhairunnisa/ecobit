<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}

class User extends Model
{
    protected $fillable = ['user_id', 'focus_area_id'];

    public function focusAreas()
    {
        return $this->belongsToMany(FocusArea::class, 'user_focus_areas');
    }

    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'user_plans')
                    ->withPivot('is_completed', 'completed_at');
    }

    public function planSteps()
    {
        return $this->hasMany(UserPlanStep::class);
    }
}