<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
    header('Location: /php-0');
  }
  require 'database.php';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /php-0");
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar sesion - PHP</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
    <header class="d-flex flex-wrap  py-3 mb-4 border-bottom">
      <ul class="nav nav-pills">
		    <li class="nav-item"><a href="signup.php" class="nav-link">Registrarse</a></li>
      </ul>
    </header>
  </div>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="login.php">
                    <fieldset>
                        <legend class="text-center header" style="font-size: 1.8rem;">Iniciar sesion</legend>
                        <div style="padding:10px;"></div> 
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input name="email" type="email" placeholder="Email" class="form-control">
                            </div>
                        </div>
                         <div style="padding:10px;"></div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input  name="password" type="password" placeholder="Contraseña" class="form-control">
                            </div>
                        </div>
                        <div style="padding:10px;"></div>
                        <div class="form-group">
                            <div class="col-md-12 text-center" >
                                <button type="submit" name="submit" class="btn btn-primary btn-lg col-md-4 col-md-offset-4 text-center" >Iniciar sesion</button>
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
    if(empty($_POST['email']) || empty($_POST['password'])){?>      
      <div class="text-center">Por favor, complete ambos campos... </div><?php
    }else{
     if(!empty($message)): ?>
        <p class="text-center"> <?= $message ?></p>
      <?php endif; 
    }
    }
?>