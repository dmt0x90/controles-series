<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{

  public $timestamps = false;
  protected $fillable = ['nome'];


  public function Temporadas()
  {

    return $this->hasMany(Temporada::class);

  }

}
