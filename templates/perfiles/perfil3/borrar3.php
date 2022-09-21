<?php 
include("delete.php");
$id = $_GET['id'];
delete('usuarios','id',$id);
header("location:perfil7.php");
?>