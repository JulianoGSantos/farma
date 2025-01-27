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
    <div class="card" style="width: 18rem;">
        <img src="img/prancheta.png" class="card-img-top" alt="pedido">
        <div class="card-body">
          <a href="{{ route('index.client') }}" class="btn btn-primary">pedido</a>
        </div>
      </div>
</body>
</html>