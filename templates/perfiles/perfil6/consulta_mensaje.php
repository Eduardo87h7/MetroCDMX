<?php
$inc = include("conexion.php");
if ($inc) {
	$consulta = "SELECT * FROM linea6 order by fecha desc";
	$resultado = mysqli_query($conex, $consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
			$id = $row['id'];
			$fecha = $row['fecha'];
			$mensajes = $row['mensajes'];
			$linea = $row['linea'];
?>
			<div>
				<div class="alert alert-success" role="alert">
					<strong class="alert-heading"><?php echo $linea ?></str>
						<hr>
						<h9><?php echo $mensajes ?></h9>
						<hr>
						<p class="mb-0"><?php echo $fecha ?></p>
						<a href="./templates/perfiles/perfil6/eliminarmensaje.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a>
				</div>
			</div>
<?php
		}
	}
}
?>