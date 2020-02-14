<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    public function User(){

        return $this->belongsTo('App\User');
    }
}
