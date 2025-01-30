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
          <div class="card" style="width: 18rem;">
            <img src="img/client.png" class="card-img-top" alt="cliente">
            <div class="card-body">
              <div class="d-grid col-6 mx-auto">
                <a href="{{ route('index.client') }}" class="btn btn-danger">Cliente</a>
              </div>
            </div>
          </div>
        </div>          
      </div>
    </div>
</body>
</html>