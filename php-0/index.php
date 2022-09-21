<?php
  session_start();
  require 'database.php';
  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;
    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pagina principal - PHP</title>
<link rel="stylesheet" href="assets/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<?php if(!empty($user)): ?>
<body>
<div class="container">
    <header class="d-flex flex-wrap  py-3  border-bottom">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link active btn btn-primary" aria-current="page">Home</a></li>
		<li class="nav-item"><a href="logout.php" class="nav-link">Cerrar sesion</a></li>
      </ul>
    </header>
  </div>
      <div class="text-center py-3"> Bienvenido. <?= $user['email']; ?>Has iniciado sesion exitosamente </div>
	  <?php include("function.php");?>
<div class="container-flex text-center">
<div class="row">
<div class="col-md-12">
<div class="well well-sm">
	<table class="table">
	  <thead class="table-light">
	    <tr>
	      <th scope="col">Nombres</th>
	      <th scope="col">Apellidos</th>
	      <th scope="col">Emails</th>
	      <th scope="col">Opcion</th>
		  <th scope="col"><a class="btn btn-primary" href="insertar.php">+ Añadir nuevo registro</a></th>
	    </tr>
	  </thead>
	<?php 
		$sql = "SELECT * FROM datos";
		$result = db_query($sql);
		while($row = mysqli_fetch_object($result)){ ?>
	<tr>
		<td scope="row"><?php echo $row->nombre;?></td>
		<td scope="row"><?php echo $row->apellido;?></td>
		<td scope="row"><?php echo $row->email;?></td>
		<td scope="row"><a class="btn btn-primary" href="editar.php?id=<?php echo $row->id; ?>">editar</a>
		<a class="btn btn-primary" href="delete.php?id=<?php echo $row->id; ?>">eliminar</a></td>
		<td scope="row"></td>
	</tr>
	<?php } ?>
</table>
		</div>
		</div>
		</div>
		</div>
    <?php else: ?>
		<div class="container">
		<div class="row vh-100 justify-content-center align-items-center">
		<div class="col-auto bg-light p-5">
		<legend style="font-size: 1.8rem;">Porfavor inicia sesion o registrate</legend>
		<div class="col-sm-12 text-center">
    	<a href="login.php" class="btn btn-primary col-5">Iniciar sesion</a>
		<a href="signup.php" class="btn btn-primary col-5">Registrarse</a>
	  </div>
	</div>
    <?php endif; ?>
</body>
</html>