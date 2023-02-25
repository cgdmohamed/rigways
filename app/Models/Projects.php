<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $dates = ['created_at'];

    public function rigs()
    {
        return $this->hasMany(Rig::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('role');
    }
}
