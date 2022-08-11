
<?php require('./layout/header2.php') ?>
<?php require('./layout/agregarUsuarios.php') ?>
<?php require('./layout/exit.php') ?>

<?php require('./layout/adminav.php') ?>

<div id="resultado">

</div>
<table class="table table-bordered table-striped table-hover">
<th>Usuario</th>
<th>Contraseña</th>
<th>Tipo</th>

</tr>

<?php

 include('conexion.php');

$sql="select * from usuarios";
$resultado=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($resultado))

{
?>

<tr>
	<td><?php echo $mostrar['usuario'] ?></td>
	<td><?php echo $mostrar['contraseña'] ?></td>
	<td><?php echo $mostrar['tipo'] ?></td>
</tr>


<?php
}
?>


</table>

