<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Flight;

class Airport extends Model
{
    public function flights() {
        return $this->hasMany('App\Flight');
    }
}
