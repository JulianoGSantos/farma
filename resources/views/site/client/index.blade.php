<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de clientes</title>
    @extends('layout')
</head>
<body>
    <form action="{{ route('store.client') }}" method="POST">
    @csrf
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="row">
                <div class="col-4">
                        <label for="iname">Nome Fantasia:</label>
                        <input type="text" id="inome" name="name">
                </div>
                <div class="col-4">
                    <label for="icompany">razão social</label>
                    <input type="text" id="icompany" name="company">
                </div>
                <div class="col-4">
                    <label for="icnpj">cnpj</label>
                    <input type="text" id="icnpj" name="cnpj">
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-4">
                <label for="iresponsible">responsável</label>
                <input type="text" id="iresponsible" name="responsible">
            </div>
            <div class="col-4">
                <label for="icellphone">celular</label>
                <input type="text" id="icellphone" name="cellphone">
            </div>
            <div class="col-4">
                <label for="icellphone2">telefone</label>
                <input type="text" id="icellphone2" name="cellphone2">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-4">
                <label for="iemail">e-mail</label>
                <input type="text" id="iemail" name="email">
            </div>
            <div class="col-4">
                <label for="icep">cep</label>
                <input type="text" id="icep" name="cep">
            </div>
            <div class="col-4">
                <label for="istreet">rua </label>
                <input type="text" id="istreet" name="street">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-3">
                <label for="inumber">número</label>
                <input type="text" id="inumber" name="number">
            </div>
            <div class="col-3">
                <label for="icomplement">complemen</label>
                <input type="text" id="icomplement" name="complement">
            </div>
            <div class="col-3">
                <label for="icity">cidade </label>
                <input type="text" id="icity" name="city">
            </div>
            <div class="col-3">
                <label for="istate">estado</label>
                <input type="text" id="istate" name="state">
            </div>
        </div>
    </div>
<button type="submit" class="btn btn-primary">cadastrar</button>
    </form>
</body>

</html>