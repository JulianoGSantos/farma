<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de produtos</title>
    @extends('layout')
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-4">
                <label for="iamount">Quantidade</label>
                <input type="text" id="iamount" name="amount">
            </div>
            <div class="col-4">
                <label for="idescricao">Descrição</label>
                <textarea name="description" id="idescricao" cols="30" rows="10"></textarea>
            </div>
        </div>
    </div>
</body>
</html>