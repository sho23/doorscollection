<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrance extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
