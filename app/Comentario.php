<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
  public function publicaciones()
  {
      return $this->belongsToMany(Publicacion::class, 'comentarios_publicaciones', 'comentarios_id', 'publicaciones_id');
  }
}
