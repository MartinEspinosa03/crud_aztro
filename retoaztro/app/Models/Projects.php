<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $guarded =  [];

    public function students()
    {
        return $this->belongsToMany(Students::class);
    }
}
