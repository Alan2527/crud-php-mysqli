<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];

$sql="UPDATE datos SET  nombre='$nombre',apellido='$apellido',dni='$dni' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: datos.php");
    }
?>