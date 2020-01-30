<!-- Layout - Stated blade layout 0 -->
@extends('layout')
<!-- Layout Head - Layout 0 Head - -->
@section('cabecalho')
Criar Series
@endsection

<!-- Layout Conteudo - Layout 0 Content  -->
@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post">
  @csrf
  <div class="row">

    <div class="col col-8">
      <label for="exampleInputEmail1">Nome da Serie</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="nome" placeholder="Entre com o nome da Serie">
   </div>

   <div class="col col-2">
     <label for="epi_temporada">Numero Temporada</label>
     <input type="number" class="form-control" id="epi_temporada" name="qtd_temporadas">
  </div>

  <div class="col col-2">
    <label for="ep_por_temporada">Ep por Temporada</label>
    <input type="number" class="form-control" id="epi_temporada" name="ep_por_temporada" >
 </div>

</div>
  <button class="btn btn-primary far fa-plus-square mt-2"> Adicionar</button>
</form>

@endsection
