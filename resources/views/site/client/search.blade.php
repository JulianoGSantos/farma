
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    @extends('layout')
</head>
<body>
    <div class="container">
        <form action=" {{ route('search.client') }}" method="GET">
            <div class="row justify-content-center fs-2">Busca de clientes</div>
            <div class="">
                <div class="d-grid justify-content-md-end mt-2">
                    <input type="search" name="search" id="isearch" placeholder="digite o nome do cliente" style="height: 45px widht: 70px" class=" form-control rounded-md ring-2 p-2 opacity-60">
                </div>
                <div class="d-grid justify-content-md-end mt-2">
                    <button type="submit" class="btn btn-warning text-white">Pesquisar</button>
                </div>
            </div>
        </form>
        <hr>
        <div class="row" style="height: 35px">
            <div class="col bg-dark text-white ">Nome</div>
            <div class="col bg-dark text-white">Celular</div>
            <div class="col bg-dark text-white">Cidade</div>
            <div class="col bg-dark text-white">Detalhes</div>
            <div class="col bg-dark text-white">Exlcuir</div>
        </div>
        @foreach ($clients as $client)
        <body>
            <div class="row mt-3">
                <div class="col">{{$client->name}}</div>
                <div class="col">{{$client->cellphone}}</div>
                <div class="col">{{$client->city}}</div>
                <div class="col"><a href=" {{ route('show.client', $client->id) }} "><img src="img/info.png" alt="detalhes" style="width: 30px; height: 20px;"></a></div>
                <div class="col"><a href=" {{ route('show.client', $client->id) }} "><img src="img/delete.png" alt="deletar" style="width: 30px; height: 20px;"></a></div>
            </div>
                        
                        
        @endforeach
    </div>
</body>
</html>
