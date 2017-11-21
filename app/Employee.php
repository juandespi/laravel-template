<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public static function user_level_is($level)
    {
      return Employee::where('user_level', $level)->get();
    } // user_level_is
}
