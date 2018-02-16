<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
  public static function findById($id)
  {
      return static::where(compact('id'))->first();
  }

}
