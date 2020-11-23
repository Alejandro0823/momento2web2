<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Animales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo(base_url("public/styles/style.css"))?>">  
</head>
<body style="background-image: url(<?php echo(base_url("public/img/summer.jpg"))?>); background-position: center;  background-repeat: no-repeat;background-size: cover;">

<div class="container">



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo(base_url("public/mascotas"))?>">Registro Animales</a>
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

<?php if(session('mensaje')):?>
  <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
    <?php echo(session('mensaje'))?>
    <button type="button" class="close" data-dismiss="alert" arial-label="Close">
      <span arial-hidden="true">&times;</span>
    </button>
  </div>
<?php endif?>

<div class="row row-cols-1 row-cols-md-3 ">

   <?php foreach($animales as $animal):?>

    <div class="col mb-4 " >
    <div class="card h-100 ">

    <div class="modal fade" id="editar<?php echo($animal["id"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Animal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form style="text-align: center;" action="<?php echo(base_url("public/mascotas/editar/".$animal["id"])) ?>" method="POST"> 
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nomedit" required value="<?php echo($animal["nombre"])?>">
                    </div>
                    <div class="form-group">
                        <label>Edad</label>
                        <input type="text" class="form-control" name="edadedit" required value="<?php echo($animal["edad"])?>">
                    </div>
                    <div class="form-group">
                    <label>Tipo de animal</label>
                    <select class="form-control" name="tipoanimaledit"  required>
                      <option value="<?php $animal["tipoanimal"]?>">Seleccione tipo de animal</option>
                      <option value="Domestico">Domestico</option>
                      <option value="Silvestre">Silvestre</option>
                    </select>
                  </div>
                    <div class="form-group">
                        <label>Descripcion</label>
                            <textarea class="form-control" rows="3" required name="desedit"><?php echo($animal["descripcion"])?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Url Imagen</label>
                            <textarea class="form-control" rows="3" required name="urlimagenedit"><?php echo($animal["foto"])?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Comida</label>
                        <input type="text" class="form-control" name="comidaedit" required value="<?php echo($animal["comida"])?>">
                    </div>
                    <button type="submit" class="btn btn-info">Guardar cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>



       <img src="<?php echo($animal["foto"])?>" class="card-img-top" alt="foto">
       <div class="card-body">
        <h5 class="card-title"><?php echo("Nombre: \n".$animal["nombre"])?></h5>
        <h5 class="card-title"><?php echo("Edad: \n".$animal["edad"])?></h5>
        <h5 class="card-title"><?php echo("Tipo Animal: \n".$animal["tipoanimal"])?></h5>
        <h5 class="card-title"><?php echo("Descripción: \n".$animal["descripcion"])?></h5>
        <h5 class="card-title"><?php echo("Comida: \n".$animal["comida"])?></h5>

        <a href="<?php echo(base_url("public/mascotas/eliminar/".$animal["id"]))?>" class="btn " title="Eliminar Registro" style="margin-left:25%; "><img src="<?php echo(base_url("public/img/delete.png"))?>" width="40px" alt=""></a>

        <button type="button" class="btn " data-toggle="modal" data-target="#editar<?php echo($animal["id"])?>" title="Editar registro"><img src="<?php echo(base_url("public/img/edit.png"))?>" width="40px" alt=""> </button>
      </div>
    </div>
  </div>

   <?php endforeach ?>

</div>
 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>