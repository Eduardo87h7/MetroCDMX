<?php

include("conexion.php");


$id=$_GET['id'];

$sql="DELETE FROM mensaje  WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: perfilb.php");
    }
?>