<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    use HasFactory;
    /*
* This defines two many-to-one relationships where a Certificate 
* belongs to a single Rig model and a single User model.
*/
    public function rig()
    {
        return $this->belongsTo(Rig::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
