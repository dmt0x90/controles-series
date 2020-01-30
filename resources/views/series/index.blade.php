<!-- Layout - Stated blade layout 0 -->
@extends('layout')

<!-- Layout Head - Layout 0  head -->
@section('cabecalho')
Series
@endsection

<!-- Layout Conteudo - Layout 0 Content  -->
@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-success" role="alert">
  {{ $mensagem }}
</div>
@endif
  <a href="{{ route('series_criar') }}" class="btn btn-dark mb-2 far fa-plus-square"> Criar Nova</a>
    <ul class="list-group">
      @foreach($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $serie->nome }}

          <span class="d-flex">
            <a href="/series/{{ $serie->id }}/temporadas" class="btn btn-info btn-sm mr-1">
              <i class="fas fa-link"></i>
            </a>
            <form action="/series/{{ $serie->id }}" method="post"
                onsubmit="return confirm('Deseja Realmente Remover ?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm far fa-trash-alt"></button>
            </form>
          </span>
        </li>



      @endforeach
    </ul class="list-group">
@endsection
