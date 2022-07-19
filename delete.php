<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM crud  WHERE id='id'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location: datos.php");
    }
?>