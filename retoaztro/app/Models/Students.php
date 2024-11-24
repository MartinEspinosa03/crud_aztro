<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
   protected $guarded = [];

   public function projects()
   {
        return $this->belongsToMany(Projects::class);
   }

   public function schedules(){
        return $this->belongsToMany(Schedules::class);
   }

}
