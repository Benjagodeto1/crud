<?php
$connection = mysqli_connect("localhost","root","","tablas");
$select = "DELETE from datos where id='".$_GET['id']."'";
$query = mysqli_query($connection, $select) or die($select);
if (!$query){
    echo "No se ha podido eliminar";
}
else{
header("Location: index.php"); 
}
?>