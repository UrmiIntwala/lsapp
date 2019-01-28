<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contract\Auth\Authenticatable;

class MyUser extends Model implements Authenticatable
{
    //
    protected $fillable = ['body'];

    use \Illuminate\Auth\Authenticatable;
}
