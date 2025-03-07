<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artigos e Estudos</title>
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
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/banner_main.jpg" class="d-block w-100" alt="..." style="height: 450px;">
        </div>
        <div class="carousel-item">
          <img src="img/home-banner-medium.png" class="d-block w-100" alt="..." style="height: 450px;">
        </div>
        <div class="carousel-item">
          <img src="img/home-banner-medium.png" class="d-block w-100" alt="..." style="height: 450px;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="container mt-5 mb-5">
      <div class="row gap-3">
        <div class="col">
          <a href="{{ route('saudemental') }}"><img src="img/saude-mental/capa.jpg" class="border border-dark rounded" alt="capa" style="height: 18rem"></a>
        </div>
        <div class="col">
          <a href="{{ route('saudemental') }}"><img src="img/saude-mental/capa.jpg" class="border border-dark rounded" alt="capa" style="height: 18rem"></a>
        </div>
        <div class="col">
          <a href="{{ route('saudemental') }}"><img src="img/saude-mental/capa.jpg" class="border border-dark rounded" alt="capa" style="height: 18rem"></a>
        </div>
        <div class="col">
          <a href="{{ route('saudemental') }}"><img src="img/saude-mental/capa.jpg" class="border border-dark rounded" alt="capa" style="height: 18rem"></a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row bg-secondary text-secondary p-0 mt-5" style="height: 50px;">.</div>
    </div>
</body>
</html>