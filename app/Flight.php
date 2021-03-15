<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Airport;


class Flight extends Model
{
    public function airports() {
        return $this->belongsTo('App\Airport');
    }
}
