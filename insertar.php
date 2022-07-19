<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];


$sql="INSERT INTO datos VALUES('$id','$nombre','$apellido','$dni')";
$query= mysqli_query($con,$sql);

if($query){
    header("Location: datos.php");
    
}else {
}
?>