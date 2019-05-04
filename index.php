<?php require_once "conexao.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FLM MODA</title>
   <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>   
  <header>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: pink;"> 
  <a class="navbar-brand" href="#">FLM MODA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Roupas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Masculina</a>
          <a class="dropdown-item" href="#">Feminina</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Infantil</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Como chegar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Horários funcionamento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>
  </header>

  <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/loja4.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>FLM MODA</h5>
          <p>Um pouco da nossa loja por dentro</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/loja1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>FLM MODA</h5>
          <p>A frente da loja</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/loja3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>FLM MODA</h5>
          <p>Muitos acessórios para você</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container">
<div class="card" style="width: 18rem;">
  <img src="img/modelo9.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Modelo</h5>
    <p class="card-text">TAM: M</p>
    <a href="#" class="btn btn-primary">Ver mais</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="img/modelo2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Modelo</h5>
    <p class="card-text">TAM: P</p>
    <a href="#" class="btn btn-primary">Ver mais</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="img/modelo3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Modelo</h5>
    <p class="card-text">TAM: M</p>
    <a href="#" class="btn btn-primary">Ver mais</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="img/modelo4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Modelo</h5>
    <p class="card-text">TAM: M</p>
    <a href="#" class="btn btn-primary">Ver mais</a>
  </div>
</div>

</div>

<div class="container">
<div class="card" style="width: 18rem;">
  <img src="img/modelo5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Modelo</h5>
    <p class="card-text">TAM: M</p>
    <a href="#" class="btn btn-primary">Ver mais</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="img/modelo6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Modelo</h5>
    <p class="card-text">TAM: M</p>
    <a href="#" class="btn btn-primary">Ver mais</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="img/modelo7.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Modelo</h5>
    <p class="card-text">TAM: M</p>
    <a href="#" class="btn btn-primary">Ver mais</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="img/modelo8.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Modelo</h5>
    <p class="card-text">TAM: M</p>
    <a href="#" class="btn btn-primary">Ver mais</a>
  </div>
</div>


</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Próximo</a>
    </li>
  </ul>
</nav>
<footer class="page-footer font-small cyan darken-3">


    <div class="container">

      <div class="row">
 
        <div class="col-md-12 py-5">
          <div class="mb-5 flex-center">

            <img class="rodap" src="https://images.vexels.com/media/users/3/137253/isolated/preview/90dd9f12fdd1eefb8c8976903944c026-logotipo-do---cone-do-facebook-by-vexels.png" alt=""><a href="#">facebook</a>
        </div>
        
      </div>
      <div class="footer-copyright text-center py-3">© 2019 Copyright: Leonardo Sagula </div>

    </div>

   

  </footer>
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
