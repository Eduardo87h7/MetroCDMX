<?php require('./layout/header2.php') ?>
<?php require('./layout/exit.php') ?>
<?php require('./layout/agregarUsuarios.php') ?>
<?php require('./layout/adminav.php') ?>
<?php
	include("delete.php");
?>
<table  class="table table-bordered table-striped table-hover" >
	<tr>
		<th>Usuarios</th>
		<th>Contraseña</th>
		<th>Tipo</th>
		<th>Eliminar</th>
	</tr>
<?php 
	$sql = "select * from usuarios";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->usuario;?></td>
		<td><?php echo $row->contraseña;?></td>
		<td><?php echo $row->tipo;?></td>
			
		<td>
   <a class="btn btn-danger" href="borrar.php?id=
   <?php echo $row->id;?>">
   <i  aria-hidden="true">X</i>
   </a>
        </td>
	</tr>
	<?php } ?>
</table>

</table>

