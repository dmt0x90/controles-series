<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class TemporadasControllers extends Controller
{

  public function index(int $serieId)
  {

    $temporadas = Serie::find($serieId)->temporadas;

    return view('temporadas.index', compact('temporadas'));
  }
}
