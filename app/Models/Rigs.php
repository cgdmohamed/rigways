<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rigs extends Model
{
    use HasFactory;
    
    protected $dates = ['created_at'];

    use SoftDeletes;

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    /**
     * Get the project that owns the rig.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('role');
    }

}
