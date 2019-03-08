<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entrance extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function likes(){
      return $this->belongsTo('App\Like');
    }

}
