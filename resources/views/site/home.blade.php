<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vendas</title>
    @extends('layout')
</head>
<body>
    <div class="container">
      <div class="row justify-content-md-center mt-3 fs-3">SYSTEM COM</div>
      <div class="row justify-content-md-center">
        <div class="p-5 col-4">
          <div class="card border-black border-2" style="width: 17rem;">
            <img src="img/cliente.png" class="card-img-top" alt="cliente">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <a href="{{ route('index.client') }}" class="btn btn-primary">Cadastrar</a>
                </div>
                <div class="col-4">
                  <a href="{{ route('search.client') }}" class="btn btn-warning">Buscar</a>
                </div>
              </div>
            </div>
          </div>
        </div>         
      </div>
    </div>
</body>
</html>