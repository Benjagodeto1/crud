<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Añadir usuario - PHP</title>
<link rel="stylesheet" href="assets/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php 
include("function.php");
?>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap  py-3 mb-4 border-bottom">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link active btn btn-primary" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Cerrar sesion</a></li>
      </ul>
    </header>
  </div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header" style="font-size: 1.8rem;">Añadir usuario</legend>
                        <div style="padding:10px;"></div> 
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="Nombre" name="nombre" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>
                         <div style="padding:10px;"></div>   

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="Apellido" name="apellido" type="text" placeholder="Apellido" class="form-control">
                            </div>
                        </div>
                        <div style="padding:10px;"></div> 
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div style="padding:10px;"> </div> 
                        <div class="form-group">
                            <div class="col-md-12 text-center" >
                                <button type="submit" name="submit" class="btn btn-primary btn-lg col-md-4 col-md-offset-4 text-center" >Enviar</button>
                            </div>
                        </div>
                        <div style="padding:10px;"></div> 
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) && strlen($_POST['email'])>= 1){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $sql = "INSERT INTO datos(nombre, apellido, email) VALUES('$nombre','$apellido','$email')";
        $result = db_query($sql);
        if($result){
        header("location:index.php");}
        else{
            ?><div class="text-center">UPS! ocurrio algo inesperado </div><?php
        }
        } else{
              ?><div class="text-center" >Por favor, complete todos los campos... </div><?php
        }
}
?>

