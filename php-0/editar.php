<?php 
include("function.php");
$id = $_GET['id'];
select_id('datos','id',$id);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar usuario - PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
	<table class="table">
	  <thead style="background-color:#f1f1f1">
	    <tr>
	      <th scope="col">Nombre</th>
	      <th scope="col">Apellido</th>
	      <th scope="col">Email</th>
	      <th scope="col">Opcion</th>
	  <tbody>
    		<tr>
          			<form action="" method="post">
          				<td scope="row"><input type="text" value="<?php echo $row->nombre;?>" name="nombre"></td>
          				<td scope="row"><input type="text" value="<?php echo $row->apellido;?>" name="apellido"></td>
          				<td scope="row"><input type="text" value="<?php echo $row->email;?>" name="email"></td>
          				<td scope="row"><input type="submit" name="submit" value="Actualizar" class="btn btn-primary"></td>
          			</form>
			</tr>
	  </table>
			<?php
				if(isset($_POST['submit'])){
					$field = array("nombre"=>$_POST['nombre'], "apellido"=>$_POST['apellido'], "email"=>$_POST['email']);
					$tbl = "datos";
					edit($tbl,$field,'id',$id);
					header("location:index.php");
				}
			?>
</body>
</html>