<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do Cliente</title>
    @extends('layout')
</head>  
    <header>
        <h1 class="mt-5  text-4xl">{{ $client->name}} </h1>
    </header> 
    <body>
        <div class="text-xl">
            <ul class="divide-y divide-slate-400">
                <li><div class="  mt-3 ">CPF: {{$client->cpf}}</div></li>
                <li>Email: {{$client->email}}</li> 
                <li>Nascimento: {{date('d/m/Y', strtotime($client->birth))}}</li>
                <li>Rua: {{$client->street}}</li> 
                <li>Número: {{$client->number}}</li>
                <li>Bairro: {{$client->complement}}</li> 
                <li>Cidade: {{$client->city}}</li> 
                <li>Estado: {{$client->state}}</li> 
                <li>CEP: {{$client->cep}}</li> 
                <li>Celular: {{$client->cellphone}}</li> 
                <li>Celular 2: {{$client->cellphone2}}</li>
            </ul>
        </div>
        <form action=" {{ route('#', $client->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="mt-4 mb-5">
                <button type="submit" class="bg-red-700 px-4 py-1 rounded-xl text-white ring-1">Deletar</button>
            </div>
        </form>
    </body>
</html>