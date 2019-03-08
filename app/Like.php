<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user(){
      return $this->belongsto('App\User');
    }

    public function entrance(){
      return $this->belongsTo('App\Entrance');
    }
}
