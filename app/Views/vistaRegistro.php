<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  
    <link rel="stylesheet" href="<?php echo(base_url("public/styles/style.css"))?>">  
</head>
<body style="background-image: url(<?php echo(base_url("public/img/summer.jpg"))?>); background-position: center;  background-repeat: no-repeat;background-size: cover;">

<div class="container">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo(base_url("public/mascotas/listar"))?>">Lista Animales</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

<br>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo(base_url("public/img/1.jpg"))?>" class="d-block w-100" alt="img1" height="300px" width="100%">
    </div>
    <div class="carousel-item">
      <img src="<?php echo(base_url("public/img/2.jpg"))?>" class="d-block w-100" alt="img2" height="300px" width="100%">
    </div>
    <div class="carousel-item">
      <img src="<?php echo(base_url("public/img/3.jpg")) ?>" class="d-block w-100" alt="img3" height="300px" width="100%">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>




<div class="card" style="width: 32rem;">

  <div class="card-body">
  <form class="fm"  action="<?php echo(base_url("public/mascotas/registro"))?>" method="POST" onsubmit="return validar();"> 

  <?php if(session('mensaje')):?>
  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
    <?php echo(session('mensaje'))?>
    <button type="button" class="close" data-dismiss="alert" arial-label="Close">
      <span arial-hidden="true">&times;</span>
    </button>
  </div>
<?php endif?>

<h5>REGISTRO DE ANIMALES</h5>  
  <div class="form-group">
    <label>Nombre del animal</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre del animal" required>
  </div>
  <div class="form-group">
    <label>Edad del animal</label>
    <input type="text" class="form-control" name="edad" id="edad" placeholder="Ingrese el nombre la edad" required>
  </div>
  <div class="form-group">
    <label>Tipo de animal</label>
    <select class="form-control" name="tipoanimal" id="tipoanimal" required>
      <option value="Domestico">Domestico</option>
      <option value="Silvestre">Silvestre</option>
    </select>
  </div>
  <div class="form-group">
    <label>Descripción</label>
    <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Ingresa la descripción" required></textarea>
  </div>
  <div class="form-group">
    <label>Url Imagen</label>
    <input type="text" class="form-control" name="foto" id="foto" placeholder="Url Imagen" required>
  </div>
  <div class="form-group">
    <label>Comida</label>
    <input type="text" class="form-control" name="comida" id="comida" placeholder="Ingrese la comida del animal" required>
  </div>
  <button type="submit" class="btn btn-success" onclick="return validarFormulario()">Registrar Animal</button>



</form>


  </div>
</div>

</div>




<script src="<?php echo(base_url("public/js/validacion.js"))?>"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>