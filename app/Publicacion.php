<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
  public function users()
  {
      return $this->belongsToMany(User::class);
  }
}
