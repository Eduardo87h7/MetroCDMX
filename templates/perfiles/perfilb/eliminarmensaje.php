<?php

include("./conexion1.php");


$id=$_GET['id'];

$sql="DELETE FROM lineab  WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: ../../../my/admin.php");
    }
?>