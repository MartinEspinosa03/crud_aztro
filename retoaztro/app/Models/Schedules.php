<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    protected $guarded = [];

    public function students()
    {
        return $this->belongsToMany(Students::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subjects::class);
    }
}
