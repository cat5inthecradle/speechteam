<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function school()
    {
        return $this->hasMany('App\School');
    }
}
