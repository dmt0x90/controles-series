<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest;




class SeriesControllers extends Controller
{

  public function index(Request $request)
  {

    $series = Serie::query()->orderBy('nome')->get();

    $mensagem = $request->session()->get('mensagem');



    return view('series.index', compact('series', 'mensagem'));


  }

  public function create()
  {

    return view('series.create');

  }

  public function store(SeriesFormRequest $request)
  {

    $serie = serie::create([ 'nome' => $request->nome]);
    $qtdTemporadas = $request->qtd_temporadas;

    for ($tempo = 1; $tempo <= $qtdTemporadas ; $tempo++){
        $temporada = $serie->temporadas()->create(['numero' => $tempo]);

        for ($ep = 1; $ep <= $request->ep_por_temporada; $ep++){
          $episodio = $temporada->episodios()->create(['numero' => $ep]);

        }

    }
    $request->session()
      ->flash(
        'mensagem',
        "Serie {$serie->id}, e suas temporadas e episodios criada com sucesso {$serie->nome}"
      );


    return redirect()->route('listar_series');
  }

  public function destroy(Request $request)
  {
    Serie::destroy($request->id);
    $request->session()
    ->flash(
      'mensagem',
      "Serie, excluida com sucesso"

    );

    return redirect()->route('listar_series');
  }

}
