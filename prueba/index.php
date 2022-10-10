
<?php
$conexion=mysqli_connect('localhost','root','','prueba');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-flex p-4">
    

      <nav class="nav-bar">
		<form action="index.php" method="post">
        <select name="select">
            <option value="1" >Inicio</option>
            <option value="2" >Loros</option>
            <option value="3" >Gatos</option>
            <option value="4" >Tigres</option>
        </select>
        <input type="submit" value="ver" name="submit">
		</form>
	</nav>



<?php 

    if(isset($_POST['submit'])){
		$sql = "SELECT * FROM textos WHERE id = $_POST[select] ;";
		$result = mysqli_query($conexion,$sql);
		while($mostrar = mysqli_fetch_array($result)){ 
            ?>

  <div class="row text-center ">
    <div class="col">
        <h1><?php echo $mostrar['h1'];?></h1>
    </div>
    </div>

    <div class="row">
    <div class="col-6">
    <h2><?php echo $mostrar['h2'];?></h2>
    <p><?php echo $mostrar['p'];?></p>
    </div>
    <div class="col-5">
        <img src="<?php echo $mostrar['img'];?>" alt="">
    </div>


    </div>
    <div class="row">
    <div class="col-6">
    <h2><?php echo $mostrar['h22'];?></h2>
    <p><?php echo $mostrar['p2'];?></p>
    </div>
    <div class="col-5">
    <img src="<?php echo $mostrar['img2'];?>" alt="">
    </div>
    </div>
    </div>
    

	<?php }} ?>
</body>
</html>

