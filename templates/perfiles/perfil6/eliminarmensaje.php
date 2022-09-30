<?php

include("./conexion1.php");


$id=$_GET['id'];

$sql="DELETE FROM linea6  WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: ../../../admin.php");
    }
?>