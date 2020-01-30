<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <!-- Layout 0 -  bootstrap Define -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Css - Define css space here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/04b5be6075.js"></script>


    <title>@yield('title')</title>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <!-- Cabecalho - Define head contet page -->
        <h1>@yield('cabecalho')</h1>
      </div>
      <!-- Conteudo - Define content at page -->
      @yield('conteudo')
    </div>
  </body>
</html>
