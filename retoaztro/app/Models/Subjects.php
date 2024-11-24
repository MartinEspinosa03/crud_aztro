<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subjects extends Model
{
    protected $guarded = [];

    public function schedules()
    {
        return $this->belongsToMany(Schedules::class);
    }
}
