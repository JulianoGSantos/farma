<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saúde mental e as gerações</title>
    <link rel="shortcut icon" type="imagex/png" href="img/logo-fqm.ico">
    @extends('layout')
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-dark p-5">
          <div class="col-6 text-white fs-3">Artigos e Estudos</div>
          <div class="col-6">
            <a href="{{ route('home') }}"><img src="img/logo-fqm.png" class="rounded float-end" alt="logo" style="width: 11%"></a>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row bg-secondary text-secondary p-0" style="height: 10px;">.</div>
      </div>
      <div class="container-sm mt-5">
        <div class="row justify-content-md-center mt-5">
            <img src="img/saude-mental/capa.jpg" class="border border-dark" style="width: 45rem; height: 60rem" alt="">
        </div>
        <div class="row justify-content-md-center mt-5">
            <img src="img/saude-mental/1.jpg" class="border border-dark" style="width: 45rem; height: 60rem" alt="">
        </div>
        <div class="row justify-content-md-center mt-5">
            <img src="img/saude-mental/2.jpg" class="border border-dark" style="width: 45rem; height: 60rem" alt="">
        </div>
        <div class="row justify-content-md-center mt-5">
            <img src="img/saude-mental/3.jpg" class="border border-dark" style="width: 45rem; height: 60rem" alt="">
        </div>
        <div class="row justify-content-md-center mt-5">
            <img src="img/saude-mental/4.jpg" class="border border-dark" style="width: 45rem; height: 60rem" alt="">
        </div>
        <div class="row justify-content-md-center mt-5">
            <img src="img/saude-mental/5.jpg" class="border border-dark" style="width: 45rem; height: 60rem" alt="">
        </div>
        <div class="row justify-content-md-center mt-5 mb-5">
            <img src="img/saude-mental/contra-capa.jpg" class="border border-dark" style="width: 45rem; height: 60rem" alt=""> 
        </div>
        <a href="{{ route('home') }}" class="d-grid col-2 btn btn-primary mx-auto mt-5 mb-5">Home</a>
</body>
</html>